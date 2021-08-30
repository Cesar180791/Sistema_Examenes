<?php
function Crear($alumno){

  if(file_exists("C:/xampp/htdocs/projectModul4/json/alumnos.json")){

    $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/alumnos.json");
    $datas = json_decode($contenido, true);
    //var_dump($datas);
    // echo json_encode("alert('Correo ya existe');");
    array_push($datas, $alumno);
    echo file_put_contents("C:/xampp/htdocs/projectModul4/json/alumnos.json", json_encode($datas));
    
  }else{
    $datas = array();
    array_push($datas, $alumno);
    $f = fopen("C:/xampp/htdocs/projectModul4/json/alumnos.json","w");
    echo fwrite($f, json_encode($datas));
    fclose($f);
  }
}

function validarEmail($email){
  if(file_exists("C:/xampp/htdocs/projectModul4/json/alumnos.json")){
    $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/alumnos.json");
    $datas = json_decode($contenido, true);
    foreach($datas as $correo){
      if($email === $correo['email']){
        return $correo;
      }
    }
  }
}

$nombreAlumno = $_POST['nombreAlumno'];
$apellidoAlumno = $_POST['apellidoAlumno'];
$direccionAlumno = $_POST['direccionAlumno'];
$edadAlumno = $_POST['edadAlumno'];
$email = $_POST['email'];
          
$idCode = "ALUMNO2021-".rand(0,9).rand(0,9).rand(0,9).rand(0,9);
$pass = password_hash('1234', PASSWORD_DEFAULT, [15] );

$alumno = [
  "id"=>$idCode,
  "nombre"=>$nombreAlumno,
  "apellido"=>$apellidoAlumno,
  "direccion"=>$direccionAlumno,
  "edad"=>$edadAlumno,
  "email"=>$email,
  "password"=>$pass,
];

$buscar = validarEmail($email);
if($buscar!==null){
  echo json_encode("El correo ya existe en nuestra base de datos");
}
else{
  Crear($alumno);
}
?>