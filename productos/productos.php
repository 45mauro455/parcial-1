<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="productos.css">
</head>
<body class="tabla-productos">


    <div class="ctn-botones">
            <a href="../menu-principal.php" class="btn-volver-mp">Volver</a>
            <h2 class="h2-productos2">Productos</h2>
        </div>
    <div class="contenedor-productos">
        <?php
            require_once '../conexionn.php';

            $sql = "SELECT 
            productos.id,
            productos.nombre, 
            productos.descripcion, 
            productos.stock, 
            productos.precio, 
            categorias.nombre_categoria as categoria_nombre 
            FROM productos 
            join categorias on 
            productos.categoria_id = categorias.id 
            order by nombre";

            $result = $mysqli->query($sql);

            if ($result -> num_rows > 0) {
        ?>

                <!--
                <form action="buscar.php" method="post" name="buscar-productos">
                    <input type="text" name="buscar" placeholder="buscar productos" value="">
                    <input type="submit" value="buscar">
                </form>
                -->

        <table border="1" class="tabla-prod">
            <tr>
                <td>id</td>
                <td>nombre</dt>
                <td>caracteristica</td>
                <td>precio</td>
                <td>stock</td>
                <td>categoria_id</td>
        
            </tr>
            <?php
            while ($productos = mysqli_fetch_assoc($result)) {
            ?>

                <tr>
                    <td><?php echo $productos['id'] ?></td>
                    <td><?php echo $productos['nombre'] ?></td>
                    <td><?php echo $productos['descripcion'] ?></td>
                    <td><?php echo $productos['precio'] ?></td>
                    <td><?php echo $productos['stock'] ?></td>
                    <td><?php echo $productos['categoria_nombre'] ?></td>
                </tr>
            <?php
                    }
                ?>
        </table>
    </div>
    <?php 
    } else {
        echo "no hay registros guardados";
    }
    $mysqli->close();
    ?>
</body>
</html>