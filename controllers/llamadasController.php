<?php
include("../config/db.php");

if (isset($_POST['create'])) {
    $cliente = $_POST['cliente'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];

    $conn->query("INSERT INTO llamadas (cliente, fecha, estado)
                  VALUES ('$cliente', '$fecha', '$estado')");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM llamadas WHERE id=$id");
}

header("Location: ../views/llamadas.php");
?>