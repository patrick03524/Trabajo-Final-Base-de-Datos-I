<?php
	
	//$usuario = "HR";
	//$contrasena = "password";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
	//$servidor = "localhost";
	//$basededatos = "BD1";
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "prueba001";

	$conexion = mysqli_connect( $servidor, $usuario, "") or die("No se ha podido estableces contacto con la Base de Datos en cuestión");

	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Que no hay conexión pinche terco" );


	//$boton1="";	
	//if(isset($_POST['boton1']))	$boton1 = $_POST['boton1'];

	//if($boton1)
	//{

	$consulta = "SELECT * FROM employees";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");


	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>Usuario</th>";
	echo "<th>Nombre</th>";
	echo "<th>Apellido</th>";
	echo "<th>Edad</th>";
	echo "<th>Fecha</th>";
	echo "<th>Salario</th>";
	echo "</tr>";
	
	while ($columna = mysqli_fetch_array( $resultado ))
	{
	 	echo "<tr>";
	 	echo "<td>" . $columna['Usuario'] . "</td><td>" . $columna['Nombre'] . "</td><td>". $columna['Apellido'] . "</td><td>"	. $columna['Edad'] . "</td><td>". $columna['Fecha'] . "</td><td>". $columna['Salario'] . "</td>";
		echo "</tr>";
	}
		echo "</table>";
	//}
	mysqli_query($db,"INSERT INTO employees(Usuario,Nombre,Apellido,Fecha,Salario) VALUES('BD1CS00002','$Nombre','$Algopellido',NOW(),'$Salario')");
	
	alert("Te has registrado satisfactoriamente, ahora puedes iniciar sesion");
	mysqli_close( $conexion );


?>

<!DOCTYPE html>
<html>
<head>
	Yo quiero hacer Oof
</head>
<body>
	<FORM  method = "post" action=""> 
		<div class="form-group">
		<input type="text" class="campo" name="nombre" placeholder="Nombre"/><br><br></div>
		<div class="form-group">
        <input type="text" class="campo" name="apellido" placeholder="Apellido"/><br><br></div>
        <div class="form-group">
		<input type="text" class="campo" name="salario" placeholder="Salario"/><br><br></div>
		<button type="submit" class="boton" name="registar"><i class="fas fa-sign-in-alt"></i>Registrarme</button><br />
	<input type="submit" name="boton1" value="Mostrar los usuarios actuales we">
	
	</FORM>
	
</body>
</html>