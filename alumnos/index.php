<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Alumnos</title>
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

<div class="sidenav">
         <div class="login-main-text">
            <h2>Alumnos<br> Iniciar Sesión</h2>
            <p>Registrate si aun no posees una cuenta</p>
            <button  onclick="location='/projectModul4/alumnos/registro.php'" class="btn btn-secondary">Ir a Registrate</button>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
            <form action="action.php" method="POST" id="login" enctype="multipart/form-data"> 
                  <div class="form-group">
                     <label>Correo</label>
                     <input type="email" class="form-control" placeholder="Correo" id="email" name="email">
                  </div>
                  <div class="form-group">
                     <label>Contraseña</label>
                     <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                  </div>
                  <button type="submit" class="btn btn-black">Iniciar Sesión</button>
                  
               </form>
              
            </div>
         </div>
      </div>
</body>
<script src="/projectModul4/alumnos/assets/js/main.js"></script>

</html>