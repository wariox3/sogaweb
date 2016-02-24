<!DOCTYPE html>
<?php $strRutaVacia = '../../'; ?>
<html lang="en">
    <head>
        <title>Recurso humano</title>
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
                    <h5><span class="dropcap"><strong>01</strong><span>03</span></span>Movimiento</h5>
                    <div class="wrapper pad_bot2">
                        <ul>
                            <li><a href="movimientoProgramacionPagoSoporteTurnos.php" class="link1">Programacion de pago (Soporte turnos)</a></li>
                        </ul>
                    </div>
                </article>                
                <article id="content">
                    <h5><span class="dropcap"><strong>01</strong><span>02</span></span>Herramientas: Soga E - Empleados</h5>
                    <div class="wrapper pad_bot2">
                        <ul>
                            <li>Aplicacion para empleados: Con esta herramienta los empleados podran consultar toda la informacion 
                                generada por el modulo de recursos humano. <br/>
                                - Pagos: nomina, primas, vacaciones, cesantias, liquidaciones.<br />
                                - Procesos disciplinarios<br />
                                - Liquidaciones<br />
                                - Certifiados laborales<br />
                                - Permisos <br /><br />
                                <a href="recursos/ManualUsuarioEmpleadoV1.pdf" class="link1">Descargar manual empleado</a>
                            </li>
                        </ul>
                    </div>
                </article>
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

