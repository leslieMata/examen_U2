<?php
    include "./header.php";
    include "./menu.php";
    include "../clases/Conexion.php";
    include "../clases/Usuario.php";
    $usuario = new Usuario();
    $con = new Conexion ();
    $conexion = $con->Conectar();
    $suma_ganado = "SELECT sum(monto_agregado) as ganado FROM t_ganancias";
    $resultado_ganado = mysqli_query($conexion,$suma_ganado);
    $datos_ganado = mysqli_fetch_all($resultado_ganado,MYSQLI_ASSOC);

    $suma_gastado = "SELECT sum(monto_gastado) as gastado FROM t_gastos";
    $resultado_gastado = mysqli_query($conexion,$suma_gastado);
    $datos_gastado = mysqli_fetch_all($resultado_gastado,MYSQLI_ASSOC);

    $datos = $usuario->mostrar_saldo_total();
?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6"><h1>Sistema de gastos personales</h1></div>
                    <?php 
                        if($datos_ganado[0]['ganado'] > $datos_gastado[0]['gastado']){
                            if($datos_gastado[0]['gastado'] != ""){
                    ?>
                            <div class="col-md-6"><h3>Saldo Total: $<?= $datos[0]['total']?></h3></div>
                    <?php
                            }else{
                    ?>
                            <div class="col-md-6"><h3>Saldo Total: $<?= $datos_ganado[0]['ganado']?></h3></div>
                    <?php
                            }
                    ?>
                        
                    <?php }elseif($datos_ganado[0]['ganado'] <= $datos_gastado[0]['gastado']){?>
                        <div class="col-md-6"><h3>Saldo Total: Saldo Insuficiente</h3></div>
                    <?php }?>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-hover table-sm table-bordered">
                                <thead>
                                    <th class="text-center">Saldo que se gasto</th>
                                    <th class="text-center">Fecha en que se gasto</th>
                                </thead>
                                <tbody>
                                    <?php 
                                        $usuario = new Usuario();
                                        $sql = "SELECT * FROM t_gastos";
                                        $datos = $usuario->mostrarInformacion($sql);
                                        foreach ($datos as $key) {
                                            $id = $key ['id_gastos'];
                                        
                                    ?>
                                    <tr>
                                        <td><?php echo $key['monto_gastado'];?></td>
                                        <td><?php echo $key['fecha_de_gasto'];?></td>
                                    </tr>
                                    <?php 
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include "./footer.php";
?>