<?php
include "conexion.php";
if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query (" delete from todaslasantenas where ID=$id");
    if ($sql==1){
        echo '<div>Antena Eliminado Correctamente</div>';
    } else{
        echo '<div> Error al eliminar</div>';
    }
}

?>