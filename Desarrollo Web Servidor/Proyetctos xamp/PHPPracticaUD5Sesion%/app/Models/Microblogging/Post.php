<?php

namespace App\Models\Microblogging;

class Post{
    private $nombre;
    private $email;
    private $titulo;
    private $comentario;
    private $fechaPublicacion;

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
        
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
        
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
        
    }
    public function getComentario(){
        return $this->comentario;
    }
    public function setComentario($comentario){
        $this->comentario = $comentario;
        
    }
    public function getFechaPublicacion(){
        return $this->fechaPublicacion;
    }
    public function setFechaPublicacion($fechaPublicacion){
        $this->fechaPublicacion = $fechaPublicacion;
        
    }
}