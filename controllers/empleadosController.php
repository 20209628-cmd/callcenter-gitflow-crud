<?php
include("../config/db.php");

if (isset($_POST['create'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $puesto = $_POST['puesto'];

    $conn->query("INSERT INTO empleados (nombre, telefono, puesto)
                  VALUES ('$nombre', '$telefono', '$puesto')");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM empleados WHERE id=$id");
}

header("Location: ../views/empleados.php");
?>