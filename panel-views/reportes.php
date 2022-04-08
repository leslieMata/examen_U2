
<?php
    include "./header.php";
    include "./menu.php";
?>


    
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1>Reportes</h1>
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col">
                            <label for="">Fecha de inicio</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col">
                            <label for="">Fecha final</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">Tipo</label>
                            <select name="" id="" class="form-select">

                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4">
                        Consultar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    include "./footer.php";
?>