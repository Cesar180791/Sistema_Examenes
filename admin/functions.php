<?php 
function Admin(){
    return isset($_SESSION['user'], $_SESSION['nombre'], $_SESSION['apellido'], $_SESSION['rol']);
}
Admin();
session_start();
?>