<!doctype html>

<?php
    include('../funciones/funciones.php');
    if(isset( $_SESSION['usuario'])){ 
        header("Location: ../index.html");
     }
     session_start();
    $xc = conectar();

    $sql = "SELECT * FROM navar2";
    $res = mysqli_query($xc, $sql);


    $sql_direccion = "SELECT * FROM direccion";
    $res_direccion = mysqli_query($xc, $sql_direccion);

    $sql_equipo = "SELECT * FROM equipo";
    $res_equipo = mysqli_query($xc, $sql_equipo);


    if(isset($_POST['enviar'])){
        $nombre = trim($_POST["nombre"]);
        $email = trim($_POST["email"]);
        $asunto = trim($_POST["asunto"]);
        $descripcion = trim($_POST["descripcion"]);
        $sql_contacto = "INSERT INTO contacto (nombre, email, asunto, descripcion) values ('$nombre', '$email', '$asunto', '$descripcion')";
        $res_contacto = mysqli_query($xc, $sql_contacto);
        
    }
?>  

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">

    <title>Modern Art Galery</title>
</head>

<body>
    <!-- copiar  de aca -->
    <div class>
        <button aria-controls="primary-navigation" aria-expanded="false" class="mobile-nav-toggle">
            <span class="sr-only">
                <i class="fa-solid fa-bars"></i>
            </span>
        </button>
    </div>


    <nav>
        <ul id="primary-navigation" data-visible="false" class="navbar">
          <li class="active"><?php
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


    <div class="img-ubicacion">
        <img src="./img/arq.jpg" width="100%" alt="">
    </div>
    <section class="container">
        <?php 
            
        ?>

        <div class="row  mb-5">
            <div class="col-md-6 col-sm-12">

                <h4 class="mt-5">Direccion</h4>
                <div class="mt-5">
                    <?php 
                        while($filas_direccion = mysqli_fetch_array($res_direccion)){
                            echo "<p>".$filas_direccion['direc']."</p>";
                            echo "<p><b>T:</b>".$filas_direccion['telefono']."</p>";
                            echo "<p><b>E-mail:</b>".$filas_direccion['email']."</p>";
                            echo "<p><b>Horario de apertura: </b>".$filas_direccion['dias']." de ".$filas_direccion['hora_inicio']." a ".$filas_direccion['hora_cierre']."</p>";
                        }
                    ?>
                </div>
                <h4 class="mt-5">Contacto</h4>
                <form action="" method="post" class="form-group">
                    <input class="form-control mb-3" name="nombre" type="text" placeholder="Nombre">
                    <input class="form-control mb-3" name="email" type="email" placeholder="Email">
                    <input class="form-control mb-3" name="asunto" type="text" placeholder="Asunto">
                    <textarea class="form-control mb-3" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <input type="submit" name="enviar" class="enviar">
                </form>


            </div>
            <div class="col-md-6 col-sm-12">
                <h4 class="mt-5">Equipo</h4>
                <div class="mt-5">
                    <?php 
                        while($filas_equipo = mysqli_fetch_array($res_equipo)){
                            echo "<p><b>".$filas_equipo['direccion']."</b>/ Dirección</p>";
                            echo "<p><b>".$filas_equipo['coordinacion']."</b>/ Coordinación LCV</p>";
                            echo "<p><b>".$filas_equipo['comunicacion']."</b>/ Comunicación</p>";
                            echo "<p><b>".$filas_equipo['administracion']."</b>/ Registro y Administración</p>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>


    <!-- footer de aca -->
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

    <!-- hasta aca -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

        <!-- copiar -->
    <script src="../script/index.js"></script>
</body>

</html>