<?php
				//conectar a la BD bdgab, o tira error de BD
function conectar()
{ $link=mysqli_connect('localhost','root','') or die('ERROR al conectar');

  mysqli_select_db($link,'gab') or die("ERROR de BD");
  return $link;
}

//funcion para retornar los usuarios y mostrarlo en la tabla seleccionada
function retornaUsuarios()
{
	$sql='select * from usuario';
    $link=conectar();
	$res=mysqli_query($link,$sql);
	$x=0;
	$usuarios=array();
	while($fila=mysqli_fetch_array($res))
	  { $usuarios[$x]=$fila;
           $x++;}
		   mysqli_close($link);
	return $usuarios;
}

//funcion para ver si existe el usuario en la bdgab para conectar
function existeUsuario($rut,$pass ,&$result)
{ $sql="select * from usuarios where rut=".$rut." and clave ='".$pass."' ";
  $link=conectar();
  $res=mysqli_query($link,$sql);
  $count=0;
  if($fila=mysqli_num_rows($res)>0)
  { 
  $fila = mysqli_fetch_array($res) ;//dado que solamente espera un registro no es necesario un while 
       return true; 
  }      
        else
    {
         return false;
    } 
   return false;
}		 


	//retorna o muestra productos en la tabla.
function retornaProductosPorCategoria($id)
{$link=conectar();
 $sql="select * from productos where id_categoria=".$id;
 $res=mysqli_query($link,$sql);
  $cate=array();
  $x=0;
  while($fila=mysqli_fetch_array($res))
   { $cate[$x]=$fila; $x++; 
   }
   mysqli_close($link);
  return $cate;
}				 
				 
         
         //funcion para modificar productos etc
function modificaProducto($id,$nombre,$marca,$precio,$categoria)
{ $link=conectar();
  $sql="update productos set nombre='".$nombre."', marca='".$marca.
          "', precio=".$precio.",id_categoria=".$categoria." where id_producto=".$id;
  $res=mysqli_query($link,$sql);
  mysqli_close();
  	
}			


//funcion eliminar un usuario 
function eliminaUsuario($id)
{ $link=conectar();
$sql="delete from usuario where id_usuario=".$id;
$res=mysqli_query($link,$sql);
mysqli_close();			  
}
		


//funcion para generarID para el usuario
function generaIdU()
{
	$link= conectar();
	$sql="select max(id_usuario)+1 from usuario";
	$res=mysqli_query($link,$sql);
	$fila=mysqli_fetch_array($res);
	mysqli_close();
	return $fila[0];
}


 //funcion para agregar usuarios
function agregaUsuario($usu,$pass)
       {
        $link=conectar();
        $id=generaIdU();
        $sql="INSERT INTO usuario (id_usuario,login,password)
        values(".$id.",'".$usu."','".$pass."')";
        $res=mysqli_query($link,$sql);
        mysqli_close();

       }





?>
