<?php

$bruto = 50000; 

function calcularNeto($bruto) {
    $neto = $bruto-($bruto*0.17); 
    echo "El sueldo neto de $$bruto es: $ $neto" ;
}

calcularNeto($bruto);

?>