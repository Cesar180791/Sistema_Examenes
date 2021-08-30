<?php 
  $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/docentes.json");
  $datas = json_decode($contenido, true);
  $docente = json_encode($datas);
  //var_dump($docente);
  echo $docente; 
?>