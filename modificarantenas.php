

<?php
$server = "localhost";
$username = "root";
$password = "nachitoota13";
$dbname = "phpdb";

$conexion = new mysqli($server, $username, $password, $dbname);

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificar Antenas</title>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                  <a class="nav-link" href="clientesphp.php">Clientes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="servicios.php">Servicio</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <form class="col-4 p-3 m-auto" method="POST">
      <h5 class="text-center alert alert-secondary">Modificar Antenas</h5>
      <input type="hidden" name="id" value="<?= $_GET["id"]  ?>">

      <?php

      include "editarantenas.php";
      $ID = $_GET["id"];
      $sql = $conexion->query("select * from todaslasantenas where id=$ID");
      while ($datos = $sql->fetch_object()) { ?>

        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Estado</label>
          <input type="text" name="estado" class="form-control" id="estado" value="<?= $datos->Estado ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">CPA</label>
          <input type="number" name="cpa" class="form-control" id="cpa" value="<?= $datos->CPA ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Proveedor</label>
          <input type="text" name="proveedor" class="form-control" id="proveedor" value="<?= $datos->Proveedor ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Modem</label>
          <input type="text" name="modem" class="form-control" id="modem" value="<?= $datos->Modem ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Cliente</label>
          <input type="text" name="cliente" class="form-control" id="cliente" value="<?= $datos->Cliente ?>">
        </div>
        <div class="mb-1">
          <div class="mb-1">
            <label for="exampleInputPassword1" class="form-label">Coordenadas</label>
            <input type="text" name="coordenadas" class="form-control" id="coordenadas" value="<?= $datos->Coordenadas ?>">
          </div>
          <div class="mb-1">
            <label for="exampleInputPassword1" class="form-label">Equipo</label>
            <input type="text" name="equipo" class="form-control" id="equipo" value="<?= $datos->Equipo ?>">
          </div>
          <label for="exampleInputPassword1" class="form-label">Zona</label>
          <input type="text" name="zona" class="form-control" id="zona" value="<?= $datos->Zona ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Mac</label>
          <input type="text" name="mac" class="form-control" id="mac" value="<?= $datos->Mac ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Plan</label>
          <input type="text" name="plan" class="form-control" id="plan" value="<?= $datos->Plan ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Ip Publica</label>
          <input type="text" name="ippublica" class="form-control" id="ippublica" value="<?= $datos->Ippublica ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Ip Privada</label>
          <input type="text" name="ipprivada" class="form-control" id="ipprivada" value="<?= $datos->Ipprivada ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Fecha Instalacion</label>
          <input type="text" name="fechainstalacion" class="form-control" id="fechainstalacion" value="<?= $datos->FechaInstalacion ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Beam</label>
          <input type="text" name="beam" class="form-control" id="beam" value="<?= $datos->Beam ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Cuota</label>
          <input type="text" name="cuota" class="form-control" id="cuota" value="<?= $datos->Cuota ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Recarga</label>
          <input type="text" name="recarga" class="form-control" id="recarga" value="<?= $datos->Recarga ?>">
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Router</label>
          <input type="text" name="router" class="form-control" id="router" value="<?= $datos->Router ?>">
        </div>
      <?php    }

      ?>


      <button type="submit" class="btn btn-primary mb-1" name="btnregistrar" id="btnregistrar" value="ok">EDITAR</button>
      <a href="todasLasAntenas.php" class="btn btn-warning mb-1">VOLVER</a>
    </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</html>