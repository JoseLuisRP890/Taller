<?php

require_once __DIR__ . '/../models/Asignatura.php';

class AsignaturaController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Asignatura();
    }

    public function index()
{
    $asignaturas = null;

    // Buscar por nombre
    if (isset($_GET['buscar']) && !empty(trim($_GET['buscar']))) {

        $textoBuscar = trim($_GET['buscar']);

        $asignaturas = $this->modelo->buscarPorNombre($textoBuscar);

    }

    // Mostrar todas las asignaturas
    if (isset($_GET['mostrar'])) {

        $asignaturas = $this->modelo->obtenerTodas();

    }

    require_once __DIR__ . '/../views/asignaturas.php';
}
}