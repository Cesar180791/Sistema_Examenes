var $registrar = $('#datos1');

$registrar.on('submit', function(ev){
    console.log("registrar");
    ev.preventDefault();
    $.ajax({
        url: '/projectModul4/admin/inc/registroDocente.php',
        type: 'post',
        dataType: 'json',
        data:{
            nombreDocente: $('#frmNombre').val(),
            apellidoDocente: $('#frmApellido').val(),
            direccionDocente: $('#frmDireccion').val(),
            edadDocente: $('#frmEdad').val(),
            email: $('#frmCorreo').val()
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
                   window.location.href = "././AdminVerDocentes.php";
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