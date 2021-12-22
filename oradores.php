<?php
include ('header.php');
include ('conexion.php');    
?>
<?php
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$tema = $_POST['tema'];

if(isset($_SESSION['usuario'])){
    $user = $_SESSION['usuario'];
}else{
    $user = 'No registrado';
    echo "<script>alert(Para convertirse en orador debe estar registrado)</script>";
    ?>
    <!--
    <script>
        alert("Para convertirse en orador debe estar registrado");
    </script>-->
    <?php
    header('Location: registrate.php');
    exit;
}
?>
<header>
    <nav class="navsup2 ">
        <span class="textosupizq2 text-warning">Usuario: <? echo $user;?></span>  
        <span class="espaciolargo"></span>
        <span><a href="listado.php" class="espaciomini">Usuarios</a></span>
        <span><a href="salir.php" class="espaciomini">Desloguearse</a></span>
    </nav>
</header>
<?php

$conexion = new conexion();
$respuestas= $conexion->consultar("SELECT * FROM `oradores`  ");
?>
    <h2 class="text-center">Listado de Oradores Registrados</h2><br><br>
    <div class="container">
    <table class="table table-striped">
        <thead>
            <th class="text-center">Nombre</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Tema</th>
            <th class="text-center">Acciones</th>
        </thead>
        <tbody>
        <?php
foreach($respuestas as $respuesta){ ?>
            <tr>
                <td><?php echo $respuesta['nombre'];?></td>
                <td><?php echo $respuesta['apellido'];?></td>
                <td><?php echo $respuesta['tema'];?></td>
                <td class="text-center">
                    <button class="btn btn-warning"><a href="eliminar.php?a=<? echo $respuesta['id'] ?>">Borrar</a></button>
                    <!--<button class="btn btn-info" ><a href="modiforador.php?a=< ? echo $respuesta['id'] ?>"> Modif</a></button>-->
                </td>
            </tr>
<?php
}
?>
    </table><br><br>
</div>
<div style="position: absolute;bottom: 0;width: 100%;">
    <?php
        include ('footer.php');
    ?>
</div>  