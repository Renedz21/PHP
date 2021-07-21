<?php
include ('conexion.php');
$con = conectar();
$id = $_GET['id'];

$sql = "DELETE FROM alumnos WHERE Id='$id'";
$query = mysqli_query($con,$sql);

if ($query){
    Header("Location: alumno.php");
}

?>
