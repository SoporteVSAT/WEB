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
  <title>Recargas</title>
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
  </div>



  <div>
    <form class="table-success" id="miFormulario" method="POST">
      <div class="text-center">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario Recargas</h1>
      </div>
      <?php
      include "conexion.php";
      include "editarrecargas.php";
      include "eliminarrecargas.php";

      ?>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Cliente</label>
        <input type="text" class="form-control" name="cliente" id="idcliente" placeholder="Nombre de cliente">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">CPA</label>
        <input type="number" class="form-control" name="cpa" id="idcpa" placeholder="CPA">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Fecha de recarga</label>
        <input type="text" class="form-control" name="fecha" id="idfecha" placeholder="Fecha de recarga">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">GB</label>
        <input type="number" class="form-control" name="gb" id="idgb" placeholder="GB">

      </div>

      <div class="col-12">
        <button class="btn btn-primary" type="submit" name="btnregistrar" value="ok">Guardar</button>
      </div>
    </form>


    <table class="table table-dark table-striped-columns ">
      <thead>
        <tr class="text-center">
          <th>ID</th>
          <th>Cliente</th>
          <th>CPA</th>
          <th>Fecha</th>
          <th>GB</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        <?php
        include "conexion.php";
        $sql = $conexion->query(" select * from recarga ");
        while ($datos = $sql->fetch_object()) {
        ?>
          <tr>
            <td><?= $datos->ID ?> </td>
            <td><?= $datos->Cliente ?> </td>
            <td><?= $datos->CPA ?> </td>
            <td><?= $datos->Fecha ?> </td>
            <td><?= $datos->Gb ?> </td>
            <td>
              <a onclick="return eliminar()" href="recargas.php?id=<?= $datos->ID ?>" class="btn btn-small btn-danger"><img src="images/archive-fill.svg" alt=""></a>
            </td>
          </tr>
      </tbody>

    <?php
        }
    ?>
    </table>

    <?php

    if (isset($_POST['btnregistrar'])) {
      $ID = $_POST['id'];
      $Cliente = $_POST['cliente'];
      $CPA = $_POST['cpa'];
      $Fecha = $_POST['fecha'];
      $Gb = $_POST['gb'];




      $insertarDatos = "INSERT INTO recarga VALUES('','$Cliente','$CPA', '$Fecha', '$Gb')";


      $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);
    }



    ?>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>