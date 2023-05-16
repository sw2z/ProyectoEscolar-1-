<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio_1ses.css">
    <title>inicio de sesion</title>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
</head>
<body>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <div class="form sign-in">
             <form method="post" action="validar_login.php">
                <div class="img">
                     <img src="img/lofo1.png">
                </div>
             <br>
                   <span>ingresar con su cuenta</span>
                          <input name="nombre" type="text" placeholder="Nombre">
                          <input name="pass" type="password" placeholder="Contraseña"> 
                            <a href="#">Olvidaste la contraseña?</a>
                            <a href="crearcuenta.php">Crear cuenta nueva</a>
                   <input type="submit" value="iniciar sesion" class="button">
                   <p>necesitas ayuda?</p>
                   <div class="help_1">
                    <a href="#" class="help"><i class="fab fa-google" aria-hidden="true"></i></a>
                    <div>
                        <p class="detallito">@4h_grupo1_2022</p>
                    </div>
                   </div>
                   
         </form>
    </div>
</body>
</html>