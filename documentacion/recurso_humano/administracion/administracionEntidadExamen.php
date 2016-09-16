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
                            <h5><span class="dropcap"><strong>03</strong><span>01.09</span></span>Entidad examen</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>
                                       A traves de este modulo poodemos administrar la informacion de las entidades encargadas <br />
                                       de prestar el servicio de los examenes medicos en el proceso de seleccion. <br /><br />
                                       
                                       El modulo cuenta con las siguientes funcionalidades: <br /><br />
                                       .Creacion de una nueva entidad. <br />
                                       .Edicion de una entidad. <br/>
                                       .Eliminacion de una entidad. <br />
                                       .Verificar el detalle de la entidad. <br />
                                       .Exportación de listado de las entidades de examenes (Excel, PDF).  <br />
                                       .Total de entidades registradas. <br />    
                                       .Vinculo directo a tipos de examenes <br />
                                    </li>
                                </ul>    
                            </div>                            
                        </div>
                </article>
                <a href="../lista.php" class="link1">Volver</a>
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

