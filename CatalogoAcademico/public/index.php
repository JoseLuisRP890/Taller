<?php

// Incluir el controlador
require_once __DIR__ . '/../app/controllers/AsignaturaController.php';

// Crear un objeto del controlador
$controlador = new AsignaturaController();

// Ejecutar el método principal
$controlador->index();

?>