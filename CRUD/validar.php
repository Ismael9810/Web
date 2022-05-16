<?php
	

	$conexion= mysqli_connect("localhost", "id15403858_ismaelit", "P!lataform1z<", "id15403858_bdcrud");

	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];



	$sentencia=$conexion->prepare("SELECT * FROM empleado WHERE usuario=? AND clave=?");

	$sentencia->bind_param('ss',$usuario,$clave);
	$sentencia->execute();

	$resultado = $sentencia->get_result();
	if($fila=$resultado->fetch_assoc()){
		echo json_encode($fila,JSON_UNESCAPED_UNICODE);
	}

	$sentencia->close();
	$conexion->close();
?>