<!DOCTYPE html>
<?php
    include('../funciones/funciones.php');
    if(isset( $_SESSION['usuario'])){ 
        header("Location : index.html");
     }
     session_start();
    $xc = conectar();
    $sql = "SELECT * FROM navar2";
    $res = mysqli_query($xc, $sql);

    $sql_quienes_artista1= "SELECT * FROM artistas_destacados WHERE idartistas_destacados=1";
    $res_quienes_artista1 = mysqli_query($xc, $sql_quienes_artista1);
    $sql_quienes_artista2= "SELECT * FROM artistas_destacados WHERE idartistas_destacados=2";
    $res_quienes_artista2 = mysqli_query($xc, $sql_quienes_artista2);

    $sql_contenido= "SELECT * FROM contenido";
    $res_contenido = mysqli_query($xc, $sql_contenido);
?> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="css/quienessomos.css"><style type="text/css"></style>

        <title>Quiénes somos</title>

    </head>
    <body>
        <div class>
            <button aria-controls="primary-navigation" aria-expanded="false" class="mobile-nav-toggle">
                <span class="sr-only">
                    <i class="fa-solid fa-bars"></i>
                </span>
            </button>
        </div>
    
        <nav>
            <ul id="primary-navigation" data-visible="false" class="navbar">
                <li class="active">
                <?php
                    while($filas = mysqli_fetch_array($res)){
                    echo ' <li class="active">
                    <a href="'.'../'.$filas['linknavar'].' ">' .$filas['navar'].'</li>';
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

        <section class="container">
            
            <div class="row">
                <div class="col-md-12 col-5">
                    <h1 class="quienessomos">
                        QUIÉNES SOMOS
                    </h1>
                </div>
            </div>

            <div class="row" >
                <div class="col-md-6 col-12">
                    <img class="img-fluid" id="imagen1" src="https://i.pinimg.com/750x/07/51/2e/07512ea7ad79b66c20a3a675e92450c7.jpg">
                    <p class="text0">
                        Encontrará creaciones de diversos estilos y tendencias. Asimismo, famosos artistas nacionales e internacionales. 
                        En ese sentido, desde ahora puede deleitar sus principales sentidos con nuestras exhibiciones.
                        Asimismo, comprar pinturas, fotografías, cuadros, entre otras obras originales a solo un clic.
                    </p>
                </div>

                <div class="col-md-6 col-12 ">
                    <p class="text1">
                        Nos compromentemos con el arte. Un espacio para la exhibición y promoción del arte, 
                        en especial del arte visual, y principalmente pintura y escultura, de forma similar a un museo.
                        Las galerías de arte contemporáneo realizan dos clases de muestras: individuales y colectivas.
                        En las individuales los trabajos de un solo artista son exhibidas al público.
                        En las colectivas, varios artistas presentan a la vez uno o varios de sus trabajos según
                        el tamaño de la galería. Las muestras acostumbran durar quince o treinta días, según la importancia
                        del artista o los trabajos a exhibir.
                    </p>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary"> Artistas destacados </button>
                    </div>

                    <div class="row artistas-container">
                        <div class="col-md-6 col-6">
                            <?php
                                while($filas_artistas_detacados_1 =mysqli_fetch_array($res_quienes_artista1)){
                                    echo "<p class='fecha1'>".$filas_artistas_detacados_1['anio_artistas']."</p>";
                                    echo "<p class='artista1'>".$filas_artistas_detacados_1['nombre_artistas']." ".$filas_artistas_detacados_1['apellido_artistas']."</p>";
                                    echo "<img class='img-fluid' id='imagen2'src=".$filas_artistas_detacados_1['link_foto_artistas'].">";
                                }
                            ?>
                        </div>

                        <div class="col-md-5 col-6">
                            <?php
                                while($filas_artistas_detacados_2 =mysqli_fetch_array($res_quienes_artista2)){
                                    echo "<img class='img-fluid' id='imagen3'src=".$filas_artistas_detacados_2['link_foto_artistas'].">";
                                    echo "<p class='fecha2'>".$filas_artistas_detacados_2['anio_artistas']."</p>";
                                    echo "<p class='artista2'>".$filas_artistas_detacados_2['nombre_artistas']." ".$filas_artistas_detacados_2['apellido_artistas']."</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <footer class="footer">
            <div class="footer-container container">
                <div>
                    <h3>MODERN</h3>
                    <h3>ART GALERY</h3>
                </div>
                <?php
                                while($filas_contenido =mysqli_fetch_array($res_contenido)){
                                    echo "<p class='texto'>".$filas_contenido['contenido']."</p>";
                                }
                            ?></p>
                <div class="icons">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </footer>
        
        <script src="../script/index.js"></script>
    </body>
</html>