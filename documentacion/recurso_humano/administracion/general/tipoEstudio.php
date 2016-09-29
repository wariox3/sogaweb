<!DOCTYPE html>
<?php $strRutaVacia = '../../../../'; ?>
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
                            <h5><span class="dropcap"><strong>03</strong><span>01.05</span></span>Tipo de estudio</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>
                                        Para crear un tipo de permiso vamos a la siguiente ruta Administración - Recurso humano - General - Tipo de estudio. <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/general/tipo_estudio/tipo_estudio1.jpg"  alt=""/><br><br>
                                        
                                        Al ingresar nos mostrara el listado de los tipos de estudios ya creados. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/general/tipo_estudio/tipo_estudio2.jpg"  alt="" width="920"/><br><br>
                                        
                                        Vamos a la opción nuevo ubicada en la parte inferior de la pantalla y nos mostrara la siguiente ventana <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/general/tipo_estudio/tipo_estudio3.jpg"  alt="" width="920"/><br><br>

                                        
                                        
                                    </li>
                                </ul>    
                            </div>                            
                        </div>
                </article>
                <a href="../administracionGeneral.php" class="link1">Volver</a>
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

