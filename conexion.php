<?php
    $host = "127.0.0.1";
    $usuario = "edgarlizcano";
    $clave = "";
    
    $conexion = new mysqli($host, $usuario, $clave, "covem");
    
    $acentos = $conexion->query("SET NAMES 'utf8'");
    
    if ($conexion->connect_error)
    {
        die('Error de conexión: ' . $conexion->connect_error);
    }
?>