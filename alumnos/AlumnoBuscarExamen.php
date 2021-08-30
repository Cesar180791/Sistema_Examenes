<?php
include './AlumnoMenu.php';
?>
<!-- sidebar-wrapper  -->
<main class="page-content">
    <div class="container-fluid">
        <!--- Formulario de Busqueda--->
        <div id="FormRegistro">
            <div class="row">
                <div class="form-group col-md-12">
                    <form action="#" method="post" name="token" id="Token" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header" style="background-color: #000000;">
                                <h6 class="text-white"><small><i class="fas fa-chalkboard-teacher"></i></small> Buscar
                                    Examen </h6>
                            </div>
                            <div class="card-body">
                                <label for="lblToken">Ingrese Token Proporcionado por el Docente: </label>
                                <input type="number" name="frmToken" class="form-control" id="frmToken"
                                    placeholder="Numero de Token" required><br>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-outline-primary me-2" name="bucarExamen" type="submit"
                                    id="bucarExamen">Buscar</button>
                                <input type="reset" value="Borrar" class="btn btn-outline-danger" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--- fin Formulario de Busqueda--->

        <!--- inicio Formulario de Examen--->
        <div id="FormVistaED">
            <div class="row">
                <div class="form-group col-md-12">
                    <form action="#" method="post" name="HacerExamen" id="HacerExamen" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header" style="background-color: #000000;">
                                <h6 class="text-white"><small><i class="fas fa-file-alt"></i></small> Contestar Examen
                                </h6>
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
                                                    <div class="col-6" hidden>
                                                            <label>Token:</label>
                                                            <input type="text" class="form-control"
                                                                namme="frmTokenE" id="frmTokenE"
                                                                placeholder="token" required disabled><br>
                                                        </div>
                                                        <div class="col-6" hidden>
                                                            <label>Alumno:</label>
                                                            <input type="text" class="form-control"
                                                                namme="frmAlumnoId" id="frmAlumnoId"
                                                                placeholder="token" value="<?php echo $_SESSION['user'] ?>" required disabled><br>
                                                        </div>
                                                        <div class="col-12">
                                                            <label>Nombre del Examen:</label>
                                                            <input type="text" class="form-control"
                                                                namme="frmNombreExamenV" id="frmNombreExamenV"
                                                                placeholder="Nombre examen" required disabled><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label>Nota Maxima:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmNotaMaximaV" placeholder="Nota Maxima" required
                                                                disabled>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Nota de aprobacion:</label>
                                                            <input type="number" class="form-control"
                                                                id="frmNotaMinimaV" placeholder="Nota de Aprobacion"
                                                                required disabled>
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
                                                                        value="Verdadero" required>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P1V" name="optradio1V"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Ponderacion:</label>
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
                                                                        value="Verdadero" required>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P2V" name="optradio2V"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Ponderacion:</label>
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
                                                                        value="Verdadero" required>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P3V" name="optradio3V"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Ponderacion:</label>
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
                                                                        value="Verdadero" required>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P4V" name="optradio4V"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Ponderacion:</label>
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
                                                                        value="Verdadero" required>Verdadero
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="radio2">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="radio2P5V" name="optradio5V"
                                                                        value="Falso">Falso
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label>Ponderacion:</label>
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
                                <button class="btn btn-outline-primary me-2" name="CrearTest"
                                    id="CrearTest">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--- fin Formulario de Examen--->

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
<script src="../js/sweetAlert2/sweetalert2.all.min.js"></script>
<script src="assets/js/BuscarExamenAlumno.js"></script>
<script src="assets/js/AlumnoEvaluarExamen.js"></script>
<!--
<script src="./assets/js/AdminTablaDocentes.js"></script>
<script src="assets/js/ajaxRegiDocente.js"></script>
-->
</body>

</html>
