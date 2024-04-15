<?php

    if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["id"]) and !empty($_POST["cliente"]) and !empty($_POST["cpa"]) and !empty($_POST["fecha"]) and !empty($_POST["gb"])){
            $ID=$_POST["id"];
            $Cliente=$_POST["cliente"];
            $CPA=$_POST["cpa"];
            $Fecha=$_POST["fecha"];
            $Gb=$_POST["gb"];


            $sql=$conexion->query(" update recarga set id='$ID', cliente='$Cliente',cpa='$CPA' ,
            fecha='$Fecha', gb='$Gb' where id='$ID'");
            if ($sql==1) {
                echo '<div class="alert alert-success">Recarga registrada correctamente</div>';
                header("location:recargas.php");
                
            } else {
                echo '<div class="alert alert-danger">No se registro correctamente</div>';
            }
            header("location:recargas.php");
        } else{
            echo "<div class='alert alert-warning>Campos Vacios</div>";
        }
        header("location:recargas.php");
    }

?>