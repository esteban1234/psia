<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

	<div class="bannerc">
	<figure class="logo">
		<img src="../img/psia.jpg" class="img-responsive" alt="PSIA">
	</figure>
	<nav>
		<ul>
			<a class="selector" href="../index.php">INICIO</a>
			<a class="selector" href="nosotros.php">NOSOTROS</a>
			<a class="selector" href="servicios.php">SERVICIOS</a>
			<a class="selector" id="select" href="contacto.php">CONTACTO</a>
		</ul>
	</nav>
</div>



<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h2 class="h1">
                    Contacto <small>Escríbenos y resolveremos todas tus dudas. Apoyános proporcionando los siguientes datos. </small></h2>
            </div>
        </div>
    </div>
</div> <br><br>
<div class="container" style="margin-bottom: 5%;">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Escribe tu nombre completo" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Correo</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Escribe tu correo completo" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Teléfono</label>
                            <input type="text" class="form-control" id="name" placeholder="Escribe tu teléfono completo" required="required" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Comentario</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Escribe tu comentario"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-warning pull-right" id="btnContactUs">
                            ENVIAR MENSAJE</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> PRESTADORES DE SERVICIOS INTELIGENTES ABOUMEYANG S.C.P.</legend>
            <address>
                <strong>Dirección</strong><br>

                Av. José Eluterio González #250 <br> entre C. General Pablo González<br> y C. Priv. Dr. Francisco L. Rocha. <br>Col. Santa Maria. Monterrey, Nuevo León. <br>C.P. 64650.
            </address>
            <address>
                <strong>Teléfono</strong><br>
                PENDIENTE
            </address>
            <address>
                <strong>Correo</strong><br>
                <a href="mailto:info@serviciospsia.com">info@serviciospsia.com</a>
            </address>
            <address>
                <strong>Horario</strong><br>
                Lunes a Viernes de 9 am a 6 pm
            </address>
            </form>
        </div>
    </div>
</div>


<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/iconoarriba.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/menu.js"></script>

</body>
</html>
