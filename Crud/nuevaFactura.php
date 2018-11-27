<?php 
if(!isset($_POST["Nueva"])){


	include_once "../conexion.php";

	$sentencia = $conn->prepare("truncate table producto ");
	$resultado = $sentencia->execute();

	if($resultado===true){
		header("location:../index.php");
	}else{
		echo "No se pudo eliminar ";
	}


}



	

 ?>