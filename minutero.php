<?php

$hr = 23;
$min = 10; 

/* Para mostrar reloj y cuando Llega a 24 hrs que sea 00Hrs */

for($i=0 ; $i < 60 ; $i++){
    echo "La hora es $hr:$min hs. <br> ";

    $min++;
        if ($min == 60){
            $hr++;
            $min= 0;}

        if ($hr == 24){
            $hr = 0;}

        if($min <= 9 ){
            $min = 0 . $min;}
        
  }

echo "La hora es $hr:$min hs. <br> ";

/* echo "La hora es ". (($hr >= 0 && $hr <= 9)? "0$hr" : $hr)  .":" . (($min >= 0 && $min <= 9)? "0$min" : $min) . "<br>"; */


?>

