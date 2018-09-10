<html>
	<head>
		<title>.:Formulario Registro:.</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="validar.js"></script>
		<script> 
          function comprobarClave(){ 
			clave1 = document.nuevo_usuario.password.value 
			clave2 = document.nuevo_usuario.Rpassword.value 

			if (clave1 == clave2) 
				alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo") 
			else 
			alert("Las dos claves son distintas...\nRealizaríamos las acciones del caso negativo") 
         } 
          </script>
	</head>
	<body>
		<center>
		<div class="estilo_caja">
		<p class="estilo_titulo">REGISTRO USUARIO</p>	
		<form action="proces.php" method="post" name="form">
			<table>
		      	<tr>
					<td><p class="s">Rut: </p></td>
					<td><input type="text" name="rut" required=""></td>
				</tr>

				<tr>
					<td><p class="s">Nombre: </p></td>
					<td><input type="text" name="nombre"></td>
				</tr>
				<tr>
					<td><p class="s">Apellido Paterno: </p></td>
					<td><input type="text" name="apellidop"></td>
				</tr>
				<tr>
					<td><p class="s">Apellido Materno: </p></td>
					<td><input type="text" name="apellidom"></td>
				</tr>
				<tr>
					<td><p class="s">Contraseña:</p></td>
					<td><input type="text" name="contraseña"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="boton" name="btn_enviar" value="Registrarse"></td>
				</tr>
			</table>		
		</form>
		<div>
		</center>
	</body>
</html>