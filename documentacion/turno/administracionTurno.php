<!DOCTYPE html>
<?php $strRutaVacia = '../../'; ?>
<html lang="en">
    <head>
        <title>Turnos</title>
        <?php include 'general/referencias.php'; ?>
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
                            <h5><span class="dropcap"><strong>01</strong><span>05</span></span>Crear un turno</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>
                                        Los turnos son los segmentos de tiempos que labora un empleado en determinado dia.<br><br>
                                        
                                        Para realizar la creación de los turnos vamos al modulo administración - Turnos - Turno. <br><br>

                                        <img src="../../images/turno/turnos/turno1.jpg"  alt=""/><br> <br> <br>
 
                                        Una vez ingresamos al modulo contamos con la opción de observar los turnos ya creados<br>
                                        con sus respectivas opciones de nuevo - eliminar y exportar los archivos a excel. <br><br>
                                        
                                        <img src="../../images/turno/turnos/turno2.jpg" width="920px"  alt=""/><br> <br> <br>
                                        
                                        Ingresamos a la opción de nuevo y agregaremos los siguientes datos: <br> <br>
                                        Código (Es un código alfanumérico que identifica dicho turno).<br>
                                        Nombre (El nombre que se le asigna como tal al turno para reconocerlo). <br>
                                        Hora desde (La hora en la que inicia el turno). <br>
                                        Hora hasta (La hora en la que finaliza el turno).<br>
                                        Horas (El total de horas que tiene el turno). <br>
                                        Horas nomina (Es la cantidad de horas que se reflejaran en la nomina). <br>
                                        Horas diurnas (Cantidad de horas diurnas que compone el turno). <br>
                                        Horas nocturnas (Cantidad de horas nocturnas que compone el turno). <br>
                                        Complementario (Si el turno es complementario). <br>
                                        Novedad (Si el turno aplica como una novedad). <br>
                                        Descanso (Si el turno es un descanso). <br>
                                        Incapacidad (El turno es por una incapacidad). <br>
                                        Licencia (El turno es por una licencia). <br>
                                        Licencia no remunerada (Si el turno es para una licencia no remunerada ). <br>
                                        Vacaciones (Si el turno es para vacaciones). <br>
                                        Ingreso (Si el turno es para un ingreso). <br>
                                        Retiro (Si el turno es para un retiro). <br>
                                        Inducción (Si el turno es para un proceso de inducción). <br>
                                        Comentarios (Campo para agregar cualquier tipo de comentario del turno). <br><br>
                                        
                                        <img src="../../images/turno/turnos/turno3.jpg"  alt=""/><br> <br> <br>
                                        
                                        Para finalizar el proceso solo vamos al boton guardar.<img src="../../images/turno/turnos/turno4.jpg"  alt=""/><br><br>
                                        Si deseamos guardar el registros y generar uno nuevo de forma inmediata basta con usar la opcional guardar y nuevo. <img src="../../images/turno/turnos/turno5.jpg"  alt=""/>
                                        
                                    </li>
                                </ul>
                            </div>     
                            <div class="wrapper pad_bot2">                                     
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/_gyxPpvYmVs" frameborder="0" allowfullscreen></iframe>
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

