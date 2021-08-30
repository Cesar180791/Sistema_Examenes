<?php
function Crear($docente){

  if(file_exists("C:/xampp/htdocs/projectModul4/json/docentes.json")){

    $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/docentes.json");
    $datas = json_decode($contenido, true);
    //var_dump($datas);
    // echo json_encode("alert('Correo ya existe');");
    array_push($datas, $docente);
    echo file_put_contents("C:/xampp/htdocs/projectModul4/json/docentes.json", json_encode($datas));
    
  }else{
    $datas = array();
    array_push($datas, $docente);
    $f = fopen("C:/xampp/htdocs/projectModul4/json/docentes.json","w");
    echo fwrite($f, json_encode($datas));
    fclose($f);
  }
}

function validarEmail($email){
  if(file_exists("C:/xampp/htdocs/projectModul4/json/docentes.json")){
    $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/docentes.json");
    $datas = json_decode($contenido, true);
    foreach($datas as $correo){
      if($email === $correo['email']){
        return $correo;
      }
    }
  }
}

$nombreDocente = $_POST['nombreDocente'];
$apellidoDocente = $_POST['apellidoDocente'];
$direccionDocente = $_POST['direccionDocente'];
$edadDocente = $_POST['edadDocente'];
$email = $_POST['email'];
          
$idCode = "D2021-".rand(0,9).rand(0,9).rand(0,9).rand(0,9);
$pass = password_hash('1234', PASSWORD_DEFAULT, [15] );

$docente = [
  "id"=>$idCode,
  "nombre"=>$nombreDocente,
  "apellido"=>$apellidoDocente,
  "direccion"=>$direccionDocente,
  "edad"=>$edadDocente,
  "email"=>$email,
  "password"=>$pass,
  "rol"=>2,
  "estado"=>1
];

$buscar = validarEmail($email);
if($buscar!==null){
  echo json_encode("El correo ya existe en nuestra base de datos");
}
else{
  Crear($docente);
}
?>