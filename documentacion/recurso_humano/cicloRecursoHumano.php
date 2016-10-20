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
                            <p class="pad_bot1"> La aplicacion de recursos humanos es la aplicacion que abarca todo el proceso de seleccion y contratacion de un empleado. <br>
                                Nos permite controlar desde las ofertas o requisiones hasta los examenes de ingreso que se solicitan.<br>
                                Con este modulo vamos a almacenar toda la informacion de nuestros procesos de seleccion con sus respectivos parametros.
                                </p>                                
                        </div>                        
                        <img src="<?php echo $strRutaVacia.'images/recursos/ciclo_recurso_humano.jpg'; ?>" alt="">
                </article>
                <article id="content">
                        <h3>Requision</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1">La requision es la vacante u oferta que se crear para cubrir un  puesto de trabajo especifico. <br />
                                    A traves de una requision puedo dar los detalles que requiero para cubir dicha vacante.
                                </p>         
                        </div>                                                
                </article> 
                <article id="content">
                        <h3>Aspirantes</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1"> En aspirantes vamos a crear las personas que participan en la requision creada anteriormente.
                                </p>                                
                        </div>                                                
                </article>                 
                <article id="content">
                        <h3>Seleccion</h3>
                        <div class="wrapper pad_bot2">                                
                            <p class="pad_bot1"> El proceso de selección suele constar de dos fases diferenciadas: las pruebas y las entrevistas.<br>
                                A traves de esta funcionalidad vamos a poder registrar los resultados del proceso de seleccion a fin de tener un historial completo.
                                </p>                                
                        </div>                                                
                </article>                                                 
                <article id="content">
                        <h3>Examenes de ingreso</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1"> 
                                </p> A traves de esta funcionalidad se puede definir los tipos de examenes de ingreso que seran usados en el proceso de seleccion.                               
                        </div>                                                
                </article>
                <article id="content">
                        <h3>Ingreso sin requisicion</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1"> 
                                </p> La plataforma permite realizar ingresos de empleados sin realizar el proceso de requisicion previamente.                              
                        </div>                                                
                </article> 
                <article id="content">
                        <h3>Documentos - requisitos</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1"> 
                                </p> En esta funcionalidad debemos conocer dos conceptos que son documentos y requisitos.<br>
                                Los documentos es todo lo que se entiende por papeleria que requiere un aspirante para ingresar a un puesto.<br>
                                Los requisitos son las exigencias que solicita la entidad para la contratacion del empleado. Pueden ir desde experiencia laboral hasta restriccion de edad.
                        </div>                                                
                </article>                 
                <article id="content">
                        <h3>Empleados</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1"> 
                                </p>
                                <a href="../recurso_humano/administracion/administracionEmpleados.php" class="link1">Ver mas</a>
                        </div>                                                
                </article>  
                <article id="content">
                        <h3>Contratacion</h3>
                        <div class="wrapper pad_bot2">                                
                                <p class="pad_bot1"> 
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

