<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="productos.css">
</head>
<body class="tabla-eliminar">
    <?php
        require_once '../conexionn.php';

        $sql = "SELECT 
        productos.id,
        productos.nombre,
        productos.descripcion,
        productos.precio,
        productos.stock,
        categorias.nombre_categoria as categoria_nombre
        FROM productos
        join categorias on 
        productos.categoria_id = categorias.id
        order by nombre";

        $result = $mysqli->query($sql);

        if ($result -> num_rows > 0) {
    ?>
    <div class="contenedor-eliminar">
        <div class="ctn-botones">
            <a href="../menu-principal.php" class="btn-volver-mp">Volver</a>

            <h2 class="h2-productos2">Productos</h2>
        </div>
        <table border="1" class="tabla">
            <tr>
                <td>id</td>
                <td>nombre</dt>
                <td>caracteristica</td>
                <td>precio</td>
                <td>stock</td>
                <td>categoria_id</td>
                <td>Eliminar</td>
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
                    <td><a href="http://localhost/PHP/Parcial_1/productos/eliminar_productos.php? iid=<?php echo $productos['id']?> ">eliminar</a></td>
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