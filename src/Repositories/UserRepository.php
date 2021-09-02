<?php

namespace App\Repositories;

use App\DataBase\DBmanager;
use phpDocumentor\Reflection\PseudoTypes\False_;
use App\Repositories\PostRepository;

class UserRepository
{

    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new DBmanager();
        $this->connection = $this->db->connect();
    }
    public function __destruct() {
        $this->db->disconnect($this->connection);
    }

    public function insert($user){
        $query = "INSERT INTO users (nombre,apellido,email) VALUES (?,?,?)";
        if ($stmt = mysqli_prepare($this->connection, $query)) {
            $nombre = $user->getNombre();
            $apellido = $user->getApellido();
            $email = $user->getEmail();

            mysqli_stmt_bind_param($stmt, 'sss', $nombre, $apellido, $email);
            return mysqli_stmt_execute($stmt);
        } else {
            return false;
        }
    }
    public function deleteUserbyId($id){
        $postRep = new PostRepository();
        $postRep->deleteByUser($id);

        $query = "Delete from users where id = (?)";
        if ($stmt = mysqli_prepare($this->connection, $query)) {
            $userId = $id;
            mysqli_stmt_bind_param($stmt, 'i',$userId);
            return mysqli_stmt_execute($stmt);
        } else {
            return false;
        }
    }
    public function selectAllUsers()
    {
        $query = "SELECT * FROM users";
        $result = mysqli_query($this->connection, $query);
        return $this->fetchUsers($result);
            
    }
    private function fetchUsers($result){
        $users = [];
        while($registro = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
            array_push($users,$registro);
        }
        return $users;
    }
}