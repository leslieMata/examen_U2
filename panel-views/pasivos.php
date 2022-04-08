
<?php
    include "./header.php";
    include "./menu.php";
?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1>Pasivos</h1>
                <form action="../procesos/gastos/agregar_pasivo.php" method="POST">
                    <label for="">Monto</label>
                    <input type="text" class="form-control" id="" name="monto_gastado">
                    <label for="">Tipo de pasivo</label>
                    <select name="categoria" id="" class="form-select">
                        <option value="servicios">Servicios</option>
                        <option value="trabajo">Servidor publico</option>
                        <option value="Otros">Otros</option>
                    </select>
                    <button class="btn btn-primary mt-4">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    include "./footer.php";
?>