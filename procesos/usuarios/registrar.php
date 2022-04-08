<?php
    include "../../clases/conexion.php";
    include "../../clases/Usuario.php";
    $Usuarios = new Usuario();
    $nombre = $_POST ['nombre'];
    $Paterno = $_POST['paterno'];
    $Materno = $_POST['materno'];
    $usuario = $_POST ['usuario'];
    $password = sha1($_POST ['password']);
    $datos = array(
        $nombre,
        $Paterno,
        $Materno,
        $usuario,
        $password
    );
    if($ingresar = $Usuarios->agregarDatos($datos) == 1){
        header("location:../../Index.php");
    }

?>