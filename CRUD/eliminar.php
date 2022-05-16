<?php

	
			
		$conexion= mysqli_connect("localhost", "id15403858_ismaelit", "P!lataform1z<", "id15403858_bdcrud");


		if(isset($_GET['id'])){

			$query="DELETE FROM empleado where id=".$_GET['id'];
			$resultado=mysqli_query($conexion,$query);
			$respuesta=array();

			if(mysqli_affected_rows($conexion)>0){
				//Query eliminiar
				
					$respuesta['estatus']=1;
					$respuesta['mensaje']="Se elimino correctamente";
			}else{
					$respuesta['estatus']=0;
					$respuesta['mensaje']="No se elimino el regitro";
			}

		}else{
			$respuesta=array();
			$result['estatus']=0;
			$result['mensaje']="id no valido";
		}
		

		echo json_encode($respuesta);
?>