<!DOCTYPE html>
<?php
    session_start();
    include("funciones/funciones.php");
    if(!isset($_SESSION['usuario'])){
      header("Location: index.html");
    }
    $xc = conectar();

    $sql = "SELECT * FROM navar2";
    $res = mysqli_query($xc, $sql);
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="keywords" content="Web de la galería de arte"/>
    <link rel="icon" type="image/png" sizes="32x32" href="https://github.com/arfarobs/art-gallery-website/blob/main/resources/assets/favicon-32x32.png?raw=true">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css_pagina principal/index.css"/>

    <title>Web de la galería de arte</title>

</head>
<body>
    <div class="mobile-nav-toggle">
      <button aria-controls="primary-navigation" aria-expanded="false" class="mobile-nav-toggle">
          <span class="sr-only">
              <i class="fa-solid fa-bars"></i>
          </span>
      </button>
    </div>

    <nav>
        <ul id="primary-navigation" data-visible="false" class="navbar">
          <li class="active">
            <a href="paginaprincipal.php"><?php
            while($filas = mysqli_fetch_array($res)){
              echo ' <li class="active">
              <a href="'.$filas['linknavar'].' ">' .$filas['navar'].'</li>';
            }
            ?></a>
        </li>
    
        </ul>
        <p>
          <?php
          echo 'Bienvenido : ' .$_SESSION['usuario'];
          ?> 
        </p>
    </nav>
    <section class="section">
      <div class ="header">
        
        
          <picture class="hero">
        
            <img src="img_pragina principal/image-hero.jpg" alt="" aria-hidden="true">
          </picture>
          <h1>MODERN ART GALERY </h1>
          <p>
            Todas las artes de la colección de la Galería de Arte Moderno comenzaron a partir de una chispa de inspiración. ¿Te inspirarán estas piezas? Visítanos e infórmate.
          </p>
        
        </div>

        <div class="imagen1">
          <img src="img_pragina principal/image-grid-1.jpg" alt="The galleries main room.">
        </picture>

        <div class="your-day">
          <h2>TU DIA  <span>EN LA GALERIA</span></h2>
          <p>
            Pasee por nuestras distintas colecciones y encuentre nuevos conocimientos sobre nuestros artistas. Sumérgete en los detalles de su proceso creativo.
          </p>
        </div>
      </div>

        <picture class="img-grid-2">
          
          <img src="img_pragina principal/image-grid-2.jpg" alt="A modern bench in-front of a piece of art.">
        </picture>

        <picture class="img-grid-3">
          
          <img src="img_pragina principal/image-grid-3.jpg" alt="People viewing art on the second floor of the gallery.">
        </picture>
        
        <div class="come">
          <h2>VEN E INSPIRATE</h2>
          <p>
            Estamos emocionados de darle la bienvenida a nuestra galería y ver cómo nuestras colecciones lo influencian.
          </p>
        </div>
    </section>
    <footer class="footer">
      <div class="footer-container container">
          <div>
              <h3>MODERN</h3>
              <h3>ART GALERY</h3>
          </div>
          <p class="texto">La galeria de Arte Moderno es gratis para todos los visitantes y abierto los siete dias de
              la semana desde las 8am a 9pm.</p>
          <div class="icons">
              <a href=""><i class="fa-brands fa-facebook"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
          </div>
      </div>
  </footer>
    <script src="./script/index.js"></script>
</body>
</html>

