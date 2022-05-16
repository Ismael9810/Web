<?php

	$conexion= mysqli_connect("localhost", "id15403858_ismaelit", "P!lataform1z<", "id15403858_bdcrud");

	$id = $_POST["id"];
	$nombre=$_POST["nombre"];
	$usuario=$_POST["usuario"];
	$clave = $_POST["clave"];

	$sql= "UPDATE empleado SET nombre='$nombre', usuario='$usuario', clave='$clave' where id='$id' ";
	$result = mysqli_query($conexion,$sql);

	if($result){
		echo "Datos Actualizados";
	}
	else{
		echo "No pudo actualizarse";
	}



?>