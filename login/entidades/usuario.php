<?php

class Usuario {
    private $idusuario;
    private $usuario;
    private $clave;
    private $nombre;
    private $apellido;
    private $correo;

    public function __construct(){

    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }

public function obtenerTodos(){ 

    $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE); //Abro conexión con BBDD
    $sql = "SELECT
                idusuario,
                usuario,
                clave,
                nombre,
                apellido,
                correo
            FROM usuarios
            ORDER BY idusuario DESC";
    if (!$resultado = $mysqli->query($sql)) {
        printf("Error en query: %s\n", $mysqli->error . " " . $sql);
    }

    $aResultado = array();
    if ($resultado) {
        //Convierte el resultado en un array asociativo
        while ($fila = $resultado->fetch_assoc()) {
            $entidadAux = new Usuario();
            $entidadAux->idusuario = $fila["idusuario"];
            $entidadAux->usuario = $fila["usuario"];
            $entidadAux->clave = $fila["clave"];
            $entidadAux->nombre = $fila["nombre"];
            $entidadAux->apellido = $fila["apellido"];
            $entidadAux->correo = $fila["correo"];
            $aResultado[] = $entidadAux;
        }
    }
    $mysqli->close(); //Cierro conexión con la BBDD
    return $aResultado;
}

public function obtenerPorId(){ 

    $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE); //Abro conexión con BBDD
    $sql = "SELECT
                idusuario,
                usuario,
                clave,
                nombre,
                apellido,
                correo
            FROM usuarios
            WHERE idusuario = $this->idusuario
            ORDER BY idusuario DESC";
    if (!$resultado = $mysqli->query($sql)) {
        printf("Error en query: %s\n", $mysqli->error . " " . $sql);
    }
    if($fila = $resultado->fetch_assoc()) {
            $this->idusuario = $fila["idusuario"];
            $this->usuario = $fila["usuario"];
            $this->clave = $fila["clave"];
            $this->nombre = $fila["nombre"];
            $this->apellido = $fila["apellido"];
            $this->correo = $fila["correo"];
        }
    $mysqli->close(); //Cierro conexión con la BBDD
    }

    public function obtenerPorUsuario($user){ 

    $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE); //Abro conexión con BBDD
    $sql = "SELECT
                idusuario,
                usuario,
                clave,
                nombre,
                apellido,
                correo
            FROM usuarios
            WHERE usuario = '$user'";
    if (!$resultado = $mysqli->query($sql)) {
        printf("Error en query: %s\n", $mysqli->error . " " . $sql);
    }
    if($fila = $resultado->fetch_assoc()) {
            $this->idusuario = $fila["idusuario"];
            $this->usuario = $fila["usuario"];
            $this->clave = $fila["clave"];
            $this->nombre = $fila["nombre"];
            $this->apellido = $fila["apellido"];
            $this->correo = $fila["correo"];
        }
    $mysqli->close(); //Cierro conexión con la BBDD
    }

    public function eliminar(){
        
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "DELETE FROM usuarios WHERE idusuario = " . $this->idusuario;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();

    }
    
    public function actualizar(){
        
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "UPDATE usuarios SET
                usuario = '$this->usuario',
                nombre = '$this->nombre',
                apellido = '$this->apellido',";
                if($this->clave !=""){
                 $sql = $sql . "clave = '$this->clave',";}
                 $sql = $sql . "correo = '$this->correo'
                WHERE idusuario = " . $this->idusuario;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function insertar(){

        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        //Arma la query
        $sql = "INSERT INTO usuarios (
                    usuario,
                    clave,
                    nombre,
                    apellido,
                    correo
                ) VALUES (
                    '$this->usuario',
                    '$this->clave',
                    '$this->nombre',
                    '$this->apellido',
                    '$this->correo'
                   );";
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        //Obtiene el id generado por la inserción
        $this->idtipoproducto = $mysqli->insert_id;
        //Cierra la conexión
        $mysqli->close();
    }

    public function cargarFormulario($request)
    {
        $this->idusuario = isset($request["id"]) ? $request["id"] : "";
        $this->usuario = isset($request["txtUsuario"]) ? $request["txtUsuario"] : "";
        $this->clave = isset($request["txtClave"]) && $request["txtClave"] != "" ? $this->encriptarClave($request["txtClave"]) : "";
        $this->nombre = isset($request["txtNombre"]) ? $request["txtNombre"] : "";
        $this->apellido = isset($request["txtApellido"]) ? $request["txtApellido"] : "";
        $this->correo = isset($request["txtCorreo"]) ? $request["txtCorreo"] : "";

    }
    
    public function encriptarClave($clave){
        $claveEncriptada = password_hash($clave, PASSWORD_DEFAULT);
        return $claveEncriptada;
    }
 
    public function verificarClave($claveIngresada, $claveEnBBDD){
        return password_verify($claveIngresada, $claveEnBBDD);
    }
 
}