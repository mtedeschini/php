<?php
   if($_POST){ # Alguien hizo click en enviar?
     
    print_r($_POST); #Imprime los datos del submit del formulario
    print_r($_GET); #Imprime los datos de la query string 
    print_r($_REQUEST); #Imprime ambas POST y GET

    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];

    echo "el Usuario $usuario ha ingresado correctamente.";

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>

<main class="container">
    <div class="row">
        <div class="col-12">
            <h1>Formulario</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="" method="POST">
                <div><label for=""> Usuario
                    <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                </label>    
                </div>        
                <div><label for=""> Contraseña
                    <input type="password" name="txtClave" id="txtClave" class="form-control">
                </label>
                </div>
                <div>
                    <button type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-primary">ENVIAR</button>
                </div>            
            </form>
        </div>
    </div>
</main>
    
</body>
</html>