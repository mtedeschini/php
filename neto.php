<?php

function calcularNeto($bruto) {
    $neto = $bruto-($bruto*0.17);
    echo "El sueldo neto de $$bruto es: $ $neto" ;
}

calcularNeto(80000);

?>