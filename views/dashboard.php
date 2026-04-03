<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit();
}

include("../config/db.php");

$totalEmpleados = $conn->query("SELECT COUNT(*) as total FROM empleados")->fetch_assoc()['total'];
$totalLlamadas = $conn->query("SELECT COUNT(*) as total FROM llamadas")->fetch_assoc()['total'];
$pendientes = $conn->query("SELECT COUNT(*) as total FROM llamadas WHERE estado='Pendiente'")->fetch_assoc()['total'];
$completadas = $conn->query("SELECT COUNT(*) as total FROM llamadas WHERE estado='Completada'")->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container d-flex justify-content-center">
        <span class="navbar-brand">Call Center System</span>
    </div>
</nav>

<div class="container">

    <h3>Bienvenido <?php echo $_SESSION['user']; ?></h3>

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

    <div class="list-group">
        <a href="empleados.php" class="list-group-item">Gestión de Empleados</a>
        <a href="llamadas.php" class="list-group-item">Gestión de Llamadas</a>
        <a href="../controllers/logoutController.php" class="list-group-item list-group-item-danger">Cerrar Sesión</a>
    </div>

</div>

</body>
</html>