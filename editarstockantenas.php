<?php

    if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["id"]) and !empty($_POST["producto"]) and !empty($_POST["cantidad"]) ){
            $ID=$_POST["id"];
            $Producto=$_POST["producto"];
            $Cantidad=$_POST["cantidad"];



            $sql=$conexion->query(" update stockantenas set id='$ID', producto='$Producto', cantidad='$Cantidad' where id='$ID'");
            if ($sql==1) {
                header("location:stockAntenas.php");
                echo '<div class="alert alert-success">Antena registrada correctamente</div>';
                header("location:stockAntenas.php");
            } else {
                echo '<div class="alert alert-danger">No se registro correctamente</div>';
            }
        } else{
            echo "<div class='alert alert-warning>Campos Vacios</div>";
        }
        header("location:stockAntenas.php");

    }

?>