<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion</title>
    <link rel="stylesheet" href="../public/css/b5/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="col">
                        <h3 class="text-center">Registro</h3>
                        <form action="../procesos/usuarios/registrar.php" method="POST">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required
                                placeholder="Escribe tú nombre">
                            <label for="">Apellido Paterno</label>
                            <input type="text" name="paterno" class="form-control" required
                                placeholder="Escribe tú apellido paterno">
                            <label for="">Apellido Materno</label>
                            <input type="text" name="materno" class="form-control" required
                                placeholder="Escribe tú apellido materno">
                            <label for="">Usuario</label>
                            <input type="text" name="usuario" class="form-control" required
                                placeholder="Escribe tú usuario">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required
                                placeholder="Escribe tú password">
                            <br>
                            <button class="btn btn-success">Registrar</button>
                            <a href="../index.php" class="btn btn-warning">Regresar</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="../public/js/b5/bootstrap.min.js"></script>
</body>

</html>