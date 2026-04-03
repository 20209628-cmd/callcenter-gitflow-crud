<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<h2>Bienvenido <?php echo $_SESSION['user']; ?></h2>

<a href="empleados.php">Gestionar Empleados</a><br>
<a href="llamadas.php">Gestionar Llamadas</a><br>
<a href="../controllers/logout.php">Cerrar sesión</a>