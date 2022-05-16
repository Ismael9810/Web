<?php
$conexion= mysqli_connect("localhost", "id15403858_ismaelit", "P!lataform1z<", "id15403858_bdcrud");


$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$sql = "INSERT INTO empleado(nombre, usuario, clave) VALUES ('$nombre', '$usuario','$clave')";
$result = mysqli_query($conexion,$sql);

if($conexion){
	echo "Datos insertados correctamente";
}else{
	echo "No se pudo insertar";
}
?>
