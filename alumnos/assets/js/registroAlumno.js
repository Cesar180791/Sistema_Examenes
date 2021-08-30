var $registrar = $('#registroE');

$registrar.on('submit', function(ev){
    console.log("registrar");
    ev.preventDefault();
    $.ajax({
        url: '/projectModul4/alumnos/inc/registroAlumno.php',
        type: 'post',
        dataType: 'json',
        data:{
            nombreAlumno: $('#frmENombre').val(),
            apellidoAlumno: $('#frmEApellido').val(),
            direccionAlumno: $('#frmEDireccion').val(),
            email: $('#frmECorreo').val(),
            edadAlumno: $('#frmEEdad').val()
            
        }
    }).done(
        function(data){
            if(data != "El correo ya existe en nuestra base de datos"){
                Swal.fire({
                    type: 'success',
                    title: 'Validacion',
                    text: 'Docente registrado exitosamente',
                });
                setTimeout(function() {
                   window.location.href = "././index.php";
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