<?php
$server = "localhost";
$username = "root";
$password = "nachitoota13";
$dbname = "phpdb";

$conexion = new mysqli($server, $username, $password, $dbname);

?>

<?php

include "conexion.php";
$id = $_GET["id"];
$sql = $conexion->query("select * from serviciofac where ID=$id");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Servicios</title>
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              SCYS
            </span>
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">INICIO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="todaslasantenas.php">Todas Las Antenas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="clientesphp.php">Clientes</a>
                </li>
                <li>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-sm float-end " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    AGREGAR SERVICIOS
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <form class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center alert alert-secondary">Editar Servicios</h5>
        <input type="hidden" name="id" value="<?= $_GET["id"]  ?>">
        <?php
       
        include "editarservicios.php";
        $ID = $_GET["id"];
        $sql = $conexion->query("select * from serviciofac where id=$ID");
        while ($datos = $sql->fetch_object()) { ?>

            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">NºRemito</label>
                <input type="text" name="remito" class="form-control" id="remito" value="<?= $datos->Nremito ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Fecha remito</label>
                <input type="text" name="fecharemito" class="form-control" id="fecharemito" value="<?= $datos->Fecharemito ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Cliente</label>
                <input type="text" name="cliente" class="form-control" id="cliente" value="<?= $datos->Cliente ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Tipo de trabajo</label>
                <input type="text" name="tipodetrabajo" class="form-control" id="tipodetrabajo" value="<?= $datos->Tipodetrabajo ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Valor de trabajo</label>
                <input type="text" name="valordetrabajo" class="form-control" id="valordetrabajo" value="<?= $datos->Valordetrabajo ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Oc</label>
                <input type="text" name="oc" class="form-control" id="oc" value="<?= $datos->Oc ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Estado</label>
                <input type="text" name="estado" class="form-control" id="estado" value="<?= $datos->Estado ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Factura</label>
                <input type="text" name="factura" class="form-control" id="factura" value="<?= $datos->Factura ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">CPA</label>
                <input type="text" name="cpa" class="form-control" id="cpa" value="<?= $datos->CPA ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Comentarios</label>
                <input type="text" name="comentarios" class="form-control" id="comentarios" value="<?= $datos->Comentarios ?>">
            </div>

        <?php    }

        ?>
    

        <button type="submit" class="btn btn-primary mb-1" name="btnregistrar" id="btnregistrar" value="ok">EDITAR</button>
        <a href="servicios.php" class="btn btn-warning mb-1">VOLVER</a>
    </form>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</html>