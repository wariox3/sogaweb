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
                                        El modulo general en recursos humanos nos permite crear y modificar diversos recursos <br>
                                        que serán usados en otros módulos del sistema. <br><br>
                                        
                                        Para ingresar a verificar el listado de los maestros vamos a administracion - recurso humano - general<br><br>
                                        
                                        <img src="../../../../images/recurso_humano/general/tipo_credito/tipo_credito1.jpg"  alt=""/><br><br>
                                        
                                        <a href="general/" class="link1">Tipo de crédito. </a><br>
                                        <a href="general/" class="link1">Tipo de estudio. </a><br>
                                        <a href="general/" class="link1">Tipo de examen.  </a><br>
                                        <a href="general/" class="link1">Examen por recargo. </a><br>
                                        <a href="general/" class="link1">Tipo de licencia. </a><br>
                                        <a href="general/" class="link1">Tipo de capacitación. </a><br>
                                        <a href="general/" class="link1">Tipo de contratos. </a><br>
                                        <a href="general/" class="link1">Tipo de proceso disciplinario. </a><br>
                                        <a href="general/" class="link1">Tipo de cartas. </a><br>
                                        <a href="general/" class="link1">Tipo de información interna del empleado. </a><br>
                                        <a href="general/" class="link1">Tipo de conceptos de gestión de desempeño. </a><br>
                                        <a href="general/" class="link1">Concepto de pago. </a><br>
                                        <a href="general/" class="link1">Tipo de prueba de selección. </a><br>
                                        <a href="general/" class="link1">Tipo de entrevista de selección. </a><br>
                                        <a href="general/" class="link1">Tipo de permisos. </a><br>
                                        <a href="general/" class="link1">Academia. </a><br><br>
                                        
                                        Cada una de las opciones cuenta con sus respectivas funciones de creación, edición y verificacion detallada de los campos.
                                        
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

