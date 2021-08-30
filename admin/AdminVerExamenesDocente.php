<?php
include './AdminMenu.php';

$contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/docentes.json");
$datas = json_decode($contenido, true);


?>
<!-- sidebar-wrapper  -->
<main class="page-content">
    <div class="container-fluid">
        <!--- Formulario de Registro--->
        <div id="FormRegistroDE">
            <div class="row">
                <div class="form-group col-md-12">
                    <form action="#" method="post" name="crearExamen" id="crearExamenD" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header" style="background-color: #000000;">
                                <h6 class="text-white"><small><i class="fas fa-file-alt"></i></small> Nuevo Test</h6>
                            </div>
                            <div class="card-body">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                                Cabecera del Examen
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="sel1">Seleccione Docente:</label>
                                                            <select class="form-control" id="selectDocente" name="selectDocente">
                                                                <?php foreach($datas as $docente){ ?>
                                                                    <option value="<?php echo $docente['id']?>">ID: <?php echo $docente["id"]; ?> -> <?php echo $docente["nombre"]; ?> <?php echo $docente["apellido"]; ?></option>
                                                               <?php } ?>
                                                            </select>
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Nombre del Examen:</label>
                                                            <input type="text" class="form-control" id="frmNombreExamen" placeholder="Nombre examen" pattern="[A-Z a-z]+" required><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label>Nota Maxima:</label>
                                                            <input type="number" class="form-control" id="frmNotaMaxima"
                                                                placeholder="Nota Maxima" required>
                                                        </div>
                                                        <div class="col-4">
                                                            <label>Nota de aprobacion:</label>
                                                            <input type="number" class="form-control" id="frmNotaMinima"
                                                                placeholder="Nota de Aprobacion" required>
                                                        </div>
                                                        <div class="col-4">
                                                            <label>Disponibilidad:</label>
                                                            <input type="date" class="form-control" id="frmDisponibilidad" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                                Pregunta Numero 1
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 1:</label>
                                                            <textarea class="form-control" id="frmPregunta1"
                                                            placeholder="Ingrese Pregunta" required></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P1" name="optradio1" value="Verdadero"
                                                                        checked>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P1" name="optradio1"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion1" placeholder="Ingrese Ponderacion"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapsetres">
                                                Pregunta Numero 2
                                            </a>
                                        </div>
                                        <div id="collapsetres" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 2:</label>
                                                            <textarea class="form-control" id="frmPregunta2"
                                                            placeholder="Ingrese Pregunta" required></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P2" name="optradio2" value="Verdadero"
                                                                        checked>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P2" name="optradio2"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion2" placeholder="Ingrese Ponderacion"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse"
                                                href="#collapsecuatro">
                                                Pregunta Numero 3
                                            </a>
                                        </div>
                                        <div id="collapsecuatro" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 3:</label>
                                                              <textarea class="form-control" id="frmPregunta3"
                                                                placeholder="Ingrese Pregunta" required></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P3" name="optradio3" value="Verdadero"
                                                                        checked>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P3" name="optradio3"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion3" placeholder="Ingrese Ponderacion"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapsecinco">
                                                Pregunta Numero 4
                                            </a>
                                        </div>
                                        <div id="collapsecinco" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 4:</label>
                                                            <textarea class="form-control" id="frmPregunta4"
                                                            placeholder="Ingrese Pregunta" required></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P4" name="optradio4" value="Verdadero"
                                                                        checked>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P4" name="optradio4"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion4" placeholder="Ingrese Ponderacion"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseseis">
                                                Pregunta Numero 5
                                            </a>
                                        </div>
                                        <div id="collapseseis" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 5:</label>
                                                            <textarea class="form-control" id="frmPregunta5"
                                                            placeholder="Ingrese Pregunta" required></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P5" name="optradio5" value="Verdadero"
                                                                        checked>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P5" name="optradio5"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion5" placeholder="Ingrese Ponderacion"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-outline-primary me-2" name="CrearTest" id="CrearTest">Crear
                                    Test</button>
                                <input type="reset" value="Borrar" class="btn btn-outline-danger" />
                                <button id="backTabla2" class="btn btn-outline-primary"><i
                                        class="fas fa-undo-alt"></i></button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
        <!--- fin Formulario de Registro--->



        <!--- inicio Formulario de Vista--->
        <div id="FormVistaED">
            <h6>Examen</h6>
            <hr>
            <div class="row">
                <div class="form-group col-md-10">
                    <form action="#" method="post" name="verExamen" id="verExamen" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header" style="background-color: #000000;">
                                <h6 class="text-white"><small><i class="fas fa-file-alt"></i></small> ver Test</h6>
                            </div>
                            <div class="card-body">
                                <div id="accordion2">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseOneV">
                                                Cabecera del Examen
                                            </a>
                                        </div>
                                        <div id="collapseOneV" class="collapse show" data-parent="#accordion2">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Codigo:</label>
                                                            <input type="text" class="form-control"
                                                                id="frmCodigoExamenV" placeholder="CodigoExamen"
                                                                required disabled><br>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Nombre del Examen:</label>
                                                            <input type="text" class="form-control"
                                                                id="frmNombreExamenV" placeholder="Nombre examen"
                                                                required disabled><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label>Nota Maxima:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmNotaMaximaV" placeholder="Nota Maxima" required
                                                                disabled>
                                                        </div>
                                                        <div class="col-4">
                                                            <label>Nota de aprobacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmNotaMinimaV" placeholder="Nota de Aprobacion"
                                                                required disabled>
                                                        </div>
                                                        <div class="col-4">
                                                            <label>Disponibilidad:</label>
                                                            <input type="date" class="form-control" id="frmDisponibilidadV" required disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwoV">
                                                Pregunta Numero 1
                                            </a>
                                        </div>
                                        <div id="collapseTwoV" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 1:</label>
                                                            <textarea class="form-control" id="frmPregunta1V"
                                                            placeholder="Ingrese Pregunta" required disabled></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P1V" name="optradio1V"
                                                                        value="Verdadero" disabled>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P1V" name="optradio1V" value="Falso"
                                                                        disabled>Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion1V" placeholder="Ingrese Ponderacion"
                                                                required disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapsetresV">
                                                Pregunta Numero 2
                                            </a>
                                        </div>
                                        <div id="collapsetresV" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 2:</label>
                                                            <textarea class="form-control" id="frmPregunta2V"
                                                            placeholder="Ingrese Pregunta" required disabled></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P2V" name="optradio2V"
                                                                        value="Verdadero" disabled>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P2V" name="optradio2V" value="Falso"
                                                                        disabled>Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion2V" placeholder="Ingrese Ponderacion"
                                                                required disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse"
                                                href="#collapsecuatroV">
                                                Pregunta Numero 3
                                            </a>
                                        </div>
                                        <div id="collapsecuatroV" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 3:</label>
                                                            <textarea class="form-control" id="frmPregunta3V"
                                                            placeholder="Ingrese Pregunta" required disabled></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P3V" name="optradio3V"
                                                                        value="Verdadero" disabled>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P3V" name="optradio3V" value="Falso"
                                                                        disabled>Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion3V" placeholder="Ingrese Ponderacion"
                                                                required disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse"
                                                href="#collapsecincoV">
                                                Pregunta Numero 4
                                            </a>
                                        </div>
                                        <div id="collapsecincoV" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 4:</label>
                                                            <textarea class="form-control" id="frmPregunta4V"
                                                              placeholder="Ingrese Pregunta" required disabled></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P4V" name="optradio4V"
                                                                        value="Verdadero" disabled>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P4V" name="optradio4V" value="Falso"
                                                                        disabled>Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion4V" placeholder="Ingrese Ponderacion"
                                                                required disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseseisV">
                                                Pregunta Numero 5
                                            </a>
                                        </div>
                                        <div id="collapseseisV" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 5:</label>
                                                            <textarea class="form-control" id="frmPregunta5V"
                                                              placeholder="Ingrese Pregunta" required disabled></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P5V" name="optradio5V"
                                                                        value="Verdadero" disabled>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P5V" name="optradio5V" value="Falso"
                                                                        disabled>Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion5V" placeholder="Ingrese Ponderacion"
                                                                required disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button id="backTabla2V" class="btn btn-outline-primary"><i
                                        class="fas fa-undo-alt"></i></button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
        <!--- fin Formulario de Vista--->


        <!--- inicio Formulario de edicio--->
        <div id="FormEditarED">
            <div class="row">
                <div class="form-group col-md-12">
                    <form action="#" method="post" name="editarExamen" id="editarExamen" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header" style="background-color: #000000;">
                                <h6 class="text-white"><small><i class="fas fa-file-alt"></i></small> Editar Test</h6>
                            </div>
                            <div class="card-body">
                                <div id="accordion3">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseOneE">
                                                Cabecera del Examen
                                            </a>
                                        </div>
                                        <div id="collapseOneE" class="collapse show" data-parent="#accordion3">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Codigo:</label>
                                                            <input type="text" class="form-control"
                                                                id="frmCodigoExamenE" placeholder="CodigoExamen"
                                                                required disabled><br>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Nombre del Examen:</label>
                                                            <input type="text" class="form-control"
                                                                id="frmNombreExamenE" placeholder="Nombre examen" pattern="[A-Z a-z]+"
                                                                required><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label>Nota Maxima:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmNotaMaximaE" placeholder="Nota Maxima" required>
                                                        </div>
                                                        <div class="col-4">
                                                            <label>Nota de aprobacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmNotaMinimaE" placeholder="Nota de Aprobacion"
                                                                required>
                                                        </div>
                                                        <div class="col-4">
                                                            <label>Disponibilidad:</label>
                                                            <input type="date" class="form-control" id="frmDisponibilidadE" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwoE">
                                                Pregunta Numero 1
                                            </a>
                                        </div>
                                        <div id="collapseTwoE" class="collapse" data-parent="#accordion3">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 1:</label>
                                                            <textarea class="form-control" id="frmPregunta1E"
                                                                placeholder="Ingrese Pregunta" required></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P1E" name="optradio1E"
                                                                        value="Verdadero">Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P1E" name="optradio1E"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion1E" placeholder="Ingrese Ponderacion"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapsetresE">
                                                Pregunta Numero 2
                                            </a>
                                        </div>
                                        <div id="collapsetresE" class="collapse" data-parent="#accordion3">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 2:</label>
                                                            <textarea class="form-control" id="frmPregunta2E"
                                                              placeholder="Ingrese Pregunta" required></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P2E" name="optradio2E"
                                                                        value="Verdadero">Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P2E" name="optradio2E"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion2E" placeholder="Ingrese Ponderacion"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse"
                                                href="#collapsecuatroE">
                                                Pregunta Numero 3
                                            </a>
                                        </div>
                                        <div id="collapsecuatroE" class="collapse" data-parent="#accordion3">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 3:</label>
                                                            <textarea class="form-control" id="frmPregunta3E"
                                                                placeholder="Ingrese Pregunta" required></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P3E" name="optradio3E"
                                                                        value="Verdadero">Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P3E" name="optradio3E"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion3E" placeholder="Ingrese Ponderacion"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse"
                                                href="#collapsecincoE">
                                                Pregunta Numero 4
                                            </a>
                                        </div>
                                        <div id="collapsecincoE" class="collapse" data-parent="#accordion3">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 4:</label>
                                                            <textarea class="form-control" id="frmPregunta4E"
                                                              placeholder="Ingrese Pregunta" required></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P4E" name="optradio4E"
                                                                        value="Verdadero">Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P4E" name="optradio4E"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion4E" placeholder="Ingrese Ponderacion"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseseisE">
                                                Pregunta Numero 5
                                            </a>
                                        </div>
                                        <div id="collapseseisE" class="collapse" data-parent="#accordion3">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label>Pregunta Numero 5:</label>
                                                            <textarea class="form-control" id="frmPregunta5E"
                                                                placeholder="Ingrese Pregunta" required></textarea><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Seleccione Respuesta correcta:</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio1">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio1P5E" name="optradio5E"
                                                                        value="Verdadero">Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P5E" name="optradio5E"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Asigne Ponderacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmPonderacion5E" placeholder="Ingrese Ponderacion"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <input value="Editar" type="submit" \ class="btn btn-outline-primary me-2" name="Editar"
                                    id="Editar"></input>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
        <!--- fin Formulario de edicion--->

        <!---inicio Tabla con todos los usuarios -->
        <div id="tablaExamenes">
            <h6>Examenes</h6>
            <hr>
            <div class="row">
                <div class="form-group col-md-12">
                    <table id="myTable" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Código Examen</th>
                                <th>Código Docente</th>
                                <th>Nombre Examen</th>
                                <th>Token</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>
                                <button class="btn btn-outline-info btn-sm"><i class="far fa-eye"></i></button>
                                <button class="btn btn-outline-info btn-sm"><i class="far fa-edit"></i></button>
                                <button class="btn btn-outline-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr> -->
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Código Examen</th>
                                <th>Código Docente</th>
                                <th>Nombre Examen</th>
                                <th>Token</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
        <!---fin Tabla con todos los usuarios -->
        <hr>
        <footer class="text-center">
            <div class="mb-2">
                <small>
                    © 2021 <i class="fa fa-heart" style="color:red"></i> by - <a rel="noopener noreferrer" href="#">
                        Pre-especializacion web
                    </a>
                </small>
            </div>
            <div>
                <a href="#">
                    <img alt="GitHub followers"
                        src="https://img.shields.io/github/followers/azouaoui-med?label=github&style=social" />
                </a>
            </div>
        </footer>
    </div>

</main>
<!-- page-content" -->
</div>
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/b-html5-1.7.1/b-print-1.7.1/cr-1.5.4/date-1.1.0/fc-3.3.3/fh-3.1.9/kt-2.6.2/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.css" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/b-html5-1.7.1/b-print-1.7.1/cr-1.5.4/date-1.1.0/fc-3.3.3/fh-3.1.9/kt-2.6.2/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.js">
</script>
<script src="../js/sweetAlert2/sweetalert2.all.min.js"></script>
<script src="/projectModul4/admin/assets/js/ajaxRegiExamenes.js"></script>
<script src="/projectModul4/admin/assets/js/AdminTablaExamenesAdmin.js"></script>


<!---Darle estilos al excel -->
<script src="../js/buttons.html5.styles.min.js"></script>
<script src="../js/buttons.html5.styles.templates.min.js"></script>
</body>

</html>
