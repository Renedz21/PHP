<?php
    include('conexion.php');
    $con = conectar();

    $sql = "SELECT * FROM alumnos";

    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingresar datos</h1>
                <form action="insertar.php" method="post">
                    <input type="text" class="form-control mb-3" name="id" placeholder="Codigo estudiante"/>
                    <input type="text" class="form-control mb-3" name="dni" placeholder="DNI"/>
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres"/>
                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos"/>

                    <input type="submit" class="btn btn-success btn-block"/>
                </form>
            </div>

            <div class="col-md-8">
                <h1>MOSTRAR TABLA</h1>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Dni</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <th><?php echo $row['Id'] ?></th>
                        <td><?php echo $row['dni'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['apellidos'] ?></td>
                        <td><a href="actualizar.php?id=<?php echo $row['Id'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="delete.php?id=<?php echo $row['Id'] ?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>