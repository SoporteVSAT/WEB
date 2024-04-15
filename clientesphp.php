<?php

       
            $server = "localhost";
            $username = "root";
            $password = "nachitoota13";
            $dbname = "phpdb";

            $conexion = new mysqli($server, $username, $password,$dbname);

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clientes</title>
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
    function eliminar(){
      var respuesta=confirm("¿Estas seguro/a que deseas eliminar?");
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
                  <a class="nav-link" href="servicios.php">Servicio</a>
                </li>
                <li>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-sm float-end " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    AGREGAR CLIENTE
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>





    <!-- ACA EMPIEZA EL FORMULARIO DE EDITAR -->

    <div class="modal fade" tabindex="-1" id="editar" aria-labelledby="editar" aria-hidden="true">

      <br>
      <br>
      <div class="modal-dialog m-auto">
        <div class="modal-content m-auto">
          <div class="modal-header m-auto">
            <form class="row g-2 needs-validation table-primary m-auto" action="<?= $_SERVER['PHP_SELF'] ?>" id="editar" method="post">
              <div class="input-group mb-3 ">


                <input type="text" id="idcliente" name="idcliente" placeholder="Cliente" required>

                <span class="input-group-text">---</span>

                <input type="text" id="idcoordenadas" name="idcoordenadas" placeholder="Coordenadas" required>

              </div>
              <div class="input-group mb-3">

                <input type="text" id="idequipo" name="idequipo" placeholder="Equipo" required>

                <span class="input-group-text">---</span>


                <input type="text" id="idprovincia" name="idprovincia" placeholder="Provincia" required>

              </div>

              <div class="input-group mb-3">

                <input type="text" id="idzona" name="idzona" placeholder="Zona" required>

              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit" name="registro">Editar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>














    <!-- ACA EMPIEZA EL FORMULARIO DE AGREGAR -->
    <div class="modal fade" tabindex="-1" id="exampleModal" aria-labelledby="exampleModal" aria-hidden="true">

      <br>
      <br>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario Clientes</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">CERRAR</button>
        </div>
            <form class="row g-2 needs-validation table-primary m-auto" id="miFormulario" method="post">

              <div class="input-group mb-3 ">

                <input type="text" id="idcliente" name="idcliente" placeholder="Cliente" required>

                <span class="input-group-text">---</span>

                <input type="text" id="idcoordenadas" name="idcoordenadas" placeholder="Coordenadas" required>

              </div>
              <div class="input-group mb-3">

                <input type="text" id="idequipo" name="idequipo" placeholder="Equipo" required>

                <span class="input-group-text">---</span>


                <input type="text" id="idprovincia" name="idprovincia" placeholder="Provincia" required>

              </div>

              <div class="input-group mb-3">

                <input type="text" id="idzona" name="idzona" placeholder="Zona" required>

              </div>

              <div class="col-md-10 position-relative">
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
              $nombre = $_POST['idcliente'];
              $coordenadas = $_POST['idcoordenadas'];
              $equipo = $_POST['idequipo'];
              $zona = $_POST['idzona'];

              $insertarDatos = "INSERT INTO cliente VALUES('','$nombre', '$coordenadas', '$equipo','$zona')";


              $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);
            }


            ?>

          </div>
        </div>
      </div>
    </div>



    <table class="table table-primary table-striped-columns" id="tablaDatos">
      <thead>
        <tr class="text-center">
          <th>#</th>
          <th>Nombre Cliente</th>
          <th>Coordenadas</th>
          <th>Equipo</th>
          <th>Zona</th>
          <th></th>

        </tr>
      </thead>

      <tbody>
        <?php
        include "conexion.php";
        include "eliminarclientes.php";
        include "conexion.php";
        $sql = $conexion->query(" select * from cliente ");
        while ($datos = $sql->fetch_object()) {
        ?>


          <tr>
            <td><?= $datos->ID ?> </td>
            <td><?= $datos->Nombre ?> </td>
            <td><?= $datos->Coordenadas ?> </td>
            <td><?= $datos->Equipo ?> </td>
            <td><?= $datos->Zona ?> </td>
            <td>
              <a href="modificarclientes.php?id=<?= $datos->ID?>" class="btn btn-small btn-warning"><img src="images/pencil-fill.svg" alt="" ></a>
              <a onclick="return eliminar()" href="clientesphp.php?id=<?= $datos->ID?>" class="btn btn-small btn-danger"><img src="images/archive-fill.svg" alt=""></a>
            </td>
          </tr>

      </tbody>
    <?php
        }
    ?>
    </table>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</html>