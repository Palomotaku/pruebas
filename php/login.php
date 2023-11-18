<?php

    session_start();

    include 'conexion.php';

      $corre_ = $_POST['corre_'];
      $contra_ = $_POST['contra_'];
      $contra_ = hash('sha512',$contra_);


      $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE corre_ = '$corre_' AND contra_ = '$contra_'");
      $contar = mysqli_num_rows($query);

      if($contar == 1) 

      {

        while($row=mysqli_fetch_array($query)) 

        {

          if($corre_ = $row['corre_'] && $contra_ = $row['contra_'])

          {

            $_SESSION['usuario'] = $row['corre_'];
            $_SESSION['nombre'] = $row['nom_'];

            echo '
            <script>
                window.location = "../public/inicial.php";
            </script>
            ';
            exit;

          }

        }
        
      } else { 
        echo '
            <script>
                alert("Datos incorrectos");
                window.location = "../public/index.php";
            </script>
            ';
            exit;
    }



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