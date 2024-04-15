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
  <title>Todas las Antenas TELEFONICA</title>
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

  <script>
    function eliminar() {
      var respuesta = confirm("¿Estas seguro/a que deseas eliminar?");
      return respuesta;
    }
  </script>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section ">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              SCYS
            </span>
          </a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">INICIO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="servicios.php">Servicios</a>
                <li class="nav-item">
                  <a class="nav-link" href="clientesphp.php">Clientes</a>
                </li>
                <li>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    -
                  </button>
                </li>
              </ul>
            </div>
        </nav>
      </div>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">FILTROS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="todaslasantenasarsat.php">Arsat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="todaslasantenasorbith.php">Orbith</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="todaslasantenastelespazio.php">Telespazio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="todaslasantenastelefonica.php">Telefonica</a>
            </li>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Filtrar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Filtrar</button>
            </form>
          </ul>
        </div>
      </div>
  </div>
  </header>

  <h1 class="text-center">LISTADO DE ANTENAS TELEFONICA</h1>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <br>
    <br>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario Antenas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <form class="table-primary" id="miFormulario" method="post">



          <div>
            <label for="center">Estado</label>

            <input type="text" class="form-control" placeholder="Estado" id="estado" name="estado">
          </div>


          <div>
            <label for="center">CPA</label>

            <input type="number" class="form-control" placeholder="CPA" id="cpa" name="cpa">
          </div>

          <div>
            <label for="center">Proveedor</label>

            <input type="text" class="form-control" id="proveedor" name="proveedor" placeholder="Proveedor">

          </div>

          <div>
            <label for="center">Modem</label>

            <input type="text" class="form-control" id="modem" name="modem" placeholder="Modem">

          </div>

          <div>
            <label for="center">Cliente</label>

            <input type="text" id="cliente" class="form-control" name="cliente" placeholder="Nombre Cliente">
          </div>


          <div>
            <label for="center">Coordenadas</label>

            <input type="text" id="coordenadas" class="form-control" name="coordenadas" placeholder="Coordenadas">


          </div>

          <div>
            <label for="center">Equipo</label>

            <input type="text" id="equipo" class="form-control" name="equipo" placeholder="Equipo">
          </div>

          <div>
            <label for="center">Zona</label>

            <input type="text" class="form-control" id="zona" name="zona" placeholder="Zona">

          </div>

          <div>
            <label for="center">Mac</label>

            <input type="text" id="mac" class="form-control" name="mac" placeholder="Mac">
          </div>

          <div>
            <label for="center">Plan</label>
            <input type="text" class="form-control" id="plan" name="plan" placeholder="Plan">

          </div>

          <div>
            <label for="center">Ip Publica</label>

            <input type="text" id="ippublica" class="form-control" name="ippublica" placeholder="IpPublica">
          </div>
          <div>
            <label for="center">Ip Privada</label>

            <input type="text" id="ipprivada" class="form-control" name="ipprivada" placeholder="IpPrivada">

          </div>

          <div>
            <label for="center">Fecha Instalacion</label>

            <input type="text" class="form-control" id="fechainstalacion" name="fechainstalacion" placeholder="FechaInstalacion">
          </div>

          <div>
            <label for="center">Beam</label>

            <input type="text" class="form-control" id="beam" name="beam" placeholder="Beam">


          </div>
          <div>
            <label for="center">Cuota</label>

            <input type="text" class="form-control" id="cuota" name="cuota" placeholder="Cuota">


          </div>

          <div>
            <label for="center">Recarga</label>

            <input type="text" class="form-control" id="recarga" name="recarga" placeholder="Recarga">

          </div>

          <div>
            <label for="center">Router</label>

            <input type="text" class="form-control" id="router" name="router" placeholder="Router">

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="registroantenas">Guardar</button>
          </div>

        </form>


        <?php
        include "conexion.php";

        if (isset($_POST['registroantenas'])) {
          $ID = $_POST["id"];
          $Estado = $_POST['estado'];
          $CPA = $_POST['cpa'];
          $Proveedor = $_POST['proveedor'];
          $Modem = $_POST['modem'];
          $Cliente = $_POST['cliente'];
          $Coordenadas = $_POST['coordenadas'];
          $Equipo = $_POST['equipo'];
          $Zona = $_POST['zona'];
          $Mac = $_POST['mac'];
          $Plan = $_POST['plan'];
          $Ippublica = $_POST['ippublica'];
          $Ipprivada = $_POST['ipprivada'];
          $FechaInstalacion = $_POST['fechainstalacion'];
          $Beam = $_POST['beam'];
          $Cuota = $_POST['cuota'];
          $Recarga = $_POST['recarga'];
          $Router = $_POST['router'];

          $insertarDatos = "INSERT INTO todaslasantenas VALUES('','$Estado', '$CPA','$Proveedor'
            ,'$Modem','$Cliente','$Coordenadas', '$Equipo','$Zona','$Mac','$Plan','$Ippublica','$Ipprivada'
            ,'$FechaInstalacion','$Beam','$Cuota','$Recarga','$Router')";


          $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);
        }


        ?>

      </div>
    </div>
  </div>
  </div>


  <table class="table table-striped-columns" id="tabladatos">
    <thead class="table-dark text-center">
      <tr>
        <th>#</th>
        <th>Estado</th>
        <th>CPA</th>
        <th>Proveedor</th>
        <th>Modem</th>
        <th>Cliente</th>
        <th>Coordenadas</th>
        <th>Equipo</th>
        <th>Zona</th>
        <th>Mac</th>
        <th>Plan</th>
        <th>Ip Publica</th>
        <th>Ip Privada</th>
        <th>FechaInstalacion</th>
        <th>Beam</th>
        <th>Cuota</th>
        <th>Recarga</th>
        <th>Router</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "conexion.php";
      include "eliminarantenas.php";
      include "conexion.php";
      $sql = $conexion->query(" select * from todaslasantenas where Proveedor='Telefonica' ");
      while ($datos = $sql->fetch_object()) {
      ?>


        <tr>
          <td><?= $datos->ID ?>
            <br>
            <a href="modificarantenas.php?id=<?= $datos->ID ?>" class="btn-small"><img src="images/pencil-fill.svg" alt=""></a>
            <a onclick="return eliminar()" href="todasLasAntenas.php?id=<?= $datos->ID ?>" class="btn-small"><img src="images/archive-fill.svg" alt=""></a>
          </td>
          <td><?= $datos->Estado ?> </td>
          <td><?= $datos->CPA ?> </td>
          <td><?= $datos->Proveedor ?> </td>
          <td><?= $datos->Modem ?> </td>
          <td><?= $datos->Cliente ?> </td>
          <td><?= $datos->Coordenadas ?> </td>
          <td><?= $datos->Equipo ?> </td>
          <td><?= $datos->Zona ?> </td>
          <td><?= $datos->Mac ?> </td>
          <td><?= $datos->Plan ?> </td>
          <td><?= $datos->Ippublica ?> </td>
          <td><?= $datos->Ipprivada ?> </td>
          <td><?= $datos->FechaInstalacion ?> </td>
          <td><?= $datos->Beam ?> </td>
          <td><?= $datos->Cuota ?> </td>
          <td><?= $datos->Recarga ?> </td>
          <td><?= $datos->Router ?> </td>
        </tr>

    </tbody>
  <?php
      }
  ?>


  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>