<?php 
$usuario= "root";
$password = "";
$db = "impresion";

try {
	  
	  $conn = new PDO('mysql:host=localhost;dbname=' . $db,$usuario, $password);

} catch (Exception $e) {
   echo "Falla en la base de datos: " . $e->getMessage(); 
}

	
 ?>