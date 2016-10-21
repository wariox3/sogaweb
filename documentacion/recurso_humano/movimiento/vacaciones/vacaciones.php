<!DOCTYPE html>
<?php $strRutaVacia = '../../../../'; ?>
<html lang="en">
    <head>
        <title>Nomina</title>
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
                            <h5><span class="dropcap"><strong>03</strong><span>01.01</span></span>Vacaciones</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li> 
                                        Para registrar una vacacion vamos al modulo de Movimiento - Recurso humana - Nomina - Vacaciones. <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/vacaciones/vacaciones1.jpg"  alt="" width="920"/> <br><br>
                                        
                                        Al ingresar a las vacaiones nos aparecera la siguiente ventana que nos mostrara las vacaiones ya registradas con sus respectivos filtros de busqueda. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/vacaciones/vacaciones2.jpg"  alt="" width="920"/> <br><br>
                                        
                                        1-Iniciamos el proceso dando click en nuevo ubicado en la parte inferior derecha y se nos abrira la siguiente ventana.<br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/vacaciones/vacaciones3.jpg"  alt="" width="920"/> <br><br>
                                        
                                        1-Realizamos la busqueda del empleado dando click en el boton buscar y se nos desplegara la siguiente ventana<br><br>
                                        
                                        <img src="../../../../images/recurso_humano/vacaciones/vacaciones5.jpg"  alt=""/> <br><br>
                                        
                                        Seleccionamos el empleado que vamos a realizar su registro de vacaciones y le damos click en el icono de la derecha <br><br>
                                        
                                        Nos llevara nuevamente a la ventana de nueva vacacion y agregamos la cantidad de dias disfrutados o de pagados cual sea el caso. <br>
                                        Seleccionamos la fecha de inicio y de finalizacion de la vacacion.<br><br>
                                        
                                        2- En caso de que el sistema no tenga actualmente el salario promedio se debe ingresar manualmente.<br>
                                        Agregamos los comentarios necesarios y finalizamos con el boton guardar. <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/vacaciones/vacaciones4.jpg"  alt="" width="920"/> <br><br>
                                        
                                        
                                        
                                    </li>
                                </ul>    
                            </div>                            
                        </div>
                </article>
                <a href="../../lista.php" class="link1">Volver</a>
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

