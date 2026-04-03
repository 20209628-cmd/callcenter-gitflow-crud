<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body.login-page {
            /* Fondo con color agradable */
            background-color: #6c5ce7; /* morado suave, puedes cambiarlo */
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9); /* caja blanca semitransparente */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.4);
            width: 100%;
            max-width: 400px;
        }

        .login-container h3 {
            color: #333;
        }

        .btn-primary {
            background-color: #6c5ce7;
            border-color: #6c5ce7;
        }

        .btn-primary:hover {
            background-color: #5a4fcf;
            border-color: #5a4fcf;
        }
    </style>
</head>
<body class="login-page">

<div class="login-container">
    <h3 class="text-center mb-4">Login</h3>

    <form method="POST" action="controllers/loginController.php">
        <input type="text" name="username" class="form-control mb-3" placeholder="Usuario" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Contraseña" required>

</head>
<body>

<div class="container mt-5" style="max-width: 400px;">
    <h3 class="text-center mb-4">Login</h3>

    <form method="POST" action="controllers/loginController.php">
        <input type="text" name="username" class="form-control mb-3" placeholder="Usuario">
        <input type="password" name="password" class="form-control mb-3" placeholder="Contraseña"> 

        <button name="login" class="btn btn-primary w-100">Ingresar</button>
    </form>


<?php if (isset($_GET['logout'])): ?>
    <div class="alert alert-success mt-3">
        Sesión cerrada correctamente
    </div>
<?php endif; ?>


    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger mt-3">
            Usuario o contraseña incorrectos
        </div>
    <?php endif; ?>
</div>

</body>
</html>