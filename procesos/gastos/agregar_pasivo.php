<?php
    require "../../clases/Usuario.php";
    require "../../clases/Conexion.php";
    $monto_gastado = $_POST['monto_gastado'];
    $categoria = $_POST['categoria'];
    $usuario = new Usuario();
    $resultado = $usuario->agregarPasivo($monto_gastado, $categoria);
    if ($resultado) {
        header("location:../../panel-views/inicio.php");
    }
        else {
            echo"hubo un error al ingresar los datos";
        }
    // INSERT INTO t_ganancias(monto,categoria,fecha)
    //VALUES (100000,'Servicios','2022-04-05');
?>