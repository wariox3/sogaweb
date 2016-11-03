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
                            <h5><span class="dropcap"><strong>03</strong><span>01.01</span></span>Liquidacion</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li> 
                                        Las liquidaciones se pueden observar a atraves de la siguiente ruta Movimientos - Recurso humano - <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/liquidacion/liquidacion1.jpg"  alt="" width="920"/><br><br>   
                                        <img src="../../../../images/recurso_humano/liquidacion/liquidacion2.jpg"  alt="" width="920"/><br><br>
                                        
                                        Soga realiza automaticamente el registro de las liquidaciones cuando se raliza el proceso de terminacion de contrato.<br><br>
                                        
                                        <img src="../../../../images/recurso_humano/liquidacion/liquidacion3.jpg"  alt="" width="920"/><br><br><br>
                                        
                                        A traves del modulo de contratos realizamos la finalizacion del contrato.<br>
                                        Luego vamos al modulo de liquidaciones para verificar que el se registrara correctamente la liquidacion. <br><br><br>

                                        <img src="../../../../images/recurso_humano/liquidacion/liquidacion4.jpg"  alt="" width="920"/><br><br>
                                        
                                        El siguiente paso es revisar si los datos de la liquidacion son correctos y realizar su respectiva liquidacion, para ello vamos a ingresar al detalle de la liquidacion y verificamos la siguiente pantalla. <br><br><br>
                                        
                                        <img src="../../../../images/recurso_humano/liquidacion/liquidacion5.jpg"  alt="" width="920"/><br><br>
                                        
                                        En caso de que la liquidacion muestre los ibc de primas y cesantias en ceros es necesario realizar la carga manual de dichos ibc, para este procedimiento debemos ingresar al modulo de contratos - detalle del contrato y usamos la opcion de informacion inicial contrato. (ubicada en la parte superior de la pantalla) y se nos desplegara la siguiente ventana.<br><br>
                                        
                                        <img src="../../../../images/recurso_humano/liquidacion/liquidacion6.jpg"  alt="" /><br><br>
                                        <img src="../../../../images/recurso_humano/liquidacion/liquidacion7.jpg"  alt="" width="920"/><br><br>
                                        <img src="../../../../images/recurso_humano/liquidacion/liquidacion8.jpg"  alt="" width="920"/><br><br>
                                        <img src="../../../../images/recurso_humano/liquidacion/liquidacion9.jpg"  alt="" width="920"/><br><br>
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

