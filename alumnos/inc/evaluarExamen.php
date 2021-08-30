<?php 
  require '../functions.php';
  $idAlumno = $_SESSION['user'];

$token = $_POST['token'];
$Alumno = $_POST['Alumno'];
$respuesta1 = $_POST['respuesta1'];
$respuesta2 = $_POST['respuesta2'];
$respuesta3 = $_POST['respuesta3'];
$respuesta4 = $_POST['respuesta4'];
$respuesta5 = $_POST['respuesta5'];
$puntaje = 0;


$contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/ExamenesDocentes.json");
$datas = json_decode($contenido, true);



for($var =0; $var < count($datas); $var++){
    if($token === $datas[$var]['token']){

      if($respuesta1 === $datas[$var]['pregunta1']['respuesta'] ){
        $puntaje +=$datas[$var]['pregunta1']['ponderacion']; 
      }
      if($respuesta2 === $datas[$var]['pregunta2']['respuesta'] ){
        $puntaje +=$datas[$var]['pregunta2']['ponderacion'];
      }
      if($respuesta3 === $datas[$var]['pregunta3']['respuesta'] ){
        $puntaje +=$datas[$var]['pregunta2']['ponderacion'];
      }
      if($respuesta4 === $datas[$var]['pregunta4']['respuesta'] ){
        $puntaje +=$datas[$var]['pregunta4']['ponderacion'];
      }
      if($respuesta5 === $datas[$var]['pregunta5']['respuesta'] ){
        $puntaje +=$datas[$var]['pregunta5']['ponderacion'];
      }

      if($puntaje >= $datas[$var]['NotaAprobacion']){
        $respuesta = "Aprobado";
      }else{
        $respuesta = "Reprobado";
      }

      $Resultado = array(
        "idExamen" => $datas[$var]['id'],
        "IdDocente" => $datas[$var]['idDocente'],
        "IdAlumno" => $idAlumno,
        "NombreExamen" => $datas[$var]['NombreExamen'],
        "NotaMaxima" => $datas[$var]['NotaMax'],
        "NotaMinima"=>  $datas[$var]['NotaAprobacion'],
        "calificacion" => $puntaje,
        "estado"=>$respuesta,
        "Pregunta1"=>array(
          "pregunta"=>$datas[$var]['pregunta1']['pregunta'],
          "RespuestaCorrecta" => $datas[$var]['pregunta1']['respuesta'],
          "Contestada" => $respuesta1,
          "ponderacion" => $datas[$var]['pregunta1']['ponderacion'],
        ),
        "Pregunta2"=>array(
          "pregunta"=>$datas[$var]['pregunta2']['pregunta'],
          "RespuestaCorrecta" => $datas[$var]['pregunta2']['respuesta'],
          "Contestada" => $respuesta2,
          "ponderacion" => $datas[$var]['pregunta2']['ponderacion'],
        ),
        "Pregunta3"=>array(
          "pregunta"=>$datas[$var]['pregunta3']['pregunta'],
          "RespuestaCorrecta" => $datas[$var]['pregunta3']['respuesta'],
          "Contestada" => $respuesta3,
          "ponderacion" => $datas[$var]['pregunta3']['ponderacion'],
        ),
        "Pregunta4"=>array(
          "pregunta"=>$datas[$var]['pregunta4']['pregunta'],
          "RespuestaCorrecta" => $datas[$var]['pregunta4']['respuesta'],
          "Contestada" => $respuesta1,
          "ponderacion" => $datas[$var]['pregunta4']['ponderacion'],
        ),
        "Pregunta5"=>array(
          "pregunta"=>$datas[$var]['pregunta5']['pregunta'],
          "RespuestaCorrecta" => $datas[$var]['pregunta5']['respuesta'],
          "Contestada" => $respuesta1,
          "ponderacion" => $datas[$var]['pregunta5']['ponderacion'],
        ),
      );


  



    }    
  }

  if (file_exists("C:/xampp/htdocs/projectModul4/json/ExamenesRealizados.json")) {
    $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/ExamenesRealizados.json");
    $datas = json_decode($contenido, true);
    //var_dump($datas);
    array_push($datas, $Resultado);
    echo file_put_contents("C:/xampp/htdocs/projectModul4/json/ExamenesRealizados.json", json_encode($datas));
    //var_dump($datas);
  } else {
    $datas = array();
    array_push($datas, $Resultado);
    $f = fopen("C:/xampp/htdocs/projectModul4/json/ExamenesRealizados.json", "w");
    echo fwrite($f, json_encode($datas));
    fclose($f);
  }
?>