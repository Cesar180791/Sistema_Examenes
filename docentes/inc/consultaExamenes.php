<?php 
  require '../functions.php';
  $idDocente = $_SESSION['user'];

    $filtrado = array();
    $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/ExamenesDocentes.json");
    $datas = json_decode($contenido, true);

      for($var =0; $var < count($datas); $var++){
        if($idDocente === $datas[$var]['idDocente']){
          array_push($filtrado, $datas[$var]);
        }
      }
      echo json_encode($filtrado);
?>