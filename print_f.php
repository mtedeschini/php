<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Desarrollar una funcion que reciba un array o un string, en un mismo parametro, e imprima el contenido de la varible en un archivo

function print_f($variable){
    if(is_array($variable)){
        //Si es un array, lo recorro y guardo el contenido en el archivo "datos.txt"
        foreach($variable as $valor){
            $contenido = $contenido . $valor . "\n";
        }
        file_put_contents("datos.txt", $contenido);

    }
    else{
        //Entonces es string, guardo el contenido en el archivo "datos.txt"
        file_put_contents("datos.txt", $variable);
    }
}
// Uso

$aNotas = array(2, 4, 5, 7, 8);
$msg = "Este es un mensaje";
print_f($aNotas);



$_FILES["archivo1"]["name"]
$extension  = pathinfo($_FILES["archivo1"]["name"], PATHINFO_EXTENSION);

$nombreArchivo = $_FILES["archivo1"]["name"];
$archivo_temporal= $_FILES["archivo1"]["tmp_name"] // nombre dentro del SO
move_uploaded_file($archivo_temporal, "c:\users\micarpeta"); // Mueve el archivo
unlink("files/miimagen.png");

{"departamento":8,"nombredepto":"ventas", "director":"juan rodriguez", "empleados":[{"nombre":"pedro","apellido":"Fernandez"}]}


$jsonPersona = json_enconde($aPersonas);
$aPersonas = json_decode ($jsonPersona, true);
?>