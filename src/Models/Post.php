<?php

namespace App\Models;

class Post{

    private $postID;
    private $userId;
    private $titulo;
    private $contenido;
    private $fecha_creacion;
    private $fecha_actualizacion;

    public function __construct($titulo,$contenido,$userId){
        $this->titulo = $titulo;
        $this->contenido= $contenido;
        $this->userId= $userId;
    }
    public function getPostID(){
        return $this->postID;
    }
    public function getUserID(){
        return $this->userId;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getContenido(){
        return $this->contenido;
    }
    public function getFechaCreacion(){
        return $this->fecha_creacion;
    }
    public function getFechaUpdate(){
        return $this->fecha_actualizacion;
    }

    public function setPostID($param){
        $this->postID = $param;
    }
    public function setUserID($param){
        $this->nombre = $param;
    }
    public function setTitulo($param){
        $this->apellido = $param;
    }
    public function setContenido($param){
        $this->contenido = $param;
    }
    public function setFechaActualizacion($param){
        $this->fecha_actualizacion = $param;
    }



    

    

}

