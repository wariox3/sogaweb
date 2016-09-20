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
                            <h5><span class="dropcap"><strong>03</strong><span>01.01</span></span>Requisito</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>
                                        Los requisitos son los documentos que son necesarios para la contratación de un empleado. <br> <br>
                                        
                                        Para realizar este proceso nos dirigimos al módulo movimiento - recurso humano- contratación- requisitos. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/requisitos/requisito1.jpg"  alt="" width="920"/> <br> <br>
                                        
                                        Una vez ingresamos al módulo contamos con la opción filtrar, nuevo, eliminar y exportar archivo a Excel. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/requisitos/requisito2.jpg"  alt="" width="920"/> <br> <br>
                                        
                                        Ingresamos el número identificación del aspirante seleccionado y le damos filtrar, al hacer esto nos aparecerá en la parte inferior y vamos a proceder seleccionando la opción ver detalle. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/requisitos/requisito3.jpg"  alt="" width="920"/> <br> <br>
                                        
                                        Hecho esto vamos a seleccionar solo los documentos que el aspirante ha entregado y le damos clic al botón entregado, para confirmar que fueron entregados. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/requisitos/requisito4.jpg"  alt="" width="920"/> <br> <br>
                                        
                                        Al verificar que todos los documentos estén entregados el último paso a seguir es autorizar los requisitos para esto vamos al botón autorizar. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/requisitos/requisito5.jpg"  alt="" />
                                        
                                    </li>
                                </ul>    
                            </div>                            
                        </div>
                </article>
                <a href="../movimientoSeleccion.php" class="link1">Volver</a>
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

