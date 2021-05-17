<?php

$aClientes = array("Carlos", "Matias", "Pedro");
foreach($aClientes as $cliente) {
    /*Recorre todas las posiciones del array, trayendo en cada vuelta el valor de esa posicion */
    echo $cliente . "<br>";
}

$miAuto = array(
    "Matente" => "AA12HB",
    "Marca" => "Ford",
)

foreach ($miAuto as $clave => $valor) {
    echo "La $clave es $valor";
}

?>
