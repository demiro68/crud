<?php
$_SESSION['usuario'] = "";
$_SESSION['nombre'] = "";
$_SESSION['apellido'] = "";
$_SESSION['correo'] = "";
session_start();
session_destroy();
header('Location: index.php');
?>


