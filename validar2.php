<?php
include ('header.php');
include ('conexion.php');    
?>
<?php
$conexion = new conexion();

$user = $_POST['user'];
$clave = $_POST['password'];
//$formu = $_POST['formu'];

//$sql = "SELECT * FROM usuarios where correo=".$user." and clave=".$clave;
//$sql = "SELECT * FROM `usuarios` where correo='".$user."' and clave = ".$clave;
//$query = "select * from usuarios where  usuario = '" . $_POST['inputEmail']."' and  clave = " . $_POST['inputPassword'];
//echo $sql;exit;
//$proyectos= $conexion->consultar("select * from usuarios where correo='admin@daniel.com' ");
$proyectos= $conexion->consultar("select * from usuarios where correo='$user'");
//$query = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
//echo $proyectos;exit;
foreach ($proyectos as $proyecto) {
    echo $proyecto['id']."<br>";
    echo $proyecto['nombre']."<br>";
    echo $proyecto['apellido']."<br>";
    echo $proyecto['correo']."<br>";
    echo $proyecto['clave']."<br>";
    echo $proyecto['rol']."<br>";
    echo "1 <br>";
    echo $user."<br>";
    echo $clave."<br>";
    
    if ($proyecto['clave'] == $clave){
        if ($proyecto['rol']=='A'){
            $_SESSION['usuario'] = $proyecto['apellido'];
            $_SESSION['rol'] = $proyecto['rol'];

            header('Location: listado.php');
            exit;
        }
        if ($proyecto['rol']=='U'){
            $_SESSION['usuario'] = $proyecto['nombre'].' '.$proyecto['apellido'];
            $_SESSION['rol'] = $proyecto['rol'];
            $_SESSION['id'] = $proyecto['id'];
            $_SESSION['nombre'] = $proyecto['nombre'];
            $_SESSION['apellido'] = $proyecto['apellido'];
            $_SESSION['correo'] = $proyecto['correo'];
            header('Location: registrado.php');
            exit;
        }
    }else{
        header('Location: index.php');
        exit;
    }
    
}


?>