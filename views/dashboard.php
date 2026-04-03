<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../index.php");
}
?>

<div class="container mt-5">
    <h2 class="mb-4">Dashboard</h2>

    <div class="list-group">
        <a href="empleados.php" class="list-group-item list-group-item-action">
            Gestión de Empleados
        </a>

        <a href="llamadas.php" class="list-group-item list-group-item-action">
            Gestión de Llamadas
        </a>

        <a href="../controllers/logoutController.php" class="list-group-item list-group-item-danger">
            Cerrar Sesión
        </a>
    </div>
</div>