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
                            <h5><span class="dropcap"><strong>03</strong><span>01.01</span></span>Modulo de contratos</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li> 
                                        En el modulo de contratos se puede realizar la busqueda de los contratos ya creados en el sistema, terminacion del contrato y cambios. <br> <br>
                                        
                                        Para ingresar al módulo de contratos vamos a Administración - Recurso humano - contratos. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/contrato/contrato1.jpg"  alt=""/> <br> <br> <br>         
                                        
                                        Al ingresar observamos los contratos ya creados en el sistema con su respectivo sistema de busqueda. <br> <br>
                     
                                        <img src="../../../../images/recurso_humano/contrato/contrato2.jpg"  alt="" width="920"/> <br> <br>
                                        
                                        En esta ventana vamos a realizar las modificaciones a los contratos como lo son: <br><br>
                                        <a href="editar/editar.php" class="link1"> Editar contrato<br></a>
                                        <a href="terminacion/terminacion.php" class="link1"> Terminacion de contrato.<br></a>
                                        <a href="cambio/cambio.php" class="link1">Cambio de contrato.<br></a>
                                        <a href="detalle/detalle.php" class="link1">Ver el detalle del contrato.<br> <br></a>
                                        
                                        
                                    </li>
                                </ul>    
                            </div>                            
                        </div>
                </article>
                <a href="../administracionContrato.php" class="link1">Volver</a>
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

