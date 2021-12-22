<?php
include ('header.php');
include ('conexion.php');    
?>
<?php
$id = $_GET['a'];

echo $id;
$conexion = new conexion();

$sql = "delete from oradores where id=$id ";
$proyectos= $conexion->ejecutar($sql);
header('Location: oradores.php');
exit;
?>
