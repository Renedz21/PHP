<?php
include ('conexion.php');
$con = conectar();

$id = $_POST['id'];
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$sql = "UPDATE alumnos SET dni='$dni',nombre='$nombre',apellidos='$apellido' WHERE Id='$id'";
$query = mysqli_query($con,$sql);
if ($query){
    Header("Location: alumno.php");
}else{

}
