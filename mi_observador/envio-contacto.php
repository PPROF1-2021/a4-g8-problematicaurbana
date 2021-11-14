<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Muestra Datos</title>
    <link rel="stylesheet" type="text/css" href="css/muestraDatosphp.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css%22%3E">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>
<body>
    
<?php
    

$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
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

<script src="js/redireccion-muestra-datos.js"></script>

</body>

</html>