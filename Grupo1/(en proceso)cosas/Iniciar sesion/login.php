<?php

$username = $_POST["usuario"];
$password = $_POST["contrasenia"];

$query = "selec  * from usuarios where user = '" .$username."'and password ='".$contrasenia."'";
$exequery = mysqli_query($conn,$query);
$qnr = mysqli_num_rows($exequery);

if ($qnr==1) {

    header( "location: inicio sesion.php?nombre=.$nombre");

}
else{
    echo "no  se logro conectar";
}


?>