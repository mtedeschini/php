<?php

include_once "config.php";
include_once "entidades/usuario.php";
$pg = "Formulario Usuario";


$usuario = new Usuario();
$usuario->cargarFormulario($_REQUEST);


$pg = "Formulario de Usuario";

if($_POST){
    if(isset($_POST["btnGuardar"])){ //Se apretó boton GUARDAR
        if(isset($_GET["id"]) && $_GET["id"] > 0){
              //Actualizo un cliente existente
            $usuario->actualizar();
        } else {
            //Es nuevo
            $usuario->insertar();
        }
        $msg["texto"] = "Guardado correctamente";
        $msg["codigo"] = "alert-success";
    } else if(isset($_POST["btnBorrar"])){ //Se apretó boton BORRAR
        $usuario->eliminar();
        header("Location: usuario-formulario.php");
    }
} 

if(isset($_GET["id"]) && $_GET["id"] > 0){ //Si hay querystring con el ID, se ejecuta "obtener por id"
    $usuario->obtenerPorId();
}

include_once("header.php"); 

?>
   <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Usuarios </h1>
        <div class="row">
            <div class="col-12 mb-3">
                <a href="usuario-listado.php" class="btn btn-primary mr-2">Listado</a>
                <a href="usuario-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
                <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
            </div>
        </div>
        <div class="usuarios">
            <div class="row">
                <?php
                if(isset($msg)){ ?>
                    <div class="col-12 alert <?php echo $msg["codigo"]; ?>" role="alert">
                    <?php echo $msg["texto"]; ?>
                    </div> <?php } ?>
            </div>
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="txtUsuario">Usuario:</label>
                        <input type="text" name="txtUsuario" id="txtUsuario" required class="form-control"  value="<?php echo $usuario->usuario ?>"></input>
                    </div>  
                    <div class="col-6 form-group">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" required class="form-control"  value="<?php echo $usuario->nombre ?>"></input>
                    </div>  
                    <div class="col-6 form-group">
                        <label for="txtApellido">Apellido:</label>
                        <input type="text" name="txtApellido" id="txtApellido" required class="form-control"  value="<?php echo $usuario->apellido ?>"></input>
                    </div>  
                    <div class="col-6 form-group">
                        <label for="txtCorreo">Correo:</label>
                        <input type="text" name="txtCorreo" id="txtCorreo" required class="form-control"  value="<?php echo $usuario->correo ?>"></input>
                    </div>  
                    <div class="col-6 form-group">
                        <label for="txtClave">Clave:</label>
                        <input type="password" name="txtClave" id="txtClave" class="form-control" value=""></input>
                        <small>Completar únicamente para cambiar la clave</small>
                    </div>  
                </div>                
            </div>
        </div>        
    </div>
<?php include_once("footer.php"); ?>