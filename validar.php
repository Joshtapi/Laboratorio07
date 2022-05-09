
<?php
session_start();
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$_SESSION['usuario']=$usuario;
$xc=mysqli_connect("localhost", "root", "", "db-lab6");

$sql = "SELECT * FROM `db-lab6`.personal where usuario = '$usuario' and password = '$password'";

$res = mysqli_query($xc, $sql); 
$filas = mysqli_fetch_array($res);

if(isset($filas)){
  
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['password'] = $_POST['password'];
    header("Location: paginaprincipal.php");
    echo $_SESSION['usuario'];
    exit();

}else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);