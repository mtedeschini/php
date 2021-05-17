<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array("nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProductos[] = array("nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);
$aProductos[] = array("nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000, 
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
    <main class="container">
        <div class="row">
            <div class="col-12">
            <h1 style="padding-bottom: 10px; text-align:center">Listado de Productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th style="text-align: center">Nombre</th>
                            <th style="text-align: center">Marca</th>
                            <th style="text-align: center">Modelo</th>
                            <th style="text-align: center">Stock</th>
                            <th style="text-align: center">Precio</th>
                            <th style="text-align: center">Accion</th>
                        </tr>
                    </thead>


                        <?php 
                        $contador = 0;
                        $subtotal = 0; 
                        for($contador = 0 ; $contador < count($aProductos); $contador++){
                            ?>
                                <tr>
                                    <td><?php echo $aProductos[$contador]["nombre"]; ?> </td>
                                    <td><?php echo $aProductos[$contador]["marca"]; ?> </td>
                                    <td><?php echo $aProductos[$contador]["modelo"]; ?> </td>
                                    <td><?php echo $aProductos[$contador]["stock"] == 0? "No hay stock" : ($aProductos[$contador]["stock"] > 10 ? "Hay stock" : "Poco stock"); ?> </td>
                                    <td>$ <?php echo $aProductos[$contador]["precio"]; ?> </td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="#" role="button">Comprar</a></td>
                                </tr>
                            <?php
                            
                            $subtotal = $subtotal + $aProductos[$contador]["precio"]; // Suma acá cada for
                        }
                        ?>

                </table>
            
            <h2>El Subtotal es: $ <?php echo $subtotal; ?>
            <?php
                   
            ?>
            </h2>
            </div>
        </div>

    </main>
</body>
</html>