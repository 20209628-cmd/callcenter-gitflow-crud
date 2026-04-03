<?php
include("../config/db.php");
$result = $conn->query("SELECT * FROM empleados");
?>

<h2>Empleados</h2>

<form method="POST" action="../controllers/empleadosController.php">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <input type="text" name="puesto" placeholder="Puesto" required>
    <button name="create">Agregar</button>
</form>

<table border="1">
<tr>
    <th>ID</th><th>Nombre</th><th>Teléfono</th><th>Puesto</th><th>Acción</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nombre'] ?></td>
    <td><?= $row['telefono'] ?></td>
    <td><?= $row['puesto'] ?></td>
    <td>
        <a href="../controllers/empleadosController.php?delete=<?= $row['id'] ?>">Eliminar</a>
    </td>
</tr>
<?php endwhile; ?>

</table>

<a href="dashboard.php">Volver</a>