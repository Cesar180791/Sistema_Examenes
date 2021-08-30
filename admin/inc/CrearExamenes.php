<?php
function CrearExamen(){
    $idExamen ="E2021-".rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    $token = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    $idDocente=$_POST['idDocente'];
    $nombreExamen = $_POST['nombreExamen'];
    $notaMaxima = $_POST['notaMaxima'];
    $notaAprobacion = $_POST['notaAprobacion'];
    $disponibilidad = $_POST['disponibilidad'];

    $pregunta1 = $_POST['pregunta1'];
    $respuesta1 =$_POST['respuesta1'];
    $ponderacion1 =$_POST['ponderacion1'];

    $pregunta2 = $_POST['pregunta2'];
    $respuesta2 =$_POST['respuesta2'];
    $ponderacion2 =$_POST['ponderacion2'];

    $pregunta3 = $_POST['pregunta3'];
    $respuesta3 =$_POST['respuesta3'];
    $ponderacion3 =$_POST['ponderacion3'];

    $pregunta4 = $_POST['pregunta4'];
    $respuesta4 =$_POST['respuesta4'];
    $ponderacion4 =$_POST['ponderacion4'];

    $pregunta5 = $_POST['pregunta5'];
    $respuesta5 =$_POST['respuesta5'];
    $ponderacion5 =$_POST['ponderacion5'];

    $examenNew = array(
        "id"=>$idExamen,
        "idDocente"=>$idDocente,
        "NombreExamen"=>$nombreExamen,
        "NotaMax"=>$notaMaxima,
        "NotaAprobacion"=>$notaAprobacion,
        "token"=>$token,
        "disponibilidad"=>$disponibilidad,
        "pregunta1"=>array(
            "pregunta"=>$pregunta1,
            "respuesta"=>$respuesta1,
            "ponderacion"=>$ponderacion1
        ),
        "pregunta2"=>array(
            "pregunta"=>$pregunta2,
            "respuesta"=>$respuesta2,
            "ponderacion"=>$ponderacion2
        ),
        "pregunta3"=>array(
            "pregunta"=>$pregunta3,
            "respuesta"=>$respuesta3,
            "ponderacion"=>$ponderacion3
        ),
        "pregunta4"=>array(
            "pregunta"=>$pregunta4,
            "respuesta"=>$respuesta4,
            "ponderacion"=>$ponderacion4
        ),
        "pregunta5"=>array(
            "pregunta"=>$pregunta5,
            "respuesta"=>$respuesta5,
            "ponderacion"=>$ponderacion5
        ),
        );

    $ValidacionPuntos = $ponderacion1 + $ponderacion2 + $ponderacion3 + $ponderacion4 + $ponderacion5; 

    if($notaMaxima<$notaAprobacion){
        echo json_encode("La Nota de Aprobacion tiene que ser menor a la nota Maxima"); 
    }
    else if($ValidacionPuntos<$notaMaxima){
        echo json_encode("La sumatoria de los puntos asignados a cada pregunta es menor a la nota maxima"); 
    }
    else if ($ValidacionPuntos > $notaMaxima){
        echo json_encode("La sumatoria de los puntos asignados a cada pregunta es mayor a la nota maxima");
    }
    else if($ValidacionPuntos == $notaMaxima){
        if (file_exists("C:/xampp/htdocs/projectModul4/json/ExamenesDocentes.json")) {
            $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/ExamenesDocentes.json");
            $datas = json_decode($contenido, true);
            //var_dump($datas);
            array_push($datas, $examenNew);
            echo file_put_contents("C:/xampp/htdocs/projectModul4/json/ExamenesDocentes.json", json_encode($datas));
        //var_dump($datas);
        } else {
            $datas = array();
            array_push($datas, $examenNew);
            $f = fopen("C:/xampp/htdocs/projectModul4/json/ExamenesDocentes.json", "w");
            echo fwrite($f, json_encode($datas));
            fclose($f);
    }
}
}

CrearExamen();
?>