<?php
include("conex.php");

error_reporting(0);

$pass = $_POST["passw"];
$email = $_POST["mail"];
$username = $_POST["usuario"];
$password = $_POST["pass"];
$phone = $_POST["numero"];

$query = "select * from usuarios where nombre = '".$username."' and contraseña = '".$password."' and numero = ".$phone." and correo = '".$email."'";
$exequery = mysqli_query($conn,$query);
$qnr = mysqli_num_rows($exequery);
$row = mysqli_fetch_assoc($exequery);
$nombre = $row["nombre"];

if($qnr == 1){
    echo "
  <!DOCTYPE html>
  <html lang='es'>
  <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <link rel='stylesheet' href='css/presentar.css'>
      <title>Sebastian Dinamarca</title>
  </head>
  <body>
      <div>
      <h1> este usuario ya existe</h1>
     </div>
  </body>
  </html>";
}else{
    if( $password == $pass){
        $exequery = mysqli_query($conn, "insert into usuarios ( nombre, numero, contraseña, correo) values('".$username."',".$phone.",'".$password."','".$email."');");
    
  echo "<!DOCTYPE html>
  <html lang='es'>
  <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <link rel='stylesheet' href='css/presentar.css'>
      <title>Sebastian Dinamarca</title>
  </head>
  <body>
      <div>
      <h1> hola <span> $username </span> bienvenido/a <br> tu contraseña es: <span> $password </span>.</h1>
     </div>
  </body>
  </html> ";
    }else{
        echo '<script> alert("la contraseña no coincide")</script>';
    }
}

?>
