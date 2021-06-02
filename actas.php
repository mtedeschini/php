<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aAlumnos = array();
$aAlumnos[] = array("id" => 1, "alumno" => "Juan Perez", "nota1" => 9, "nota2" => 8);
$aAlumnos[] = array("id" => 1, "alumno" => "Ana Valle", "nota1" => 4, "nota2" => 9);
$aAlumnos[] = array("id" => 1, "alumno" => "Gonzalo Roldan", "nota1" => 7, "nota2" => 6);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Actas</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Actas</h1>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <table class="table table-hover border">
                        <tr>
                            <th>ID</th>
                            <th>Alumno</th>
                            <th>Nota 1</th>
                            <th>Nota 2</th>
                            <th>Promedio</th>
                        </tr>
                            <?php 
                            $contador = 0;
                            $sumatoria = 0;
                            $pos = 0;
                            $sumPromedio = 0;

                            foreach($aAlumnos as $alumno){
                            $pos = $pos + 1; 
                            $promedio = ($alumno["nota1"] + $alumno["nota2"]) / 2;
                            $sumPromedio = $sumPromedio + $promedio;  ?>
                            <tr> 
                                <td><?php echo $pos; ?></td>
                                <td><?php echo $alumno["alumno"]; ?></td>
                                <td><?php echo $alumno["nota1"]; ?></td>
                                <td><?php echo $alumno["nota2"]; ?></td>
                                <td><?php echo number_format($promedio,2,",","." ) ?></td>
                            </tr>  
                            <?php $contador = $contador+1; } ?>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Promedio de la cursada: <?php echo number_format($sumPromedio/count($aAlumnos),2,",","." ); ?></p>
                </div>           
            </div>
        </div>


    </main>

</body>
</html>