<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="text-center">

<div class="container mt-5">
    <div class="alert alert-success">
        Sesión cerrada correctamente
    </div>

    <p>Redirigiendo al login...</p>
</div>

<script>
setTimeout(() => {
    window.location.href = "../index.php";
}, 2000);
</script>

</body>
</html>