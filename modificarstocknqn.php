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
$sql = $conexion->query("select * from stocknqn where ID=$id");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Stock NQN</title>
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
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    <form class="col-4 p-3 m-auto" method="POST">
      <h5 class="text-center alert alert-secondary">Modificar Stock NQN</h5>
      <input type="hidden" name="id" id="id" value="<?= $_GET["id"]  ?>">

      <?php

      include "editarstocknqn.php";
      $ID = $_GET["id"];
      $sql = $conexion->query("select * from stocknqn where id='$ID'");
      while ($datos = $sql->fetch_object()) { ?>


            <div class="row g-5">
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label">Nombre de Producto</label>
                    <input type="text" name="producto" class="form-control" id="producto" value="<?= $datos->Producto ?>">
                </div>
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label">Cantidad de Producto</label>
                    <input type="number" name="cantidad" class="form-control" id="cantidad" value="<?= $datos->Cantidad ?>">
                </div>
            </div>

            <?php    }

            ?>

            <button type="submit" class="btn btn-primary mb-1" name="btnregistrar" id="btnregistrar" value="ok">EDITAR</button>
            <a href="stockNqn.php" class="btn btn-warning mb-1">VOLVER</a>

    </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</html>