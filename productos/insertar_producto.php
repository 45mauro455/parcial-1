<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$id_prod = $_POST["id_producto"];
$nombre_prod = $_POST["nombre_producto"];
$descripcion_prod = $_POST["descripcion_producto"];
$precio_prod = $_POST["precio_producto"];
$stock_prod = $_POST["stock_producto"];
$categoria_id_prod = $_POST["categoria_id"];

$insert = "INSERT INTO productos (id, nombre, descripcion, precio, stock, categoria_id) VALUES ('$id_prod', '$nombre_prod', '$descripcion_prod', '$precio_prod', '$stock_prod', '$categoria_id_prod')";

require_once '../conexionn.php';

$result = $mysqli->query($insert);

echo '<script language = javascript>
alert("Se agrego la informacion correctamente, redireccionando")
self.location = "../menu-principal.php"
</script>';



?>