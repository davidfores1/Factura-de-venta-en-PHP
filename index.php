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
     <div id="formulario">
    <form action="Crud/nuevaFactura.php" method="POST">
        <input type="submit" value="Nueva"/>
    </form>

    <form  action="Crud/insertar.php" method="POST">
    
             <div ><h1>Factura</h1></div>
               <br>

                <div id="content">
                    <label>Nombre del producto</label><br>
                    <input id="nombre" name="nombre" type="text" required placeholder="Producto..." /> <br>

                    <label>Precio</label><br>
                    <input id="precio" name="precio" type="text" onkeyup="format(this)" onchange="format(this)"
                    required placeholder="Precio..." /> <br>

                    <label>Cantidad</label><br>
                    <input id="cantidad" name="cantidad" type="number" required placeholder="Cantidad..." /> <br>
                    <br>
                    <input id="boton1" name="enviar" type="submit" value="Enviar" />
                    
                </div>
            </form>
           </div> 
    <?php 
        include_once "Views/listaIndex.php";
     ?>
</body>
</html>