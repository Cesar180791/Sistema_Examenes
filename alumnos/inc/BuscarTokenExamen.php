<?php 
require '../functions.php';
$idAlumno = $_SESSION['user'];
$token = $_POST['token'];
$fechaActual = date("Y-m-d");
 
 // $token = '911466';
    $filtrado = array();
    $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/ExamenesDocentes.json");
    $datas = json_decode($contenido, true);


      for($var =0; $var < count($datas); $var++){
        if($token === $datas[$var]['token']){
          if($fechaActual ===  $datas[$var]['disponibilidad']){
            array_push($filtrado, $datas[$var]);
          }
             
        }
      }
        echo json_encode($filtrado);
?>