<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historico</title>
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
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="servicios.html">Servicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="clientesphp.php">Clientes</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <div class="table-secondary">
      <h1 class="text-center" id="titulostocknqn">Historico de Modems</h1>
    </div>

    <div>
        <form method="POST" id="miFormulario">
        <?php
            include "conexion.php";
            include "editarhistorico.php";
            include "eliminarhistorico.php";

            ?>

          <div class="row g-5">
            <div class="col-sm">
              <label for="exampleFormControlInput1">Nombre de Cliente</label>
              <input type="text" class="form-control" placeholder="Nombre Cliente" name="cliente" id="cliente" >
            </div>
            <div class="col-sm">
              <label for="exampleFormControlInput1">CPA</label>
              <input type="number" class="form-control" placeholder="CPA" name="cpa" id="cpa" >
            </div>
            <div class="col-sm">
              <label for="exampleFormControlInput1">Comentarios</label>
              <input type="text" class="form-control" placeholder="Comentarios" name="comentarios" id="comentarios" >
            </div>
            <div class="col-sm">
              <label for="exampleFormControlInput1">Fecha</label>
              <input type="text" class="form-control" placeholder="Fecha" name="fecha" id="fecha" >
            </div>
          </div>
          <div class="col-sm">
            <button class="btn btn-primary" type="submit" name="btnregistrar" value="ok">Guardar</button>
          </div>
        </form>
        <table class="table table-secondary table-striped-columns ">
          <thead>
            <tr class="text-center">
              <th>#</th>
              <th>Nombre de Cliente</th>
              <th>CPA</th>
              <th>Comentarios</th>
              <th>Fecha</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "conexion.php";
            $sql = $conexion->query(" select * from historicomodem ");
            while ($datos = $sql->fetch_object()) {
            ?>

              <tr>
                  
                <td><?= $datos->ID ?> </td>
                <td><?= $datos->Cliente ?> </td>
                <td><?= $datos->Cpa ?> </td>
                <td><?= $datos->Comentarios ?> </td>
                <td><?= $datos->Fecha ?> </td>
                <td>
                <a onclick="return eliminar()" href="historico.php?id=<?= $datos->ID ?>" class="btn btn-small btn-danger"><img src="images/archive-fill.svg" alt=""></a>
                
                </td>

              </tr>

          </tbody>
        <?php
            }
        ?>
        </table>

        <?php
        include "conexion.php";

        if (isset($_POST['btnregistrar'])) {
          $ID = $_POST['id'];
          $Cliente = $_POST['cliente'];
          $Cpa = $_POST['cpa'];
          $Comentarios = $_POST['comentarios'];
          $Fecha = $_POST['fecha'];


          $insertarDatos = "insert into historicomodem values('','$Cliente', '$Cpa', '$Comentarios', '$Fecha')";


          $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);
        }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>