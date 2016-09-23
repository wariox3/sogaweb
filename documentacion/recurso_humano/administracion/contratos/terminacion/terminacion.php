<!DOCTYPE html>
<?php $strRutaVacia = '../../../../../'; ?>
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
                            <h5><span class="dropcap"><strong>03</strong><span>01.01</span></span>Terminación de contratos</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li> 
                                        Para Finalizar un contrato vamos a la opción terminar. <img src="../../../../../images/recurso_humano/contrato/contrato7.jpg"  alt="" /> <br> <br>
                                        
                                        <img src="../../../../../images/recurso_humano/contrato/contrato6.jpg"  alt="" width="920"/> <br> <br>
                                        
                                        Luego se nos desplegara la siguiente ventana. <br> <br>
                                        <img src="../../../../../images/recurso_humano/contrato/contrato8.jpg"  alt=""/> <br> <br>
                                        
                                        El sistema nos mostrara informacion de utilidad para continuar con el proceso de terminacion de contrato como lo son: <br><br>
                                        Fecha del ultimo pago.<br>
                                        Fecha del ultimo pago de vacaciones.<br>
                                        Fecha del ultimo pago de prima. <br>
                                        Fecha del ultimo pago de cesantias.<br><br>
                                        
                                        Para proceder con la terminacion solo debemos seleccionar la fecha y el motivo de la terminacion del contrato.<br>
                                        Luego usamos la opcion guardar para finalizar el proceso.<br><br>
                                        
                                        Recuede que no puede terminar un contrato antes de la fecha del ultimo pago. <br>
                                        En caso de que aplique a esta opcion el usuario debe tener un permiso especial
                                        (Para conocer mas detalles acerca de este tema consulte el modulo de permisos).<br><br>
                                        
                                        Para verificar que el proceso se realizó correctamente observaremos que ya no tenemos la opción de terminar sobre el registro..<br><br>
                                        
                                        <img src="../../../../../images/recurso_humano/contrato/contrato9.jpg"  alt="" width="920"/> 
                                    </li>
                                </ul>    
                            </div>                            
                        </div>
                </article>
                <a href="../contrato.php" class="link1">Volver</a>
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

