<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
include("../config/db.php");

$totalEmpleados = $conn->query("SELECT COUNT(*) as total FROM empleados")->fetch_assoc()['total'];

$totalLlamadas = $conn->query("SELECT COUNT(*) as total FROM llamadas")->fetch_assoc()['total'];

$pendientes = $conn->query("SELECT COUNT(*) as total FROM llamadas WHERE estado='Pendiente'")->fetch_assoc()['total'];

$completadas = $conn->query("SELECT COUNT(*) as total FROM llamadas WHERE estado='Completada'")->fetch_assoc()['total'];
?>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container d-flex justify-content-center">
        <span class="navbar-brand">Call Center System (Beta)</span>
    </div>
</nav>

<h2>Bienvenido <?php echo $_SESSION['user']; ?></h2>
<div class="row text-center mb-4">

    <div class="col-md-3">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h5>Empleados</h5>
                <h3><?= $totalEmpleados ?></h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h5>Llamadas</h5>
                <h3><?= $totalLlamadas ?></h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-warning text-dark">
            <div class="card-body">
                <h5>Pendientes</h5>
                <h3><?= $pendientes ?></h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-dark text-white">
            <div class="card-body">
                <h5>Completadas</h5>
                <h3><?= $completadas ?></h3>
            </div>
        </div>
    </div>

</div>

<a href="empleados.php">Gestionar Empleados</a><br>
<a href="llamadas.php">Gestionar Llamadas</a><br>
<a href="../controllers/logout.php">Cerrar sesión</a>