 <div class="ticket">
    <table>
      <thead>
        <tr>
          <th class="producto">PRODUCTO</th>
          <th class="cantidad">CANT</th>
          <th class="producto">V.UNIT</th>
          <th class="precio">PRECIO</th>
          <th colspan="2" style="text-align: center;">OPCIONES</th>

        </tr>
      </thead>

      	<?php

			include"conexion.php";

			$sentencia = $conn->query("SELECT * FROM producto");
			$producto = $sentencia->fetchAll(PDO::FETCH_OBJ);



        $get_sum = $conn->prepare('SELECT precio, SUM(total) AS stotal FROM producto');
        $get_sum->execute();

        if($data = $get_sum->fetch(PDO::FETCH_ASSOC)) {
        $all = $data['stotal'];
        $unit =$data['precio'];
        $form = number_format($all,0,'.',',');
        $form1 = number_format($unit,0,'.',',');
        }

			?>


      	<?php foreach($producto as $prod)  { ?>
        <tr>
          <td><?php echo $prod->nombre ?></td>
          <td id="cant"><?php echo $prod->cantidad ?></td>
          <td><?php echo "$" . $forma1 = number_format($prod->precio,0,'.',',');?></td>
          <td><?php echo "$" . $forma = number_format($prod->total,0,'.',',');?></td>
          <td><a href="<?php echo "Views/editar.php?id=" . $prod->id?>">Editar</a></td>
          <td><a href="<?php echo "Crud/eliminar.php?id=" . $prod->id ?>">Eliminar</a></td>
        </tr>

    <?php } ?>

      </tbody>
      <td id="t" colspan="3"><strong>Total:</strong></td>
      <td ><?php echo "$" . $form ?></td>
      <td style="text-align: center;" colspan="2"><a href="Views/impresion.php">Imprimir</a></td>
    </table>

    <!-- Formulario  para  la Devoulción del efectivo -->

    <br>
   <form action="index.php" method="POST">
      <label for="efectivo">Efectivo:</label>
       <input type="text" name="efectivo" onkeyup="format(this)" onchange="format(this)"
                    required placeholder="Efectivo...">
         <br>
         <input class="btn btn-success" type="submit" Value="Devolución">
     </form>
<?php
         if (!isset($_POST["efectivo"])) exit();

         $efect = $_POST["efectivo"];
         include_once"conexion.php";

         global $efect;

        $get_sum = $conn->prepare('SELECT precio, SUM(total) AS stotal FROM producto');
        $get_sum->execute();

        if($data = $get_sum->fetch(PDO::FETCH_ASSOC)) {
        $all = $data['stotal'];
        }

        if($devo = str_replace(',', '', $efect)){
         $dev = $devo-$all;
        }

        $formV = number_format($dev,0,'.',',');
        $devo1 = number_format($devo,0,'.',',');
               echo "Efectivo: $" . $devo1 . "<br>";     
               echo "Devolución: $" . $formV;

      ?>

  </div>
