<?php
require_once 'modelos/usuarios.modelo.php';

session_start();
if (!isset($_SESSION["iniciarSesion"]) || $_SESSION["iniciarSesion"] !== "ok") {
    echo '<script>window.location = "login";</script>';
    return;
}

$url = PlantillaControlador::url();
$nombreUsuario = $_SESSION["nombre"];
$idUsuario = $_SESSION["id_usuario"];

$usuario = ModeloUsuarios::mdlMostrarUsuarios("usuarios", "id_usuario", $idUsuario);
$emailUsuario = $usuario["email_usuario"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Cuenta</title>
    <link href="<?php echo $url; ?>vistas/assets/css/app.min.css" rel="stylesheet">
    <link href="<?php echo $url; ?>vistas/assets/css/icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 400px;">
        <div class="card-body text-center">

            <img src="<?php echo $url; ?>vistas/assets/images/user-placeholder.png" alt="Foto de Usuario" class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">

            <h4><i class="fas fa-user"></i> <?php echo $nombreUsuario; ?></h4>

            <p><i class="fas fa-envelope"></i> <?php echo $emailUsuario; ?></p>

            <a href="salir" class="btn btn-danger mt-3"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
        </div>
    </div>
</div>

<script src="<?php echo $url; ?>vistas/assets/libs/jquery/jquery.min.js"></script>
<script src="<?php echo $url; ?>vistas/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $url; ?>vistas/assets/js/app.js"></script>
</body>
</html>
