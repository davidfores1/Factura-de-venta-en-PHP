<?php 

if(isset($_POST["id"])){

include_once"../conexion.php";
//

	  $id = $_POST["id"];
	  $nom = $_POST["nombre"];
	  $pre = $_POST["precio"];
	  $can = $_POST["cantidad"];
	  if($valor = str_replace(',', '', $pre)){
	  $total = $valor*$can;   	
	  }

	$sentencia = $conn->prepare("UPDATE producto SET nombre = ?, precio = ?, cantidad = ?, total = ? WHERE id = ?");
	$resultado = $sentencia->execute([$nom, $valor, $can, $total,$id ]);

	if($resultado===true){
	   header("location:../index.php");
	}else{


	}


	}else{

		echo"error al actualizar";
	}
?>
