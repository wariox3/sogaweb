<!DOCTYPE html>
<?php $strRutaVacia = '../../'; ?>
<html lang="en">
    <head>
        <title>Turnos</title>
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
                            <h5><span class="dropcap"><strong>01</strong><span>02</span></span>Crear un cliente</h5>
                            <div class="wrapper pad_bot2">                                
                                <ul>
                                    <li>
                                        Los clientes en el modulo de turnos son a los que se les asignara un servicio determinado.<br><br>
                                        
                                        Para realizar dicho procedimiento vamos al modulo de administracion - Turno - Cliente - Cliente. <br> <br>
                                        
                                        <img src="../../images/turno/clientes/cliente1.jpg"  alt=""/><br> <br>
                                        
                                        Inicialmente visualizaremos todos los clientes ya creados en la plataforma con sus respectivas opciones de filtrado creacion y exportacion.<br><br>
                                        
                                        <img src="../../images/turno/clientes/cliente2.jpg" width="920px" alt=""/><br> <br>
                                        
                                        Ingresamos a la opcion de nuevo para iniciar el procedimiento y llenamos los siguientes campos: <br><br>
                                        
                                        Tipo (Tipo de documento).<br>
                                        Numero (Numero del tipo de indentificacion seleccionado anteriormente).<br>
                                        Digito de verificacion (En caso de que el tipo de documento contenga un digito de verificacion). <br>
                                        Nombre corto (Nombre de poco caracteres para reconocer el recliente). <br>
                                        Nombre completo.<br>
                                        Nombre 1. <br>
                                        Nombre 2. <br>
                                        apellido 1. <br>
                                        apellido 2. <br><br>
                                        
                                        
                                    </li>
                                </ul>
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/J4IvXzvxGrE" frameborder="0" allowfullscreen></iframe>
                            </div>                            
                        </div>
                </article>
                <a href="../turno/lista.php" class="link1">Volver</a>
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

