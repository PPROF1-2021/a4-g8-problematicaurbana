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
<?php include("session.php"); ?>
<header id="cabecera" class="header">
    <img src="images/logo.png" class="logo img-fluid" alt="Logo">
  </header>

<?php
//post con los datos ingresados en la pagina de login
if($_POST){
    $email = $_POST["email"];
    $password = $_POST["passwordLogin"];
//valida los datos en la DB
    $consulta = "SELECT idCuenta FROM cuenta WHERE email = '$email' AND contrasenia = '$password'";
    $query = $conn->query($consulta);
    $resultado = $query->fetch_row();
  
    //datos para session
    if(!empty($resultado) && isset($resultado[0]) && $resultado[0]){
        global $idCuenta, $cliente;
        $idCuenta = $resultado[0];
        $_SESSION['idCuenta'] = $resultado[0];
        //obtener solo el nombre de la cuenta obtenida
        $consulta = "SELECT nombre FROM cuenta WHERE idCuenta = $idCuenta";
        $query = $conn->query($consulta);
        $cliente = $query->fetch_array();
    
    }

    

    mysqli_close($conn);
}
global $cliente, $idCuenta;

if($idCuenta){
    $nombre = $cliente["nombre"];
    print " <p> Bienvenido/a <strong>$nombre</strong> a MiObservador, en breve sera dirigido a la seccion Reportes .</p>";
}
?>

<script src="js/redireccion-carga-evento.js"></script>

      

     


</body>

</html>