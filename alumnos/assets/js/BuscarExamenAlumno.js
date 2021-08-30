$('#FormVistaED').hide();

var $buscarToken = $('#Token');

$buscarToken.on('submit', function(ev){
   // console.log("registrar");

    ev.preventDefault();
   // var toke = $('#frmToken').val();
    //console.log(toke);
    $.ajax({
        url: '/projectModul4/alumnos/inc/BuscarTokenExamen.php',
        type: 'post',
        dataType: 'json',
        data:{
            token: $('#frmToken').val()
        }/*
        success:function(res){
            for(var i=0;i<res.length;i++){
                alert(res[i]["pregunta4"]["pregunta"]);
               }
        }*/
    }).done(
        function(data){
            console.log(data);
            
            if(data != ""){
                Swal.fire({
                    type: 'success',
                    title: 'Validacion',
                    text: 'Examen Encontrado y cargado',
                });
                for(var i=0;i<data.length;i++){
                  
                    $('#frmNombreExamenV').val(data[i]["NombreExamen"]);
                    $('#frmNotaMaximaV').val(data[i]["NotaMax"]);
                    $('#frmNotaMinimaV').val(data[i]["NotaAprobacion"]);

                    $('#frmTokenE').val(data[i]["token"]);

                    $('#frmPregunta1V').val(data[i]["pregunta1"]["pregunta"]);
                    $('#frmPonderacion1V').val(data[i]["pregunta1"]["ponderacion"]);

                    $('#frmPregunta2V').val(data[i]["pregunta2"]["pregunta"]);
                    $('#frmPonderacion2V').val(data[i]["pregunta2"]["ponderacion"]);

                    $('#frmPregunta3V').val(data[i]["pregunta3"]["pregunta"]);
                    $('#frmPonderacion3V').val(data[i]["pregunta3"]["ponderacion"]);

                    $('#frmPregunta4V').val(data[i]["pregunta4"]["pregunta"]);
                    $('#frmPonderacion4V').val(data[i]["pregunta4"]["ponderacion"]);

                    $('#frmPregunta5V').val(data[i]["pregunta5"]["pregunta"]);
                    $('#frmPonderacion5V').val(data[i]["pregunta5"]["ponderacion"]);

                    $('#nombreExamen').val(data[i]["NombreExamen"]);
                   }
                   setTimeout(function () {
                    $('#FormRegistro').hide();
                    $('#FormVistaED').show();
                }, 1000);
            }else{
            Swal.fire({
                type: 'error',
                title: 'Validacion',
                text: 'Examen no encontrado o Expirado Consulte con su Docente'
            });
            }
        }
    );
});