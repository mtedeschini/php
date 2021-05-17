<?php

$valor = rand(1,5); //Genera número aleatorio entre 1 y 5

if ($valor == 1 || $valor == 3 || $valor == 5){
    echo "El numero $valor es Impar";
}
else{
    echo "El numero $valor es Par";
}

?>