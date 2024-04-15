

<?php

    if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["coordenadas"]) and !empty($_POST["equipo"]) and !empty($_POST["zona"])){
            $id=$_POST["id"];
            $nombre=$_POST["nombre"];
            $coordenadas=$_POST["coordenadas"];
            $equipo=$_POST["equipo"];
            $zona=$_POST["zona"];

            $sql=$conexion->query(" update cliente set ID='$id', Nombre='$nombre', 
            Coordenadas='$coordenadas', Equipo='$equipo', Zona='$zona' where ID='$id'");
            if ($sql==1) {
                header("location:clientesphp.php");
            } else {
                echo "<div class='alert alert-danger'> Error al modificar producto</div>";
            }
        } else{
            echo "<div class='alert alert-warning>Campos Vacios</div>";
        }
    }

?>

