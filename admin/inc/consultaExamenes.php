<?php 
    $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/ExamenesDocentes.json");
    $datas = json_decode($contenido, true);

      echo json_encode($datas);
?>