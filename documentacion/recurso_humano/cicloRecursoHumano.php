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

