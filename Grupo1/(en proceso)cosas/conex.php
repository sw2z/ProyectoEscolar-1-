<?php
//parametros de conex
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = mysqli_connect($host,$user,$pass,$db);

if($conn){
    echo  "se conecto exitosamente"
}else{
    echo "no se conecto"
}

?>