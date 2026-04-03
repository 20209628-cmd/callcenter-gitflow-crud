<?php
session_start();
include("../config/db.php");

if (isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE username=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $user;
        header("Location: /callcenter-gitflow-crud/views/dashboard.php");
        exit();
    } else {
        header("Location: /callcenter-gitflow-crud/index.php?error=1");
        exit();
    }
}
?>