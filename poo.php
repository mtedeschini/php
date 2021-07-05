<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definición de Clases
abstract class Persona{
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function setNombre($nombre){ $this->nombre = $nombre;} // Getters y Setters
    public function getNombre(){return $this->nombre;}

    public function setDni($dni){$this->dni = $dni;}
    public function getDni(){return $this->dni;}

    public function setEdad($edad){$this->edad = $edad;}
    public function getEdad(){return $this->edad;}

    public function setNacionalidad($nacionalidad){$this->nacionalidad = $nacionalidad;}
    public function getNacionalidad(){return $this->nacionalidad;}

    abstract public function imprimir(); //Si es abstract no hay que poner nada dentro, SIN LLAVES
}

class Alumno extends Persona{
    protected $legajo;
    protected $notaPortfolio;
    protected $notaPHP;
    protected $notaProyecto;

    public function __construct(){
        $this->notaPortfolio = 0.0;
        $this->notaPHP = 0.0;
        $this->notaProyecto = 0.0;
    }

    public function imprimir(){
        echo "Nombre: " . $this->nombre . "</br>";
        echo "DNI: " . $this->dni . "</br>";
        echo "Edad: " . $this->edad . "</br>";
        echo "Promedio: " . number_format($this->calcularPromedio(), 2, ".", "," ) . "</br></br>";
    }
    public function calcularPromedio(){
        return ($this->notaProyecto + $this->notaPHP + $this->notaPortfolio) / 3;
    }
    
    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

}

class Docente extends Persona{
    protected $especialidad;
    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_ECO = "Economía aplicada";
    const ESPECIALIDAD_BBDD = "Base de datos";
    
    public function setEspecialidad($especialidad){$this->especialidad = $especialidad;}
    public function getEspecialidad(){return $this->especialidad;}

    public function imprimirEspecialidadesHabilitadas(){
        
    }
    public function imprimir(){
        echo "Nombre = " . $this->nombre . "<br>";
        echo "Edad = " . $this->edad . "<br>";
        echo "Especialidad = " . $this->especialidad . "<br></br>";
    }
}

//Programa

$alumno1 = new Alumno();
$alumno1->setNombre("Juan Paz");
$alumno1->setDni("35594885");
$alumno1->setEdad(28);
$alumno1->legajo = "123";
$alumno1->imprimir();

$alumno2 = new Alumno();
$alumno2->setNombre("Micaela Ramirez");
$alumno2->imprimir();

$docente = new Docente();
$docente->setNombre("Miguel Paz");
$docente->setDni("42342354");
$docente->setEspecialidad(Docente::ESPECIALIDAD_BBDD);
$docente->imprimir();
