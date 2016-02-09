<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contactenos</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <script type="text/javascript" src="js/jquery-1.6.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>
        <script type="text/javascript" src="js/Swis721_Cn_BT_400.font.js"></script>
        <script type="text/javascript" src="js/Swis721_Cn_BT_700.font.js"></script>
        <script type="text/javascript" src="js/tabs.js"></script>
        <!--[if lt IE 9]>
                <script type="text/javascript" src="js/html5.js"></script>
                <style type="text/css">
                        .bg{ behavior: url(js/PIE.htc); }
                </style>
        <![endif]-->
        <!--[if lt IE 7]>
                        <div style=' clear: both; text-align:center; position: relative;'>
                                <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
                        </div>
        <![endif]-->
    </head>
    <body id="page5">
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
                        <section class="col1">
                            <h2 class="under">Contactenos</h2>
                            
                            <form id="ContactForm" method="post" action="enviarcorreo.php">
                                <div>
                                    <div  class="wrapper">
                                        <span>Su nombre:</span>
                                        <input type="text" class="input" id="nombre" name="nombre">
                                    </div>
                                    <div  class="wrapper">
                                        <span>Ciudad:</span>
                                        <input type="text" class="input" id="ciudad" name="ciudad">
                                    </div>
                                    <div  class="wrapper">
                                        <span>E-mail:</span>
                                        <input type="text" class="input" id="email" name="email">
                                    </div>
                                    <div  class="wrapper">
                                        <span>Celular:</span>
                                        <input type="text" class="input" id="celular" name="celular">
                                    </div>
                                    <div  class="wrapper">
                                        <span>Telefono:</span>
                                        <input type="text" class="input" id="telefono" name="telefono">
                                    </div>                                    
                                    <div  class="textarea_box">
                                        <span>Mensaje:</span>
                                        <textarea cols="1" rows="1" id="comentarios" name="comentarios"></textarea>
                                    </div>
                                    <input type="submit" value="Enviar">
                                    <a href="#" onClick="document.getElementById('ContactForm').submit()">Enviar</a>
                                    <a href="#" onClick="document.getElementById('ContactForm').reset()">Limpiar</a>
                                </div>
                            </form>
                        </section>
                        <section class="col2 pad_left1">
                            <h2 class="under">CONTACTENOS</h2>
                            <div id="address"><span>Country:<br>
                                    City:<br>
                                    Telephone:<br>
                                    Email:</span>
                                Colombia<br>
                                Medellin<br>
                                +574 4448120<br>
                                <a href="mailto:" class="color2">sogainformacion@gmail.com</a></div>
                            <h2 class="under">Recuerde:</h2>
                            <p>El equipo de desarrollo de soga app esta dispuesto a un acercamiento comercial para conocer puntualmente sus necesidades y poder orientarlo hacia la mejor solucion.</p>
                        </section>
                    </div>

                </article>
            </div>
        </div>
        <div class="body4">
            <?php include 'general/cuerpo4.php'; ?>
        </div>
        <div class="main">
            <!-- footer -->
            <?php include 'general/pie.php'; ?>
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