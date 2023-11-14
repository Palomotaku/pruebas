<?php
    session_start();
    include '../php/conexion.php';
    $user = $_SESSION['USER'];

    echo $user . "<br/>";

    // if (!isset($_SESSION['usuario'])) {
    //     echo '
    //         <script>
    //             alert("Iniciar Sesion");
    //             window.location = "../public/index.php";
    //         </script>
    //     ';
    //     exit();
    // }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StryFix - Inicio</title>
    <link href="css/inicio.css" rel="stylesheet">
    <style>
        .LateralMenu img{
            higth:100px;
            witdh:100px;
        }
        .LblPrincipal {
            background-color:white;
            margin-left:450px;
            margin-top: 20px;
            width: 750px;
            border-radius: 10px;
            border: 1px solid black;
        }
        .LblPrincipal p{
            font-size: 30px;
            padding: 10px 0px 5px 20px;
        }
        .LblPrincipal textarea{
            margin: 0px 0px 10px 10px;
        }
        .LblPrincipal button{
            width: 100px;
            height: 40px;
            margin: -10px 0px 15px 600px;
        }
        .LblPrincipal input{
            margin: 15px 0px 10px 10px;
        }
        .LateralMenu button{
            margin-left: 120px;
            width: 100px;
            height: 40px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <nav class="LateralMenu">
        <img src="img/<?php echo $_SESSION['avatar'] ?>" alt="Foto de Perfil">
        <button type="file" name="actualizar">Subir avatar</button>
        <a class="name"> <?php echo ucwords($_SESSION['nombre']); ?> </a>
        <a href="#">Inicio</a>
        <a href="#">Perfil</a>
        <a href="#">Configuracion</a>
        <a href="../php/logout.php">Cerrar Sesion</a>
    </nav>
    <main class="LblPrincipal">
        <div>
            <form action="" method="post" enctype="multipart/form-data">
                <p>Publicar contenido</p>
                <textarea name="publicacion" onkeypress="return validarn(event)" placeholder="¿Qué estás pensando?" class="form-control" cols="95" rows="7" required></textarea>
                <br>
                <input type="file" name="foto" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected"/>
                <br>
                <button type="submit" name="publicar" class="btn btn-primary btn-flat">Publicar</button>
            </form>
        </div>
    </main>
</body>
</html>
