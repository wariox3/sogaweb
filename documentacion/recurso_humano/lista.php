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
                <!-- content -->
                <br />
                <ul>
                    <li>Administracion</li>
                    <ul>
                        <li><a href="crearEmpleado.php" class="link1">Crear empleado</a></li>
                        <li><a href="crearContrato.php" class="link1">Crear contrato</a></li>
                    </ul>
                </ul>
                <br />
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

