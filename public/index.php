<?php
    session_start();
    include '../php/conexion.php';
    $_SESSION["USER"] = $corre_;
    if(isset($_SESSION['USER'])){
        header("location: inicial.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stryfix - Login</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/login.js"></script>
</head>
<body>
    <div class="MenuLogin">
        <div class="DecLog">
            <img src="img/logo-stryfix.png" alt="Logo-StryFix">
            <label>StryFix</label>
        </div>
        <div class="Login">
            <h1>Iniciar Sesion</h1>
            <form action="../php/login.php" method="POST">
                <div class="Correo">
                    <input type="text" placeholder="Email" name='corre_' required>
                </div>
                <div class="Password">
                    <input type="password" placeholder="Contraseña" name='contra_' required>
                </div>
                <div class="Remember-Forgot">
                    <label><input type="checkbox"> Recordar mi cuenta</label>
                    <a href="remember.php">Olvido su Contraseña?</a>
                </div>
                <div class="Log-In">
                    <input type="submit" value="Iniciar Sesion">
                </div>
                <div class="Register">
                    No estas registrado? <a href="registrarse.php">Registrate</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
