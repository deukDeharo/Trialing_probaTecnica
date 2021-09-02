<?php

namespace App\Repositories;

use App\DataBase\DBmanager;
use phpDocumentor\Reflection\PseudoTypes\False_;

class PostRepository
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

    public function insert($post)
    {
        $query = "INSERT INTO posts (user_id,titulo,contenido) VALUES (?,?,?)";
        if ($stmt = mysqli_prepare($this->connection, $query)) {
            $user_id = $post->getUserID();
            $titulo = $post->getTitulo();
            $contenido = $post->getContenido();

            mysqli_stmt_bind_param($stmt, 'iss', $user_id, $titulo, $contenido);
            return mysqli_stmt_execute($stmt);
        } else {
            return false;
        }
    } 

    public function delete($id_post){
        $query = "Delete from posts where id = (?)";
        if ($stmt = mysqli_prepare($this->connection,$query)) {
            $id = $id_post;
            mysqli_stmt_bind_param($stmt, 'i',$id);
            return mysqli_stmt_execute($stmt);
        } else {
            return false;
        }

    }

    public function deleteByUser($id_user){
        $query = "Delete from posts where user_id = (?)";
        if ($stmt = mysqli_prepare($this->connection,$query)) {
            $id = $id_user;
            mysqli_stmt_bind_param($stmt, 'i',$id);
            return mysqli_stmt_execute($stmt);
        } else {
            return false;
        }
    }
    
    public function selectAll()
    {
        $query = "SELECT * FROM posts";
        $result = mysqli_query($this->connection, $query);
        if ($result) {
            return $this->fetchPosts($result);
        } else {
            return false;
        }
    }

    public function selectByUser($id_user)
    {
        $query = "SELECT * FROM posts where user_id = (?)";
        if ($stmt = mysqli_prepare($this->connection, $query)) {
            $user_id = $id_user;
            mysqli_stmt_bind_param($stmt, 'i', $user_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            return $this->fetchPosts($result);
        }
        return false;
    }


    private function fetchPosts($result){
        $posts = [];
        while($registro = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
            array_push($posts,$registro);
        }
        return $posts;
    }

} 
    