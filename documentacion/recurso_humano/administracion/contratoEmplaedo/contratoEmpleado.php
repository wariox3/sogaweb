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
                            <h5><span class="dropcap"><strong>03</strong><span>01.01</span></span>Crear contrato</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li> 
                                        Para crear el contrato de un empleado nos dirigimos al modulo administración- recurso humano- empleados.<br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/contratoEmpleado/contrato1.jpg"  alt=""/> <br> <br>
                                        
                                        Hecho esto nos aparecerá la lista de empleados ya creados, para generar el nuevo contrato <br>
                                        vamos a buscar el empleado que deseamos filtrando su nombre o número de documento. <br> <br>
                                        Una vez nos aparezca vamos a la opción acciones nuevo- contrato.
                                        
                                        <img src="../../../../images/recurso_humano/contratoEmpleado/contrato2.jpg"  alt="" width="920"/> <br> <br>
                                        
                                        Una vez hecho esto, procederemos a ingresar la siguiente información. <br> <br>
                                        
                                        Tipo (Tipo de contrato que se le va a generar al empleado) <br>
                                        Centro de costos (Centro de costo al que se asignara el contrato <br>
                                        Ciudad contratación (Ciudad donde se contrata el empleado) <br>
                                        Ciudad labora (Ciudad donde va a laborar el empleado) <br>
                                        Tiempo (Si es tiempo completo, medio tiempo o sabatino) <br>
                                        Cargo (Si es administrativo, guarda de seguridad u operario) <br>
                                        Descripción del cargo (Nombre del cargo) <br>
                                        Fecha de inicio <br>
                                        Fecha hasta <br>
                                        Salario <br>
                                        Salario integral (Si aplica) <br>
                                        Tipo de salario (Si es fijo o variable) <br>
                                        Limitar hora extra <br>
                                        Horario de trabajo <br>
                                        Comentarios <br>
                                        Tipo cotizante <br>
                                        Sub tipo cotizante <br>
                                        Clasificación Riesgo <br>
                                        Tipo salud (Si es empleado o empleador) <br>
                                        Salud (Nombre de EPS a la que pertenece el empleado) <br>
                                        Tipo pensión <br>
                                        Pensiona (Nombre de la pensión a la que pertenece) <br>  
                                        Caja de compensación (Nombre de caja de compensación a la que pertenece) <br>
                                        Cesantía (Nombre de cesantía a la que pertenece) <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/contratoEmpleado/contrato3.jpg"  alt="" width="920"/> 
                                        <img src="../../../../images/recurso_humano/contratoEmpleado/contrato4.jpg"  alt="" width="920"/> <br> <br>
                                        
                                        Al ingresar esta información vamos a la opción <img src="../../../../images/recurso_humano/contratoEmpleado/contrato5.jpg"  alt="" width="50"/> <br> <br>
                                        
                                        Con este paso finalizamos el proceso y nos quedara generado el nuevo contrato. <br> <br>
                                        
                                        <img src="../../../../images/recurso_humano/contratoEmpleado/contrato6.jpg"  alt="" width="920"/>

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

