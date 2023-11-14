<?php

    session_start();

    include 'conexion.php';

    $corre_ = isset($_POST['corre_']) ? $_POST['corre_'] : '';
    $contra_ = isset($_POST['contra_']) ? $_POST['contra_'] : '';
    $contra_ = hash('sha512', $contra_ ?? '');

    $valid_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE corre_='$corre_' and contra_='$contra_'");


    if(!$valid_login){
        die("Error en la conexion: ");
    }
    if (mysqli_num_rows($valid_login) > 0){
        $_SESSION['USER'] = $corre_;


        header("location: ../public/inicial.php");
        exit;
    }else{
        echo'
           <script>
               alert("Cuenta no existente");
               window.location = "../public/index.php";
          </script>
        ';
        exit;
    }

?>