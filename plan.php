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
  <title>Planes</title>
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
  <script>
    function eliminar() {
      var respuesta = confirm("¿Estas seguro/a que deseas eliminar?");
      return respuesta;
    }
  </script>
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
                <li class="nav-item">
                  <a class="nav-link" href="clientesphp.php">Clientes</a>
                </li>
              </ul>
            </div>
          </div>

        </nav>
      </div>
    </header>


    <div class="text-center">

    </div>
    <div>
      <form class="table-warning" id="miFormulario" method="POST">
      <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Formulario PLANES</h1>
        <?php
        include "conexion.php";
        include "editarplan.php";
        include "eliminarplan.php";

        ?>


        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nombre Plan</label>
          <input type="text" class="form-control" name="nombre" id="idnombre" placeholder="Nombre de Plan">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">GB</label>
          <input type="number" class="form-control" name="gb" id="idgb" placeholder="GB de plan">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Costo</label>
          <input type="number" class="form-control" name="costo" id="idcosto" placeholder="Costo de Plan">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Venta</label>
          <input type="number" class="form-control" name="venta" id="idventa" placeholder="Venta de plan">

        </div>

        <div class="col-12">
          <button class="btn btn-primary" type="submit" name="btnregistrar" value="ok">Guardar</button>
        </div>
      </form>
      <table class="table table-dark table-striped-columns ">
        <thead>
          <tr class="text-center">
            <th>ID</th>
            <th>Nombre Plan</th>
            <th>GB</th>
            <th>Costo</th>
            <th>Venta</th>
            <th></th>
          </tr>

        </thead>
        <tbody>
          <?php
          include "conexion.php";
          $sql = $conexion->query(" select * from plan ");
          while ($datos = $sql->fetch_object()) {
          ?>

            <tr>
              <td><?= $datos->Id ?> </td>
              <td><?= $datos->Nombre ?> </td>
              <td><?= $datos->Gb ?> </td>
              <td><?= $datos->Costo ?> </td>
              <td><?= $datos->Venta ?> </td>
              <td>
                <a onclick="return eliminar()" href="plan.php?id=<?= $datos->Id ?>" class="btn btn-small btn-danger"><img src="images/archive-fill.svg" alt=""></a>
              </td>
            </tr>

        </tbody>
      <?php
          }
      ?>
      </table>

      <?php

      if (isset($_POST['btnregistrar'])) {
        $Id = $_POST['id'];
        $Nombre = $_POST['nombre'];
        $Gb = $_POST['gb'];
        $Costo = $_POST['costo'];
        $Venta = $_POST['venta'];




        $insertarDatos = "INSERT INTO plan VALUES('','$Nombre', '$Gb', '$Costo','$Venta')";


        $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);
      }



      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>