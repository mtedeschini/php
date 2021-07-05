<?php
$fecha = date("d/m/Y");
$nombre = "Matias Tedeschini";
$edad = 32;
$aPeliculas = array("Volver al futuro", "El día despues de mañana", "Titanic"); #Posición 0, Posición 1, Posición 2.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Ficha personal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <tr>
                        <th>Fecha:</th>
                        <td><?php echo $fecha; ?> </td>
                    </tr>
                    <tr>
                        <th>Nombre y apellido:</th>
                        <td><?php echo $nombre; ?> </td>
                    </tr>
                    <tr>
                        <th>Edad:</th>
                        <td><?php echo $edad; ?> </td>
                    </tr>
                    <tr>
                        <th>Peliculas favoritas:</th>
                        <td><?php echo $aPeliculas[0]; ?> <br>
                            <?php echo $aPeliculas[1]; ?> <br>
                            <?php echo $aPeliculas[2]; ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>

</html>


<?php

$aAuto = array();
$aAuto["color"] = array("Negro", "Verde");
$aAuto["marca"] = "Ford";
$aAuto["anio"] = 2015;
$aAuto[] = "USD 800 a USD 1000";

echo "El auto " . $aAuto["marca"] . " del año " . $aAuto["anio"] . " es de color " . $aAuto["color"][0];


$num1 = 10;
$num2 = 8;
$resultado = $num1 + $num2;
echo $resultado

?>