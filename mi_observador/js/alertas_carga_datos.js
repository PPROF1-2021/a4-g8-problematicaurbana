function mostrarAlerta() {

    const accidenteVial = document.getElementById('inlineRadio1');
    const reparacion = document.getElementById('inlineRadio2');
    const manifestacion = document.getElementById('inlineRadio3');


    if(accidenteVial.checked==false && reparacion.checked==false && manifestacion.checked==false){
        swal('Error al enviar el Evento','Compruebe que marco una de las casillas.','error');
    }

    if (accidenteVial.checked || reparacion.checked || manifestacion.checked){
        swal('Evento Enviado','El evento fue registrado correctamente.','success');
    }

}

