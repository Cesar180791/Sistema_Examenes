var $registrar = $('#crearExamenD');

$registrar.on('submit', function(ev){
    ev.preventDefault();
    $.ajax({
        url: '/projectModul4/admin/inc/CrearExamenes.php',
        type: 'post',
        dataType: 'json',
        data:{

            idDocente: $('#selectDocente').val(),
            nombreExamen: $('#frmNombreExamen').val(),
            notaMaxima: $('#frmNotaMaxima').val(),
            notaAprobacion: $('#frmNotaMinima').val(),
            disponibilidad: $('#frmDisponibilidad').val(),

            pregunta1: $('#frmPregunta1').val(),
            respuesta1: $('input:radio[name=optradio1]:checked').val(),
            ponderacion1: $('#frmPonderacion1').val(),

            pregunta2: $('#frmPregunta2').val(),
            respuesta2: $('input:radio[name=optradio2]:checked').val(),
            ponderacion2: $('#frmPonderacion2').val(),

            pregunta3: $('#frmPregunta3').val(),
            respuesta3: $('input:radio[name=optradio3]:checked').val(),
            ponderacion3: $('#frmPonderacion3').val(),

            pregunta4: $('#frmPregunta4').val(),
            respuesta4: $('input:radio[name=optradio4]:checked').val(),
            ponderacion4: $('#frmPonderacion4').val(),

            pregunta5: $('#frmPregunta5').val(),
            respuesta5: $('input:radio[name=optradio5]:checked').val(),
            ponderacion5: $('#frmPonderacion5').val(),

  
        }
    }).done(
        function(data){
            if(data != "La sumatoria de los puntos asignados a cada pregunta es menor a la nota maxima" &&
            data!="La sumatoria de los puntos asignados a cada pregunta es mayor a la nota maxima"
            && data!="La Nota de Aprobacion tiene que ser menor a la nota Maxima"){
                Swal.fire({
                    type: 'success',
                    title: 'Validacion',
                    text: 'Examen Creado exitosamente',
                });
                setTimeout(function() {
                   window.location.href = "././AdminVerExamenesDocente.php";
                  }, 1500);
            }else{
            Swal.fire({
                type: 'error',
                title: 'Validacion',
                text: data
            });
            }
        }
    );
});