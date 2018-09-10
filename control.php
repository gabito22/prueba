<?php
session_start();
include 'modelo.php';				 

$rut=$_POST['rut'];
$pass=$_POST['clave'];

  
 //if($fila=existeUsuario($rut,$pass))
    //{ $_SESSION['user']=$fila;
	//$_SESSION['cantidad']=0;
	//$_SESSION['total'] = 0;
	 // header("location:postulacion.php");}
  //else
    //{header("location:login.php?err=1");} 
		
	if(existeUsuario($_POST['rut'],$_POST['clave'],$result)) 
        { 
            $_SESSION['user'] = $result->id_usuario; 
            header("location:postulacion.php"); 
        } 
        else 
        { 
            header("location:login.php?err=1"); 
        } 
?>	 