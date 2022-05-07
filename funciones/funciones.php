<?php
function conectar(){
    $xc = mysqli_connect("localhost", "root", "", "db-lab6");
    return $xc;
    die();
}
function desconectar($xc){
    mysqli_close($xc);
}

?>  