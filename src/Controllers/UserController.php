<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\User;
use App\DataBase\DBmanager;
use App\Repositories\UserRepository;

class UserController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    function insertUser($request, $response, $args) : Response
    {
        $data = $request->getParsedBody();
        $newUser = $this->setUserByParsedBody($data);
        $result = $this->repository->insert($newUser);
        if(!$result){
            $message = array('message' => "Inserción fallida");
            return $this->createResponse($response, 500, $message);
        }
        $message = array('message' => "Usuario creado correctamente");
        return $this->createResponse($response, 201, $message);
    } 

    function deleteUser($request, $response,$args):Response
    {
        if (!isset($args['id'])) {
            $message = array('message' => "petición incorrecta");
            return $this->createResponse($response, 400, $message); 
        }
        $id = $args['id'];
        $result = $this->repository->deleteUserbyId($id);
        if(!$result){
            $message = array('message' => "Eliminación fallida");
            return $this->createResponse($response, 500, $message);
        }
        $message = array('message' => "Usuario eliminado");
        return $this->createResponse($response, 200, $message);       
    } 
    
    function getAllusers($request, $response, $args) :Response
    {
        
        $result =$this->repository->selectAllUsers();
        if (!$result) {
            $message = array('message' => "Error en el servidor");
            return $this->createResponse($response, 500, $message);
        }
        //DEVOLVER ARRAY DE USUARIOS DE LA TABLA USERS
        $message = array('data' => $result);
        return $this->createResponse($response, 200, $message);
    }

    function createResponse($response, $status, $message)
    {
        $payload = json_encode($message);
        $response->getBody()->write($payload);
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus($status);
    }

    public function setUserByParsedBody($data)
    {
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $email = $data['email'];
        $user = new User($nombre, $apellido, $email);
        return $user;
    }


   
}
