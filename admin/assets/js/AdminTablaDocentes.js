        $(document).ready(function () {

            ///ocultar formulario de vista de docente
            $('#FormVista').hide();
            $('#FormRegistro').hide();
            $('#FormEditar').hide();

            var fecha = new Date();
            var table

            ///funcion para llenar la tabla
            llenarTablaDocente();

            function llenarTablaDocente() {
                table = $('#myTable').DataTable({
                    "ajax": {
                        "url": "/projectModul4/admin/inc/consultaDocente.php",
                        "method": 'POST',
                        "dataSrc": ""
                    },
                    "columns": [{
                            "data": "id"
                        },
                        {
                            "data": "nombre"
                        },
                        {
                            "data": "apellido"
                        },
                        {
                            "data": "email"
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

                        //Personalizar Bot??n para Excel
                        {
                            extend: 'excel',
                            footer: true,
                            title: 'Universidad De Oriente ',
                            filename: `'Universidad De Oriente' ${fecha}`,
                            messageTop: 'La informaci??n de esta tabla es propiedad de Universidad De Oriente .',
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
                            title: 'Universidad De Oriente ',
                            filename: `'Universidad De Oriente' ${fecha}`,
                            messageTop: 'La informaci??n de esta tabla es propiedad de Universidad De Oriente .',
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
                            title: 'Universidad De Oriente ',
                            exportOptions: {
                                columns: ':visible'
                            },
                            messageTop: 'La informaci??n de esta tabla es propiedad de Universidad De Oriente .',
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
                            text: 'Nuevo Docente',
                            action: function (e, dt, node, config) {
                                $('#FormRegistro').show();
                                $('#tablaDocentes').hide();
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
                        "emptyTable": "Ning??n dato disponible en esta tabla",
                        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "search": "Buscar:",
                        "infoThousands": ",",
                        "loadingRecords": "Cargando...",
                        "paginate": {
                            "first": "Primero",
                            "last": "??ltimo",
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
                            "collection": "Colecci??n",
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
                            "add": "A??adir condici??n",
                            "button": {
                                "0": "Constructor de b??squeda",
                                "_": "Constructor de b??squeda (%d)"
                            },
                            "clearAll": "Borrar todo",
                            "condition": "Condici??n",
                            "conditions": {
                                "date": {
                                    "after": "Despues",
                                    "before": "Antes",
                                    "between": "Entre",
                                    "empty": "Vac??o",
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
                                    "notEmpty": "No vac??o",
                                    "not": "Diferente de"
                                },
                                "string": {
                                    "contains": "Contiene",
                                    "empty": "Vac??o",
                                    "endsWith": "Termina en",
                                    "equals": "Igual a",
                                    "notEmpty": "No Vacio",
                                    "startsWith": "Empieza con",
                                    "not": "Diferente de"
                                },
                                "array": {
                                    "not": "Diferente de",
                                    "equals": "Igual",
                                    "empty": "Vac??o",
                                    "contains": "Contiene",
                                    "notEmpty": "No Vac??o",
                                    "without": "Sin"
                                }
                            },
                            "data": "Data",
                            "deleteTitle": "Eliminar regla de filtrado",
                            "leftTitle": "Criterios anulados",
                            "logicAnd": "Y",
                            "logicOr": "O",
                            "rightTitle": "Criterios de sangr??a",
                            "title": {
                                "0": "Constructor de b??squeda",
                                "_": "Constructor de b??squeda (%d)"
                            },
                            "value": "Valor"
                        },
                        "searchPanes": {
                            "clearMessage": "Borrar todo",
                            "collapse": {
                                "0": "Paneles de b??squeda",
                                "_": "Paneles de b??squeda (%d)"
                            },
                            "count": "{total}",
                            "countFiltered": "{shown} ({total})",
                            "emptyPanes": "Sin paneles de b??squeda",
                            "loadMessage": "Cargando paneles de b??squeda",
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
                                    "_": "??Est?? seguro que desea eliminar %d filas?",
                                    "1": "??Est?? seguro que desea eliminar 1 fila?"
                                }
                            },
                            "error": {
                                "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">M??s informaci??n&lt;\\\/a&gt;).<\/a>"
                            },
                            "multi": {
                                "title": "M??ltiples Valores",
                                "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aqu??, de lo contrario conservar??n sus valores individuales.",
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
                    $('#FormVista').show();
                    ///ocultar tabla de vista  docentes
                    $('#tablaDocentes').hide();

                    var data = table.row($(this).parents("tr")).data();
                    id = $("#frmIdV").val(data.id),
                        nombre = $("#frmNombreV").val(data.nombre),
                        apellido = $("#frmApellidoV").val(data.apellido),
                        direccion = $("#frmDireccionV").val(data.direccion),
                        correo = $("#frmCorreoV").val(data.email),
                        edad = $("#frmEdadV").val(data.edad),
                        console.log(data);
                });
            }
            Ver("#myTable tbody", table);
            ///fin funcion para Ver datos de docente

            ///inicio funcion para Ver datos de docente
            var CargarDatos = function (tbody, table) {

                $(tbody).on("click", "button.editar", function () {

                    ///mostrar formulario de vista de docente
                    $('#FormEditar').show();
                    ///ocultar tabla de vista  docentes
                    $('#tablaDocentes').hide();

                    var data = table.row($(this).parents("tr")).data();
                    id = $("#frmIdE").val(data.id),
                        nombre = $("#frmNombreE").val(data.nombre),
                        apellido = $("#frmApellidoE").val(data.apellido),
                        direccion = $("#frmDireccionE").val(data.direccion),
                        correo = $("#frmCorreoE").val(data.email),
                        edad = $("#frmEdadE").val(data.edad)
                });
            }
            CargarDatos("#myTable tbody", table);
            ///fin funcion para Ver datos de docente


            $('#editar').click(Editar);

            function Editar() {
                $.ajax({
                    url: '/projectModul4/admin/inc/EditarDocente.php',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        id: $('#frmIdE').val(),
                        nombreDocenteE: $('#frmNombreE').val(),
                        apellidoDocenteE: $('#frmApellidoE').val(),
                        direccionDocenteE: $('#frmDireccionE').val(),
                        edadDocenteE: $('#frmEdadE').val(),
                        emailE: $('#frmCorreoE').val()
                    }
                }).done(
                    function (data) {
                        console.log(data);
                        Swal.fire({
                            type: 'success',
                            title: 'Validacion',
                            text: 'Docente editado exitosamente',

                        });
                        setTimeout(function () {
                            window.location.href = "././AdminVerDocentes.php";
                        }, 2000);
                        //console.log(data);
                    }
                );
            }

            ///inicio funcion para elimiar docente
            var Eliminar = function (tbody, table) {

                $(tbody).on("click", "button.borrar", function () {
                    console.log("click");

                    var idDocente = table.row($(this).parents("tr")).data();
                    // console.log(idDocente.id);
                    $.ajax({
                        url: '/projectModul4/admin/inc/EliminarDocente.php',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            id: idDocente.id
                        }
                    }).done(
                        function (data) {
                            console.log(data);
                            Swal.fire({
                                type: 'success',
                                title: 'Hecho',
                                text: 'Docente Eliminado exitosamente',
                            });
                            setTimeout(function () {
                                window.location.href = "././AdminVerDocentes.php";
                            }, 1500);
                        }
                    );
                });

            }
            Eliminar("#myTable tbody", table);
            ///fin funcion para elimiar docente



            ///ocultar formulario de vista
            $('#backTabla').click(function () {
                $(location).attr('href', 'AdminVerDocentes.php');

            });

            ///ocultar formulario de crear
            $('#backTabla2').click(function () {
                $(location).attr('href', 'AdminVerDocentes.php');
            });

            ///ocultar formulario de edicion
            $('#backTabla3').click(function () {
                $(location).attr('href', 'AdminVerDocentes.php');
            });

        });
