<!DOCTYPE html>
<?php $strRutaVacia = '../../../../../'; ?>
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
                            <h5><span class="dropcap"><strong>03</strong><span>01.01</span></span>Editar contrato</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li> 
                                        Para editar un contrato vamos a la opción editar el registro <img src="../../../../../images/recurso_humano/contrato/contrato3.jpg"  alt="" /> y se nos desplegara la siguiente pantalla.<br> <br>
                                        
                                        <img src="../../../../../images/recurso_humano/contrato/contrato4.jpg"  alt="" width="920"/> 
                                        <img src="../../../../../images/recurso_humano/contrato/contrato5.jpg"  alt="" width="920"/> <br> <br>
                                        
                                        A través de este formulario solo modificamos el campo que necesitemos actualizar y finalizamos con el botón guardar. <br> <br>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    </li>
                                </ul>    
                            </div>                            
                        </div>
                </article>
                <a href="../contrato.php" class="link1">Volver</a>
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

