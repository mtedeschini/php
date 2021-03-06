<?php

include_once("config.php");
include_once("entidades/venta.php");
$pg = "Listado de Ventas";

$venta = new Venta();
$aVentas = $venta->cargarGrilla();

include_once("header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Listado de Ventas</h1>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="venta-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
        </div>
    </div>
    <table class="table table-hover border">
        <tr>
            <th>ID Venta</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Precio Total</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($aVentas as $venta) : ?>
            <tr>
                <td><?php echo $venta->idventa; ?></td>
                <td><?php echo $venta->fecha; ?></td>
                <td><a href="cliente-formulario.php?id=<?php echo $venta->fk_idcliente ?>"><?php echo $venta->nombre_cliente; ?></a></td>
                <td><a href="producto-formulario.php?id=<?php echo $venta->fk_idproducto ?>"><?php echo $venta->nombre_producto; ?></td>
                <td><?php echo $venta->cantidad; ?></td>
                <td>$<?php echo number_format($venta->preciounitario, 2 , "," , "." ); ?></td>
                <td>$<?php echo number_format($venta->total, 2 , "," , "." ); ?></td>
                <td style="width: 110px;">
                    <a href="venta-formulario.php?id=<?php echo $venta->idventa; ?>"><i class="fas fa-search"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once("footer.php"); ?>