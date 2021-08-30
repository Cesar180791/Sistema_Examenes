        $(document).ready(function () {

            ///ocultar formulario de vista de docente
            $('#FormVistaED').hide();
            $('#FormRegistroDE').hide();
            $('#FormEditarED').hide();

            var fecha = new Date();
            var table

            ///funcion para llenar la tabla
            llenarTablaExamenes();

            function llenarTablaExamenes() {
                table = $('#myTable').DataTable({
                    "ajax": {
                        "url": "/projectModul4/admin/inc/consultaExamenes.php",
                        "method": 'POST',
                        "data": $(this).serialize(),
                        "dataSrc": ""
                    },
                    "columns": [{
                            "data": "id"
                        },
                        {
                            "data": "idDocente"
                        },
                        {
                            "data": "NombreExamen"
                        },
                        {
                            "data": "token"
                        },
                        {
                            "defaultContent": "<div class='text-center'><div class='btn-group'><button type='button' class='ver btn btn-outline-info btn-sm'><i class='far fa-eye'></i></button><button class='editar btn btn-outline-info btn-sm'><i class='far fa-edit'></i></button><button class='borrar btn btn-outline-danger btn-sm'><i class='far fa-trash-alt'></i></button></div></div>"
                        }
                    ],

                    dom: 'Bfrtip',
                    lengthMenu: [
                        [10, 25, 50, -1],
                        ['10 rows', '25 rows', '50 rows', 'Show all']
                    ],
                    buttons: [

                        ///boton de longitud de tabla
                        'pageLength',

                        ///boton para ocultar columnas
                        {
                            extend: 'colvis',
                            columnText: function (dt, idx, title) {
                                return (idx + 1) + ': ' + title;
                            }
                        },

                        //Personalizar Botón para Excel
                        {
                            extend: 'excel',
                            footer: true,
                            title: 'Universidad De Oriente',
                            filename: `'Famacia-la-Bendición' ${fecha}`,
                            messageTop: 'La información de esta tabla es propiedad de Universidad De Oriente.',
                            autoFilter: true,
                            sheetName: 'Exported data',
                            excelStyles: {
                                "template": ['blue_gray_medium', 'title_medium']
                            },
                            key: {
                                shiftKey: true,
                                key: '2'
                            },
                            exportOptions: {
                                columns: [':visible']
                            }
                        },
                        {
                            extend: 'csv',
                            exportOptions: {
                                columns: [':visible']
                            }
                        },

                        //personalizar boton pdf
                        {
                            extend: 'pdfHtml5',
                            footer: true,
                            title: 'Universidad De Oriente',
                            filename: `'Famacia-la-Bendición' ${fecha}`,
                            messageTop: 'La información de esta tabla es propiedad de Universidad De Oriente.',
                            key: {
                                shiftKey: true,
                                key: '1'
                            },
                            exportOptions: {
                                columns: [':visible']
                            }
                        },
                        {
                            extend: 'print',
                            footer: true,
                            title: 'Universidad De Oriente',
                            exportOptions: {
                                columns: ':visible'
                            },
                            messageTop: 'La información de esta tabla es propiedad de Universidad De Oriente.',
                            key: {
                                shiftKey: true,
                                key: 'p'
                            },
                            ///personalizar impresion

                            customize: function (win) {
                                $(win.document.body)
                                    .css('font-size', '10pt')
                                    .prepend(
                                        '<img src="https://alumnos.univo.edu.sv/img/logo1.png" style="width: 850px; height: 500px; position:absolute; top:0; left:0; filter:alpha(opacity=20); opacity:.20;" />'
                                    );

                                $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                            }
                        },
                        {
                            text: 'Nuevo Examen',
                            action: function (e, dt, node, config) {
                                $('#FormRegistroDE').show();
                                $('#tablaExamenes').hide();
                                // $(location).attr('href','AdminNuevoDocente.php');
                            }
                        },
                        {
                            extend: 'copyHtml5',
                            exportOptions: {
                                columns: [':visible']
                            }
                        },
                    ],
                    /////para que no se impriman llas columnas ocultas
                    columnDefs: [{
                        //  targets: -1, //comando para que se oculten una columna por defecto
                        visible: false
                    }],
                    //select true es una funcion que permite seleccionar filas
                    // select: true,

                    "language": {
                        "processing": "Procesando...",
                        "lengthMenu": "Mostrar _MENU_ registros",
                        "zeroRecords": "No se encontraron resultados",
                        "emptyTable": "Ningún dato disponible en esta tabla",
                        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "search": "Buscar:",
                        "infoThousands": ",",
                        "loadingRecords": "Cargando...",
                        "paginate": {
                            "first": "Primero",
                            "last": "Último",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        },
                        "aria": {
                            "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
                        "buttons": {
                            "copy": "Copiar",
                            "colvis": "Visibilidad",
                            "collection": "Colección",
                            "colvisRestore": "Restaurar visibilidad",
                            "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                            "copySuccess": {
                                "1": "Copiada 1 fila al portapapeles",
                                "_": "Copiadas %d fila al portapapeles"
                            },
                            "copyTitle": "Copiar al portapapeles",
                            "csv": "CSV",
                            "excel": "Excel",
                            "pageLength": {
                                "-1": "Mostrar todas las filas",
                                "1": "Mostrar 1 fila",
                                "_": "Mostrar %d filas"
                            },
                            "pdf": "PDF",
                            "print": "Imprimir"
                        },
                        "autoFill": {
                            "cancel": "Cancelar",
                            "fill": "Rellene todas las celdas con <i>%d<\/i>",
                            "fillHorizontal": "Rellenar celdas horizontalmente",
                            "fillVertical": "Rellenar celdas verticalmentemente"
                        },
                        "decimal": ",",
                        "searchBuilder": {
                            "add": "Añadir condición",
                            "button": {
                                "0": "Constructor de búsqueda",
                                "_": "Constructor de búsqueda (%d)"
                            },
                            "clearAll": "Borrar todo",
                            "condition": "Condición",
                            "conditions": {
                                "date": {
                                    "after": "Despues",
                                    "before": "Antes",
                                    "between": "Entre",
                                    "empty": "Vacío",
                                    "equals": "Igual a",
                                    "notBetween": "No entre",
                                    "notEmpty": "No Vacio",
                                    "not": "Diferente de"
                                },
                                "number": {
                                    "between": "Entre",
                                    "empty": "Vacio",
                                    "equals": "Igual a",
                                    "gt": "Mayor a",
                                    "gte": "Mayor o igual a",
                                    "lt": "Menor que",
                                    "lte": "Menor o igual que",
                                    "notBetween": "No entre",
                                    "notEmpty": "No vacío",
                                    "not": "Diferente de"
                                },
                                "string": {
                                    "contains": "Contiene",
                                    "empty": "Vacío",
                                    "endsWith": "Termina en",
                                    "equals": "Igual a",
                                    "notEmpty": "No Vacio",
                                    "startsWith": "Empieza con",
                                    "not": "Diferente de"
                                },
                                "array": {
                                    "not": "Diferente de",
                                    "equals": "Igual",
                                    "empty": "Vacío",
                                    "contains": "Contiene",
                                    "notEmpty": "No Vacío",
                                    "without": "Sin"
                                }
                            },
                            "data": "Data",
                            "deleteTitle": "Eliminar regla de filtrado",
                            "leftTitle": "Criterios anulados",
                            "logicAnd": "Y",
                            "logicOr": "O",
                            "rightTitle": "Criterios de sangría",
                            "title": {
                                "0": "Constructor de búsqueda",
                                "_": "Constructor de búsqueda (%d)"
                            },
                            "value": "Valor"
                        },
                        "searchPanes": {
                            "clearMessage": "Borrar todo",
                            "collapse": {
                                "0": "Paneles de búsqueda",
                                "_": "Paneles de búsqueda (%d)"
                            },
                            "count": "{total}",
                            "countFiltered": "{shown} ({total})",
                            "emptyPanes": "Sin paneles de búsqueda",
                            "loadMessage": "Cargando paneles de búsqueda",
                            "title": "Filtros Activos - %d"
                        },
                        "select": {
                            "1": "%d fila seleccionada",
                            "_": "%d filas seleccionadas",
                            "cells": {
                                "1": "1 celda seleccionada",
                                "_": "$d celdas seleccionadas"
                            },
                            "columns": {
                                "1": "1 columna seleccionada",
                                "_": "%d columnas seleccionadas"
                            }
                        },
                        "thousands": ".",
                        "datetime": {
                            "previous": "Anterior",
                            "next": "Proximo",
                            "hours": "Horas",
                            "minutes": "Minutos",
                            "seconds": "Segundos",
                            "unknown": "-",
                            "amPm": [
                                "am",
                                "pm"
                            ]
                        },
                        "editor": {
                            "close": "Cerrar",
                            "create": {
                                "button": "Nuevo",
                                "title": "Crear Nuevo Registro",
                                "submit": "Crear"
                            },
                            "edit": {
                                "button": "Editar",
                                "title": "Editar Registro",
                                "submit": "Actualizar"
                            },
                            "remove": {
                                "button": "Eliminar",
                                "title": "Eliminar Registro",
                                "submit": "Eliminar",
                                "confirm": {
                                    "_": "¿Está seguro que desea eliminar %d filas?",
                                    "1": "¿Está seguro que desea eliminar 1 fila?"
                                }
                            },
                            "error": {
                                "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                            },
                            "multi": {
                                "title": "Múltiples Valores",
                                "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                                "restore": "Deshacer Cambios",
                                "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                            }
                        },
                        "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"

                    }
                });
            }

            ///inicio funcion para Ver datos de docente
            var Ver = function (tbody, table) {
                $(tbody).on("click", "button.ver", function () {

                    ///mostrar formulario de vista de docente
                    $('#FormVistaED').show();
                    ///ocultar tabla de vista  docentes
                    $('#tablaExamenes').hide();

                    var data = table.row($(this).parents("tr")).data();

                    id = $("#frmCodigoExamenV").val(data.id),
                    nombreExamen = $("#frmNombreExamenV").val(data.NombreExamen),
                    notaMaxima = $("#frmNotaMaximaV").val(data.NotaMax),
                    notaAprobacion = $("#frmNotaMinimaV").val(data.NotaAprobacion),
                    disponibilidad = $("#frmDisponibilidadV").val(data.disponibilidad),

                    pregunta1 = $("#frmPregunta1V").val(data.pregunta1.pregunta);
                    if(data.pregunta1.respuesta == "Verdadero"){
                        respuesta = $('#radio1P1V').attr('checked', true);
                    }else{
                        respuesta = $('#radio2P1V').attr('checked', true);
                    }
                    ponderacion = $('#frmPonderacion1V').val(data.pregunta1.ponderacion),


                    pregunta2 = $("#frmPregunta2V").val(data.pregunta2.pregunta);
                    if(data.pregunta2.respuesta == "Verdadero"){
                        respuesta = $('#radio1P2V').attr('checked', true);
                    }else{
                        respuesta = $('#radio2P2V').attr('checked', true);
                    }
                    ponderacion = $('#frmPonderacion2V').val(data.pregunta2.ponderacion),

                    pregunta3 = $("#frmPregunta3V").val(data.pregunta3.pregunta);
                    if(data.pregunta3.respuesta == "Verdadero"){
                        respuesta = $('#radio1P3V').attr('checked', true);
                    }else{
                        respuesta = $('#radio2P3V').attr('checked', true);
                    }
                    ponderacion = $('#frmPonderacion3V').val(data.pregunta3.ponderacion),

                    pregunta4 = $("#frmPregunta4V").val(data.pregunta4.pregunta);
                    if(data.pregunta4.respuesta == "Verdadero"){
                        respuesta = $('#radio1P4V').attr('checked', true);
                    }else{
                        respuesta = $('#radio2P4V').attr('checked', true);
                    }
                    ponderacion = $('#frmPonderacion4V').val(data.pregunta4.ponderacion),

                    pregunta5 = $("#frmPregunta5V").val(data.pregunta5.pregunta);
                    if(data.pregunta5.respuesta == "Verdadero"){
                        respuesta = $('#radio1P5V').attr('checked', true);
                    }else{
                        respuesta = $('#radio2P5V').attr('checked', true);
                    }
                    ponderacion = $('#frmPonderacion5V').val(data.pregunta5.ponderacion),

                    console.log(data);
                });
            }
            Ver("#myTable tbody", table);
            ///fin funcion para Ver datos de docente

            ///inicio funcion para Ver datos de docente
            var CargarDatos = function (tbody, table) {

                $(tbody).on("click", "button.editar", function () {

                     ///mostrar formulario de vista de docente
                     $('#FormEditarED').show();
                     ///ocultar tabla de vista  docentes
                     $('#tablaExamenes').hide();

                     var data = table.row($(this).parents("tr")).data();
                     id = $("#frmCodigoExamenE").val(data.id),
                     nombreExamen = $("#frmNombreExamenE").val(data.NombreExamen),
                     notaMaxima = $("#frmNotaMaximaE").val(data.NotaMax),
                     notaAprobacion = $("#frmNotaMinimaE").val(data.NotaAprobacion),
                     disponibilidad = $("#frmDisponibilidadE").val(data.disponibilidad),

                     pregunta1 = $("#frmPregunta1E").val(data.pregunta1.pregunta);
                     if(data.pregunta1.respuesta == "Verdadero"){
                         respuesta = $('#radio1P1E').attr('checked', true);
                     }else{
                         respuesta = $('#radio2P1E').attr('checked', true);
                     }
                     ponderacion = $('#frmPonderacion1E').val(data.pregunta1.ponderacion),


                     pregunta2 = $("#frmPregunta2E").val(data.pregunta2.pregunta);
                     if(data.pregunta2.respuesta == "Verdadero"){
                         respuesta = $('#radio1P2E').attr('checked', true);
                     }else{
                         respuesta = $('#radio2P2E').attr('checked', true);
                     }
                     ponderacion = $('#frmPonderacion2E').val(data.pregunta2.ponderacion),

                     pregunta3 = $("#frmPregunta3E").val(data.pregunta3.pregunta);
                     if(data.pregunta3.respuesta == "Verdadero"){
                         respuesta = $('#radio1P3E').attr('checked', true);
                     }else{
                         respuesta = $('#radio2P3E').attr('checked', true);
                     }
                     ponderacion = $('#frmPonderacion3E').val(data.pregunta3.ponderacion),

                     pregunta4 = $("#frmPregunta4E").val(data.pregunta4.pregunta);
                     if(data.pregunta4.respuesta == "Verdadero"){
                         respuesta = $('#radio1P4E').attr('checked', true);
                     }else{
                         respuesta = $('#radio2P4E').attr('checked', true);
                     }
                     ponderacion = $('#frmPonderacion4E').val(data.pregunta4.ponderacion),

                     pregunta5 = $("#frmPregunta5E").val(data.pregunta5.pregunta);
                     if(data.pregunta5.respuesta == "Verdadero"){
                         respuesta = $('#radio1P5E').attr('checked', true);
                     }else{
                         respuesta = $('#radio2P5E').attr('checked', true);
                     }
                     ponderacion = $('#frmPonderacion5E').val(data.pregunta5.ponderacion),

                     console.log(data);


                });
            }
            CargarDatos("#myTable tbody", table);
            ///fin funcion para Ver datos de docente


            var $editar = $('#editarExamen');

            $editar.on('submit', function(ev){
                ev.preventDefault();
                $.ajax({
                    url: '/projectModul4/admin/inc/EditarExamen.php',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        id: $('#frmCodigoExamenE').val(),
                        nombreExamen: $('#frmNombreExamenE').val(),
                        notaMaxima: $('#frmNotaMaximaE').val(),
                        notaAprobacion: $('#frmNotaMinimaE').val(),
                        disponibilidad: $("#frmDisponibilidadE").val(),

                        pregunta1: $('#frmPregunta1E').val(),
                        respuesta1: $('input:radio[name=optradio1E]:checked').val(),
                        ponderacion1: $('#frmPonderacion1E').val(),

                        pregunta2: $('#frmPregunta2E').val(),
                        respuesta2: $('input:radio[name=optradio2E]:checked').val(),
                        ponderacion2: $('#frmPonderacion2E').val(),

                        pregunta3: $('#frmPregunta3E').val(),
                        respuesta3: $('input:radio[name=optradio3E]:checked').val(),
                        ponderacion3: $('#frmPonderacion3E').val(),

                        pregunta4: $('#frmPregunta4E').val(),
                        respuesta4: $('input:radio[name=optradio4E]:checked').val(),
                        ponderacion4: $('#frmPonderacion4E').val(),

                        pregunta5: $('#frmPregunta5E').val(),
                        respuesta5: $('input:radio[name=optradio5E]:checked').val(),
                        ponderacion5: $('#frmPonderacion5E').val(),
                    }
                }).done(
                    function(data){
                        if(data != "La sumatoria de los puntos asignados a cada pregunta es menor a la nota maxima" &&
                        data!="La sumatoria de los puntos asignados a cada pregunta es mayor a la nota maxima"){
                            Swal.fire({
                                type: 'success',
                                title: 'Validacion',
                                text: 'Examen editado exitosamente',
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

            ///inicio funcion para elimiar docente
            var Eliminar = function (tbody, table) {

                $(tbody).on("click", "button.borrar", function () {

                    var idExamen = table.row($(this).parents("tr")).data();
                    console.log(idExamen.id);


                    $.ajax({
                        url: '/projectModul4/docentes/inc/EliminarExamen.php',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            id: idExamen.id
                        }
                    }).done(
                        function (data) {
                            console.log(data);
                            Swal.fire({
                                type: 'success',
                                title: 'Hecho',
                                text: 'Examen Eliminado exitosamente',
                            });
                            setTimeout(function() {
                                window.location.href = "././AdminVerExamenesDocente.php";
                              }, 1500);
                        }
                    );
                });
            }
            Eliminar("#myTable tbody", table);
            ///fin funcion para elimiar docente



            ///ocultar formulario de vista
            $('#backTabla').click(function () {
                $(location).attr('href', 'DocenteVerExamenes.php');

            });

              ///ocultar formulario de vista
              $('#backTabla2').click(function () {
                $(location).attr('href', 'AdminVerExamenesDocente.php');

            });

            ///ocultar formulario de edicion
            $('#backTabla3').click(function () {
                $(location).attr('href', 'DocenteVerExamenes.php');
            });

        });
