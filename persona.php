<?php

class persona {
     public $nombre;
     public $apellido;
    public $usuario;
    public $cargo;
     
    // Constructor
    public function __construct($nombre,$apellido, $usuario, $cargo ){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->usuario = $usuario;
        $this->cargo = $cargo;
    }
     
    //Métodos
    public function getNombre(){
// Devolvemos un atributo
        return $this->nombre;
    }
     
    public function setNombre($nombre){
//Le damos un valor a un atributo
        $this->nombre = $nombre;
    }
     
    public function getApellido(){
// Devolvemos un atributo
        return $this->apellido;
    }
     
    public function setApellido($apellido){
//Le damos un valor a un atributo
        $this->apellido = $apellido;
    }   
     
    public function getUsuario(){
        return $this->usuario;
    }
    
        public function getCargo(){
// Devolvemos un atributo
        return $this->cargo;
    }
    
    public function cerrarSesion() {
        session_start();
        session_destroy();

    }
     


}
