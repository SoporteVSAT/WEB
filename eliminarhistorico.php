<?php
include "conexion.php";
if (!empty($_GET["id"])){
    $ID=$_GET["id"];
    $sql=$conexion->query (" delete from historicomodem where id='$ID'");
    if ($sql==1){
        echo '<div>Historico eliminado Eliminado Correctamente</div>';
    } else{
        echo '<div> Error al eliminar</div>';
    }
}

?>