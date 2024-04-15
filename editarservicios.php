<?php
    include "conexion.php";

    if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["remito"]) and !empty($_POST["fecharemito"]) and !empty($_POST["cliente"]) and !empty($_POST["tipodetrabajo"]) and !empty($_POST["valordetrabajo"]) and !empty($_POST["oc"]) and !empty($_POST["estado"]) and !empty($_POST["factura"]) and !empty($_POST["cpa"]) and !empty($_POST["comentarios"])){
            $id=$_POST["id"];
            $remito=$_POST["remito"];
            $fecharemito=$_POST["fecharemito"];
            $cliente=$_POST["cliente"];
            $tipodetrabajo=$_POST["tipodetrabajo"];
            $valordetrabajo=$_POST["valordetrabajo"];
            $oc=$_POST["oc"];
            $estado=$_POST["estado"];
            $factura=$_POST["factura"];
            $cpa=$_POST["cpa"];
            $comentarios=$_POST["comentarios"];
           

            $sql=$conexion->query(" update serviciofac set ID='$id', Nremito='$remito', Fecharemito='$fecharemito', Cliente='$cliente', Tipodetrabajo='$tipodetrabajo', Valordetrabajo='$valordetrabajo', Oc='$oc', Estado='$estado', Factura='$factura', CPA='$cpa', Comentarios='$comentarios' where ID='$id'");
            if ($sql==1) {
                header("location:servicios.php");
            } else {
                echo "<div class='alert alert-danger'> Error al modificar producto</div>";
            }
        
        } else{
            echo "<div class='alert alert-warning>Campos Vacios</div>";
        }
    }

?> 