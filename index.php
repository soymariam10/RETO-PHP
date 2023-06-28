<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrapcss/bootstrap.min.css">
    <script src="js/bootstrapjs/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Campuslands
    </title>
</head>
<body>
    <h1>Funciona bien :)</h1>
    <div class="container-fluid row">
    <form class="col-4 p-3">
        <h3 class="text-center text-secundary">REGISTRO DE CAMPERS</h3>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha Nacimiento</label>
            <input type="date" class="form-control" name="fechaNac">
        </div>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    </form>
        <div class="col-8 p-4">
            <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 1</td>
                    <td>Maria</td>
                    <td>Angelica</td>
                    <td>1.232.890.241</td>
                    <td>uwu</td>
                    <td>
                        <a href="" class="btn btn-small btn-warning"><i class="bi bi-pencil-square"></i></a>
                        <a href=""class="btn btn-small btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>