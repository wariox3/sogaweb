<!DOCTYPE html>
<?php $strRutaVacia = '../../'; ?>
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
                            <h5><span class="dropcap"><strong>03</strong><span>01.05</span></span>General</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>El modulo general en recursos humanos nos permite crear y modificar diversos recursos <br />
                                        que serán usados en otros módulos del sistema los cuales son: <br /><br />
                                        .Tipo de crédito. <br />
                                        .Tipo de estudio. <br />
                                        .Tipo de examen. <br />
                                        .Examen por recargo. <br />
                                        .Tipo de licencia. <br />
                                        .Tipo de capacitación. <br />
                                        .Tipo de contratos. <br />
                                        .Tipo de proceso disciplinario. <br />
                                        .Tipo de cartas. <br />
                                        .Tipo de información interna del empleado. <br />
                                        .Tipo de conceptos de gestión de desempeño. <br />
                                        .Concepto de pago. <br />
                                        .Tipo de prueba de selección. <br />
                                        .Tipo de entrevista de selección. <br />
                                        .Tipo de permisos. <br />
                                        .Academia. <br /><br />
                                        Cada una de las opciones cuenta con sus respectivas funciones de creación, edición y verificacion detallada de los campos.
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

