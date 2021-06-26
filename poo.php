<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definición de Clases
class Persona{
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;

    public function imprimir(){
        echo "Es una persona"; 
    }
}

class Alumno extends Persona{
    public $legajo;
    public $notaPortfolio;
    public $notaPHP;
    public $notaProyecto;

    public function __construct(){
        $this->notaPortfolio = 0.0;
        $this->notaPHP = 0.0;
        $this->notaProyecto = 0.0;
    }

    public function imprimir(){
        echo "Nombre: " . $this->nombre . "</br>";
        echo "DNI: " . $this->dni . "</br>";
        echo "Legajo: " . $this->legajo . "</br>";
        echo "Promedio: " . number_format($this->calcularPromedio(), 2, ".", "," ) . "</br>";
    }
    public function calcularPromedio(){
        return ($this->notaProyecto + $this->notaPHP + $this->notaPortfolio) / 3;
    }
}

class Docente extends Persona{
    public $especialidad;

    public function imprimir(){}
    public function imprimirEspecialidadesHabilitadas(){

    }
}

//Programa

$alumno1 = new Alumno();
$alumno1->nombre= "Juan Paz";
$alumno1->legajo= 801;
$alumno1->notaPortfolio = 8;
$alumno1->notaPHP = 9;
$alumno1->notaProyecto = 8.5;

$alumno2 = new Alumno();
$alumno2->nombre= "Micaela Ledesma";
$alumno2->notaPortfolio = 9;

$alumno1->imprimir();
$alumno2->imprimir();


?>