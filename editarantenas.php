

<?php
    include "conexion.php";
    if (!empty($_POST["btnregistrar"])) {
        
        if (!empty($_POST["estado"]) and !empty($_POST["cpa"]) and !empty($_POST["proveedor"]) and !empty($_POST["modem"]) and !empty($_POST["cliente"])and !empty($_POST["coordenadas"]) and !empty($_POST["equipo"]) and !empty($_POST["zona"])and !empty($_POST["mac"]) and !empty($_POST["plan"]) and !empty($_POST["ippublica"])and !empty($_POST["ipprivada"]) and !empty($_POST["fechainstalacion"]) and !empty($_POST["beam"])and !empty($_POST["cuota"]) and !empty($_POST["recarga"]) and !empty($_POST["router"])){
            $id = $_POST["id"];
            $Estado = $_POST["estado"];
            $CPA = $_POST["cpa"];
            $Proveedor = $_POST["proveedor"];
            $Modem = $_POST["modem"];
            $Cliente = $_POST["cliente"];
            $Coordenadas = $_POST["coordenadas"];
            $Equipo = $_POST["equipo"];
            $Zona = $_POST["zona"];
            $Mac = $_POST["mac"];
            $Plan = $_POST["plan"];
            $Ippublica = $_POST["ippublica"];
            $Ipprivada = $_POST["ipprivada"];
            $FechaInstalacion = $_POST["fechainstalacion"];
            $Beam = $_POST["beam"];
            $Cuota = $_POST["cuota"];
            $Recarga = $_POST["recarga"];
            $Router = $_POST["router"];

            $sql=$conexion->query("update todaslasantenas set ID='$id', estado='$Estado', cpa='$CPA', proveedor='$Proveedor', modem='$Modem', cliente='$Cliente', coordenadas='$Coordenadas', equipo='$Equipo', zona='$Zona', mac='$Mac', plan='$Plan', ippublica='$Ippublica', ipprivada='$Ipprivada', fechaInstalacion='$FechaInstalacion', beam='$Beam', cuota='$Cuota', recarga='$Recarga', router='$Router' where ID='$id'");
            if ($sql==1) {
                header("location:todasLasAntenas.php");
            } else {
                echo "<div class='alert alert-danger'> Error al modificar producto</div>";
            }

        } else {
            echo "<div class='alert alert-warning>Campos Vacios</div>";
        }
    }

?>

