<?php

class persona {
     public $nombre;
    public $usuario;
    public $cargo;
     
    // Constructor
    public function __construct($nombre, $usuario, $cargo ){
        $this->nombre = $nombre;
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
     
   
     
    public function getUsuario(){
        return $this->usuario;
    }
    
    public function cerrarSesion() {
        session_start();
        session_destroy();

    }
     


}
