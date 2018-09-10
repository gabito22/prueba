<?php session_start();
      session_destroy(); 
  include 'modelo.php';  
    ?>
<!DOCTYPE html>
<html>
  <head>
  
  </head>
  <body>
      <form name="formulario1" action="control.php" method="post">
       <p> Ingrese Rut : <br />
         <input type="number" name="rut" /> </p>
    
         <p> Ingrese Password : </br>
             <input type="password" name="clave" /> </p>

         <p> <input type="submit" name="btnEnviar" value="ENVIAR" />       
    
    </form>
     <?php if(isset($_GET['err']))
              echo "ERROR de INGRESO";    ?>
    
  </body>
</html>
  <head>
  
  </head>

 