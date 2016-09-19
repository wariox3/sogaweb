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
                            <h5><span class="dropcap"><strong>03</strong><span>01.01</span></span>Selección</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>
                                        La selección de personal es aquella actividad que desplegara el departamento de recursos humanos <br>
                                        que consiste en elegir la persona más idónea para un puesto o vacante de una empresa. <br> <br>
                                        
                                        Para realizar la selección vamos al modulo movimientos- recurso humano- selección- selección. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/seleccion/seleccion1.jpg"  alt="" width="920"/> <br> <br> 
                                        
                                        Al ingresar a este modulo observamos los aspirantes ya creados y la opción de filtrar, nuevo, eliminar y exportar a excel. <br>
                                        Si ingresamos el nombre o número de documento del aspirante que deseamos  seleccionar, nos aparecerá automáticamente en la parte inferior. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/seleccion/seleccion2.jpg"  alt="" width="920"/> <br> <br>
                                        
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

