<?php
  session_start();
include "../pags/conexion.php";
include "../categorias/categorias.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Inicio
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca de nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pags/contacto.php">Contacto
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../categorias/crear_categorias.php">Categorías
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="crear_productos.php">Productos
            <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Mi tienda</h1>
        <div class="list-group">
          <?php
            
            menu_categorias(true,$conexion);

          ?>
          
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://lorempixel.com/900/350/cats/" alt="First slide">
            </div>
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          

          

          <div class="col-lg-12 col-md-6 mb-4">
            <div class="card h-100">
              
              
            <div class="card-body">
                <h4 class="card-title">
                <h3>Crear nuevo producto</h3>
                </h4>
                <?php 
                
                  if(isset($_SESSION['error_productos'])){
                    echo "<div class='alert alert-danger'>".$_SESSION['error_productos']."</div>";
                    session_unset();
                  }
                ?>
                <form action="alta_producto.php" method="post">
                 
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe el nombre del producto">
                  </div>
                  <div class="form-group">
                    <label for="pregunta">Descripción del producto</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" id="precio" name="precio" placeholder="Escribe el precio del producto">
                  </div>

                  <div class="form-group">
                    <label for="precio">Categoría:</label>
                    <select class="form-control" id="categoria" name="categoria">
                      <option value="0">Seleccione a qué categoría pertenece...</option>
                      <?php
                          $categorias = getCategorias($conexion);
                          foreach($categorias as $categoria){
                            echo '<option value="'.$categoria['id'].'">'.$categoria['nombre'].'</option>';
                          }
                      ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Guardar producto</button>
                </form>    

            </div>


              <div class="card-footer">
                <a href="gestionar_productos.php">Ir a gestionar los productos</a>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
