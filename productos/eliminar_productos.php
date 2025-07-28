<?php
    use LDAP\Result;
    require_once '../conexionn.php';
    $id_productoo = $_GET['iid'];


    $result = "DELETE FROM productos WHERE id = $id_productoo";

    $eliminar = $mysqli->query($result);

    if (!$result) {
        echo "error al eliminar cliente";
    }else{
        echo '<script language = javascript>
        alert("Se elimino el producto correctamente, redireccionando")
        self.location = "../menu-principal.php"
        </script>';
    }

?>