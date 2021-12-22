<?php
include ('header.php');
include ('conexion.php');    
?>
<?php
$conexion = new conexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

$sql = "insert into usuarios (nombre,apellido,documento,telefono,correo,clave,rol)
        values ('$nombre','$apellido','$dni','$telefono','$correo','$clave','U')";

$proyectos= $conexion->ejecutar($sql);
//echo $proyectos;6
//$_SESSION['usuario']=$apellido+' '+$nombre;
header('Location: index.php');
exit;

?>
