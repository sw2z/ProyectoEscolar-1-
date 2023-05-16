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
             <form action="login.php" method="post">
                <div class="img">
                     <img src="img/lofo1.png">
                </div>
             <br>
                   <span>ingresar con su cuenta</span>
                          <input name="Usuario" type="email" placeholder="Email">
                          <input name="contrasenia" type="password" placeholder="Contraseña"> 
                            <a href="#">Olvidaste la contraseña?</a>
                            <a href="#">Crear cuenta nueva</a>
                   <input type="button" value="Inicia sesion">
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