//validar cantidad de caracteres ingresados 
function campoDocumento (obj) {
  console.log(obj.value);
  if (obj.value.length > obj.maxLength) {
      obj.value = obj.value.slice(0, obj.maxLength);
  }
};

function campoPassword (obj) {
console.log(obj.value);
if (obj.value.length > obj.maxLength) {
    obj.value = obj.value.slice(0, obj.maxLength);
}
};

function camponNombre (obj) {
  console.log(obj.value);
  if (obj.value.length > obj.maxLength) {
      obj.value = obj.value.slice(0, obj.maxLength);
  }
  };

  function campoApellido (obj) {
    console.log(obj.value);
    if (obj.value.length > obj.maxLength) {
        obj.value = obj.value.slice(0, obj.maxLength);
    }
    };
 
//Validación de campos requeridos
(function() {
    'use strict';
    window.addEventListener('load', function() {
     //validación de forms
      var forms = document.getElementsByClassName('needs-validation');
       var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
 
  //Validación de que los password coincidan
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirmarPassword");
  //si los campos no coindiden muestra mensaje
  function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Las contraseñas ingresadas no coinciden.");
  } else {
    confirm_password.setCustomValidity('');
  }
}

    //Validación de que los emails coincidan
    var email = document.getElementById("email")
    , confirm_email = document.getElementById("confirmarEmail");
    //si los campos no coindiden muestra mensaje
    function validateEmail(){
    if(email.value != confirm_email.value) {
      confirm_email.setCustomValidity("Los correos electrónicos ingresados no coinciden.");
    } else {
      confirm_email.setCustomValidity('');
    }
  }

function verPassword(){
  var cambio = document.getElementById("password");
  //si la constraseña es tipo password pasar a texto con el check
  if(cambio.type == "password"){
    cambio.type = "text";
  }else{
    cambio.type = "password";
  }
};


function verPasswordConfirm(){
  var tipo = document.getElementById("confirmarPassword");
  //si la constraseña es tipo password pasar a texto con el check
  if(tipo.type == "confirmarPassword"){
      tipo.type = "text";
  }else{
      tipo.type = "confirmarPassword";
  }
}

function verPasswordLogin(){
  var tipo = document.getElementById("password");
  //si la constraseña es tipo password pasar a texto con el check
  if(tipo.type == "password"){
      tipo.type = "text";
  }else{
      tipo.type = "password";
  }
}
  
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    email.onchange = validateEmail;
    confirm_email.onkeyup = validateEmail;

