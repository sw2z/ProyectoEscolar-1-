<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio_1ses.css">
    <title>Crear cuenta</title>
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
             <form action="crearcuenta.php" method="post">
                <div class="img">
                     <img src="img/lofo1.png">
                </div>
             <br>
                   <span>crear cuenta</span>
                          <input name="usuario" type="text" placeholder="Nombre y apellido">
                          <input name="mail" type="email" placeholder="Gmail">
                          <input name="numero" type="number" placeholder="numero de telefono (9 1234 5678)">
                          <input name="pass" type="password" placeholder="Contraseña">           
                          <input name ="passw"type="password" placeholder="Confirmar Contraseña"> 
                            <a href="#">Crear cuenta como Empresa</a>
                            <input type="submit" value="Crear cuenta" class="button">
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
?>