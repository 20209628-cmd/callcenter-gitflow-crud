<?php
session_start();
include("../config/db.php");

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['user'] = $user;
    header("Location: ../views/dashboard.php");
} else {
    echo "Credenciales incorrectas";
}
?>