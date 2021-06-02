<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function maximo($aVector){
    $maximo = 0;
    foreach($aVector as $vector){
        if($maximo < $vector){
            $maximo = $vector;
        } 
    }
    return $maximo;
}

$aNotas = array(5,8,9,7,1,5,9);
$aSueldo= array(155,244,1500,990,220,119,105);

echo "La nota máxima es: " . maximo($aNotas) . "<br>";
echo "El suelo máximo es: " . maximo($aSueldo) . "<br>";
?>