<?php

    include 'conexion.php';

    $nom_ = $_POST['nom_'];
    $apelli_ = $_POST['apelli_'];
    $corre_ = $_POST['corre_'];
    $contra_ = $_POST['contra_'];
    $cel_ = $_POST['cel_'];

    //ENCRIPTAR
    $contra_ = md5($contra_);

    $query = "INSERT INTO usuario(nom_, apelli_, corre_, contra_) VALUES('$nom_', '$apelli_', '$corre_', '$contra_')";

    //EVITAR QUE SE REPITA CORREO
    $VERIFY = mysqli_query($conexion, "SELECT * FROM usuario where corre_='$corre_' ");

    if(mysqli_num_rows($VERIFY) > 0){

        echo '
            <script>
                alert("Correo no disponible");
                window.location = "../public/index.php";
            </script>
        ';
        exit;

    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado correctamente");
                window.location = "../public/index.php";
            </script>
        ';
    }
    mysqli_close($conexion);
?>