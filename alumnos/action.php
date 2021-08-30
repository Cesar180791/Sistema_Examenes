<?php
if(file_exists("C:/xampp/htdocs/projectModul4/json/alumnos.json")){
    $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/alumnos.json");
    $datas = json_decode($contenido, true);

    $usuario = $_POST['email'];
    $pass = $_POST['password'];
    $bucarEmail = validarEmail($usuario, $pass);
}else{
    echo "No existe el fichero Solicitado";
}

function validarEmail($usuario, $pass){
    if(file_exists("C:/xampp/htdocs/projectModul4/json/alumnos.json")){
      $contenido = file_get_contents("C:/xampp/htdocs/projectModul4/json/alumnos.json");
      $datas = json_decode($contenido, true);

      foreach($datas as $correo){
        if($usuario === $correo['email']){
            if(password_verify($pass,$correo['password'])){
                //var_dump($correo);
                session_start();
                $_SESSION['user']=$correo['id'];
                $_SESSION['nombre']=$correo['nombre'];
                $response = array(
                  'response'=>'true'
                );
            // die(json_encode($correo)); 
            }else{
              $response = array(
                'response'=>'false'
              );
            }
            die(json_encode($response)); 
        }
      
      }
    }
  }
?>