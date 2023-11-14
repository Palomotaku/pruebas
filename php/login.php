<?php

    session_start();

    include 'conexion.php';

    $corre_ = $_POST['corre_'];
    $contra_ = $_POST['contra_'];
    $contra_ = hash('sha512', $contra_);

    $valid_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE corre_='$corre_' and contra_='$contra_'");
    $contar = mysqli_num_rows($valid_login);


    if(mysqli_num_rows($valid_login) > 0){
        $_SESSION['usuario'] = 'corre_';
        header("location: ../public/inicial.php");
        exit();
    }else{
        echo'
           <script>
               alert("Cuenta no existente");
               window.location = "../public/index.php";
          </script>
        ';
        exit();
    }

    // if($contar == 1) {
    //     while($row = mysqli_fetch_array($valid_login)) 
    //     {
    //         if($corre_ == $row['corre_'] && $contra_ == $row['contra_']) 
    //         {
    //             $_SESSION['usuario'] = $row['corre_'];
    //             $_SESSION['nombre'] = $row['nom_'];
    //             $_SESSION['avatar'] = $row['avatar'];
                
    //             header("location: ../public/inicial.php");
    //             exit();
    //         }
    //         }
    //     }else{
    //         echo '
    //         <script>
    //             alert("Cuenta no existente");
    //             window.location = "../public/index.php";
    //         </script>
    //     ';
    //     exit();
    // }



?>