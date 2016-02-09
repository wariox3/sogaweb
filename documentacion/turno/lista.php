<!DOCTYPE html>
<?php $strRutaVacia = '../../'; ?>
<html lang="en">
    <head>
        <title>Recurso humano</title>
        <?php include $strRutaVacia . 'general/referencias2.php'; ?>
    </head>

    <body id="page2">
        <div class="body1">
            <div class="body2">
                <div class="body5">
                    <div class="main">
                        <!-- header -->
                        <header>
                            <?php include $strRutaVacia . 'general/menu.php'; ?>
                        </header>
                        <!-- header end-->
                    </div>
                </div>
            </div>
        </div>
        <div class="body3">
            <div class="main">
                <article id="content">
                    <h5><span class="dropcap"><strong>01</strong><span>01</span></span>Conceptos basicos</h5>
                    <div class="wrapper pad_bot2">
                        <figure class="left marg_right1"><img src="<?php echo $strRutaVacia . 'images/recursos/calendario.jpg'; ?>" alt=""></figure>
                        <p class="pad_bot1">Guia para aprender a manejar la aplicacion de turnos, con ilustraciones, videos y audio acerda del proceso; recopilando
                            en cada paso, los consejos y buenas practicas a la hora de programar turnos con base en pedidos de servicio. <br />
                            Esta guia tiene un enfoque especializado en el sector de la vigilancia con tarifas y normatividad del sector.
                        </p>
                        <a href="cicloTurnos.php" class="link1">Ver mas</a>
                    </div>
                </article>

                <article id="content">
                    <h5><span class="dropcap"><strong>01</strong><span>02</span></span>Administracion</h5>
                    <div class="wrapper pad_bot2">
                        <ul>
                            <li><a href="administracionCliente.php" class="link1">Crear clientes</a></li>
                            <li><a href="administracionProspecto.php" class="link1">Crear prospectos</a></li>
                            <li><a href="administracionRecurso.php" class="link1">Crear recursos</a></li>
                            <li><a href="administracionTurno.php" class="link1">Crear turnos</a></li>
                            <li><a href="administracionPlantillaTurno.php" class="link1">Crear plantillas turnos</a></li>
                            <li><a href="administracionConceptoServicio.php" class="link1">Crear conceptos servicios</a></li>
                        </ul>
                    </div>
                </article>

                <article id="content">
                    <h5><span class="dropcap"><strong>01</strong><span>03</span></span>Movimiento</h5>
                    <div class="wrapper pad_bot2">
                        <ul>
                            <li><a href="movimientoCotizacion.php" class="link1">Cotizaciones</a></li>
                            <li><a href="movimientoServicio.php" class="link1">Servicios</a></li>
                            <li><a href="movimientoPedido.php" class="link1">Pedidos</a></li>
                            <li><a href="movimientoProgramacion.php" class="link1">Programaciones</a></li>
                            <li><a href="movimientoFactura.php" class="link1">Facturacion</a></li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
        <div class="body4">
            <?php include $strRutaVacia . 'general/cuerpo4.php'; ?>
        </div>
        <div class="main">
            <!-- footer -->
            <?php include $strRutaVacia . 'general/pie.php'; ?>
            <!-- footer end -->
        </div>
        <script type="text/javascript"> Cufon.now();</script>
        <script>
            $(document).ready(function () {
                tabs.init();
            })
        </script>
    </body>
</html>

