<!DOCTYPE html>
<?php
    include('../funciones/funciones.php');
    if(isset( $_SESSION['usuario'])){ 
        header("Location : index.html");
     }
     session_start();
    $xc = conectar();

    $sql = "SELECT * FROM `db-lab6`.navar2";
    $res = mysqli_query($xc, $sql);

    $sql_titulo = "SELECT * FROM `db-lab6`.titulo";
    $res_titulo = mysqli_query($xc, $sql_titulo);

    $sql_imagenes = "SELECT * FROM `db-lab6`.imagenes";
    $res_imagenes = mysqli_query($xc, $sql_imagenes);

    $sql_contenido= "SELECT * FROM contenido";
    $res_contenido = mysqli_query($xc, $sql_contenido);

    $sql_contenido2= "SELECT * FROM titulo2";
    $res_contenido2 = mysqli_query($xc, $sql_contenido2);

    $sql_iconos= "SELECT * FROM iconos";
    $res_iconos = mysqli_query($xc, $sql_iconos);
?> 

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria de arte</title>
    <link rel="stylesheet" href="galerias.css">
</head>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/galerias.css">

    <title>Modern Art Galery</title>
  </head>
<body>
    <!-- copiar  de aca -->
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

    <!-- a aca -->
    <div class="galeria">
        <h1 style = "font-family:Courier "><?php while ($filas = mysqli_fetch_array($res_titulo)){ echo $filas['contenido'];}?></h1>   <!-- TITULO -->
        <div class="linea"></div>
        <div class="contenedor-imagenes">

            <?php
                while($filas_imagenes =mysqli_fetch_array($res_imagenes)){

                    echo 
                    "
                    <div class='imagen'>
                    <img class='img-fluid' id='imagen1'src=".$filas_imagenes['contenido'].">".
                    "<div class='overlay'>
                        <h2 style = 'font-family:Courier '>                           
                            <p class='img1'>".$filas_imagenes['idimagenes']."</p>".
                        "</h2>
                    </div>
                </div>
                    ";
                    
                }
            ?>        

            <
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container container">
            <div>
            <?php
                                while($filas_contenido2 =mysqli_fetch_array($res_contenido2)){
                                    echo "<h3>".$filas_contenido2['contenido']."</h3>";
                                }
                            ?>               
            </div>
            <p class="texto" ><?php
                                while($filas_contenido =mysqli_fetch_array($res_contenido)){
                                    echo "<p class='texto'>".$filas_contenido['contenido']."</p>";
                                }
                            ?></p>
            <div class="icons">
                <a href=""><i>            <?php
                                while($filas_iconos =mysqli_fetch_array($res_iconos)){
                                    echo "<img class='fa-brands fa-facebook' id='imagen3'src=".$filas_iconos['contenido'].">";
                                }
                            ?></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../script/index.js"></script>
</body>

</html>
