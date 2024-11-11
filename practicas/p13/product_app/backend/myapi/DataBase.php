<?php
namespace myapi;

abstract class DataBase {
    protected $conexion;

    public function __construct($user, $contraseña, $baseDatos) {
        $this->conexion = @mysqli_connect(
            'localhost',
            $usuario,
            $contrasena,
            $baseDatos
        );
    
        /**
         * NOTA: si la conexión falló $conexion contendrá false
         **/
        if(!$this->conexion) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
        /*else {
            echo 'Base de datos encontrada';
        }*/
    }
}
?>