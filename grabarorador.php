<?php
include ('header.php');
include ('conexion.php');    
?>
<?php
$conexion = new conexion();

$id = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$tema = $_POST['tema'];


$sql = "insert into oradores (nombre,apellido,tema,usu_id)
        values ('$nombre','$apellido','$tema','$id')";

$proyectos= $conexion->ejecutar($sql);

header('Location: registrado.php');
exit;

