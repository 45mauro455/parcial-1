<?php
$servidor = "localhost";
$usuario = "root";
$password = "45970211ab";
$base_de_datos = "parcial_1";


//CONEXION
$mysqli = new mysqli($servidor, $usuario, $password, $base_de_datos);


//VERIFICAR CONEXION
if ($mysqli -> connect_error){
    die("Conexion fallida" . $mysqli->connect_error);
}

//CONSULTA SOLO A COLUMNA TITULO
//$sql = "SELECT * FROM clientes";
//$result = $mysqli->query($sql);


//VERIFICA SI HAY RESULTADOS
//if ($result->num_rows > 0) {
//    //muestra los titulos
//    while ($fila = $result ->fetch_assoc()) {
//        echo $fila ['apellido'] . "<br>";
//}
//}else {
//        echo "No hay libros cargados.";
//}
//$mysqli->close();

?>