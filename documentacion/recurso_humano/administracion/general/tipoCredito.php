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
                            <h5><span class="dropcap"><strong>03</strong><span>01.05</span></span>Tipo de credito</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>
                                        Para crear un tipo de credito en la plataforma ingresamos a la siguiente ruta<br><br>
                                        Administracion - recurso humano - general - tipo de credito <br><br>
                                               
                                        <img src="../../../../images/recurso_humano/general/tipo_credito/tipo_credito1.jpg"  alt=""/><br><br>
                                        
                                        Al ingresar a la los tipos de credito nos aparecera la siguiente ventana que nos mostrara los creditos ya creados con sus respectivas opciones <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/general/tipo_credito/tipo_credito2.jpg"  alt="" width="920"/><br><br>
                                        
                                        Para crear un nuevo tipo de credito vamos al boton Nuevo ubicado en la parte inferior de la ventana y se nos desplegara la siguiente ventana <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/general/tipo_credito/tipo_credito3.jpg"  alt="" width="920"/>
                                        
                                        Llenamos los datos que nos solicitan y finalizamos con el boton guardar.<br><br>
                                        
                                        En caso de que necesitemos ver que creditos hay cargados en el sistema en este tipo de credito vamos al detalle del credito y nos mostrara en la parte inferior de la pantalla los creditos cargados.<br><br>
                                        
                                        <img src="../../../../images/recurso_humano/general/tipo_credito/tipo_credito4.jpg"  alt="" width="920"/>
                                        
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

