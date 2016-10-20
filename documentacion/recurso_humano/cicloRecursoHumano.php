<!DOCTYPE html>
<?php $strRutaVacia = '../../'; ?>
<html lang="en">
    <head>
        <title>Recurso humano</title>
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
                        <h5><span class="dropcap"><strong>09</strong><span>02</span></span>Ciclo de recurso humano</h5>
                        <div class="wrapper pad_bot2">
                            <figure class="left marg_right1"><img src="<?php echo $strRutaVacia.'images/recursos/calendario.jpg'; ?>" alt="" width="100"></figure>
                            <p class="pad_bot1"> La aplicacion de recursos humanos abarca todo el proceso de administracion y mantenimiento de los empleados de una compañia. <br>
                                Nos permite controlar desde las ofertas o requisiones de personal hasta la terminacion de la vinculacion laboral.<br>
                                Con este modulo vamos a almacenar toda la informacion de los procesos.
                                </p>                                
                        </div>                        
                        <img src="<?php echo $strRutaVacia.'images/recursos/ciclo_recurso_humano.jpg'; ?>" alt="">
                </article>
                <article id="content">
                        <h3>Requision</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1">La requision es la vacante u oferta que se crea para cubrir uno o varios puestos de trabajo especificos. <br />
                                    A traves de una requision se controlan los procesos de seleccion y aspirantes que aplican a este proceso.
                                </p>         
                        </div>                                                
                </article> 
                <article id="content">
                        <h3>Aspirantes</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1">Los aspirantes son los registros de personas que aspiran a participar en un proceso de seleccion, puede estar o no vinculado a una requisicion.
                                </p>                                
                        </div>                                                
                </article>                 
                <article id="content">
                        <h3>Seleccion</h3>
                        <div class="wrapper pad_bot2">                                
                            <p class="pad_bot1">El proceso de selección es un registro de las actividades previas a la aprobacion de una persona para ocupar un cargo.<br>
                                A traves de esta funcionalidad vamos a poder registrar los resultados del proceso de seleccion a fin de tener un historial completo.
                                </p>                                
                        </div>                                                
                </article>                                                 
                <article id="content">
                        <h3>Examenes de ingreso</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1"> 
                                </p>Esta funcionalidad registra la emision de las ordenes de examen y el almacenamiento, control y supervision de los resultados de dichos examenes.
                        </div>                                                
                </article>
                <article id="content">
                        <h3>Requisitos de ingreso</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1"> 
                                </p>Es el registro y control de los documentos necesarios para la vinculacion laboral.<br>
                                Los documentos es todo lo que se entiende por papeleria que requiere un aspirante para ingresar a un puesto.<br>
                                Los requisitos son las exigencias que solicita la entidad para la contratacion del empleado.
                        </div>                                                
                </article>                 
                <article id="content">
                        <h3>Empleados</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1"> 
                                Aprobados los pasos previos, dentro de esta funcionalidad es posible crear empleados, es de anochar que la creacion 
                                de un empleado no es la contratacion, solo el registro de la informacion de la persona.
                                </p>
                                <a href="../recurso_humano/administracion/administracionEmpleados.php" class="link1">Ver mas</a>
                        </div>                                                
                </article>  
                <article id="content">
                        <h3>Contratacion</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1"> 
                                    Se compone del registro y control del contrato del empleado, donde se especifican las condiciones laborales e informacion adicional de control.
                                </p>
                        </div>                                                
                </article>                
                <a href="../recurso_humano/lista.php" class="link1">Volver</a>
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

