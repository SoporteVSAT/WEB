<?php

    if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["id"]) and !empty($_POST["cliente"]) and !empty($_POST["cpa"]) and !empty($_POST["comentarios"]) and !empty($_POST["fecha"])){
            $Id=$_POST["id"];
            $Cliente=$_POST["cliente"];
            $Cpa=$_POST["cpa"];
            $Comentarios=$_POST["comentarios"];
            $Fecha=$_POST["fecha"];


            $sql=$conexion->query(" update historicomodem set id='$ID', cliente='$Cliente',cpa='$Cpa', 
            comentarios='$Comentarios', fecha='$Fecha' where id='$ID'");
            if ($sql==1) {
                echo '<div class="alert alert-success">Historico de modem registrado correctamente</div>';
            } else {
                echo '<div class="alert alert-danger">No se registro correctamente</div>';
            }
        } else{
            echo "<div class='alert alert-warning>Campos Vacios</div>";
        }
    }

?>