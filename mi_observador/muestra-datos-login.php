<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Datos de Inicio de Sesion</title>
</head>
<body>

<?php

$nombre= $_POST ["nombre"];
$email = $_POST["email"];


print " <p> Su nombre es  <strong>$nombre</strong>.</p>";



include("datosDB.php");
$con = mysqli_connect($host, $usuario, $clave, $basededatos) or die ("No se ha podido conectar al servidor de la BDD")
if (!$con) {
    die("Conexion fallida: " . myslqli_connect_error())
}

$db = mysqli_select_db($con, $basededatos) or die ("Uh! no se ha podido conectar a la bdd");
$consulta = "SELECT FROM cuenta WHERE email = $email AND contrasenia = $password";

if (mysqli_query ($con, $consulta)) {
    echo "<p> Inicio de sesion erroneo. </p>"

} else {
    echo "<p> No se puedo iniciar sesion. </p>"
    echo "Error: " . $consulta . "<br>" . mysqli_error($con);

}

mysqli_close($con);

?>


</body>
</html>