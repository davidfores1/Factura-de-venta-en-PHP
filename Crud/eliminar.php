<?php 

if(isset($_GET["id"])){

	$id = $_GET["id"];

	include_once "../conexion.php";

	$sentencia = $conn->prepare("DELETE FROM producto WHERE id = ?");
	$resultado = $sentencia->execute([$id]);

	if($resultado===true){
		header("location:../index.php");
	}else{
		echo "No se pudo eliminar ";
	}
}


 ?>