<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
  <link rel="icon" href="assets/fotos/logo.png">
  <title>Villadangos & Martin | Contacto </title>
</head>
<body>
<header>
  <h1 class="header" id="inicio">Villadangos y Martin, tocando desde 1980.</h1>
</header>
<nav class="navbar navbar-expand-lg navbar-light head">
  <div class="container-fluid">
    <a href="index.html"><img class="navbar-brand" src="assets/fotos/logo.png" alt="logo-duo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html" target="_blank">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link posnav" href="actividad-artistica.html" target="_blank">Actividad Artistica</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Discos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="discos-piazzolla-pujol.html" target="_blank">Piazzolla - Pujol</a></li>
            <li><a class="dropdown-item" href="discos-solo-piazzolla.html" target="_blank">Solo Piazolla</a></li>
            <li><a class="dropdown-item" href="discos-historia-del-tango.html" target="_blank">Historia del Tango</a></li>
            <li><a class="dropdown-item" href="discos-los-amigos-de-cacho.html" target="_blank">Los amigos de Cacho</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.html">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <main>
    <h1 class="contact">Contacto</h1>
    <form action="contacto.html" class="formcontacto" method="post">
      <p>Nombre *</p>
      <input type="text" class="colorform" name="nombre" required=""><br><br>
      <p>Asunto *</p>
      <input type="text" class="colorform" name="asunto" required=""> <br><br>
      <p>Mail *</p>
      <input type="email" class="colorform" name="email" required=""> <br><br>
      <p>Mensaje *</p>
      <textarea cols="30" rows="10" class="mensajeform colorform" name="msg" required=""></textarea> <br>
      <input type="submit" value="Enviar" class="buttoncontacto" name="enviar">
    </form>
  </main>
</div>
<footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <p class="artistas">Redes de Saul Martin</p>
          <div class="iconos">
            <a href="https://www.facebook.com/saul.martin"><img src="assets/iconos/facebook.svg" alt="" class="redes"></a>
            <a href="https://www.instagram.com/saulbmartin/"><img src="assets/iconos/instagram.svg" alt="" class="redes"></a>
            <a href="https://twitter.com/saulbmartin"><img src="assets/iconos/twitter.svg" alt="" class="redes"></a>
            <a href="https://www.linkedin.com/in/saulmartin/"><img src="assets/iconos/linkedin.svg" alt="" class="redes"></a>
            <a href="http://saulmartin.com.ar/"><img src="assets/iconos/music-note.svg" alt="" class="redes"></a>
            <a href="mailto:info.saul@gmail.com"><img src="assets/iconos/gmail.svg" alt="" class="redes"></a>
          </div>
        </div>
        <div class="col-md-6">
          <p class="artistas">Redes de Victor Villadangos.</p>
          <div class="iconos">
            <a href="https://www.facebook.com/villadangosvictor"><img src="assets/iconos/facebook.svg" alt="" class="redes"></a>
            <a href="https://www.instagram.com/victorvilladangosoficial/"><img src="assets/iconos/instagram.svg" alt="" class="redes"></a>
            <a href="https://victorvilladangos.bandcamp.com/"><img src="assets/iconos/music-note.svg" alt="" class="redes"></a>
            <a href="mailto:victorvilladangos@gmail.com"><img src="assets/iconos/gmail.svg" alt="" class="redes"></a>
          </div>
        </div>
      </div>
    </div>
    <h1 class="devby">Desarrollada por <a href="https://github.com/jul1martin" style="color: black; text-decoration:none;">Julian Martin</a></h1>
</footer>
</body>
<?php
include "correo.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>