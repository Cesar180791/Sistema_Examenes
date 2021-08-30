<?php 
function Alumno(){
    return isset($_SESSION['user'], $_SESSION['nombre']);
}
Alumno();
session_start();
?>