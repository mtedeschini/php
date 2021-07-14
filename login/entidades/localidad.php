<?php

class Localidad{
    private $idlocalidad;
    private $nombre;
    private $cod_postal;
    private $fk_idprovincia;


    public function __construct(){
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
        return $this;
    }
}
