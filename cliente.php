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
						<h5><span class="dropcap"><strong>11</strong><span>15</span></span>Plazas seguridad Ltda</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/logos/logoplazas.jpg" width="150" height="150" alt=""></figure>
							<p class="pad_bot1">Cliente estrategico en el sector de la seguridad privada
                                                        
                                                        </p>
							<a href="#" class="link1">Leer mas</a>
						</div>
						<h5><span class="dropcap"><strong>11</strong><span>15</span></span>1Teg Seguridad</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/logos/logo1teg.jpg" width="150" height="150" alt=""></figure>
							<p class="pad_bot1">Cliente estrategico en el sector de la seguridad privada
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

