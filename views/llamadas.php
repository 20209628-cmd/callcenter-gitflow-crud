<?php
include("../config/db.php");
$result = $conn->query("SELECT * FROM llamadas");
?>

<h2>Llamadas</h2>

<form method="POST" action="../controllers/llamadasController.php">
    <input type="text" name="cliente" placeholder="Cliente" required>
    <input type="datetime-local" name="fecha" required>
    <input type="text" name="estado" placeholder="Estado" required>
    <button type="submit" name="create">Agregar</button>
</form>

<table border="1">
<tr>
    <th>ID</th>
    <th>Cliente</th>
    <th>Fecha</th>
    <th>Estado</th>
    <th>Acciones</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['cliente']; ?></td>
    <td><?php echo $row['fecha']; ?></td>
    <td><?php echo $row['estado']; ?></td>
    <td>
        <a href="../controllers/llamadasController.php?delete=<?php echo $row['id']; ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>
</table>

<a href="dashboard.php">Volver</a>