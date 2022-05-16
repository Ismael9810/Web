<?php

	$conexion= mysqli_connect("localhost", "id15403858_ismaelit", "P!lataform1z<", "id15403858_bdcrud");

	$result = array();

	if($conexion){

		$result['empleado']=array();
		$select = "SELECT * FROM empleado";
		$mostrar = mysqli_query($conexion, $select);

		while($row = mysqli_fetch_array($mostrar))
		{
			$index['id']=$row['0'];
			$index['nombre']=$row['1'];
			$index['usuario']=$row['2'];
			$index['clave']=$row['3'];
		

			array_push($result['empleado'], $index);
		}
		$result['estatus']=1;
		$result['mensaje']='Consulta Existosa';

	}else{
		$result['estatus']=0;
		$result['mensaje']="No se pudo conectar";
	}
		
		echo json_encode($result);
		mysqli_close($conexion);


?>