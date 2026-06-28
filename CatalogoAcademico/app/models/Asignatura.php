<?php

require_once __DIR__ . '/../../config/conexion.php';

class Asignatura
{
    private $conexion;

    // Constructor
    public function __construct()
    {
        global $conexion;
        $this->conexion = $conexion;
    }

    // Obtener todas las asignaturas
    public function obtenerTodas()
    {
        $sql = "SELECT * FROM asignaturas ORDER BY nombre_asignatura ASC";

        $resultado = $this->conexion->query($sql);

        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    // Buscar asignaturas por nombre
    public function buscarPorNombre($nombre)
    {
        $sql = "SELECT *
                FROM asignaturas
                WHERE nombre_asignatura LIKE ?
                ORDER BY nombre_asignatura ASC";

        $stmt = $this->conexion->prepare($sql);

        $buscar = "%" . $nombre . "%";

        $stmt->execute([$buscar]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}