<?php
include "conexion.php";
if (!empty($_GET["id"])){
    $Id=$_GET["id"];
    $sql=$conexion->query (" delete from plan where id='$Id'");
    if ($sql==1){
        echo '<div>Plan Eliminado Correctamente</div>';
    } else{
        echo '<div> Error al eliminar</div>';
    }
}

?>