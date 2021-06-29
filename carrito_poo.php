<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("America/Argentina/Buenos_Aires");

class Cliente{
    private $dni;
    private $nombre;
    private $correo;
    private $telefono;
    private $descuento;
    
    public function __construct(){
        $this->descuento = 0.0;
    }
    public function imprimir(){
        echo "DNI: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Correo: " . $this->correo . "<br>";
        echo "Teléfono: " . $this->telefono . "<br>";
        echo "Descuento: " . $this->descuento . "<br><br>";
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }
}

class Producto{
    private $cod;
    private $nombre;
    private $precio;
    private $descripcion;
    private $iva;

    public function __construct(){
        $this->precio = 0.0;
        $this->iva = 0.0;
    }
    public function imprimir(){
        echo "COD: " . $this->cod . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Precio: " . $this->precio . "<br>";
        echo "Descripción: " . $this->descripcion . "<br>";
        echo "IVA: " . $this->iva . "<br><br>";
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }
}


class Carrito{
    private $cliente; //Objeto
    private $aProductos; //Array de objetos
    private $subtotal;
    private $total;

    public function __construct(){
        $this->subtotal = 0.0;
        $this->total = 0.0;
        $this->aProductos = array();
    }

    public function cargarProducto($producto){
        $this->aProductos[] = $producto; // Asigno el producto a la primera posición vacía del array

    }
    
    public function imprimirTicket(){
        
        echo '<table class="table table-hover border">
        <tr> 
            <th colspan="2" class="text-center">ECO MARKET</th>
        </tr>
        <tr>
            <th> Fecha </th>
            <td>' . date("d/m/Y H:i:s") . '</td>
        </tr>
        <tr>
            <th> DNI </th>
            <td>' . $this->cliente->dni . '</td>
        </tr>
        <tr>
            <th> Nombre </th>
            <td>' . $this->cliente->nombre . '</td>
        </tr>
        <tr>
            <th colspan="2"> Productos: </th>
        </tr>';
    foreach($this->aProductos as $producto){ //Recorre el array con todos los productos
        echo '
        <tr>
            <td>' . $producto->nombre . '</td>
            <td> $' . number_format(($producto->precio), 2 , "," , ".") . '</td>
        </tr>'; 
        }
        echo '
        <tr> 
            <th> Subtotal s/IVA: </th>
            <td> $'; 

            $sumatoria = 0; 
            foreach($this->aProductos as $producto){ //Recorre el array con todos los productos
                $sumatoria = ($sumatoria + $producto->precio); }
            echo (number_format(($sumatoria), 2, ",", ".")) .'
            </td>
        </tr>
        <tr>
            <th> TOTAL </th>
            <td> $';
            
            $precioConIva = 0; 
            foreach($this->aProductos as $producto){ //Recorre el array con todos los productos
                $precioConIva = $precioConIva + ($producto->precio * ($producto->iva/100+1)); }
            echo (number_format(($precioConIva), 2, ",", "."))
            . '</td>
        </tr>';
                
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }



}

//Programa
$cliente1 = new Cliente();
$cliente1->dni = "34765456";
$cliente1->nombre = "Bernabé";
$cliente1->correo = "bernabe@gmail.com";
$cliente1->telefono = "+54 11 8859-8686";
$cliente1->descuento = 0.05;
//$cliente1->imprimir();

//$cliente1->imprimir();
//print_r($cliente1);

$producto1 = new Producto();
$producto1->cod = "AB8767";
$producto1->nombre = "Notebook 15\" HP";
$producto1->descripcion = "Esta es una computadora HP";
$producto1->precio = 30800;
$producto1->iva = 21;
//$producto1->imprimir();
//print_r($producto1);

$producto2 = new Producto();
$producto2->cod = "QWR579";
$producto2->nombre = "Heladera Whirlpool";
$producto2->descripcion = "Esta es una heladera no frost";
$producto2->precio = 76000;
$producto2->iva = 10.5;
//$producto2->imprimir();

$carrito = new Carrito();
$carrito->cliente = $cliente1;
$carrito->cargarProducto($producto1);
$carrito->cargarProducto($producto2);
//print_r($carrito);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Supermercado</title>
</head>
<body>
    <main class="container mt-5" style="max-width: 400px;">
        <div class="row">
            <div class="col-12">
                <?php $carrito->imprimirTicket();
                ?>
            
            </div>
        </div>
    </main>
        
</body>
</html>

