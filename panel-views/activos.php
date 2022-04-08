
<?php
    include "./header.php";
    include "./menu.php";
?>


<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1>Activos</h1>
                <div class="row">
                    <div class="col">
                        <form action="../procesos/gastos/agregar_monto.php" method="POST">
                            <label for="">Monto</label>
                            <input type="text" class="form-control" id="" name="monto_agregado">
                            <label for="">Categoria</label>
                            <select name="categoria" class="form-select">
                                <option value="nomina">Nomina</option>
                                <option value="trabajos">Trabajos externos</option>
                                <option value="ventas">Ventas</option>
                                <option value="proyectos">Proyectos externos</option>
                                <option value="otros">Otros</option>
                            </select>
                            <button class="btn btn-primary mt-4">
                                Guardar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include "./footer.php";
?>