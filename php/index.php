<?php
    session_start();
    include 'conexion.php';
    if(isset($_SESSION['usuario'])){
        echo '
            <script>
                window.location = "../php/inicial.php";
            </script>
        ';
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stryfix - Login</title>
    <link href="../public/css/style.css" rel="stylesheet">
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
            <form action="" method="POST">
                <div class="Correo">
                    <input type="email" placeholder="Email" name='corre_' required>
                </div>
                <div class="Password">
                    <input type="password" placeholder="Contraseña" name='contra_' required>
                </div>
                <div class="Remember-Forgot">
                    <label><input type="checkbox"> Recordar mi cuenta</label>
                    <a href="remember.php">Olvido su Contraseña?</a>
                </div>
                <div class="Log-In">
                    <input type="submit" value="Iniciar Sesion" name="enviar">
                </div>
                <div class="Register">
                    No estas registrado? <a href="registrarse.php">Registrate</a>
                </div>
            </form>
<?php
if(isset($_POST['enviar'])){

    $corre_ = $_POST['corre_'];
    $contra_ = $_POST['contra_'];
    $contra_ = hash('sha512',$contra_);


    $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE corre_ = '$corre_' AND contra_ = '$contra_'");
    $contar = mysqli_num_rows($query);

    if($contar == 1){
      while($row=mysqli_fetch_array($query))
      {
        if($corre_ = $row['corre_'] && $contra_ = $row['contra_'])
        {
          $_SESSION['usuario'] = $row['corre_'];
          $_SESSION['nombre'] = $row['nom_'];

          echo '
          <script>
              window.location = "../php/inicial.php";
          </script>
          ';
        }
        }     
    } else { 
      echo '
          <script>
              alert("Datos incorrectos");
              window.location = "../php/index.php";
          </script>
          ';
  }
  
}
?>
        </div>
    </div>
</body>
</html>
