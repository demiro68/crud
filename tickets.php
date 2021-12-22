<?php
include ('header.php');
include ('conexion.php');    
?>

    <header>
        <nav class="navsup2 ">
            <span class="textosupizq2">Conf Bs.As.</span>  
            <span class="espaciolargo"><a href="index.php">La conferencia</a></span>
            <span><a href="modif.php" class="espaciomini">Modificar Datos Personales</a></span>
            <span><a href="orador.php" class="espaciomini">Modificar Orador</a></span>
            <span><a href="salir.php" class="espaciomini">Desloguearse</a></span>
            <!--<span class="espaciocorto"><a href="tickets.php" class="text-success">Comprar Tickets</a></span> -->
            
            <span class="text-warning">&nbsp;<?php echo $_SESSION['usuario'] ?></span>
             
        </nav>
    </header>
    <main class="container">
        <?php
         $conexion = new conexion();
        /*
        if (session_status() == PHP_SESSION_NONE) {
           // session_start();
            header('Location: registrate.php');
            exit;
        }*/
        ?>
        <br><br>
        <section  class="d-inline-flex text-center ml-5 partecentral">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body border border-info">
                    <h5 class="card-title">Estudiante</h5>
                    <p class="card-text text-center">Tienen un descuento</p>
                    <p class="card-text text-center">80 %</p>
                    <p class="card-text text-center">* Presentar documentación</p>
                </div>
            </div>
              
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body border border-success">
                    <h5 class="card-title">Trainee</h5>
                    <p class="card-text text-center">Tienen un descuento</p>
                    <p class="card-text text-center">50 %</p>
                    <p class="card-text text-center">* Presentar documentación</p>
                </div>
            </div>
              
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body border border-warning">
                    <h5 class="card-title">Junior</h5>
                    <p class="card-text text-center">Tienen un descuento</p>
                    <p class="card-text text-center">15 %</p>
                    <p class="card-text text-center">* Presentar documentación</p>
                </div>
            </div>
        </section>
        <h6 class="text-center">VENTA</h6>
        <h2 class="text-center">VALOR DE TICKET $200</h2>
        <section>
        <form action="javascript:calcularTotal();">
            <div class="d-flex">
                <input type="text" class=" col-md-6 col-sm-12 mt-1 margengris" name="nombre" placeholder="Nombre" value="<?php echo $_SESSION['nombre'] ?>" readonly>
                <input type="text" class=" col-6 mt-1 ml-1 margen" name="apellido" placeholder="Apellido" value="<?php echo $_SESSION['apellido'] ?>" readonly>
            </div>
            
            <input type="text" class="form-control col-12 mt-3" name="email" placeholder="Correo" value="<?php echo $_SESSION['correo'] ?>" readonly>
            
            <div class="d-flex">
                <div class="col-6 mt-3">
                    <label for="cantidad" class=" col-12 ">Cantidad</label>
                    <input id="cantidad" class="form-control col-12 " type="text" name="cantidad" required>
                    
                    
                </div>
                <div class="col-6 mt-3 margen">
                    <label for="categoria" class=" col-12 ">Categoria</label>
                    <select id="categoria" class="form-control col-12 "  name="categoria" required>
                        <option value=1>Estudiante</option>
                        <option value=2>Trainee</option>
                        <option value=3>Junior</option>
                    </select>
                </div>
                  
            </div>
            
           
            <p id="total" class="col-12 mt-4 bg-info botonresul">Total a pagar: $</p>
            <div class="d-flex">
                <input type="reset" class="btn btn-success col-6 mt-4 botonverde" value="Borrar">
                <input type="submit" class="btn btn-success col-6 mt-4 ml-4 botonverde"  value="Resumen">
            </div>
            <p></p>
            <p></p>
        </form>
        </section>
        <script >
            function calcularTotal(){
                var canti = document.getElementById('cantidad').value;
                    cate = document.getElementById('categoria').value;
                    total = descuento = 0;
                console.log(canti);
                console.log(cate);
                if (cate == 1){
                    descuento = 0.8;
                }
                if (cate == 2){
                    descuento = 0.5;
                }    
                if (cate == 3){
                    descuento = 0.15;
                }
                console.log(descuento);
                total = parseInt(canti) * (200- (200 * parseFloat(descuento)));
                console.log(total);
                document.getElementById('total').innerHTML = ' Total a pagar $'+total;
                //boton_calcular.addEventListener('click', calculos)
            }
           
        </script>
        
        
        
        
    </main>
    <?php
    include ('footer.php');
    ?>  
    