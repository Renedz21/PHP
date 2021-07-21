<?php
    include ('conexion.php');
    $con = conectar();

    $id = $_POST['id'];
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $sql = "INSERT INTO alumnos VALUES ($id,'$dni','$nombre','$apellido')";
    $query = mysqli_query($con,$sql);
    if ($query){
        Header("Location: alumno.php");
    }else{

    }
?>
