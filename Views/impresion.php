.<?php

include"../conexion.php";

$sentencia = $conn->query("SELECT * FROM producto");
$producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
 
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../css/styleImpresion.css">
  <script src="../js/script.js"></script>

</head>
  
<body style="margin: 30px;">
  <a href="../index.php">Volver</a>
  <div class="ticket">
     <img src="../img/images.jpg" alt="Logotipo">
    <p class="centrado">TICKET DE VENTA<br>Cali-valle<br><?php echo date("d/m/y"). " " . date("H:i:s") ?></p>
    <table>
      <thead>
        <tr>
          <th class="cantidad">UN</th>
          <th class="producto">PROD</th>
          <th class="precio1">V.</th>
          <th class="precio">$PRE</th>
        </tr>
      </thead>
      <tbody>
           
          <?php include_once "../Crud/listaImpresion.php"; ?>

    <td colspan="3"><strong>TOTAL</strong></td>
    <td class="precio"><?php echo $form ?></td>
        
      </tbody>
    </table>
    <p class="centrado">¡GRACIAS POR SU COMPRA!
      <br><small>david717@hotmail.es</small></p>
  </div>
  <button class="oculto-impresion" onclick="imprimir()">Imprimir</button>
</body>

</html>



