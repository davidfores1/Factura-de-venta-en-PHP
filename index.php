<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Venta</title>
    <link rel="stylesheet" href="css/cssIndex.css">
    <script type="text/javascript" src="js/decimal.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
  <div class="container">
    <div class="row">
     <div id="formulario">
       <div>
         <form id="ini" action="Crud/nuevaFactura.php" method="POST">
             <input class="btn btn-secondary" type="submit" value="Nueva"/>
         </form>

       </div>

    <form  action="Crud/insertar.php" method="POST">

             <div ><h2>Factura</h2></div>
                <div id="content">
                    <input class="form-control" id="nombre" name="nombre" type="text" required placeholder="Producto..." /> <br>

                    <input class="form-control" id="precio" name="precio" type="text" onkeyup="format(this)" onchange="format(this)"
                    required placeholder="Precio..." /> <br>

                    <input class="form-control" id="cantidad" name="cantidad" type="number" required placeholder="Cantidad..." /> <br>

                    <input class="btn btn-success" id="boton1" name="enviar" type="submit" value="Enviar" />

                </div>
            </form>
           </div>
        

    <?php
        include_once "Views/listaIndex.php";
     ?>
     </div>
</div>

</body>
</html>
