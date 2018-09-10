<?php
include 'modelo.php';
switch($_GET['op'])
{   
case 4:agregaUsuario($_POST['login'],$_POST['password']);break;
case 5:eliminaUsuario($_GET['id']);break;
}
header("location:seleccion.php");
?>