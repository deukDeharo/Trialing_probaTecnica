<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Post;
use App\DataBase\DBmanager;
use App\Repositories\PostRepository;

class PostController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new PostRepository();
    } 

    function insertPost($request, $response, $args) :Response
    {   
        $data = $request->getParsedBody();
        $newPost = $this->setPostByParsedBody($data);
        $result = $this->repository->insert($newPost);
        if(!$result){
            $message = array('message' => "Inserción fallida");
            return $this->createResponse($response, 500, $message);
        }
        $message = array('message' => "Post creado correctamente");
        return $this->createResponse($response, 201, $message);

    } 

    // TODO
    function deletePost($request, $response, $args):Response
    {
        if (!isset($args['id'])) {
            $message = array('message' => "petición incorrecta");
            return $this->createResponse($response, 400, $message); 
        }
        $id = $args['id'];
        $result = $this->repository->delete($id);
        if(!$result){
            $message = array('message' => "Eliminación fallida");
            return $this->createResponse($response, 500, $message);
        }
        $message = array('message' => "Post eliminado");
        return $this->createResponse($response, 200, $message); 
    }
    

    function getAllPosts($request, $response, $args):Response
    {
        $result =$this->repository->selectAll();
        if (!$result) {
            $message = array('message' => "Error en el servidor");
            return $this->createResponse($response, 500, $message);
        }
        //DEVOLVER ARRAY DE USUARIOS DE LA TABLA USERS
        $message = array('data' => $result);
        return $this->createResponse($response, 200, $message);
    }

    function getUserPosts($request, $response, $args):Response
    {
        if (!isset($args['id'])) {
            $message = array('message' => "petición incorrecta");
            return $this->createResponse($response, 400, $message); 
        }
        $id = $args['id'];
        $result =$this->repository->selectByUser($id);
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
    public function setPostByParsedBody($data)
    {
        $titulo = $data['titulo'];
        $contenido = $data['contenido'];
        $user_id = $data['user_id'];
        $post = new post($titulo,$contenido,$user_id);
        return $post;
    }

   
}
