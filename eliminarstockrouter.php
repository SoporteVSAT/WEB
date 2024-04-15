<?php
include "conexion.php";
if (!empty($_GET["id"])){
    $ID=$_GET["id"];
    $sql=$conexion->query (" delete from stockrouter where id=$ID");
    if ($sql==1){
        echo '<div>Router Eliminado Correctamente</div>';
    } else{
        echo '<div> Error al eliminar</div>';
    }
}

?>