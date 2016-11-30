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
                            <h5><span class="dropcap"><strong>03</strong><span>01.01</span></span>Programacion pago</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>                                         
                                        Es la utilidad para generar el pago a los empleados, pueden ser de 3 tipos: nomina, primas, cesantias. Para
                                        el ingreso nos ubicamos en: movimientos->recurso humano->nomina->programacion pago<br><br>
                                        
                                        
                                        <img src="../../../../images/recurso_humano/programacionPago/lista.png"  alt="" width="920"/> <br><br><br>                                        
                                        
                          
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

