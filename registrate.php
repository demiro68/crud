<?php
include ('header.php');
include ('conexion.php');    
?>
<body>
    <header>
        <nav class="navsup2 ">
            
            <span class="textosupizq2">Conf Bs.As.</span>  
            
            <span class="espaciolargo"><a href="index.php">La conferencia</a></span>
            <span><a href="#oradores" class="espaciomini">Los oradores</a></span>
            <span><a href="#lugar" class="espaciomini">El lugar y la fecha</a></span>
            <span><a href="index.php#oradores" class="espaciomini">Conviértete en orador</a></span>
            <span class="espaciocorto"><a href="" class="text-success">Comprar Tickets</a></span>  
        </nav>
    </header><br>
    <div class="container row text-center">
    <div class="col-6 izquierda3" >
        <form name="registro" action="validar.php" method="POST">
            <h2 class="text-center">REGISTRO</h2>
            <div class="text-center">
                <input type="text" name="nombre"  placeholder="Nombre" required>
                <input type="text" name="apellido"  placeholder="Apellido" required>
            </div><br>
            <div class="text-center">
                <input type="text" name="dni"  placeholder="DNI" required>
                <input type="text" name="telefono"  placeholder="Telefono" required>
            </div><br>
            <div class="text-center">
                <input type="mail" name="correo"  placeholder="Correo" required>
            </div><br>
            <div class="text-center">
                <input type="password" name="clave"  placeholder="Password" required>
                
            </div><br>
            <div class="text-center">
                <input type="hidden" name="formu" value="registro">
                <input type="reset" class="btn btn-success" value="Borrar">
                <input type="submit" class="btn btn-success" value="Registrarse">
            </div><br>
            
        </form> 
    </div>
    <div class="col-6 derecha3 " >
        <br><br>
        <form name="ingreso" action="validar2.php" method="POST">
            
                <h2 class="text-center">INGRESO</h2>
                <div class="text-center">
                    <input type="mail" name="user"  placeholder="Correo" required>
                </div><br>
                <div class="text-center">
                    <input type="password" name="password"  placeholder="Password" required>
                </div><br>
                <div class="text-center">
                    <input type="hidden" name="formu" value="ingreso">
                    <input type="submit" class="btn btn-success" value="Ingresar al Sistema">
                </div><br>


            
            
        </form>
    </div>
    </div>
<div style="position: absolute;bottom: 0;width: 100%;">
<?php
include ('footer.php');
?>
</div>