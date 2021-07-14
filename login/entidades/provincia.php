<?php

class Provincia{
    private $idprovincia;
    private $nombre;


    public function __construct(){
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
        return $this;
    }

    public function obtenerTodos(){ // Sólo obtener todos porque no hace falta ABM en provincias
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE); //Abro conexión con BBDD
        $sql = "SELECT
                    idprovincia,
                    nombre
                FROM provincias
                ORDER BY nombre ASC";
        if (!$resultado = $mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        $aResultado = array();
        if ($resultado) {
            //Convierte el resultado en un array asociativo
            while ($fila = $resultado->fetch_assoc()) {
                $entidadAux = new Provincia();
                $entidadAux->idprovincia = $fila["idprovincia"];
                $entidadAux->nombre = $fila["nombre"];
                $aResultado[] = $entidadAux;
            }
        }
        $mysqli->close(); //Cierro conexión con la BBDD
        return $aResultado;
        }   
}
?>