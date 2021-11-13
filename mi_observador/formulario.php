<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <title>Registrate</title>
  <meta name="keywords" content="Cordoba, Capital, Urbano, Formulario, Registro">
  <meta name="description" content="Pagina registro, aqui el usuario se podra registrar si no tiene cuenta creada.">

</head>

<body>
  <?php
  include("carga_combos.php");
  ?>
  

  <header id="cabecera" class="header">
    <img src="images/logo.png" class="logo img-fluid" alt="Logo">
  </header>

  <!--Barra de Navegación-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navegacion">
    <div class="container-fluid" id="contendor-navegacion">
      <a class="navbar-brand" href="#">
        <img src="./images/Pack_Iconos/eye-scanner.png" alt="Icono Navegacion" width="40" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="./carga_datos.html">Reportes</a>
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

  <!--Contenido página registro-->

  </div>
  <div class="container py-5" id="contenedor-principal">
    <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto">
      <div class="card" id="encabezadoRegistro">
        <div class="card-header">
          <h1>Formulario de registro</h1>
          <h3>Por favor, complete con sus datos</h3>
        </div>
      </div>
      
      <!--Se agrega validación al form con boostrap y js   data-rule-required="true"-->
    <form id="registro" action="envio-contacto.php" class="needs-validation" method="post" novalidate>
      <div class="form-row">
        <div class="form-floating mb-4">
          <input type="text" class="form-control sPadingF" id="nombre" name="nombre" placeholder="nombre" required>
          <label for="nombre" class="sPaddingI">Nombre *</label>
          <div class="valid-feedback"></div>
          <div class="invalid-feedback">Dato requerido. Complete por favor.</div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-floating mb-4">
          <input type="text" class="form-control sPadingF" id="apellido" name="apellido" placeholder="apellido" required>
          <label for="apellido" class="sPaddingI">Apellido *</label>
          <div class="valid-feedback"></div>
          <div class="invalid-feedback">Dato requerido. Complete por favor.</div>
        </div>
      </div>
      <div class="form-row">
        <div class="col pr-0">
           <div class="form-floating mb-4">
            <input type="text" class="form-control sPadingF" id="nroDocumento" name="nroDocumento" placeholder="Documento" required>
            <label for="nroDocumento" class="sPaddingI">Documento *</label>
             <div class="valid-feedback"></div>
            <div class="invalid-feedback">Dato requerido. Complete por favor.</div>
           </div>
        </div>

        <div class="col pl-0">
            <div class="form-floating mb-4">
              <input type="date" class="form-control sPadingF" onchange="CalcularEdad()" id="fechaNacimiento"
                name="fechaNacimiento" placeholder="dd/mm/aaaa">
              <label for="fechaNacimiento" class="sPaddingI sPaddingIFecha">Fecha de Nacimiento</label>
            </div>
          </div>

          <div class="col pl-0">
            <div class="form-floating mb-4">
              <input type="text" class="form-control sPadingF" id="EdadActual" value="Edad  " name="EdadActual" readonly>
            </div>
          </div>

        </div>

      <!--<div class="form-row" >
        <select class="form-select mb-3" id="provincia" aria-label="Default select example" required>
          <option selected>Seleccione Provincia</option>
          Muestra de datos. Las provincias se deben obtener de la base de datos
          <option value="31">Córdoba</option>
          <option value="2">La Rioja</option>
              <option value="3">Santa Fé</option>
        </select>
        <div class="valid-feedback"></div>
        <div class="invalid-feedback">Dato requerido. Complete por favor.</div>
      </div> -->

      <div class="form-row">
        <select class="form-select mb-3" name = "idCiudad" id="ciudad" aria-label="Default select example" required>
          <?php print carga_combo(); ?>
          
          
          </select>
        <div class="valid-feedback"></div>
        <div class="invalid-feedback">Dato requerido. Complete por favor.</div>
      </div>

      <div class="form-row">
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
          <label for="email" class="sPaddingI">Correo Electrónico *</label>
        </div>
        <div class="valid-feedback"></div>
        <div class="invalid-feedback">Dato requerido. Complete por favor.</div>
      </div> 

      <div class="form-row">
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="confirmarEmail" name="confirmarEmail" placeholder="Confirmar Correo Electrónico">
          <label for="confirmarEmail" class="sPaddingI">Confirmar Correo Electrónico *</label>
          <div class="valid-feedback"></div>
        <div class="invalid-feedback">Las correos electrónicos ingresados no coinciden.</div>
      </div>
    </div>

      <div class="form-row">
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
          <label for="password" class="sPaddingI">Contraseña *</label>
          <div class="valid-feedback"></div>
          <div class="invalid-feedback">Dato requerido. Complete por favor.</div>
      <div class="col">
        <button class="btn btn-primary" type="button" onclick="verPassword()">Ver</button>
      </div> 
    </div>
  </div>

      <div class="form-row">
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="confirmarPassword" name="confirmarPassword" placeholder="Confirmar contraseña">
          <label for="confirmarPassword" class="sPaddingI">Confirmar Contraseña *</label>
          <div class="invalid-feedback">Las contraseñas ingresadas no coinciden.</div>
          <div class="col">
            <button class="btn btn-primary" id="btn-pass" type="button" onclick="verPasswordConfirm()">Ver</button>
          </div> 
        </div>
      </div>

    </div>
    <div class="d-grid">
      <button type="submit" id="btn-register" class="btn btn-register">Registrarme</button>
      <!--onclick="location.href='carga_datos.html'"-->
    </div>
    </form>
  </div>
  </form>

  <footer class="footer container-fluid" id="footer">
    <p class="texto-footer">❤ Todos los derechos reservados. Copyright&copy 2021
      Grupo-8 Programacion-Web-1 <a href="https://www.ispc.edu.ar/" target="blank">ISPC</a>❤
    </p>
  </footer>

  <script src="js/validar_formulario.js"></script> 
  <script src="js/password.js"></script>
  <script src="js/funcionesGrupo8.js"></script>

</body>

</html>