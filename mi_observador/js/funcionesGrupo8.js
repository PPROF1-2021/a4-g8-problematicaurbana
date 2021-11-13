function CalcularEdad() {

  // traigo fecha cargada en "FechaNacimiento"
    var fechaUsuario = document.getElementById('fechaNacimiento').value;
    // extraigo el año del string
    var anoUsuario = fechaUsuario.substring(0, 4);
    // extraigo el año actual 
    var anoHoy = (new Date()).getFullYear();
    // hago la diferencia para calcular edad
    var edad = (anoHoy - anoUsuario);
    // devuelvo el resultado a "EdadActual"
       document.getElementById('EdadActual').value = "Edad: " + edad;
    
    // Alert para pruebas solamente ...
    //alert("edad: " + (anoHoy - anoUsuario));

  }

  