
 
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
  
    function validateEmail(){
    if(email.value != confirm_email.value) {
      confirm_email.setCustomValidity("Los correos electrónicos ingresados no coinciden.");
    } else {
      confirm_email.setCustomValidity('');
    }
  }

  function verPassword(){
    var tipo = document.getElementById("password");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}

function verPasswordConfirm(){
  var tipo = document.getElementById("confirmarPassword");
  if(tipo.type == "confirmarPassword"){
      tipo.type = "text";
  }else{
      tipo.type = "confirmarPassword";
  }
}
  
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    email.onchange = validateEmail;
    confirm_email.onkeyup = validateEmail;

