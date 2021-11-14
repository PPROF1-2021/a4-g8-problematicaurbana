<?php
function carga_combo() {
include("datosDB.php");
$conn = mysqli_connect($host, $usuario, $clave, $basededatos) or die ("No se ha podido conectar al servidor de la BDD");
if (!$conn) {
    die("Conexion fallida: " . myslqli_connect_error());
}

$datosDB = mysqli_select_db($conn, $basededatos) or die ("Uhh! no se ha podido conectar a la Base De Datos");
$consulta = "SELECT c.nombreCiudad, c.idCiudad 
              FROM ciudad as c
              INNER JOIN provincia as p
              WHERE c.idProvincia = p.idProvincia
              AND c.idProvincia = 81";

      $resultado = mysqli_query($conn , $consulta);
      $contador=0;

      $opcion = "";
      while($misdatos = mysqli_fetch_assoc($resultado))
      { $contador++;
       $opcion .= '<option value = "' .  $misdatos["idCiudad"] . '">' .  $misdatos["nombreCiudad"] . '</option>';
      
    } 
    return $opcion;        
  }


 

