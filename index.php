<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body class="login">
    
    <div class="padre">
        
        <?php
        require 'conexionn.php';
        ?>
        <div class="form-login">
            
            <form action="validacion.php" method="post" name="formulario" class="form-login1">

                <h2 class="login">LOGIN</h2>
            
                <input type="text" name="usuario" id="usuario" placeholder="Ingrese su Usuario" required class="item-login">
                <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña" required class="item-login">
                <button class="boton-login">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>