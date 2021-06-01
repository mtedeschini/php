<?php
    $iva = "";
    $precioSinIva="";
    $precioConIva="";
    $cantidadIva="";


if($_POST){ # Si alguien clickea entonces:
    $iva = $_POST["txtIva"];
    $precioSinIva = $_POST["txtSinIva"];
    $precioConIva = $_POST["txtConIva"];

}

function calcularConIva($precioSinIva){
    return $precioSinIva * $iva;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Calculadora de IVA</title>
</head>
<body>
    <main>
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Calculadora de IVA</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-6">
                    <form action="" method="POST">
                        <div>
                            <label for="">IVA 
                                <input type="text" id="txtIva" name="txtIva" class="form-control mb-3" value="21"> 
                            </label>
                        </div>
                        <div>             
                            <label for="">Precio sin IVA
                                <input type="text" id="txtConIva" name="txtConIva" class="form-control mb-3" > 
                            </label>
                        </div>             
                        <div>
                            <label for="">Precio con IVA
                                <input type="text" id="txtSinIva" name="txtSinIva" class="form-control mb-3" > 
                            </label> 
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary mt-1">CALCULAR</button>
                        </div>            
                    </form>
                </div>
                <div class="col-6">
                <table class="table border table-hover">
                    <tr>
                        <th>IVA: </th>
                        <td><?php echo $iva; ?> </td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA:</th>
                        <td><?php echo $precioSinIva; ?> </td>
                    </tr>
                    <tr>
                        <th>Precio con IVA: </th>
                        <td> <?php echo $precioConIva; ?>  </td>
                    </tr>
                    <tr>
                        <th>IVA cantidad:</th>
                        <td><?php echo $cantidadIva; ?> </td>
                    </tr>
    
                </table>
                </div>
            </div>
        </div>
    </main>

</body>
</html>