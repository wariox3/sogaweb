<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AppSoga</title>
        <?php include 'general/referencias.php'; ?>
        <?php include 'general/referencias2.php'; ?>
    </head>
    <body id="page2">
	<div class="body1">
	<div class="body2">
	<div class="body5">
		<div class="main">
<!-- header -->
			<header>
                        <?php include 'general/menu.php'; ?>
			</header>
<!-- header end-->
		</div>
	</div>
	</div>
	</div>
	<div class="body3">
		<div class="main">
<!-- content -->
			<article id="content">
				<div class="wrapper tabs">
					<div class="tab-content" id="tab1">
						<h5><span class="dropcap"><strong>02</strong><span>16</span></span>Version de prueba aplicacion turnos v1.0</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Sale la primera version de la aplicacion de turnos, inicialmente adaptada para el sector de vigilancia
                                                        
                                                        </p>
							<a href="#" class="link1">Leer mas</a>
						</div>
						<h5><span class="dropcap"><strong>11</strong><span>15</span></span>Aplicacion de recursos humanos</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Con esta aplicacion se lanza la primera version del software completo de recurso humano, 
                                                            comprendido desde seleccion hasta la liquidacion de los empleados.
                                                        </p>
							<a href="#" class="link1">Leer mas</a>
						</div>
					</div>
					<ul class="nav">
						<li class="selected"><a href="#tab1">1</a></li>
					</ul>
				</div>

			</article>
		</div>
	</div>
        <div class="body4">
            <?php include 'general/cuerpo4.php'; ?>
        </div>
        <div class="main">
            <?php include 'general/pie.php'; ?>
        </div>
        <script type="text/javascript"> Cufon.now();</script>           
        <script>
            $(document).ready(function () {
                tabs.init();
            })
        </script>
    </body>
</html>

