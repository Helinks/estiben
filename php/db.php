<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$base_de_datos = "estiben";

$conexion= new mysqli($servidor, $usuario, $contraseña, $base_de_datos);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

echo "Conexión exitosa";


?>