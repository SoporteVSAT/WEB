<?php
include "conexion.php";
if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query (" delete from serviciofac where ID=$id");
    if ($sql==1){
        echo '<div>Servicio Eliminado Correctamente</div>';
    } else{
        echo '<div> Error al eliminar</div>';
    }
}

?>