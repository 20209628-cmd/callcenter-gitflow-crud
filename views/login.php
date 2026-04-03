<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5" style="max-width: 400px;">
    <h3 class="text-center mb-4">Login</h3>

    <form method="POST" action="controllers/loginController.php">
        <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Usuario">
        </div>

        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Contraseña">
        </div>

        <button name="login" class="btn btn-primary w-100">Ingresar</button>
    </form>
</div>
