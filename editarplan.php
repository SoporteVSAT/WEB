<?php

    if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["gb"]) and !empty($_POST["costo"]) and !empty($_POST["venta"])){
            $Id=$_POST["id"];
            $Nombre=$_POST["nombre"];
            $Gb=$_POST["gb"];
            $Costo=$_POST["costo"];
            $Venta=$_POST["venta"];


            $sql=$conexion->query(" update plan set id='$Id', nombre='$Nombre',gb='$Gb', 
            costo='$Costo', venta='$Venta' where id='$Id'");
            if ($sql==1) {
                echo '<div class="alert alert-success">Plan registrada correctamente</div>';
                header("location:plan.php");
            } else {
                echo '<div class="alert alert-danger">No se registro correctamente</div>';
            }
        } else{
            echo "<div class='alert alert-warning>Campos Vacios</div>";
        }
        header("location:plan.php");
    }

?>