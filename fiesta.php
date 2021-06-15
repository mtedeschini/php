<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$msg = "";
$msg2 = "";
$estado="";
$aInvitados = array("pepe", "ana", "maca", "juan");
$aColores = array("verde");

if ($_POST["boton"] == "procesarInvitado") { //"boton" es name, "procesarInvitado" es value en Button

    $nombre = $_REQUEST["nombre"];
    $codigo = $_REQUEST["codigo"];

    if($codigo == "" && in_array($nombre, $aInvitados)){
        $msg = " Bienvenid@ a la fiesta formidable";
        $estado = "success";
    }
    else{
        $msg = "No se encuentra en la lista de invitados";
        $estado = "danger";
    }
   
}
if ($_POST["boton"] == "procesarVIP") { //"boton" es name, "procesarVIP" es value en Button
    $nombre = $_REQUEST["nombre"];
    $codigo = $_REQUEST["codigo"];

    if(in_array($codigo, $aColores)){
        $msg2 = "Aquí tiene su pulsera";
        $estado = "success";
    }
    else{
        $msg2 = "Usted no tiene pase VIP";
        $estado = "danger";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Fiesta</title>
</head>
<body>
    <main>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12"><h1>La Fiesta</h1></div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Complete el siguiente formulario:</p>
                    <form action="" method="POST">
                        <div class="pt-2">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control">
                        </div>
                        <div class="pt-3 pb-2">
                            <button value="procesarInvitado" class="btn btn-primary" name="boton" type="submit"> Procesar Invitado</button>
                        </div>
                        <div class="pt-2">
                            <label for="codigo">Ingresá el código secreto para el pase VIP:</label>
                            <input type="text" id="codigo" name="codigo" class="form-control">
                        </div>
                        <div class="pt-3 pb-2">
                            <button value="procesarVIP" class="btn btn-primary" name="boton" type="submit"> Procesar VIP</button>
                        <?php if($msg2 != ""){
                                echo "<div class='mt-3 alert alert-$estado' role='alert'> $msg2 </div>";}
                            if($msg != ""){
                                echo "<div class='mt-3 alert alert-$estado' role='alert'> $msg </div>";} ?> 
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>