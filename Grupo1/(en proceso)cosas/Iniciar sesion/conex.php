<?php
//parametros de conex
$host = "localhost";
$user = "root";
$pass = "";
$login = "test";

$conn = mysqli_connect($host,$user,$pass,$login);

if($conn){
    echo  "se conecto exitosamente"
}else{
    echo "no se conecto"
}

?>