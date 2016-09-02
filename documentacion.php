<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Documentacion</title>
        <?php include 'general/referencias.php'; ?>
    </head>

    <body id="page4">
        <div class="body1">
            <div class="body2">
                <div class="body5">
                    <div class="main">
                        <!-- header -->
                        <header>
                            <?php include 'general/menu.php'; ?>
                        </header>
                        <!-- header end-->
                    </div>
                </div>
            </div>
        </div>
        <div class="body3">
            <div class="main">
                <!-- content -->
                <article id="content">
                    <div class="wrapper">
                        <section class="cols">
                            <div class="wrapper pad_bot2">
                                <h3><span class="dropcap">1</span>Turnos</h3>
                                <figure><img src="images/page4_img1.jpg" alt=""></figure>
                                <p class="pad_bot1">Video tutoriales y contenido para el manejo del modulo turnos. Documentacion relacionada.</p>
                                <a href="documentacion/turno/lista.php" class="link1">Leer mas</a>
                            </div>
                            <div class="wrapper">
                                <h3><span class="dropcap">4</span>Transporte</h3>
                                <figure><img src="images/page4_img2.jpg" alt=""></figure>
                                <p class="pad_bot1">Losgistica de transporte, documentacion de la aplicacion y los procesos que maneja el sistema.</p>
                                <a href="#" class="link1">Leer mas</a>
                            </div>
                        </section>
                        <section class="cols pad_left1">
                            <div class="wrapper pad_bot2">
                                <h3><span class="dropcap">2</span>Contabilidad</h3>
                                <figure><img src="images/page4_img3.jpg" alt=""></figure>
                                <p class="pad_bot1">Documentacion de la apliacion y recursos de tutoria para manejar la contabilidad son soga app.</p>
                                <a href="#" class="link1">Leer mas</a>
                            </div>
                            <div class="wrapper">
                                <h3><span class="dropcap">5</span>Herramientas</h3>
                                <figure><img src="images/page4_img4.jpg" alt=""></figure>
                                <p class="pad_bot1">Instructivo para manejo de herramientas tipo general, calendario, tareas, proyectos, gestor de archivos entre otras.</p>
                                <a href="documentacion/herramienta/lista.php" class="link1">Leer mas</a>
                            </div>
                        </section>
                        <section class="cols pad_left1">
                            <div class="wrapper pad_bot2">
                                <h3><span class="dropcap">3</span>Recurso humano</h3>
                                <figure><img src="images/page4_img5.jpg" alt=""></figure>
                                <p class="pad_bot1">Paquete de documentacion del modulo de recursos humanos, normatividad y actualizaciones.</p>
                                <a href="documentacion/recurso_humano/lista.php" class="link1">Leer mas</a>
                            </div>
                            <div class="wrapper">
                                <h3><span class="dropcap">6</span>Inventario</h3>
                                <figure><img src="images/page4_img6.jpg" alt=""></figure>
                                <p class="pad_bot1">Procesos de inventario, instructivos y manuales de uso de la aplicacion, nuevas tecnicas de costeco y actualizaciones.</p>
                                <a href="#" class="link1">Leer mas</a>
                            </div>
                        </section>
                    </div>

                </article>
            </div>
        </div>
        <div class="body4">
            <?php include 'general/cuerpo4.php'; ?>
        </div>
        <div class="main">
            <?php include 'general/pie.php'; ?>
        </div>
        <script type="text/javascript"> Cufon.now();</script>
        <script>
            $(document).ready(function () {
                tabs.init();
            })
        </script>
    </body>
</html>

