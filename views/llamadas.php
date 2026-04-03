<?php
include("../config/db.php");

$result = $conn->query("SELECT * FROM llamadas");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container d-flex justify-content-center">
        <span class="navbar-brand">Call Center System (Beta)</span>
    </div>
</nav>

<div class="container mt-5">
    <h2>Llamadas</h2>

    <form method="POST" action="../controllers/llamadasController.php" class="row g-3 mb-4">
        <div class="col-md-4">
            <input type="text" name="cliente" class="form-control" placeholder="Cliente" required>
        </div>
        <div class="col-md-4">
            <input type="datetime-local" name="fecha" class="form-control" required>
        </div>
        <div class="col-md-4">
            <input type="text" name="estado" class="form-control" placeholder="Estado" required>
        </div>
        <div class="col-12">
            <button name="create" class="btn btn-primary">Agregar</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th><th>Cliente</th><th>Fecha</th><th>Estado</th><th>Acción</th>
        </tr>

        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['cliente'] ?></td>
            <td><?= $row['fecha'] ?></td>
            <td><?= $row['estado'] ?></td>
            <td>
                <a href="../controllers/llamadasController.php?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm">
                    Eliminar
                </a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <a href="dashboard.php" class="btn btn-secondary">Volver</a>
</div>