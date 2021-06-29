<?php

//POO

class Auto{ //Empieza con Mayuscula
    public $patente;
    public $marca;
    public $modelo;
    public function acelerar(){

    }
}

class Producto{
    public $nombre;
    public $marca;
    public $precio;
    public $pulgadas;
    public function imprimirHojaTecnica(){

    };
}

class Persona{
    public $documento;
    public $nombre;
    public $fechaNacimiento;
    public $nacionalidad 
    
    public function __construct($nombrePersona){
        $this->nombre = $nombrePersona;
    }

}

class Alumno extends Persona {
    public $nombre;
    public $fechaNacimiento;
    public $promedio; 
    public $asistencia;
    public $nacionalidad;
    public function dormir(){

    }
}

$alumno1 = new Persona();
$alumno1 ->nombre = "Anabella";
$alumno1 ->edad = "25";
$alumno1 ->dni = "35466442";

$alumno2 = new Persona();
$alumno1 ->nombre = "Luciano";
$alumno1 ->edad = "24";

$producto1 = new Producto();
$producto1->nombre="Smart TV";
$producto1->marca="Sony";
$producto1->pulgadas="42";
$producto1->precio=50000;

$producto2 = new Producto();
$producto2->nombre='Notebook 15"';
$producto2->marca="HP";


class Matematica{
    public $aNumeros;
    public function __construct(){
        $this->aNumeros = array(); //This hace referencia a que va a ser array
    }
public function sumar(){//...};
}

$obj1 = new Matematica();
$obj1->aNumeros[0] = 30;
$obj1->aNumeros[1] = 15;
$resultado = $obj1->sumar();
echo $resultado; //45


class Auto{
    public $modelo;
    public $color;
    public $marca;
    public $patente;
 
public function __construct(){ //Valores por defecto
    $this-> color = "Negro"; //Siempre van a ser negros todos los autos
    $this-> marca = "Ford"; // Siempre van a ser Ford
    $this-> precio = 10000; //Todos los Auto van a costar 10000 
}
public function imprimirEnPantalla(){/...}
}

$obj1 = new Auto();
$obj1->modelo = "T";
$obj1->patente = "ABC123"
$obj1->imprimirEnPantalla();

$obj2 = new Auto();
$obj2->modelo = "T";
$obj2->patente = "CDE467"
$obj2->imprimirEnPantalla();

//Constructor parametrizado

$persona1 = new Persona();
$persona1->nombre="Pepe";
public function __construct($nombrePersona){
    $this->nombre = $nombrePersona;
}

$persona1 2 = new Persona("Pepe");

class Auto {
    public $marca;
    public $modelo;
    public $patente;

    public function __construct($marca, $modelo, $patente){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->patente = $patente;
    }

    public function __destruct(){
        echo "destruyendo el objeto" . $this->nombre;
    }

}


$objeto1 = new Auto("Ford", "Fiesta", "ABC9429");

class Prefijo{
    const BUENOS_AIRES = "011";
    const MAR_DEL_PLATA = "011";
    public function imprimir(){ echo self:: BUENOS_AIRES} // Así se usa dentro de la clase
}

class Persona{
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

    public function imprimir(){
        echo "Es una persona"; 
    }
}
?>