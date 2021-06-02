<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function promediar($aNumeros){
    $suma = 0;
    foreach($aNumeros as $numero) {
        $suma = $numero + $suma;
        }
    return $suma/count($aNumeros);
}

$aNotas = array(5,8,5,7,1,5,9);
echo "El promedio es: ". promediar($aNotas). "<br>"

?>