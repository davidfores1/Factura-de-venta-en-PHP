<?php 
     $get_sum = $conn->prepare('SELECT SUM(total) AS stotal FROM producto');
     $get_sum->execute();

        if($data = $get_sum->fetch(PDO::FETCH_ASSOC)) {
           $all = $data['stotal'];
            $form = number_format($all,0,'.',',');
            }
            
?>

    	<?php foreach($producto as $prod){ ?>
        <tr>
          <td class="cantidad"><?php echo $prod->cantidad ?></td>
          <td class="producto"><?php echo $prod->nombre ?></td>
          <td class="precio1"><?php echo $prod->precio = number_format($prod->precio,0,'.',','); ?></td>
          <td class="precio"><?php echo $forma = number_format($prod->total,0,'.',',');?></td>
        </tr>
        
    <?php } ?>