<?php
    include ('header.php');
?>
<body>
    <header>
        <nav class="navsup clearfix">
            <img src="img/codoacodo.png" class="logocodo" alt="logomain">
            <span class="textosupizq">Conf Bs.As.</span>  
            
            <span class="espaciolargo"><a href="#conferencia">La conferencia</a></span>
            <span><a href="#oradores" class="espaciomini">Los oradores</a></span>
            <span><a href="#lugar" class="espaciomini">El lugar y la fecha</a></span>
            <span><a href="#convertite" class="espaciomini">Conviértete en orador</a></span>
            <span><a href="registrate.php" class="espaciomini">Registrate/Ingresar</a></span>
            <span class="espaciocorto"><a href="tickets.php" class="text-success">Comprar Tickets</a></span>  
        </nav>
    </header>
    <main class="container-fluid">
        <section id="conferencia" class="pantalladivi">
            <div>
                <h2 class="titulo1"><b>Conf Bs.As.</b></h2>
                <h6 class="texto1">Bs.As.llega por primera vez a la argentina. un evento para compartir con</h6>
                <h6 class="texto1">nuestra comunidad el conocimiento y experiencia de los expertos que</h6>
                <h6 class="texto1">estan creando el futuro de internet. Ven a conocer a miembros del</h6>
                <h6 class="texto1">evento, a otros estudiantes de Codo a Codo y los oradores de primer</h6>
                <h6 class="texto1">nivel que tenemos para ti. Te esperamos!</h6>
            </div>
            
            <div class="btn-group ">
                <button class="boton1 "><a href="#convertite">Quiero ser Orador</a></button>
                <button class="btn btn-success boton2 " ><a href="tickets.php">Comprar tickets</a></button>
            </div>
            
        </section>
        <section id="oradores">
            <h6 class="text-center">CONOCE A</h6>
            <h2 class="text-center">LOS ORADORES</h2>
       
            <div class="container d-flex p-2 mx-auto tarjetas ">
                <div class="card shadow-lg m-2 col-md-3 col-sm-12" >
                    <img src="img/steve.jpg"" class="card-img-top imagen1" alt="fotosteve"><br>
                    <div class="m-2">
                        <span class="bg-warning sepa">&nbsp;Javascript&nbsp;</span>
                        <span class="bg-info sepa">&nbsp;React&nbsp;</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Steve Jobs</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, aperiam quis inventore, id, eos repudiandae neque nihil quam quas voluptatem similique temporibus error illo. Velit ullam placeat aut. Maxime, qui?</p>
                    </div>
                </div>
                <div class="card shadow-lg m-2 col-md-3 col-sm-12" >
                    <img src="img/bill.jpg" class="card-img-top imagen2" alt="fotobill"><br>
                    <div class="m-2">
                        <span class="bg-warning sepa">&nbsp;Javascript&nbsp;</span>
                        <span class="bg-info sepa">&nbsp;React&nbsp;</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Bill Gates</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, aperiam quis inventore, id, eos repudiandae neque nihil quam quas voluptatem similique temporibus error illo. Velit ullam placeat aut. Maxime, qui?</p>
                        
                    </div>
                </div>
                <div class="card shadow-lg m-2 col-md-3 col-sm-12" >
                    <img src="img/ada.jpeg" class="card-img-top imagen3" alt="fotoada"><br>
                    <!-- style="width: 28rem;"-->
                    <div class="m-2">
                        <span class="bg-secondary sepa">&nbsp;Negocios&nbsp;</span>
                        <span class="bg-danger sepa">&nbsp;StartUps&nbsp;</span>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title">Ada Lovelace</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, aperiam quis inventore, id, eos repudiandae neque nihil quam quas voluptatem similique temporibus error illo. Velit ullam placeat aut. Maxime, qui?</p>
                        
                    </div>
                </div>
            </div>   
        </section>
        <section id="lugar" class="pantalladiv2">
            <div class="izquierda2 ">
            </div>
            <div class="derecha2 ">
                <h4> Bs.As. - Octubre  </h4>
                <p class="small">Buenos Aires es la provincia y localidad mas grande del estado de Argentina, en los Estados Unidos. Honolulu es la </p>
                <p class="small">más sureña de entre las principales ciudades estadounidenses. aunque el nombre de Honolulu se refiere al area</p>
                <p class="small">urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de honolulu han formado una ciudad-</p>
                <p class="small">condado consolidada que cubre toda la ciudad (aproximadamente 600 km2 de superficie).</p>
                <div class="boton">
                    <a href="" class="botonespe" >Conocé Más</a>
                </div>
            </div>
        </section>
        <section id="convertite" class="container">
            <div class="text-center">
                <small>CONVIERTETE EN UN</small>
                <h2>ORADOR</h2>
                <small>Anotate como orador para dar una charla ignite, cuentanos de que quieres hablar</small>
            </div>
            <form name="formconvertite" action="oradores.php" method="POST">
                <input type="text" class="col-5 offset-md-1 input1" placeholder="Nombre" required>
                <input type="text" class="col-5 input1" placeholder="Apellido" required><br><br>
                <textarea class="col-10 offset-md-1 input2" name="tema" placeholder="Sobre que quieres hablar" required></textarea>
                <p class="offset-md-1">Recuerda incluir un titulo para tu charla</p>
                <input type="submit" class="col-10 offset-md-1 boton5" id="botonenviar"><br><br>
            </form>
           
        </section>
    </main>
    <?php
    include ('footer.php');
    ?>

    