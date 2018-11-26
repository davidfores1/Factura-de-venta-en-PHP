<?php 

if(!isset($_POST["nombre"]) ||
   !isset($_POST["precio"]) ||
   !isset($_POST["cantidad"])) exit();

include_once"../conexion.php";

$prod = $_POST['nombre'];
$prec = $_POST['precio'];
$cant = $_POST['cantidad'];
if($valor = str_replace(',', '', $prec)){
$total = $valor*$cant;   	
}


$sentencia = $conn->prepare("INSERT INTO producto(nombre, precio, cantidad, total) VALUES (?, ?, ?,?);");
$resultado = $sentencia->execute([$prod, $valor, $cant, $total]);

if($resultado === TRUE) header("location:../index.php");

else echo "Algo salió mal. Por favor verifica que la tabla exista";

 ?>