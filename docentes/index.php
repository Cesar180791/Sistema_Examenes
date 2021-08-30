<?php 
require 'functions.php';
if(isset($_GET['logout'])){
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Docentes</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/estilo.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.css"/>
</head>

<body>


<div class="login-wrapper">
    <form action="action.php" method="POST" id="login" enctype="multipart/form-data"> 
        <h1><span>Docente</span> </h1>

        <div class="input-row">
            <span class="icon"><i class="fa fa-at"></i></span>
            <input name="usuario" id="usuario" type="text" placeholder="Correo Electronico"/>
        </div>

        <div class="input-row">
            <span class="icon"><i class="fa fa-lock"></i></span>
            <input name="password" id="password" type="password" placeholder="Contraseña"/>
        </div>

        <div class="submit-row">
            <input type="submit" value="Iniciar Sesión. &raquo;"/>
        </div>


    </form>
</div>
</body>
<script src="/projectModul4/docentes/assets/js/main.js"></script>

</html>