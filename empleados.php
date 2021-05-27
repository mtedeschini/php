<?php
#Listado de empleados
$aEmpleados = array();
$aEmpleados[] = array("dni" => 33300123, "nombre" => "David García", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 40874456, "nombre" => "Ana del Valle", "bruto" => 90000);
$aEmpleados[] = array("dni" => 67567565, "nombre" => "Andrés Perez", "bruto" => 100000);
$aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "bruto" => 70000);
#Defino función NETO
function calcularNeto($bruto){
    return $bruto - ($bruto * 0.17);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Empleados</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-3 mt-3">
                <h1>Listado de Empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <table class="table border table-hover">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre </th>
                        <th> Sueldo Bruto</th> 
                        <th> Neto Neto <span style="font-size: 10px">(-17%)</span></th> 
                    </tr>
                    <?php for ($contador = 0 ; $contador < count($aEmpleados); $contador++){?>
                        <tr>
                            <td> <?php echo $aEmpleados[$contador]["dni"]; ?> </td>
                            <td> <?php echo mb_strtoupper($aEmpleados[$contador]["nombre"]); ?> </td>
                            <td>$ <?php echo number_format($aEmpleados[$contador]["bruto"], 2 , "," , "." ); ?> </td>
                            <td>$ <?php echo number_format(calcularNeto($aEmpleados[$contador]["bruto"]) , 2 , "," , "." ); ?> </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Cantidad de empleados activos: <?php echo count($aEmpleados) ?></p>
            </div>
    </div> 
</body>
</html>