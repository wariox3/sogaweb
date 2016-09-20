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
                            <h5><span class="dropcap"><strong>03</strong><span>01.03</span></span>Empleados</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>
                                        A través de este modulo se puede realizar todo el proceso de gestión de los empleados.<br> <br>
                                        
                                        Para ingresar un nuevo empleado, nos dirigimos al modulo administración- recurso humano- empleados. <br> <br>
                                        
                                        <img src="../../../images/recurso_humano/empleados/empleados1.jpg"  alt=""/> <br> <br> 
                                        
                                        Al ingresar a este módulo nos aparecerá la lista de empleados ya creados y las respectivas opciones de filtrar, enlaces, interfaz, PDF, exportar a Excel, nuevo y activar/inactivar. <br> <br>
                                        
                                        <img src="../../../images/recurso_humano/empleados/empleados2.jpg"  alt="" width="920"/> <br> <br> 
                                        
                                        Para crear un nuevo empleado vamos a la opción nueva y empezaremos a ingresar los datos solicitados en el formulario. <br> <br>

                                        
                                        <img src="../../../images/recurso_humano/empleados/empleados3.jpg"  alt="" width="920"/>
                                        <img src="../../../images/recurso_humano/empleados/empleados4.jpg"  alt="" width="920"/>
                                        <img src="../../../images/recurso_humano/empleados/empleados5.jpg"  alt="" width="920"/>
                                        <img src="../../../images/recurso_humano/empleados/empleados6.jpg"  alt="" width="920"/> <br> <br>
                                        
                                        Si deseamos enlazar todo el contenido del registro que se realizo anteriormente en selección simplemente vamos al botón <br>
                                        
                                        <img src="../../../images/recurso_humano/empleados/empleados7.jpg"  alt="" /> <br> <br>
                                        
                                        Una vez este ingresada la información vamos al botón <img src="../../../images/recurso_humano/empleados/empleados8.jpg"  alt="" width="50" /> <br>
                                        Si lo que deseamos es guardar la información del empleado y crear uno nuevo vamos al botón <img src="../../../images/recurso_humano/empleados/empleados9.jpg"  alt="" width="80" /> <br> <br>
                                        
                                        Al guardar el registro nos aparecerá una tabla con toda la información del empleado antes ingresada, con sus respectivas opciones de, imprimir, archivos, utilidades, y generar certificado de ingresos y retenciones. <br> <br>
                                        
                                        <img src="../../../images/recurso_humano/empleados/empleados10.jpg"  alt="" width="920"/> <br> <br>
                                        
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

