<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(file_exists("archivo.txt")){ //Existe el archivo?

    // Leer el archivo y asigno variable $jsonCliente
    $jsonCliente = file_get_contents("archivo.txt");

    // Convertir json a un array $aClientes
    $aClientes= json_decode($jsonCliente, true);

}


if($_POST){
    $dni = $_REQUEST["txtDni"];
    $nombre = $_REQUEST["txtNombre"];
    $telefono = $_REQUEST["txtTelefono"];
    $correo = $_REQUEST["txtCorreo"];

    //Crear un array de datos
    $aClientes[] = array("dni" => $dni,
                        "nombre" => $nombre, 
                        "telefono" => $telefono, 
                        "correo" => $correo);

    //Convertir el array en json
    $jsonCliente = json_encode($aClientes);
    
    //Guardar json en un archivo llamado archivo.txt
    file_put_contents( "archivo.txt", $jsonCliente);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css"> <!-- Utilizar para fontawasome-->
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css"> <!-- Utilizar para fontawasome-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>ABM Clientes</title>
    
</head>
<body>
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Registro de Clientes</h1>
                </div>
            </div>
            <form action="" method="POST" enctype="multipart/form-data"><!-- Formulario -->
                <div class="row mt-4">
                    <div class="col-5 pe-5">
                        <div>
                            <label for="">DNI: *</label>
                            <input  type="text" name="txtDni" id="txtDNI" class="form-control ">                        
                        </div>
                        <div>
                            <label for="">Nombre: *</label>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control">                            
                        </div>
                        <div>
                            <label for="">Teléfono: *</label>
                            <input type="tel" name="txtTelefono" id="txtTel" class="form-control">                         
                        </div>
                        <div>
                            <label for="">Correo: *</label>
                            <input type="mail" name="txtCorreo" id="txtCorreo" class="form-control">                          
                        </div>
                        <div class="col-12 pt-2"> Archivo Adjunto: 
                            <input type="file" name="archivo1" id="archivo1" accept=".jpg, .jpeg, .png">
                            <p style="font-size: 13px">Archivos admitidos: .jpg, .jpeg, .png</p>
                        </div>                        
                        <div>
                            <button class="btn btn-primary" type="submit">Guardar</button>  <!-- Botón Guardar -->
                        </div>
                    </div>
                    <div class="col-7">
                        <table class="table table-hover table-bordered"> <!-- Tabla -->
                            <thead>
                                <th>Imagen</th>
                                <th>DNI</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                <?php
                                $contador = 0;
                                foreach($aClientes as $cliente){?>
                                    <tr>
                                        <td> Imagen </td>
                                        <td><?php echo $aClientes[$contador]["dni"]; ?></td> 
                                        <td><?php echo $aClientes[$contador]["nombre"]; ?></td> 
                                        <td><?php echo $aClientes[$contador]["telefono"]; ?></td> 
                                        <td><?php echo $aClientes[$contador]["correo"]; ?></td> 
                                        <td style="width: 110px"> 
                                            <a href="" class="me-1"> <i class="fas fa-edit" > </i> </a> 
                                            <a href=""> <i class="fas fa-trash-alt" > </i> </a>
                                        </td>
                                    </tr>
                                <?php $contador++; } ?>
                            </tbody>
                        </table>
                    </div>                
                </div>
            </form>
        </div>
    </main>

</body>
</html>