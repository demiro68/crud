<?php
include ('header.php');
include ('conexion.php');    
?>
<body>
    <header>
        <nav class="navsup2 ">
            
            <span class="textosupizq2">Conf Bs.As.</span>  
            
            <span class="espaciolargo"><a href="index.php">La conferencia</a></span>
            <span><a href="modif.php" class="espaciomini">Modificar Datos Personales</a></span>
            <span><a href="salir.php" class="espaciomini">Desloguearse</a></span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="text-warning">Usuario conectado:&nbsp;<?php echo $_SESSION['usuario'] ?></span>
        </nav>
    </header><br>
    <?php
    $id=$_SESSION["id"];
    $conexion = new conexion();
    //$respuestas= $conexion->consultar("SELECT * FROM usuarios where id=".$id);
    $respuestas= $conexion->consultar("select * from oradores where usu_id='$id'");
    foreach ($respuestas as $respuesta) {
        
        //$id = $respuesta['id'];
        $nom = $respuesta['nombre'];
        $ape = $respuesta['apellido'];
        $tema = $respuesta['tema'];
        //$tel = $respuesta['telefono'];
        //$cor = $respuesta['correo'];
        //$cla = $respuesta['clave'];
        
    }
    //echo $id;
    
    if ($respuestas){
    ?>
        <form name="modif_orador" action="modiforador.php" method="POST">
            <h2 class="text-center">Modificar los datos del Orador</h2>
                <input type="text" name="nombre" class="col-5 offset-md-1 input1" placeholder="Nombre" value="<? echo $nom ?>" disabled>
                <input type="text" name="apellido" class="col-5 input1" placeholder="Apellido" value="<? echo $ape ?>" disabled><br><br>
                <textarea class="col-10 offset-md-1 input2" name="tema" placeholder="Sobre que quieres hablar" required>
                    <?php echo trim($tema) ?>
                </textarea>
                <p class="offset-md-1">Recuerda incluir un titulo para tu charla</p>
                <input type="hidden" name="id" value="<? echo $id ?>">
                <!--<input type="submit" class="col-10 offset-md-1 boton5" id="botonenviar"><br><br>
            
            
                      
            <div class="text-center">
                <input type="mail" name="correo"   value="< ? echo $cor ?>" required>
            </div><br>
            <div class="text-center">
                <input type="text" name="clave"   value="< ? echo $cla ?>" required>
                
            </div><br>-->
            <div class="text-center">
                <input type="reset" class="btn btn-success" value="Borrar">
                <input type="submit" class="btn btn-success" value="Actualizar">
            </div><br>
            
        </form>
    <?php
    }else{
        ?>
        <form name="agregar_orador" action="grabarorador.php" method="POST">
            <h2 class="text-center">Agregarse como Orador</h2>
                <input type="text" class="col-5 offset-md-1 input1" placeholder="Nombre" value="<? echo $_SESSION['nombre'] ?>" disabled >
                <input type="text" class="col-5 input1" placeholder="Apellido" value="<? echo $_SESSION['apellido'] ?>" disabled><br><br>
                <textarea class="col-10 offset-md-1 input2" name="tema" placeholder="Sobre que quieres hablar" required></textarea>
                <p class="offset-md-1">Recuerda incluir un titulo para tu charla</p>
                <input type="submit" class="col-10 offset-md-1 boton5" id="botonenviar"><br><br>
            
        </form>
        <?php
    }
    ?>
    
    
    <div style="position: absolute;bottom: 0;width: 100%;">
        <?php
        include ('footer.php');
        ?>
    </div>