<?php  
    $error = ""; # Creo variable para utilizar despues
    if($_POST){ # Si alguien clickea entonces:
            $usuario = $_POST["txtUsuario"];
            $clave = $_POST["txtClave"];
              
        if($usuario != "" && $clave != ""){  
            header("Location: acceso-confirmado.php");
        }
        else{ # Variable $error ahora se completa
            $error = "<p class='alert alert-danger text-center'> Válido para usuarios registrados </p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    
<main class="container">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <h1>Formulario</h1>
            </div>
        </div>
        <form action="" method="POST">
            <div class="row">
                <div class="col-12">
                    <div>
                        <label for=""> Usuario: 
                            <input type="text" id="txtUsuario" name="txtUsuario" class="form-control">
                        </label>
                    </div>
                    <div>
                        <label for=""> Clave: 
                            <input type="password" id="txtClave" name="txtClave" class="form-control">
                        </label>
                    </div>
                    <div class="mt-3 col-4 ">
                    <?php if($error != ""){ # Se usa variable $error
                            echo $error; }
                         ?>
                        <button type="submit" class="btn btn-primary mt-1">ENVIAR</button>
                    </div>
                </div>        
            </div>
        </form>
    
    </div>

</main>

</body>
</html>