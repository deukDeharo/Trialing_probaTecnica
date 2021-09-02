<?php

namespace App\Models;

class User{

    private $nombre;
    private $apellido;
    private $email;
    private $fecha_creacion;
    private $fecha_actualizacion;
    private $user_ID;

    public function __construct($nombre,$apellido,$email){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;

    }
    public function getUserID(){
        return $this->user_ID;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getFechaCreacion(){
        return $this->fecha_creacion;
    }
    public function getFechaUpdate(){
        return $this->fecha_actualizacion;
    }


    public function setNombre($param){
        $this->nombre = $param;
    }
    public function setApellido($param){
        $this->apellido = $param;
    }
    public function setEmail($param){
        $this->email = $param;
    }
    public function setUserID($param){
        $this->user_ID = $param;
    }


    

    

}

