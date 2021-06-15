<?php
$archivo1= fopen("datos.txt", "r"); // Abre el archivo en modo append
$archivo2= fopen("datos_personales.txt", "w");

fwrite($archivo1, "1"); // Escribe en el archivo
fwrite($archivo1, "2345"); // Escribe en el archivo
fclose($archivo1); // Cierra el archivo
fclose($archivo2); 

$archivo3= fopen("otrosdatos.txt", "r");
$tamanio = filesize ("otrosdatos.txt");
$contenido = fread($archivo3, $tamanio);
fclose($archivo3);

echo $contenido . '<br>'; // $contenido = lo que realmente hay dentro
echo ($tamanio) . '<br>'; // $tamanio = cantidad de caracteres
echo ($tamanio - 5); // Se puede modificar la cantidad que se lea

$contenido = file_get_contents("datos_personales.txt");
echo $contenido;   

$persona = "Monica \n"; //Significa salto de linea
file_put_contents("datos_personales.txt", $persona)


//Recupero Contenido
$contenido = file_get_contents("datos_personales.txt");
//Concateno informacion
$contenido = $contenido . "Juan Perez \n";
//Almaceno informacion
file_put_contents("datos_personales.txt", $contenido);


$archivo1 = fopen("datos_personales.txt", "r");
if($archivo1){ //Si pudo entrar entonces:
    while (($fila = fgets($archivo1)) == True){
        echo $fila;
    }
}
*/

$archivo1 = fopen("datos_personales.txt", "r");
$fila = fgets($archivo1);
$fila = fgets($archivo1);
$fila = fgets($archivo1);
echo $fila; // Lee la tercera fila porque lo llamé 3 veces
fclose($archivo1);


?>