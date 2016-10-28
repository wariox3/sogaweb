<!DOCTYPE html>
<?php $strRutaVacia = '../../../../'; ?>
<html lang="en">
    <head>
        <title>Nomina</title>
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
                        <div class="tab-content" id="tab1">
                            <h5><span class="dropcap"><strong>03</strong><span>01.01</span></span>Adicionales al pago</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li> 
                                        
                                        Los pagos adicionales son aquellas bonificaciones o deducciones que se pueden aplicar al pago de nomina de un empleado de forma permanente o en un periodo de pago especifico.<br><br>
                                        Para ingresar a los pagos permanentes vamos a la ruta Movimientos - Recurso humano - Nomina - (Seleccionar pago permanente o pago por fecha).<br><br><br>
                                        
                                        <img src="../../../../images/recurso_humano/adicionalPago/adicional1.jpg"  alt="" width="920"/> <br><br><br>
                                        
                                        Iniciaremos por los pagos adiconales permantentes, como su nombre lo indica estos pagos se aplicaran en cada programacion de pago. <br><br>
                                        
                                        Cuando seleccionamos Adicional al pago permanente se nos desplegara la siguiente ventana. <br><br><br>
                                        
                                        <img src="../../../../images/recurso_humano/adicionalPago/permanente1.jpg"  alt="" width="920"/> <br><br>
                                        
                                        Al seleccionar la opcion Nueva bonificacion se nos desplegara la siguiente ventana. <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/adicionalPago/permanente2.jpg"  alt="" width="920"/> <br><br>
                                                                               
                                        El primer paso es realizar la busqueda del empelado al que le vamos a generar una adicion al pago, vamos a la opcion buscar y se nos desplegara la siguiente ventana. <br><br><br>
                                        
                                        <img src="../../../../images/recurso_humano/adicionalPago/permanente3.jpg"  alt="" /> <br><br>
                                       
                                        Seleccionamos el empleado al que cual le aplicaremos el adicional pago y nos regresara a la ventana anterior para continuar el proceso.<br><br>
                                        
                                        Finalizamos el proceso seleccionando el tipo de bonificacion, el valor de la bonificacion y si aplica a dia laborado. Adiccional se puede agregar un detalle a la bonificacion. <br><br>
                                        
                                        Para agregar una deduccion permanente usamos la opcion Nuevo descuento y se nos desplegara una ventana similar a la de bonificaciones. <br><br>

                                        Seleccionamos el empleado, el tipo de descuento, el valor del descuento y si aplica a dias laborados la deduccion.<br><br>
                                        
                                        <img src="../../../../images/recurso_humano/adicionalPago/permanente4.jpg"  alt="" width="920"/> <br><br>
                                        
                                        La otra opcion que tenemos es adicional pagos por fecha los cuales se aplicaran a una programacion de pago especifica. <br><br>
                                        
                                        Vamos a la opcion Nuevo para crear el periodo de pago a cual aplicaremos las adiciones o deducciones del pago. <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/adicionalPago/adicional_fecha1.jpg"  alt="" width="920"/>
                                        
                                        Al ingresar al periodo de pago observamos que la interfaz es igual a los permanentes y debemos de realizar los mismos procedimientos descitos anteriormente <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/adicionalPago/adicional_fecha2.jpg"  alt="" width="920"/>
                          
                                    </li>
                                </ul>    
                            </div>                            
                        </div>
                </article>
                <a href="../../lista.php" class="link1">Volver</a>
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

