<?php 

$contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/docentes.json");
$datas = json_decode($contenido, true);

    $idBanear = $_POST['id'];
    for($var = 0; $var < count($datas); $var++) {
        if($datas[$var]["id"] === $idBanear){
          unset( $datas[$var]);
          $newDatas = array_values($datas);
        }
       }
       echo file_put_contents("C:/xampp/htdocs/projectModul4/json/docentes.json", json_encode($newDatas));

?>