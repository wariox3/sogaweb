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
                            <h5><span class="dropcap"><strong>03</strong><span>01.05</span></span>Tipo examen por cargo</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>
                                        Los examenes por cargo son los examenes medicos que se deben presentar para poder desempeñar un puesto de trabajo en especifico. <br> <br>
                                        
                                        Para crear un nuevo tipo de examen por cargo vamos a la ruta Administracion - Recurso Humano - General - Examen por cargo. <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/general/tipo_examen_cargo/tipo_examen_cargo1.jpg"  alt=""/><br><br>
                                        
                                        Al ingresar nos mostrara el listado de los examenes por cargo y su respectiva opcion de editar. <br><br>
   
                                        <img src="../../../../images/recurso_humano/general/tipo_examen_cargo/tipo_examen_cargo2.jpg"  alt="" width="920"/><br><br>
                                        
                                        Para crear un nuevo registro vamos a la opcion nuevo ubicada en la parte inferior de la pantalla y se nos desplegara la siguiente ventana. <br><br>
                                        
                                        <img src="../../../../images/recurso_humano/general/tipo_examen_cargo/tipo_examen_cargo3.jpg"  alt="" width="920"/><br>
                                        
                                        Seleccionamos el cargo inicialmente y luego en la parte de abajo vamos dandole click en la caja de check al examen que se requiere para el cargo.<br>
                                        finalizamos con el boton guardar.
                                        
                                    </li>
                                </ul>    
                            </div>                            
                        </div>
                </article>
                <a href="../administracionGeneral.php" class="link1">Volver</a>
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

