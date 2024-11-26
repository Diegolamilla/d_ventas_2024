<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tienda de Motos</title>
    <link rel="stylesheet" href="<?php echo  BASE_URL;?>views/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script>
      const base_url='<?php echo BASE_URL;?>';
    </script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login-container {
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            border: 2px solid red;
        }
        .form-control:focus {
            border-color: darkred;
            box-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
        }
        .btn-custom {
            background-color: white;
            color: red;
            border: 2px solid red;
        }
        .btn-custom:hover {
            background-color: red;
            color: white;
            border: 2px solid white;
        }
        .register-link {
            text-align: center;
            margin-top: 10px;
        }
        .btn-container {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2 class="text-center">Iniciar Sesión</h2>
    <form>
        <div class="form-group">
            <label for="username">Nombre de Usuario</label>
            <input type="text" class="form-control" id="username" placeholder="Introduce tu nombre">
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña">
        </div>
        <div class="btn-container mt-3">
            <button type="submit" class="btn btn-custom">Ingresar</button>
        </div>
    </form>
    
</div>

<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>