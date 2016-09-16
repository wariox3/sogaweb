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
                            <h5><span class="dropcap"><strong>03</strong><span>01.06</span></span>Contratacion</h5>
                            <div class="wrapper pad_bot2">
                                <ul>
                                    <li>
                                       A través de este modulo se puede administrar toda la información que se requiere al momento <br />
                                       de realizar un contrato.<br /><br />
                                       Cuenta con las siguientes funcionalidades: <br /><br />
                                       .Cargos <br />
                                       .Conceptos de requisitos <br />
                                       .Requisitos por cargos <br />
                                       .Bancos  <br />
                                       .Departamentos empresas <br/>
                                       .Horarios  <br />
                                       .Turnos  <br /><br />

                                        Cada una de las opciones cuenta con sus respectivas funciones de creación, edición y verificacion detallada de los campos.                                       
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

