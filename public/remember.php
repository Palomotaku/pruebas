<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Olvido su contraseña?</title>
	<link href="css/remember.css" rel="stylesheet">
</head>
<body>
	<div class="Remember">
        <div class="C_Remem">
            <h1>Olvido su contraseña?</h1>
            <form action="index.php">
                <label for="">Ingrese su correo electronico, le enviaremos un codigo de confirmacion</label>
                <div class="Email-Remember">
                    <input type="text" placeholder="Ingrese su correo" id='$re_corre' required>
                </div>
                <div class="Remem_check">
                    <input type="submit" name="Enviar" id="">
                </div>
                <div class="cancel_remem">
                    <label for="">Recuerdo su contraseña? <a href="index.php">Regresar</a></label>
                </div>
            </form>
        </div>     
    </div>
</body>
</html>