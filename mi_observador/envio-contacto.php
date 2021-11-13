<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Muestra Datos</title>
</head>
<body>
    
<?php
    

$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
//$provincia= $_POST["provincia"];
$ciudad = $_POST["idCiudad"];
$email = $_POST["email"];
$password = $_POST["password"];

print " <p>Su nombre es  <strong>$nombre</strong>.</p>\n";
print "\n";
print " <p>Su apellido es  <strong>$apellido</strong>.</p>\n";
print "\n";
print " <p>Su email es  <strong>$email</strong>.</p>\n";

include("datosDB.php");
$conn = mysqli_connect($host, $usuario, $clave, $basededatos) or die ("No se ha podido conectar al servidor de la BDD");
if (!$conn) {
    die("Conexion fallida: " . myslqli_connect_error());
}

$db = mysqli_select_db($conn, $basededatos) or die ("Uhh! no se ha podido conectar a la Base De Datos");
$consulta = "INSERT INTO cuenta (nombre, apellido, email, contrasenia, idCuentaOrigen, idCuentaEstado, idCiudad) VALUES ('$nombre','$apellido'
,'$email','$password',1, 1, $ciudad)";
//$idCiudad '$idCuentaOrigen','$idCuentaEstado'

if (mysqli_query ($conn, $consulta)) {
    echo "<p>Registro agregado.</p>";
}
else {
    echo "<p> No se agrego nuevo registro.</p>";
    echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

</body>

</html>