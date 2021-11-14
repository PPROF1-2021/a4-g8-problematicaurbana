<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Datos de Inicio de Sesion</title>
    <link rel="stylesheet" type="text/css" href="css/muestraDatosphp.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    
</head>
<body>

<header id="cabecera" class="header">
    <img src="images/logo.png" class="logo img-fluid" alt="Logo">
  </header>

<?php

$email = $_POST["email"];
$password = $_POST["password"];


print " <p> Bienvenido/a <strong>$email</strong> a MiObservador, en breve sera dirigido a la seccion Reportes .</p>";



include("datosDB.php");
$con = mysqli_connect($host, $usuario, $clave, $basededatos) or die ("No se ha podido conectar al servidor de la BDD");
if (!$con) {
    die("Conexion fallida: " . myslqli_connect_error());
}

$db = mysqli_select_db($con, $basededatos) or die ("Uh! no se ha podido conectar a la bdd");
$consulta = "SELECT * FROM cuenta WHERE email = $email AND contrasenia = $password";

/*
if (mysqli_query ($con, $consulta)) {
    echo "<p> Inicio de sesion erroneo. </p>";

}
else {
    echo "<p> No se puedo iniciar sesion. </p>";
    echo "Error: " . $consulta . "<br>" . mysqli_error($con);

}
*/
mysqli_close($con);

?>

<script src="js/redireccion-carga-evento.js"></script>

</body>

</html>