<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("America/Argentina/Buenos_Aires");

//- Privado o protegido +Publico
//Definiciones

class Clase
{
    private $nombre; //String
    private $entrenador; //Objeto
    private $aAlumnos; //Array de objetos

    public function __construct()
    {
        $this->aAlumnos = array();
    }

    public function asignarEntrenador($entrenador)
    {
        $this->entrenador = $entrenador;
    }

    public function inscribirAlumno($alumno)
    {
        $this->aAlumnos[] = $alumno;
    }

    public function imprimirListado()
    {
        echo "<table class='table table-bordered table-hover'>";
        echo "<tr><th class='table-dark text-center' colspan='5'>Clase: " . $this->nombre . "</th></tr>";
        echo "<tr><th colspan='2'>Entrenador: </th><td colspan='3'>" . $this->entrenador->nombre . "</td></tr>";
        echo "<tr><th colspan='5'>Alumnos:</th></tr>";
        foreach ($this->aAlumnos as $alumno) {
            echo "<tr><th>" . $alumno->nombre . "</td>
                    <td>" . $alumno->dni . "</td>
                    <td>" . $alumno->correo . "</td>
                    <td>" . $alumno->celular . "</td>
            </tr>";
        };
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }
    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }
}

class Persona
{
    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;

    public function __construct($dni, $nombre, $correo, $celular)
    {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->celular = $celular;
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }
    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }
}

class Alumno extends Persona
{
    private $fechaNac;
    private $peso;
    private $altura;
    private $aptoFisico;
    private $presentismo;

    public function __construct($dni, $nombre, $correo, $celular, $fechaNac)
    {
        parent::__construct($dni, $nombre, $correo, $celular); //Reutilizo los parámetros de Persona
        $this->fechaNac = $fechaNac;
        $this->peso = 0.0;
        $this->altura = 0.0;
        $this->aptoFisico = false;
        $this->presentismo = 0.0;
    }

    public function setFichaMedica($peso, $altura, $aptoFisico)
    {
        $this->peso = $peso;
        $this->altura = $altura;
        $this->aptoFisico = $aptoFisico;
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }
    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }
}

class Entrenador extends Persona
{
    private $aClases;

    public function __construct($dni, $nombre, $correo, $celular)
    {
        parent::__construct($dni, $nombre, $correo, $celular); //Reutilizo los parámetros de Persona
        $this->aClases = array();
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }
    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }
}


//Desarrollo del programa
$entrenador1 = new Entrenador("34987789", "Miguel Ocampo", "miguel@mail.com", "11678634");
$entrenador2 = new Entrenador("28987589", "Andrea Zarate", "andrea@mail.com", "11768654");

$alumno1 = new Alumno("40787657", "Dante Montera", "dante@mail.com", "1145632457", "1997-08-28");
$alumno1->setFichaMedica(90, 178, true);
$alumno1->presentismo = 78;

$alumno2 = new Alumno("46766547", "Darío Turchi", "dante@mail.com", "1145632457", "1986-11-21");
$alumno2->setFichaMedica(73, 168, false);
$alumno2->presentismo = 68;

$alumno3 = new Alumno("39765454", "Facundo Fagnano", "facundo@mail.com", "1145632457", "1993-02-06");
$alumno3->setFichaMedica(90, 187, true);
$alumno3->presentismo = 88;

$alumno4 = new Alumno("41687536", "Gastón Aguilar", "gaston@mail.com", "1145632457", "1999-11-02");
$alumno4->setFichaMedica(70, 169, false);
$alumno4->presentismo = 98;

$clase1 = new Clase();
$clase1->nombre = "Funcional";
$clase1->asignarEntrenador($entrenador1);
$clase1->inscribirAlumno($alumno1);
$clase1->inscribirAlumno($alumno3);
$clase1->inscribirAlumno($alumno4);

$clase2 = new Clase();
$clase2->nombre = "Zumba";
$clase2->asignarEntrenador($entrenador2);
$clase2->inscribirAlumno($alumno1);
$clase2->inscribirAlumno($alumno2);
$clase2->inscribirAlumno($alumno3);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gimnasio</title>
    <style>
        table {
            max-width: 400px;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <?php $clase1->imprimirListado();
                        $clase2->imprimirListado();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>