<?php 
          include "conexion.php" ;
          if (isset($_POST['btnagregar'])){
            if (!empty($_POST["id"]) and !empty($_POST["cantidad"])) {
                $Cantidad++;
                $ID = $_POST['id'];
                $Cantidad = $_POST['cantidad'];
                $sql=$conexion->query(" update stockRouter set id='$ID' cantidad='$Cantidad' + 1 where id='$ID' ");
        }
        }

        ?>