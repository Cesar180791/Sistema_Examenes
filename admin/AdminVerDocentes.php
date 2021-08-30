<?php
include './AdminMenu.php';
?>

<!-- sidebar-wrapper  -->
<main class="page-content">
    <div class="container-fluid">

<!--- Formulario de Registro--->
    <div id="FormRegistro">
    <h6>Registrar Docente</h6>
    <hr>
    <div class="row">
      <div class="form-group col-md-9">
        <form action="#" method="post" name="datos1" id="datos1" enctype="multipart/form-data">
          <div class="card">
            <div class="card-header" style="background-color: #000000;">
              <h6 class="text-white"><small><i class="fas fa-chalkboard-teacher"></i></small> Datos del Docente</h6>
            </div>
            <div class="card-body">
              <label for="frmNombre">Nombre: </label>
              <input type="text" name="frmNombre" class="form-control" id="frmNombre" placeholder="Nombres del docente" pattern="[A-Z a-z]+" value=""
                required><br>

              <label for="frmApellido">Apellido: </label>
              <input type="text" name="frmApellido" class="form-control" id="frmApellido" value=""
                placeholder="Apellidos del docente" required><br>

              <label for="frmDireccion">Direccion: </label>
              <input type="text" name="frmDireccion" class="form-control" id="frmDireccion" value=""
                placeholder="Direccion del docente" required/><br>

                <label for="frmCorreo">Correo: </label>
              <input type="email" name="frmCorreo" class="form-control" id="frmCorreo" value=""
                placeholder="Direccion de correo electronico" required/><br>

              <label for="frmEdad">Edad: </label>
              <input type="number" class="form-control" name="frmEdad" id="frmEdad" min="18" max="70" value=""
                placeholder="Edad del docente" required/>

            </div>
            <div class="card-footer text-center">
              <button class="btn btn-outline-primary me-2" name="registrar" id="registrar">Registrar</button>
              <input type="reset" value="Borrar" class="btn btn-outline-danger" />
              <button id="backTabla2" class="btn btn-outline-primary"><i class="fas fa-undo-alt"></i></button>
            </div>
          </div>
        </form>

      </div>

    </div>
    </div>
    <!--- fin Formulario de Registro--->

    <!--- inicio Formulario de Vista--->
    <div id="FormVista">
        <h6>Ver Docente</h6>
        <hr>
        <div class="row">
            <div class="form-group col-md-9">
                <form action="#" method="post" name="datos" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header" style="background-color: #000000;">
                        <h6 class="text-white"><small><i class="fas fa-chalkboard-teacher"></i></small> Datos del Docente</h6>

                        </div>
                        <div class="card-body">
                            <label for="frmIdV">ID: </label>
                            <input type="text" name="frmIdV" class="form-control" id="frmIdV"
                                placeholder="ID del docente" required pattern="[A-Za-z]+" disabled><br>

                            <label for="frmNombreV">Nombre: </label>
                            <input type="text" name="frmNombreV" class="form-control" id="frmNombreV"
                                placeholder="Nombres del docente" required pattern="[A-Za-z]+" disabled><br>

                            <label for="frmApellidoV">Apellido: </label>
                            <input type="text" name="frmApellidoV" class="form-control"
                                id="frmApellidoV" placeholder="Apellidos del docente" required pattern="[A-Za-z]+" disabled><br>

                            <label for="frmDireccionV">Direccion: </label>
                            <input type="text" name="frmDireccionV" class="form-control" id="frmDireccionV"
                                placeholder="Direccion del docente" required pattern="[A-Za-z0-9]+" disabled><br>

                            <label for="frmCorreoV">Correo: </label>
                            <input type="email" name="frmCorreoV" class="form-control"
                                id="frmCorreoV" placeholder="Direccion de correo electronico" required disabled><br>

                            <label for="frmEdadV">Edad: </label>
                            <input type="number" class="form-control" name="frmEdadV" id="frmEdadV" min="18"
                                max="70" placeholder="Edad del docente" required disabled>

                        </div>
                        <div class="card-footer text-center">
                        <button id="backTabla" value="Cerrar" class="btn btn-outline-primary"><i class="fas fa-undo-alt"></i></button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>
    <!--- fin Formulario de Vista--->


        <!--- inicio Formulario de edicio--->
        <div id="FormEditar">
        <h6>Ver Docente</h6>
        <hr>
        <div class="row">
            <div class="form-group col-md-9">
                <form action="#" method="post" name="datos" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header" style="background-color: #000000;">
                        <h6 class="text-white"><small><i class="fas fa-chalkboard-teacher"></i></small> Datos del Docente</h6>

                        </div>
                        <div class="card-body">
                            <label for="frmIdE">ID: </label>
                            <input type="text" name="frmIdE" class="form-control" id="frmIdE"
                                placeholder="ID del docente" required pattern="[A-Za-z]+" disabled><br>

                            <label for="frmNombreE">Nombre: </label>
                            <input type="text" name="frmNombreE" class="form-control" id="frmNombreE"
                                placeholder="Nombres del docente" required pattern="[A-Za-z]+"><br>

                            <label for="frmApellidoE">Apellido: </label>
                            <input type="text" name="frmApellidoE" class="form-control"
                                id="frmApellidoE" placeholder="Apellidos del docente" required pattern="[A-Za-z]+"><br>

                            <label for="frmDireccionE">Direccion: </label>
                            <input type="text" name="frmDireccionE" class="form-control" id="frmDireccionE"
                                placeholder="Direccion del docente" required pattern="[A-Za-z0-9]+"><br>

                            <label for="frmCorreoE">Correo: </label>
                            <input type="email" name="frmCorreoE" class="form-control"
                                id="frmCorreoE" placeholder="Direccion de correo electronico" required><br>

                            <label for="frmEdadE">Edad: </label>
                            <input type="number" class="form-control" name="frmEdadE" id="frmEdadE" min="18"
                                max="70" placeholder="Edad del docente" required>

                        </div>
                        <div class="card-footer text-center">
                        <input value="Guardar" class="btn btn-outline-primary me-2" name="editar" id="editar"></input>
                        <button id="backTabla3" class="btn btn-outline-primary"><i class="fas fa-undo-alt"></i></button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>
    <!--- fin Formulario de edicion--->

        <!---inicio Tabla con todos los usuarios -->
        <div id="tablaDocentes">
            <h6>Docentes Registrados</h6>
            <hr>
            <div class="row">
                <div class="form-group col-md-12">
                    <table id="myTable" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
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
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
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
<script src="./assets/js/AdminTablaDocentes.js"></script>
<script src="assets/js/ajaxRegiDocente.js"></script>


<!---Darle estilos al excel -->
<script src="../js/buttons.html5.styles.min.js"></script>
<script src="../js/buttons.html5.styles.templates.min.js"></script>




</body>

</html>
