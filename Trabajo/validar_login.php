<?php
include("conex.php");

error_reporting(0);

$email = $_POST["nombre"];
$password = $_POST["pass"];


$query = "select * from usuarios where nombre= '".$email."' and contraseña = '".$password."'";
$exequery = mysqli_query($conn,$query);
$qnr = mysqli_num_rows($exequery);
$row = mysqli_fetch_assoc($exequery);
$nombre = $row["nombre"];


if($qnr == 1){
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
      <h1> hola <span> $email </span> bienvenido <br> tu contraseña es: <span> $password</span>.</h1>
     </div>
  </body>
  </html> ";
}else{ 
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
      <h1> este usuario no existe</h1>
     </div>
  </body>
  </html>";
    }
?>