<?php 
include './AlumnoMenu.php';
?>

<!-- sidebar-wrapper  -->
<main class="page-content">
    <div class="container-fluid">
        <!---inicio Tabla con todos los usuarios -->
        <div id="VerNotasAlumno">
            <h6>Notas</h6>
            <h6>Alumno: <?php echo $_SESSION['nombre'] ?> ID: <?php echo $_SESSION['user'] ?></h6>
            <hr>
            <div class="row">
                <div class="form-group col-md-12">
                    <table id="myTable" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Código Docente</th>
                                <th>Nombre Examen</th>
                                <th>Nota</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Código Docente</th>
                                <th>Nombre Examen</th>
                                <th>Nota</th>
                                <th>Estado</th>
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
<script src="./assets/js/ConsultaNotas.js"></script>

<!---Darle estilos al excel -->
<script src="../js/buttons.html5.styles.min.js"></script>
<script src="../js/buttons.html5.styles.templates.min.js"></script>




</body>

</html>