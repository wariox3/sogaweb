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
                        <div class="tab-content" id="tab1">
                            <h5><span class="dropcap"><strong>01</strong><span>01.01</span></span>Servicios parte 1: Configuracion comercial</h5>
                            <div class="wrapper pad_bot2">                                
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/PfHjzJ7r9TA" frameborder="0" allowfullscreen></iframe><br><br>
                            <h5><span class="dropcap"><strong>01</strong><span>01.01</span></span>Servicios parte 2: Programacion de recursos</h5>
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/yX9lJKH7X00" frameborder="0" allowfullscreen></iframe>
                            </div>                            
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

