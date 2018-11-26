<?php 

if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once"../conexion.php";
$sentencia = $conn->prepare("SELECT * FROM producto WHERE id = ?");
$sentencia->execute([$id]);
$prod = $sentencia->fetch(PDO::FETCH_OBJ);

if($prod===FALSE){
  echo "Ocurrio un error";
}

 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Editar Venta</title>
  <link rel="stylesheet" href="../css/cssIndex.css">
  <script type="text/javascript" src="../js/decimal.js"></script>

</head>
<body>

   <form id="formulario" action="actualizar.php" method="POST">
                <div id="content">
                    <input type="hidden" name="id" value="<?php echo $prod->id; ?> ">

                    <label>Nombre Del producto</label><br>
                    <input value="<?php echo $prod->nombre ?>" name="nombre" type="text" /> <br>

                    <label>Precio</label><br>
                    <input value="<?php echo $prod->precio ?>" name="precio" type="text" onkeyup="format(this)" onchange="format(this)" /> <br>

                    <label>Cantidad</label><br>
                    <input value="<?php echo $prod->cantidad ?>"  name="cantidad" type="text" /> <br>

                    <input id="campo3" name="enviar" type="submit" value="Guardar" />
          
                </div>
            </form>  
  
</body>
</html>