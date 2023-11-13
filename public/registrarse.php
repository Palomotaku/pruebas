<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StryFix - Registrar</title>
    <link href="style.css" rel="stylesheet">
    <script src="../php/registrar.php"></script>
</head>
<body>
    <div class="MenuRegister">
        <div class="Register-In">
            <h1>Registrar</h1>
            <form action="../php/registrar.php" action="https://formsubmit.co/francoitalo46hotmail.com" method="POST" class="form_register">
                <div class="Name">
                    <input type="text" placeholder="Nombres" name="nom_" required>
                </div>
                <div class="LastName">
                    <input type="text" placeholder="Apellidos" name="apelli_" required>
                </div>
                <div class="Correo">
                    <input type="email" placeholder="Correo" name="corre_" required>
                </div>
                <div class="Pass">
                    <input type="password" placeholder="Contraseña" name="contra_" required>
                </div>
                <div class="Repeat-Pass">
                    <input type="text" placeholder="Celular (No Obligatorio)" name='cel_'>
                </div>
                <div class="Check-In">
                    <input type="submit" value="Registrarse" name="enviar">
                </div>
                <div class="Register">
                    Ya tienes cuenta? <a href="index.php">Iniciar sesion</a>
                </div>
            </form>
        </div>
    </div>
    <?php
    include("mail_reset.php");
    ?>
</body>
</html>