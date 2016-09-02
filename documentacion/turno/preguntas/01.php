<!DOCTYPE html>
<?php $strRutaVacia = '../../../'; ?>
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
                        <h5><span class="dropcap"><strong>09</strong><span>02</span></span>Como generar una programacion de pago con base en un soporte de pago</h5>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1">Para generar una programacion de pago soportada de la informacion generada en el proceso
                                    de turnos se deben seguir dos pasos: <br /><br />
                                    1. Generar el soporte de pago del periodo que quedemos resumir, es de anotar la importancia de tener
                                    nuestros recursos bien clasificados en centros de costos ya que es desde ese parametro que se generan
                                    los soportes de pago. <a href="../procesoGenerarSoportePago.php" class="link1">En este enlace</a> podemos ver el video-tutorial del proceso.<br/><br />
                                    
                                    2. Generar una programacion de pago que por lo generar ya desde el modulo de recurso humano se genera automaticamente, es importante
                                    saber que los centros de costos de recursos humano son una entidad diferente a los centros de costos de los recursos. Cada uno
                                    pretende clasificar y organizar sus elementos en grupos, por lo tanto, centros de costos organiza los empleados en conjuntos que el departamento
                                    de recurso humano estime y por el lado de turnos, dicho departamento crea y organiza sus recursos en otros centros de costos.
                                    <a href="../../recurso_humano/movimientoProgramacionPagoSoporteTurnos.php" class="link1">En este enlace</a> podemos ver el video-tutorial de como generar una programacion de pago con un soporte de turnos.                                    
                                </p>                                
                        </div>                                                
                </article>               
                
                <a href="../../turno/lista.php" class="link1">Volver</a>
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

