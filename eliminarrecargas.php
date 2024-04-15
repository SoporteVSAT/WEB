<?php
include "conexion.php";
if (!empty($_GET["id"])){
    $ID=$_GET["id"];
    $sql=$conexion->query (" delete from recarga where id='$ID'");
    if ($sql==1){
        echo '<div>Recarga Eliminada Correctamente</div>';
    } else{
        echo '<div> Error al eliminar</div>';
    }
}

?>