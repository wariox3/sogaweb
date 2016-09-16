<!DOCTYPE html>
<?php $strRutaVacia = '../../../'; ?>
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
                            <h5><span class="dropcap"><strong>03</strong><span>01.03</span></span>Empleados</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>A través de este modulo se puede realizar todo el proceso de gestión de los empleados. <br /><br />
                                        Cuenta con las siguientes funcionalidades: <br /><br />
                                        .Filtrado de búsqueda (Nombre, identificación, centro de costo, estado, contratado).<br />
                                        .Creación de empleado. <br />
                                        .Edición de empleado. <br />
                                        .Verificación del detalle del empleado. <br />
                                        .Enlace directo a contratos. <br />
                                        .Enlace directo a procesos disciplinarios. <br />
                                        .Total de empleados registrados. <br />
                                        .Exportación de listado de empleados (Excel, PDF). <br />
                                        .Activación y desactivación de empleados.                                       
                                    </li>
                                </ul>    
                            </div>                            
                        </div>
                </article>
                <a href="../lista.php" class="link1">Volver</a>
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

