<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Catálogo Académico</title>

</head>

<body>

    <h1>Catálogo Académico</h1>

    <form method="GET">

        <label>Buscar asignatura:</label>

        <input
            type="text"
            name="buscar"
            placeholder="Ingrese el nombre"
            value="<?= isset($_GET['buscar']) ? htmlspecialchars($_GET['buscar']) : '' ?>">

        <button type="submit">
            Buscar
        </button>

        <a href="index.php?mostrar=1">
        Mostrar todas
        </a>

    </form>

    <br>

    <?php if ($asignaturas !== null): ?>

<table border="1" cellpadding="8">

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Nivel</th>
        <th>Docente</th>
        <th>Horas</th>
    </tr>

    <?php if (!empty($asignaturas)): ?>

        <?php foreach ($asignaturas as $fila): ?>

            <tr>
                <td><?= $fila['id']; ?></td>
                <td><?= $fila['nombre_asignatura']; ?></td>
                <td><?= $fila['nivel']; ?></td>
                <td><?= $fila['docente']; ?></td>
                <td><?= $fila['horas']; ?></td>
            </tr>

        <?php endforeach; ?>

    <?php else: ?>

        <tr>
            <td colspan="5">
                No se encontraron asignaturas.
            </td>
        </tr>

    <?php endif; ?>

</table>

<?php endif; ?>

    </table>

</body>

</html>