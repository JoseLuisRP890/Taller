<?php

// Datos de conexión a la base de datos
$servidor = "localhost";
$basedatos = "catalogo_academico";
$usuario = "root";
$contrasena = "";

// Intentar establecer la conexión
try {

    $conexion = new PDO(
        "mysql:host=$servidor;dbname=$basedatos;charset=utf8",
        $usuario,
        $contrasena
    );

    // Configurar PDO para mostrar errores mediante excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Error de conexión: " . $e->getMessage());

}