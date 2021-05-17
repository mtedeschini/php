<?php

for($i=1; $i<=100; $i++ ){
    echo $i . "<br>";
}
?>

<br>

<?php
for($i=2; $i<=100; $i+=2 ){
    echo $i . "<br>";
}
?>  

<br>

<?php
for($i=2; $i<=100; $i+=2 ){
    if ($i == 60){
        echo $i;
        break;
    }
    echo $i . "<br>";
}
?>
