<?php
include "conexion.php";
if (!empty($_GET["id"])){
    $ID=$_GET["id"];
    $sql=$conexion->query (" delete from stocknqn where id=$ID");
    if ($sql==1){
        echo '<div>Producto Eliminado Correctamente</div>';
    } else{
        echo '<div> Error al eliminar</div>';
    }
}

?>