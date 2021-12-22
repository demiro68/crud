<?php
include ('header.php');
include ('conexion.php');    
$user = $_SESSION['usuario'];
?>
<header>
    <nav class="navsup2 ">
        <span class="textosupizq2 text-warning">Usuario: <? echo $user;?></span>
        
        
        <span class="espaciolargo"></span>
        <span><a href="oradores.php" class="espaciomini">Oradores</a></span>
        <span><a href="salir.php" class="espaciomini">Desloguearse</a></span>
          
    </nav>
</header>
<?php
$conexion = new conexion();
$respuestas= $conexion->consultar("SELECT * FROM `usuarios` where rol='U' ");
?>
    <h2 class="text-center">Listado de Usuarios Registrados</h2><br><br>
    <div class="container">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Telefono</th>
            <th>Mail</th>
            <th>Rol</th>
            <th>Acciones</th>
        </thead>
        <tbody>
        <?php
foreach($respuestas as $respuesta){ ?>
            <tr>
                <td><?php echo $respuesta['nombre'];?></td>
                <td><?php echo $respuesta['apellido'];?></td>
                <td><?php echo $respuesta['documento'];?></td>
                <td><?php echo $respuesta['telefono'];?></td>
                <td><?php echo $respuesta['correo'];?></td>
                <td><?php echo $respuesta['rol'];?></td>
                <td><button class="btn btn-warning"><a href="eliminar.php?a=<?php echo $respuesta['id'] ?>" >Eliminar</a></button> </td>
            </tr>
<?php
}
?>
    </table><br><br>
</div>
<?php
    include ('footer.php');
?>  