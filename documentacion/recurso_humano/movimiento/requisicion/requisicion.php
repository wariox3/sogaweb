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
                            <h5><span class="dropcap"><strong>03</strong><span>01.01</span></span>Requisición</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>
                                        La Requisición es la solicitud que hace una empresa o compañía para cubrir una vacante disponible y que solicita requerimientos laborales, <br>
                                        personales, escolares y de experiencia del aspirante, así también como las características del puesto. <br> <br>
                                        
                                        Para crear la requisición vamos al modulo movimientos – recurso humano – requisición. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/requisicion/requisicion1.jpg"  alt="" width="920"/> <br> <br> <br>
                                        
                                        Una vez ingresamos al modulo,observamos las requisiciones ya creadas con sus respectivas opciones de nuevo- cerrar- eliminar y exportar a Excel. <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/requisicion/requisicion2.jpg"  alt="" width="900"/> <br> <br> <br>
                                        
                                        Ingresamos a la opción nuevo y agregamos los siguientes datos: <br> <br>
                                        
                                        .Centro de costo (Nombre del centro de costo asignado) <br>
                                        .Zona () <br>
                                        .Cargo (Que cargo desempeñaría el aspirante) <br>
                                        .Nombre (Nombre de la requisición) <br>
                                        .Cantidad (La cantidad de vacantes disponibles) <br>
                                        .Edad mínima (La edad mínima que se requiere para el cargo) <br>
                                        .Edad máxima (La edad máxima que se requiere para el cargo) <br>
                                        .Ciudad residencia (Ciudad de residencia que se requiere) <br>
                                        .Nivel de estudio (Nivel de estudio que se requiere) <br>
                                        .Estado civil (Estado civil que se requiere) <br>
                                        .Nro. De hijos (Numero de hijos que se requiere) <br>		
                                        .Sexo (Sexo que se requiere para el cargo) <br>
                                        .Religión (Si se requiere religión o es indiferente) <br>
                                        .Vehículo (Si se requiere o no vehículo) <br>
                                        .Licencia carro (Si se requiere o no licencia de carro) <br>
                                        .Licencia moto (Si se requiere o no licencia de moto) <br>
                                        .Disponibilidad (La disponibilidad de tiempo que requiera el cargo) <br>
                                        .Experiencia (La experiencia requerida para el cargo) <br>
                                        .Comentarios (Comentarios para la requisición) <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/requisicion/requisicion3.jpg"  alt="" /> <br> <br> <br>
                                        
                                        Para finalizar el proceso solo vamos al botón <img src="../../../../images/recurso_humano/requisicion/requisicion4.jpg"  alt="" width="50" /> <br>
                                        Si lo que deseamos es guardar el registro y generar uno nuevo automáticamente, solo vamos al botón <img src="../../../../images/recurso_humano/requisicion/requisicion5.jpg"  alt="" width="100"/> <br>
                                       
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

