<?php
include ('header.php');
include ('conexion.php');    
?>
<body>
    <header>
        <nav class="navsup2 ">
            
            <span class="textosupizq2">Conf Bs.As.</span>  
            
            <span class="espaciolargo"><a href="index.php">La conferencia</a></span>
            <span><a href="orador.php" class="espaciomini">Modificar Oradores</a></span>
            <span><a href="salir.php" class="espaciomini">Desloguearse</a></span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="text-warning">Usuario conectado:&nbsp;<?php echo $_SESSION['usuario'] ?></span>
        </nav>
    </header><br>
    <?php
    $id=$_SESSION["id"];
    $conexion = new conexion();
    //$respuestas= $conexion->consultar("SELECT * FROM usuarios where id=".$id);
    $respuestas= $conexion->consultar("select * from usuarios where id='$id'");
    foreach ($respuestas as $respuesta) {
        
        $id = $respuesta['id'];
        $nom = $respuesta['nombre'];
        $ape = $respuesta['apellido'];
        $doc = $respuesta['documento'];
        $tel = $respuesta['telefono'];
        $cor = $respuesta['correo'];
        $cla = $respuesta['clave'];
        
    }
    echo $id;
    ?>
    
    <form name="modifuser" id="modifuser" action="grabarmodif.php" method="POST">
        <h2 class="text-center">Modificar el Perfil Propio</h2>
        <div class="text-center">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"   value="<? echo $nom ?>" required>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido"   value="<? echo $ape ?>" required>
        </div><br>
        <div class="text-center">
            <label for="dni">Documento:</label>
            <input type="numeric" id="dni" name="dni"   value="<? echo $doc ?>" required>
            <label for="nombre">Teléfono:</label>
            <input type="text" id="telefono" name="telefono"   value="<? echo $tel ?>" required>
        </div><br>
        <div class="text-center">
        <label for="correo">Correo:</label>
            <input type="mail" id="correo" name="correo"   value="<? echo $cor ?>" required>
        </div><br>
        <div class="text-center">
        <label for="clave">Clave:</label>
            <input type="text" id="clave" name="clave"   value="<? echo $cla ?>" required>
            
        </div><br>
        <div class="text-center">
            <input type="reset" class="btn btn-success" value="Borrar">
            <input type="button" class="btn btn-success" value="Actualizar" onclick="javascript:validar()">
        </div><br>
        
    </form>
    <!--type="text/javascript"-->
    <script>
        function validar(){
            let cla = document.modifuser.clave.value;
            let dni = document.modifuser.dni.value;
            
            
            let j = 0;
               
            if (Number(dni) > 10000) {
                j=j+1;
            } else 
            {
                alert("el numero de Documento no parece ser válido.");
                return false;
            } 
            
            if (parseInt(cla.length) > 4) {
                j=j+1;
            } else 
            {
                alert("La clave debe tener por lo menos cinco caracteres.");
                return false;
            } 
            if (j>0) {
                
                modifuser.submit();
            } 
        }
        
    </script>
    
    <div style="position: absolute;bottom: 0;width: 100%;">
        <?php
        include ('footer.php');
        ?>
    </div>