<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["id"]) and !empty($_POST["producto"]) and !empty($_POST["cantidad"])) {
        $ID = $_POST["id"];
        $Producto = $_POST["producto"];
        $Cantidad = $_POST["cantidad"];



        $sql = $conexion->query(" update stocknqn set id='$ID', producto='$Producto', cantidad='$Cantidad' where id='$ID'");
        if ($sql==1) {
            header("location:stockNqn.php");
            echo '<div>Stock NQN Agregado Correctamente</div>';
        } else {
            echo "<div class='alert alert-danger'> Error al modificar producto</div>";
        }
    } else {
        echo "<div class='alert alert-warning>Campos Vacios</div>";
    }
    header("location:stockNqn.php");
}
