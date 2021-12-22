<?php
include ('header.php');
include ('conexion.php');    
?>
<body>
    <header>
        <nav class="navsup2 ">
            
            <span class="textosupizq2">Conf Bs.As.</span>  
            
            <span class="espaciolargo"></span>
            <span><a href="modif.php" class="espaciomini">Modificar Datos Personales</a></span>
            <span><a href="orador.php" class="espaciomini">Modificar Orador</a></span>
            <span><a href="salir.php" class="espaciomini">Desloguearse</a></span>
            <span class="espaciocorto"><a href="tickets.php" class="text-success">Comprar Tickets</a></span> 
            <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="text-info">Usuario conectado:</span>-->
            <span class="text-warning">&nbsp;<?php echo $_SESSION['usuario'] ?></span>
            
            
        </nav>
    </header><br>
    <?php
    //$id=$_POST["a"];
    $conexion = new conexion();
    //$respuestas= $conexion->consultar("SELECT * FROM usuarios where id=".$id);
    ?>
    <main class="container ">
        <br>    <br>
        <h4>Hola <? echo $_SESSION['usuario']?>,</h4>
        <h4>Esta es tu área personal, nadie salvo tu podrá verla, desde aqui podras modificar tu perfil y si te registraste como orador tambien podras modificar el tema a tratar</h4>
        <br><br>
    </main>
    
    
     
    <div style="position: absolute;bottom: 0;width: 100%;">
        <?php
        include ('footer.php');
        ?>
    </div>
    
    
    