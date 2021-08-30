var $registrar = $('#HacerExamen');

$registrar.on('submit', function (ev) {
   console.log("registrar");
    ev.preventDefault();
    $.ajax({
        url: '/projectModul4/alumnos/inc/evaluarExamen.php', 
        type: 'post',
        dataType: 'json',
        data: {
            token: $('#frmTokenE').val(),
            Alumno: $('#frmAlumnoId').val(),
            respuesta1: $('input:radio[name=optradio1V]:checked').val(),
            respuesta2: $('input:radio[name=optradio2V]:checked').val(),
            respuesta3: $('input:radio[name=optradio3V]:checked').val(),
            respuesta4: $('input:radio[name=optradio4V]:checked').val(),
            respuesta5: $('input:radio[name=optradio5V]:checked').val(),
        }
    }).done(
        function (data) {
            console.log(data);
            Swal.fire({
                type: 'success',
                title: 'Estado del Examen',
                text: 'Examen Completado con Exito'
            });
            setTimeout(function() {
                window.location.href = "././AlumnosVerNotas.php";
               }, 500);
            
        }
    );
});