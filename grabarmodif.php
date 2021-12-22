<?php
include ('header.php');
include ('conexion.php');    
?>
<?php
$conexion = new conexion();

$id = $_SESSION['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];


$sql = "update usuarios set nombre='$nombre',apellido='$apellido',documento='$dni',telefono='$telefono',correo='$correo',clave='$clave' where id=$id ";

$proyectos= $conexion->ejecutar($sql);


header('Location: registrado.php');
exit;

?>