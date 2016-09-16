<!DOCTYPE html>
<?php $strRutaVacia = '../../../'; ?>
<html lang="en">
    <head>
        <title>Recurso Humano</title>
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
                            <h5><span class="dropcap"><strong>03</strong><span>01.04</span></span>Contratos</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>El modulo de contratos nos da una visión general y detalla de los contratos que están creados en el sistema <br /><br />
                                        Cuenta con las siguientes funcionalidades: <br /><br />
                                        .Filtrado de búsqueda (Nombre, identificación, fecha , centro de costo, estado). <br />
                                        .Terminación de contrato. <br />
                                        .Cambio de contrato. <br />
                                        .Edición de contrato. <br />
                                        .Verificar el detallado del contrato. <br />
                                        .Total de contratos en la plataforma. <br />
                                        .Exportación de listado de contratos(Excel). <br />
                                        .Inactivación de contratos. <br />
                                        .Carga de documentacion. <br />
                                        .Impresión del contrato. <br />
                                        .Impresión de carta de presentacion. <br />
                                    </li>
                                </ul>    
                            </div>                            
                        </div>
                </article>
                <a href="../recurso_humano/lista.php" class="link1">Volver</a>
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

