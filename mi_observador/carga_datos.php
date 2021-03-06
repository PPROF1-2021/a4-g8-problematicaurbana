<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <title>Mi Observador</title>
    <!--Enlace libreria SweetAlert para mejorar las alertas del sitio-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--Enlace al js-->
    <script src="js/alertas_carga_datos.js"></script>

    <meta name="keywords" content="Cordoba, Capital, Urbano, Problematica, Aplicacion, Web, Observador, Movil">
    <meta name="description"
        content="Sitio Web de un proyecto orientado al monitoreo sobre Problematicas Urbanas en Cordoba Capital">
</head>

<body>
    <?php include("session.php"); ?>
    <header id="cabecera" class="header">
        <img src="images/logo.png" class="logo img-fluid" alt="Logo">
    </header>
    <!--Barra de Navegacióno con menú-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navegacion">
        <div class="container-fluid" id="contendor-navegacion">
            <a class="navbar-brand" href="#">
                <img src="./images/Pack_Iconos/eye-scanner.png" alt="Icono Navegacion" width="40" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Sobre_nosotros.html">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./carga_datos.php">Reportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./formulario.php">Registrarse</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Escriba aqui" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <!--Contenido de Carga de datos-->
    <div class="container contenedor-principal border border-3" id="contenedor-principal">
        <div class="row d-flex justify-content-center h-100">

            <div class="card" id="encabezadoLogin">
                <div class="card-header">
                    <h1>Reporte de incidente</h1>
                </div>
            </div>
            <form method="GET" action="#" class="d-flex justify-content-center">
                <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1" required>
                    <label class="form-check-label" for="inlineRadio1">Accidente Vial</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2" required>
                    <label class="form-check-label" for="inlineRadio2">Reparación</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                        value="option3" required>
                    <label class="form-check-label" for="inlineRadio3">Manifestación</label>
                </div>
                <button type="reset" class="btn btn-warning" onclick="mostrarAlerta()">Enviar</button>

            </form>

            <p><b>Ingrese la ubicacion del reporte en el mapa.</b></p>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217893.00024305488!2d-64.33648905211236!3d-31.42574742052076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9432985f478f5b69%3A0xb0a24f9a5366b092!2zQ8OzcmRvYmE!5e0!3m2!1ses-419!2sar!4v1631044981787!5m2!1ses-419!2sar"
                width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" class="mapa"></iframe>

        </div>

        <footer class="footer container-fluid" id="footer">
            <p class="texto-footer">❤ Todos los derechos reservados. Copyright&copy 2021
                Grupo-8 Programacion-Web-1 <a href="https://www.ispc.edu.ar/" target="blank">ISPC</a>❤
            </p>
        </footer>

</body>