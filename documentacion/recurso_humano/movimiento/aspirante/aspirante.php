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
                            <h5><span class="dropcap"><strong>03</strong><span>01.01</span></span>Aspirante</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li> 
                                        Los aspirantes son aquellas personas que desean aplicar a determinada requisición que la empresa solicite. <br> <br>
                                        
                                        Para generar un nuevo aspirante vamos al modulo movimientos- recurso humano- aspirantes. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/aspirantes/aspirante1.jpg"  alt="" width="920"/> <br> <br> <br>
                                        
                                        Una vez ingresamos al modulo, tenemos la opción de observar los aspirantes <br>
                                        ya creados con sus respectivas opciones de filtrado, nuevo- eliminar y exportar a Excel. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/aspirantes/aspirante2.jpg"  alt="" width="920"/> <br> <br> <br>
                                        
                                        Ingresamos a la opción nuevo y procedemos a ingresar la información del nuevo aspirante. <br> <br>
                                        Zona (Si es centro, sur o norte) <br>
                                        Tipo de identificación (Tipo de documento del aspirante) <br>
                                        Identificación (Numero del tipo de identificación antes seleccionada) <br>
                                        Ciudad de expedición (Ciudad donde se expidió el documento seleccionado) <br>
                                        Nombre 1 <br>
                                        Nombre 2 <br>
                                        Apellido 1 <br>
                                        Apellido 2  <br>
                                        Sexo (Sexo del aspirante) <br>
                                        Rh (Tipo de sangre del aspirante) <br>
                                        Estatura (Estatura del aspirante) <br>
                                        Peso (Peso del aspirante) <br>
                                        Fecha de nacimiento (Fecha de nacimiento del aspirante) <br>
                                        Ciudad de nacimiento (Ciudad de nacimiento del aspirante) <br>
                                        Cargo que aspira (Cargo que aspira el aspirante) <br>
                                        Operación () <br> 
                                        Reintegro (Si el aspirante va a ser reintegrado) <br>
                                        Recomendado por (Si el aspirante es recomendado por alguien) <br>
                                        Libreta militar (Si la tiene o si no aplica) <br>
                                        Estado civil (Estado civil del aspirante) <br>
                                        Correo (Correo del aspirante) <br>
                                        Dirección (Dirección de residencia  del aspirante) <br>
                                        Barrio (Barrio donde reside el aspirante) <br>
                                        Ciudad (Ciudad donde reside el aspirante) <br>
                                        Teléfono (Numero de teléfono fijo del aspirante) <br>
                                        Celular (Numero de celular del aspirante) <br>
                                        Disponibilidad (Disponibilidad de tiempo del aspirante) <br>
                                        Bloqueado (Si el aspirante se encuentra bloqueado) <br>
                                        Comentarios (Comentarios sobre el aspirante) <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/aspirantes/aspirante3.jpg"  alt="" width="920"/> <br>
                                        <img src="../../../../images/recurso_humano/aspirantes/aspirante4.jpg"  alt="" width="920"/> <br> <br> 
                                        
                                        Para finalizar el proceso vamos al botón  <img src="../../../../images/recurso_humano/requisicion/requisicion4.jpg"  alt="" width="50" /> <br>
                                        Si deseamos guardar el registro y generar uno nuevo automáticamente vamos al botón <img src="../../../../images/recurso_humano/requisicion/requisicion5.jpg"  alt="" width="100" /> <br> <br>
                                        
                                        Al haber guardado este proceso nos va a mostrar una tabla con toda la información antes agregada. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/aspirantes/aspirante5.jpg"  alt="" width="920"/> <br> <br> 
                                        
                                        Vamos al botón aplicar ubicado en la parte superior izquierda, seleccionamos la requisición a la que aplica el aspirante y por ultimo le damos guardar. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/aspirantes/aspirante6.jpg"  alt="" /> <br> <br> 
                                        
                                        Al darle guardar, automáticamente el aspirante va a aplicar a la requisición y nos mostrará  lo siguiente. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/aspirantes/aspirante7.jpg"  alt="" width="920" /> <br> <br> 
                                        
                                        Ahora el siguiente paso es aprobar el aspirante, para ello vamos a la flecha ubicada en la parte derecha y le damos clic para ver el detalle y nos mostrara lo siguiente. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/aspirantes/aspirante8.jpg"  alt="" width="920" /> <br> <br> 
                                        
                                        Nos paramos en la opción aspirantes, y procedemos a seleccionarlo dándole clic en el cuadro ubicado en la parte derecha y vamos al botón aprobar. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/aspirantes/aspirante9.jpg"  alt="" width="920" /> <br> <br> 
                                        
                                        Así finalizamos el proceso del aspirante. 
                                       
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

