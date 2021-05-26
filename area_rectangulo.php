<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


#Calcular el area de un rectangulo.
#Definimos funcion

function calcularAreaRect ($base, $altura){
    return $base * $altura;

}

#Uso funcion

echo "El área es " . calcularAreaRect(3,5); 
echo "</br>";
echo "El área es " . calcularAreaRect(800,300);


?>