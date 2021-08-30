<?php

$contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/docentes.json");
$datas = json_decode($contenido, true);

////Funcion Editar Docente
function EditarDocente($datas){
    $id = $_POST['id'];
    $nombreDocente = $_POST['nombreDocenteE'];
    $apellidoDocente = $_POST['apellidoDocenteE'];
    $direccionDocente = $_POST['direccionDocenteE'];
    $edadDocente = $_POST['edadDocenteE'];
    $email = $_POST['emailE'];

    for($var = 0; $var < count($datas); $var++) {
     if($datas[$var]["id"] === $id){
      $datas[$var]["nombre"] = $nombreDocente;
      $datas[$var]["apellido"] = $apellidoDocente;
      $datas[$var]["direccion"] = $direccionDocente;
      $datas[$var]["edad"] = $edadDocente;
      $datas[$var]["email"] = $email;
     }
    }
    echo file_put_contents("C:/xampp/htdocs/projectModul4/json/docentes.json", json_encode($datas));
}



if ($_POST['nombreDocenteE'] && isset($_POST['apellidoDocenteE']) 
    && $_POST['direccionDocenteE'] && isset($_POST['edadDocenteE']) && $_POST['emailE']) {
        EditarDocente($datas);
}

?>