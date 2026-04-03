<?php
include("../config/db.php");

$result = $conn->query("SELECT * FROM empleados");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container d-flex justify-content-center">
        <span class="navbar-brand">Call Center System (Beta)</span>
    </div>
</nav>

<div class="container mt-5">
    <h2>Empleados</h2>

    <form method="POST" action="../controllers/empleadosController.php" class="row g-3 mb-4">
        <div class="col-md-4">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
        </div>
        <div class="col-md-4">
            <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
        </div>
        <div class="col-md-4">
            <input type="text" name="puesto" class="form-control" placeholder="Puesto" required>
        </div>
        <div class="col-12">
            <button name="create" class="btn btn-primary">Agregar</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
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
                <a href="../controllers/empleadosController.php?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm">
                    Eliminar
                </a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <a href="dashboard.php" class="btn btn-secondary">Volver</a>
</div>