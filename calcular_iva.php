<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $iva = 0 ;
    $precioSinIva= 0 ;
    $precioConIva= 0 ;
    $cantidadIva= 0 ;
    $resPrecioConIva= 0;
    $resPrecioSinIva= 0;
    $resIvaCantidad= 0;

if($_POST){ # Si alguien clickea entonces:
    $iva = $_POST["txtIva"];
    $precioSinIva = $_POST["txtSinIva"];
    $precioConIva = $_POST["txtConIva"];

if($precioSinIva > 0 && $precioConIva ==""){
    $resPrecioConIva = $precioSinIva * ($iva/100+1);
    $resPrecioSinIva= $precioSinIva;
    $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
}

if($precioConIva > 0 && $precioSinIva ==""){
    $resPrecioSinIva = $precioConIva / ($iva/100+1);
    $resPrecioConIva= $precioConIva;
    $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
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
                <div class="col-3 offset-3">
                    <form action="" method="POST">
                        <div>
                            <label for="" class="text-start">IVA 
                                <input type="text" id="txtIva" name="txtIva" class="form-control mb-3" value="21"> 
                            </label>
                        </div>
                        <div>             
                            <label for="" class="text-start">Precio sin IVA
                                <input type="text" id="txtSinIva" name="txtSinIva" class="form-control mb-3" > 
                            </label>
                        </div>             
                        <div>
                            <label for="" class="text-start">Precio con IVA
                                <input type="text" id="txtConIva" name="txtConIva" class="form-control mb-3" > 
                            </label> 
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary mt-1">CALCULAR</button>
                        </div>            
                    </form>
                </div>
                <div class="col-3">
                <table class="table border table-hover">
                    <tr>
                        <th style="width: 50%" >IVA: </th>
                        <td style="text-align:right"><?php echo $iva; ?> %</td>
                    </tr>
                    <tr>
                        <th style="width: 50%">Precio sin IVA:</th>
                        <td style="text-align:right">
                        <?php echo "$" .  number_format($resPrecioSinIva, 2 , "," , "." );  ?> </td>
                    </tr>
                    <tr>
                        <th style="width: 50%">Precio con IVA: </th>
                        <td style="text-align:right"> 
                        <?php echo "$" . number_format($resPrecioConIva, 2 , "," , "." ); ?> </td>
                    </tr>
                    <tr>
                        <th style="width: 50%">IVA cantidad:</th>
                        <td style="text-align:right"><?php echo "$" . number_format($resIvaCantidad, 2 , "," , "." ); ?> </td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>
</html>