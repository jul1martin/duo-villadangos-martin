<!DOCTYPE html>
<html lang="en">
<head>
  <?php require("../public/basics/head.php") ?>

  <title>Villadangos & Martin | Disco Solo Piazzolla.</title>

</head>
<body>

  <?php require("../public/basics/nav.php") ?>

  <h1 class="indextitulo">Duo Villadangos-Martín</h1>
  <div class="container centrarcar">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../assets/fotos/foto-duo1.bmp" class="d-block tamañoimagen" alt="Imagen de Saul Martin">
        </div>
        <div class="carousel-item">
          <img src="../assets/fotos/foto-duo2.jpg" class="d-block tamañoimagen" alt="Imagen de Saul Martin">
        </div>
        <div class="carousel-item">
          <img src="../assets/fotos/foto-duo3.jpeg" class="d-block  tamañoimagen" alt="Imagen de Saul Martin">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="container-fluid">
    <h2>Saúl Martin (flauta) y Victor Villadangos (guitarra) afianzaron su amistad personal y musical desde 1980, año en que cursaban la materia “Música de cámara” en el Conservatorio “Juan José Castro” bajo la dirección del maestro Pedro Chiambaretta. Conservatorio del cual egresaron y se desempeñaron como profesores titulares durante 30 años de flauta y guitarra respectivamente.
    </h2>
  </div>
  <div class="container-fluid integrantes">
    <div class="row">
      <h3 style="text-align:center; color: #FB8B24; font-family:monospace;" class="integrantesindex"> Integrantes </h3>
      <div class="col-md-3"></div>
      <div class="col-md-2">
        <div class="card" style="width: 20rem;">
          <img src="../assets/fotos/saul.jpg" class="card-img-top imagen-resume" alt="Imagen de saul">
          <div class="card-body resume">
            <h5 class="card-title">Saúl Martín</h5>
            <p class="card-text">Flautista, Profesor Superior de Flauta, Diplomado en Interpretación de Música Contemporánea. Profesor de Flauta y Música de Cámara.</p>
            <a href="../public/actividad-artistica.php#saulbio " target="_blank" class="btn botonbio">Más Información</a>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-2">
        <div class="card" style="width: 20rem; ">
          <img src="../assets/fotos/viti.jpg" class="card-img-top imagen-resume" alt="Imagen de Vitti">
          <div class="card-body resume">
            <h5 class="card-title">Victor Villadangos</h5>
            <p class="card-text">Profesor y solista internacional de Guitarra.<br><br><br></p>
            <a href="../public/actividad-artistica.php#vitibio" target="_blank" class="btn botonbio">Más Información</a>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>

  <?php require("../public/basics/footer.php")?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
