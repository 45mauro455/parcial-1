<?php
    require  'conexionn.php';

    $usuario_ING = $_POST['usuario'];
    $contraseña_ING = $_POST['contraseña'];


    $validacion = "SELECT *  FROM USUARIOS WHERE USUARIO = '$usuario_ING' AND CONTRASEÑA = '$contraseña_ING'";
    
    $result = $mysqli->query($validacion);
    
    if ($result -> num_rows > 0) {
        header("Location: menu-principal.php");
        exit();
        echo "inicio exitoso";

    } else {
        echo "usuario o contraseña incorrecto";
    }








?>