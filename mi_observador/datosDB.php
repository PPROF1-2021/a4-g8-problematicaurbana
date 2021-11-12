<?php
$host="localhost";
$usuario="salvador";
$clave="ispc2021";
$basededatos="miobservador";

$conn= new mysqli($host, $usuario, $clave, $basededatos);
mysqli_query($conn, "SET character_set_result=utf8");
if($conn->connect_error){
    die("Database Error: " . $conn->connect_error);
}

?>