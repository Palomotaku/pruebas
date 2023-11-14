<?php

    session_start();

    include 'conexion.php';

      $corre_ = strip_tags($_POST['corre_']);
      $corre_ = trim($_POST['corre_']);


      $contra_ = strip_tags(md5($_POST['contra_']));
      $contra_ = trim(md5($_POST['contra_']));

      $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE corre_ = '$corre_' AND contra_ = '$contra_'");
      $contar = mysqli_num_rows($query);

      if($contar == 1) 

      {

        while($row=mysqli_fetch_array($query)) 

        {

          if($usuario = $row['corre_'] && $contrasena = $row['contra_'])

          {

            $_SESSION['usuario'] = $corre_;
            $_SESSION['nombre'] = $row['name_'];

            header('Location: index.php');

          }

        }
        
      } else { echo 'Los datos ingresados no son correctos'; }



    // $corre_ = isset($_POST['corre_']) ? $_POST['corre_'] : '';
    // $contra_ = isset($_POST['contra_']) ? $_POST['contra_'] : '';
    // $contra_ = hash('sha512', $contra_ ?? '');

    // $valid_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE corre_='$corre_' and contra_='$contra_'");


    // if (mysqli_num_rows($valid_login) > 0){
    //     $_SESSION['USER'] = $corre_;


    //     header("location: ../public/inicial.php");
    //     exit;
    // }else{
    //     echo'
    //        <script>
    //            alert("Cuenta no existente");
    //            window.location = "../public/index.php";
    //       </script>
    //     ';
    //     exit;
    // }

?>