<?php

// Definición de pacientes

$aPacientes = array();

$aPacientes[] = array(
    "dni" => "33.412.523",
    "nombre y apellido" => "Carlos Aguirre",
    "edad" => 42,
    "peso" => 50
);

$aPacientes[] = array(
    "dni" => "24.864.431",
    "nombre y apellido" => "Estela Ibañez",
    "edad" => 25,
    "peso" => 85
);

$aPacientes[] = array(
    "dni" => "96.153.244",
    "nombre y apellido" => "Fabricio Lopez",
    "edad" => 19,
    "peso" => 90.5
);

$aPacientes[] = array(
    "dni" => "17.754.542",
    "nombre y apellido" => "Ines Montes",
    "edad" => 81,
    "peso" => 60
);


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 style="text-align: center">Listado de Pacientes</h1>
                    <table class="table border table-hover">
                        <tr>
                                <th style="text-align: center"> DNI</th>
                                <th style="text-align: center">Nombre y Apellido</th>
                                <th style="text-align: center"> Edad</th>
                                <th style="text-align: center"> Peso (KG)</th>
                        </tr>

                        <?php foreach ($aPacientes as $paciente) { ?>

                        <tr>
                            <td style="text-align: center"> <?php echo $paciente["dni"]; ?></td>
                            <td style="text-align: center"> <?php echo $paciente["nombre y apellido"]; ?></td>
                            <td style="text-align: center"> <?php echo $paciente["edad"]; ?></td>
                            <td style="text-align: center"> <?php echo $paciente["peso"]; ?></td>
                        </tr>
                        
                        <?php } ?>
                    
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>