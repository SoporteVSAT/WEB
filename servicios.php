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
  <title>Servicios</title>
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
                <li>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    AGREGAR SERVICIO
                  </button>
                </li>
              </ul>
            </div>
          </div>

        </nav>
      </div>
    </header>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
      <br>
      <br>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario Servicios</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">CERRAR</button>
          </div>

          <form class="table-primary" id="miFormulario" method="post">


            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Remito</label>
              <input type="text" class="form-control" name="remito" id="remito" placeholder="NºRemito">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Fecha Remito</label>
              <input type="text" class="form-control" name="fecharemito" id="fecharemito" placeholder="Fecha de remito">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Cliente</label>
              <input type="text" class="form-control" name="cliente" id="cliente" placeholder="Nombre cliente">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Tipo de trabajo</label>
              <br>
              <input type="text" class="form-control" name="tipodetrabajo" id="tipodetrabajo" placeholder="Tipo de trabajo">

            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Valor de trabajo</label>
              <input type="text" class="form-control" name="valordetrabajo" id="valordetrabajo" placeholder="Valor de trabajo">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Orden de trabajo</label>
              <input type="text" class="form-control" name="oc" id="oc" placeholder="OC">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Estado</label>
              <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">

            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Factura</label>
              <input type="text" class="form-control" name="factura" id="factura" placeholder="Factura">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">CPA</label>
              <input type="text" class="form-control" name="cpa" id="cpa" placeholder="CPA">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
              <input type="text" class="form-control" name="comentarios" id="comentarios" placeholder="Comentarios">
            </div>



            <div class="mb-3">
              <label for="validationTooltip03" class="form-label">Archivar OC</label>
              <input type="file" class="form-control" aria-label="file example">
              <div class="invalid-feedback">Archivar OC</div>
            </div>

            <div class="col-12">
              <button class="btn btn-primary" type="submit" name="registro">Guardar</button>
            </div>
          </form>

          <?php
          include "conexion.php";

          if (isset($_POST['registro'])) {
            $ID = $_POST["id"];
            $remito = $_POST['remito'];
            $fecharemito = $_POST['fecharemito'];
            $cliente = $_POST['cliente'];
            $tipodetrabajo = $_POST['tipodetrabajo'];
            $valordetrabajo = $_POST['valordetrabajo'];
            $oc = $_POST['oc'];
            $estado = $_POST['estado'];
            $factura = $_POST['factura'];
            $cpa = $_POST['cpa'];
            $comentarios = $_POST['comentarios'];


            $insertarDatos = "INSERT INTO serviciofac VALUES('','$remito', '$fecharemito', '$cliente','$tipodetrabajo','$valordetrabajo','$oc','$estado','$factura','$cpa','$comentarios')";


            $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);
          }



          ?>

        </div>
      </div>
    </div>
  </div>


  <table class="table table-dark table-striped-columns ">
    <thead>
      <tr class="text-center">
        <th>ID</th>
        <th>NºRemito</th>
        <th>Fecha</th>
        <th>Cliente</th>
        <th>Tipo de Trabajo</th>
        <th>Se Facturo?</th>
        <th>Valor de trabajo</th>
        <th>OC</th>
        <th>Estado</th>
        <th>Factura</th>
        <th>CPA</th>
        <th>Comentarios</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "conexion.php";
      include "eliminarservicios.php";
      include "conexion.php";
      $sql = $conexion->query(" select * from serviciofac ");
      while ($datos = $sql->fetch_object()) {
      ?>

        <tr>
          <td><?= $datos->ID ?> </td>
          <td><?= $datos->Nremito ?> </td>
          <td><?= $datos->Fecharemito ?> </td>
          <td><?= $datos->Cliente ?> </td>
          <td><?= $datos->Tipodetrabajo ?> </td>
          <td>
            <select name="selectfacturo">
            <option name="sefacturo">Si</option>
            <option name="sefacturo">No</option>
            </select>
          </td>
          <td><?= $datos->Valordetrabajo ?> </td>
          <td><?= $datos->Oc ?> </td>
          <td><?= $datos->Estado ?> </td>
          <td><?= $datos->Factura ?> </td>
          <td><?= $datos->CPA ?> </td>
          <td><?= $datos->Comentarios ?></td>
          <td>            
            <a href="modificarservicios.php?id=<?= $datos->ID ?>" class="btn btn-small btn-warning"><img src="images/pencil-fill.svg" alt=""></a>
            <a onclick="return eliminar()" href="servicios.php?id=<?= $datos->ID ?>" class="btn btn-small btn-danger"><img src="images/archive-fill.svg" alt=""></a>
          </td>
        </tr>

    </tbody>
  <?php
      }
  ?>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>