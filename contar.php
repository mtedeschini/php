<?php

#Funcion que cuente la cantidad de elementos de un array.
function contar($miArray){
    $cuenta = 0;
    foreach ($miArray as $datoArray) {
        $cuenta++; # $cuenta + 1
    }
    return $cuenta;
}

#Uso Funcion:

$aClientes = array("Carlos", "Esteban", "Matias", "Pedro");

echo "Cantidad de Clientes: ". contar($aClientes);

?>