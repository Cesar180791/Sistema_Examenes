<?php
function EditarExamen(){
    $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/ExamenesDocentes.json");
    $datas = json_decode($contenido, true);
    
    $idExamen = $_POST['id'];
    $nombreExamen = $_POST['nombreExamen'];
    $notaMaxima = $_POST['notaMaxima'];
    $notaAprobacion = $_POST['notaAprobacion'];
    $Disponibilidad = $_POST['disponibilidad'];
    
    //captura de variables de preguntas
    $pregunta1 = $_POST['pregunta1'];
    $respuesta1= $_POST['respuesta1'];
    $ponderacion1= $_POST['ponderacion1'];

    $pregunta2 = $_POST['pregunta2'];
    $respuesta2= $_POST['respuesta2'];
    $ponderacion2= $_POST['ponderacion2'];

    $pregunta3 = $_POST['pregunta3'];
    $respuesta3= $_POST['respuesta3'];
    $ponderacion3= $_POST['ponderacion3'];

    $pregunta4 = $_POST['pregunta4'];
    $respuesta4= $_POST['respuesta4'];
    $ponderacion4 = $_POST['ponderacion4'];

    $pregunta5 = $_POST['pregunta5'];
    $respuesta5= $_POST['respuesta5'];
    $ponderacion5= $_POST['ponderacion5'];


    $ValidacionPuntos = $ponderacion1 + $ponderacion2 + $ponderacion3 + $ponderacion4 + $ponderacion5; 



    for($var = 0; $var < count($datas); $var++){
         if($datas[$var]["id"] === $idExamen){
            if($ValidacionPuntos<$notaMaxima){
                echo json_encode("La sumatoria de los puntos asignados a cada pregunta es menor a la nota maxima"); 
            }
             if ($ValidacionPuntos > $notaMaxima){
                echo json_encode("La sumatoria de los puntos asignados a cada pregunta es mayor a la nota maxima");
            }
             if($ValidacionPuntos == $notaMaxima){
                $datas[$var]["NombreExamen"] = $nombreExamen;
                $datas[$var]["NotaMax"] = $notaMaxima;
                $datas[$var]["NotaAprobacion"] = $notaAprobacion;
                $datas[$var]["disponibilidad"] = $Disponibilidad;
    
                $datas[$var]["pregunta1"]["pregunta"] = $pregunta1;
                $datas[$var]["pregunta1"]["respuesta"] = $respuesta1;
                $datas[$var]["pregunta1"]["ponderacion"] =$ponderacion1;
    
                $datas[$var]["pregunta2"]["pregunta"] = $pregunta2;
                $datas[$var]["pregunta2"]["respuesta"] = $respuesta2;
                $datas[$var]["pregunta2"]["ponderacion"] =$ponderacion2;
    
                $datas[$var]["pregunta3"]["pregunta"] = $pregunta3;
                $datas[$var]["pregunta3"]["respuesta"] = $respuesta3;
                $datas[$var]["pregunta3"]["ponderacion"] =$ponderacion3;
    
                $datas[$var]["pregunta4"]["pregunta"] = $pregunta4;
                $datas[$var]["pregunta4"]["respuesta"] = $respuesta4;
                $datas[$var]["pregunta4"]["ponderacion"] =$ponderacion4;
    
                $datas[$var]["pregunta5"]["pregunta"] = $pregunta5;
                $datas[$var]["pregunta5"]["respuesta"] = $respuesta5;
                $datas[$var]["pregunta5"]["ponderacion"] =$ponderacion5;
    
        }
        }
    }
    echo file_put_contents("C:/xampp/htdocs/projectModul4/json/ExamenesDocentes.json", json_encode($datas));
}
EditarExamen();


?>