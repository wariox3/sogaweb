<!DOCTYPE html>
<?php $strRutaVacia = '../../'; ?>
<html lang="en">
    <head>
        <title>Turnos</title>
        <?php include $strRutaVacia.'general/referencias2.php'; ?>
    </head>

    <body id="page2">
        <div class="body1">
            <div class="body2">
                <div class="body5">
                    <div class="main">
                        <!-- header -->
                        <header>
                            <?php include $strRutaVacia.'general/menu.php'; ?>
                        </header>
                        <!-- header end-->
                    </div>
                </div>
            </div>
        </div>
        <div class="body3">
            <div class="main">
                <article id="content">
                        <h5><span class="dropcap"><strong>09</strong><span>02</span></span>Ciclo de turnos</h5>
                        <div class="wrapper pad_bot2">
                                <figure class="left marg_right1"><img src="<?php echo $strRutaVacia.'images/recursos/calendario.jpg'; ?>" alt=""></figure>
                                <p class="pad_bot1">La aplicacion de turnos es un mecanismo de asignacion de horarios a un grupo de recursos con herramientas que nos permiten
                                    controlar la eficiencia en el cumplimiento de los servicios. <br />
                                    Con la recopilacion de los turnos es posible generar procesos de facturacion y nomina automaticamente, recogiendo
                                    la informacion suministrada por las programaciones y ajustadas a la realidad del calendario, teniendo en cuenta los 
                                    dias festivos, dominicales y compensaciones que maneje cada compañia.                                
                                </p>                                
                        </div>                        
                        <img src="<?php echo $strRutaVacia.'images/recursos/cicloprogramacionturnos.jpg'; ?>" alt="">
                </article>
                <article id="content">
                        <h3>Cotizacion</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1">Con este documento se hace uso de los conceptos de servicio que tienen asignadas unas horas diurnas y nocturnas para 
                                    cotizar el precio de la prestacion de un servicio determinado, basicamente radica en el calculo de las horas en los dias 
                                    especificados. <br />
                                </p> 
                                <a href="../turno/movimientoCotizacion.php" class="link1">Ver tutorial</a>
                        </div>                                                
                </article> 
                <article id="content">
                        <center><h3>¿Pedido o servicio?</h3></center>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1">Esta incongnita se resuelve con dos parametros: El servicio se va prestar en una sola ocacion o 
                                    es permanente? <br />
                                    1 - Ocacional: En este caso creamos directamente el pedido con base en la cotizacion, este pedido es creado una 
                                    unica vez. (Omitir creacion de servicio)<br />
                                    2 - Permanente: En el caso de ser un servicio permanente el usuario no necesita crear un pedido con base en la cotizacion 
                                    cada mes, basta con crear un servicio permanente con el cual se crean automaticamente los pedidos cada mes.
                                </p>                                
                        </div>                                                
                </article>                 
                <article id="content">
                        <h3>Servicio</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1">Los servicios son una herramienta para la parametrizacion de un servicio permanente, que se presta mes a mes,
                                    con esto evitamos crear pedidos manualmente cada mes.<br />
                                    Su eficiencia y exactitud dependen de una buena gestion de los recursos de las plantillas con que se presta el servicio.<br/>
                                    Cabe aclararse qeu los servicios no son facturables ni programables solo sirven como base para crear un pedido.
                                </p> 
                                <a href="../turno/movimientoCotizacion.php" class="link1">Ver tutorial</a>
                        </div>                                                
                </article>       
                <article id="content">
                        <h3>Pedidos</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1">Los pedidos son la base de la programacion de turnos, ya que estos son el eje entre 
                                    facturacion, programacion y nomina.<br />
                                    Un pedido se puede programar cuando este autorizado y en el caso de ser creado automaticamente desde un servicio, este hereda los 
                                    recursos con los cuales se debe programar.
                                </p> 
                                <a href="../turno/movimientoPedido.php" class="link1">Ver tutorial</a>
                        </div>                                                
                </article> 
                <article id="content">
                        <h3>Programaciones</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1">La programacion es la ultima estancia del ciclo de turnos y es aqui donde se procesan las programaciones
                                    de los pedidos de servicio. Solo se pueden programar pedidos. <br />
                                    La programacion puede variar en recuros y en turnos dependiendo de las necesidades que se presenten en la 
                                    prestacion del servicio.
                                </p> 
                                <a href="../turno/movimientoProgramacion.php" class="link1">Ver tutorial</a>
                        </div>                                                
                </article>                
                
                <a href="../turno/lista.php" class="link1">Volver</a>
                <br /><br />
            </div>
            
        </div>
        <div class="body4">
            <?php include $strRutaVacia.'general/cuerpo4.php'; ?>
        </div>
        <div class="main">
            <!-- footer -->
            <?php include $strRutaVacia.'general/pie.php'; ?>
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

