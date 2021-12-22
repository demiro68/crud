<?php
include ('header.php');
include ('conexion.php');    
?>
<?php
$conexion = new conexion();

$id = $_SESSION['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tema = $_POST['tema'];

$sql = "update oradores set tema='$tema' where id=$id ";

$proyectos= $conexion->ejecutar($sql);


header('Location: registrado.php');
exit;


?>