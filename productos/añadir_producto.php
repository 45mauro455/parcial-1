<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="productos.css">
</head>
<body class="añadir-productos">

    <div class="contenedor-añadir">

        <?php
        include_once '../conexionn.php';
        $sql_categorias = "SELECT id, nombre_categoria FROM categorias";
        $resultado_categoria = $mysqli->query($sql_categorias);
        ?>



        <form action="insertar_producto.php" method="post" class="form-añadir">

            <h2 class="h2-añadir">Añadir Producto</h2>
            <div class="campo"> 
                <label for="id_producto ">Id:</label>
                <input type="text" name="id_producto" id="id_producto"  class="input-añadir">
            </div>

            <div class="campo">
                <label for="nombre_producto">Nombre:</label>
                <input type="text" name="nombre_producto" id="nombre_producto" class="input-añadir">
            </div>

            <div class="campo">
                <label for="descripcion_producto">Descripción:</label>
                <input type="text" name="descripcion_producto" id="descripcion_producto"  class="input-añadir">
            </div>

            <div class="campo">
                <label for="precio_producto">Precio:</label>
                <input type="text" name="precio_producto" id="precio_producto"  class="input-añadir">
            </div>

            <div class="campo">
                <label for="stock_producto">Stock:</label>
                <input type="text" name="stock_producto" id="stock_producto" class="input-añadir">
            </div>

            <div class="campo">
                <label for="categoria_id">Categoria</label>
                <select name="categoria_id" id="categoria_id" required>
                    <option value="" >Seleccione la Categoria</option>
                        <?php while ($fila = $resultado_categoria->fetch_assoc()) {
                        
                        ?>
                <option value="<?php echo $fila['id']; ?>">
                        <?php 
                            echo $fila['nombre_categoria'];
                        ?>
                </option>
                        <?php } ?>
                </select>

            </div>

            <div class="botones">
                <a href="../menu-principal.php" class="boton-volver boton-añadir" >volver</a>

                <input type="submit" class="boton-añadir" value="Guardar">
            </div>
        
    </form>

    
    </div>
</body>
</html>