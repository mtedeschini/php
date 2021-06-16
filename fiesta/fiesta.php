<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$msg = "";
$msg2 = "";
$estado="";
$aInvitados = array("pepe", "ana", "maca", "juan");
$aColores = array("verde");


if (isset($_POST["boton"])) { //"boton" es name
    $nombre = strtolower(trim($_REQUEST["nombre"]));
    $codigo = strtolower(trim($_REQUEST["codigo"]));

    //Lista de Invitados admitidos
    if($_POST["boton"] == "procesarInvitado"){  //"boton" es name, "procesarInvitado" es value en Button
        if($codigo == "" && in_array($nombre, $aInvitados)){
            $msg = " Bienvenid@ $nombre a la fiesta formidable";
            $estado = "success";
            //Si viene la imagen la almacenamos en la carpeta imagenes
            if($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) { // Se subio archivo?
                $nombreAleatorio = date("Ymdhmsi"); //Si se crea 09/06/2021 a las 08:21 20210609082100
                $archivo_tmp = $_FILES["archivo"]["tmp_name"];  //Carpeta temporal
                $nombreArchivo = $_FILES["archivo"]["name"]; 
                $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
                $nuevoNombre = "$nombreAleatorio.$extension";
                move_uploaded_file($archivo_tmp, "imagenes/$nuevoNombre"); // Guarda el archivo fisicamente desde carpeta temporal a donde quiero guardarlo
            } 
        }
        //Lista de Invitados NO admitidos
        else{
            $msg = "No se encuentra en la lista de invitados";
            $estado = "danger";
        }
    }
    
    if ($_POST["boton"] == "procesarVIP") { //"boton" es name, "procesarVIP" es value en Button
    
        if(in_array($codigo, $aColores)){
            $msg2 = "Aquí tiene su pulsera";
            $estado = "success";
        }
        else{
            $msg2 = "Usted no tiene pase VIP";
            $estado = "danger";
        }
    }

}

//Scanea todos los archivos de la carpeta imagenes y los carga en la variable $aImagenes
$aImagenes= scandir("imagenes"); 
unset($aImagenes[0]); // Elimina estos dos elementos del array que vienen por defecto en el scandir
unset($aImagenes[1]);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Fiesta</title>
    <style>
    html{
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .table{
    background-color: white;
    border-radius:25px;
    border: none;
    }

    body{
        background: rgb(22,97,81);
        background: linear-gradient(0deg, rgba(22,97,81,1) 0%, rgba(10,41,34,1) 100%);
        background-repeat: no-repeat;
    } 
    .cuadro{
        background-color:white;
        border-radius: 25px;
        margin-top:20px;
        padding: 30px;
        height: 400px

    }
    main{
        margin-top: 50px;
    }
    .btn{
        background-color:#166151;
        color:white;
    }
    .btn:hover{
        background-color: #2a7363;
        color:white;
    }
    h1{
        color: white;
        text-align: center;
    }
 
    </style>
</head>
<body>
    <main>
        <div class="container">
            <h1>La Fiesta</h1>
            <div class="row">
                <div class="col-6 mt-3 cuadro">
                    <div class="row">
                        <div class="col-12">
                            <p>Complete el siguiente formulario:</p>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="pt-2">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control">
                                    <input type="file" id="archivo" name="archivo" class="form-control">
                                </div>
                                <div class="pt-3 pb-2 boton">
                                    <button value="procesarInvitado" class="btn " name="boton" type="submit"> Procesar Invitado</button>
                                </div>
                                <div class="pt-2">
                                    <label for="codigo">Ingresá el código secreto para el pase VIP:</label>
                                    <input type="text" id="codigo" name="codigo" class="form-control">
                                </div>
                                <div class="pt-3 pb-2 boton">
                                    <button value="procesarVIP" class="btn " name="boton" type="submit"> Procesar VIP</button>
                                <?php if($msg2 != ""){
                                        echo "<div class='mt-3 alert alert-$estado' role='alert'> $msg2 </div>";}
                                    if($msg != ""){
                                        echo "<div class='mt-3 alert alert-$estado' role='alert'> $msg </div>";} ?> 
                                 </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <table class="table table-hover text-center ms-5">
                        <tr>
                            <th>Imagenes</th>
                        </tr>                        
                            <?php 
                            foreach($aImagenes as $imagen){
                                echo "<tr><td><img class='img-thumbnail' style='height: 100px' src='imagenes/$imagen' </td></tr>"  ?>   
                            <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>