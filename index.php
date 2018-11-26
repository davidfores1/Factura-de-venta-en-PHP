<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Venta</title>
    <link rel="stylesheet" href="css/cssIndex.css">
    <script type="text/javascript" src="js/decimal.js"></script>
</head>
<body>

    <form id="formulario" action="Crud/controlador.php" method="POST">
             <div ><h1>Factura</h1></div>
               <br>

                <div id="content">
                    <label>Nombre del producto</label><br>
                    <input id="no" name="nombre" type="text" required placeholder="Producto..." /> <br>

                    <label>Precio</label><br>
                    <input id="number" name="precio" type="text" onkeyup="format(this)" onchange="format(this)"
                    required placeholder="Precio..." /> <br>

                    <label>Cantidad</label><br>
                    <input id="number" name="cantidad" type="number" required placeholder="Cantidad..." /> <br>
                    <br>
                    <input id="campo3" name="enviar" type="submit" value="Enviar" />
                </div>
            </form>
    <?php 
        include_once "listaIndex.php";
     ?>
</body>
</html>