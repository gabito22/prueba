<?php
session_start();
if(!isset($_SESSION['user']))
   header('location:index.php');
   
include 'modelo.php';

?>				 

<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
  </head>
  <body>
    
	  
	
	  
	  <a href="index.php">SALIR</a>
  </body>
</html>  
 