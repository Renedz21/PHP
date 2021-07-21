<?php
include ('conexion.php');
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM alumnos WHERE Id='$id'";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Datos</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h1>Actualiza tus datos</h1>
            <form action="update.php" method="post">
                <input type="hidden" name="id" placeholder="Codigo estudiante" value="<?php echo $row['Id'] ?>"/>
                <input type="text" class="form-control mb-3" name="dni" placeholder="DNI" value="<?php echo $row['dni'] ?>"/>
                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre'] ?>"/>
                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos" value="<?php echo $row['apellidos'] ?>"/>

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar"/>
            </form>
        </div>

        </div>
    </div>
</div>
</body>
</html>
