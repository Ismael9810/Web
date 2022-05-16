<?php
	$conexion= mysqli_connect("localhost", "id15403858_ismaelit", "P!lataform1z<", "id15403858_bdcrud");

	$id=$_POST['id'];
	$consulta="Eliminar el empleado con id='".$id."'";
	mysqli_query($conexion,$consulta);
	mysqli_close($conexion);
?>