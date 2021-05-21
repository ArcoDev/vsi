<?php
    require "includes/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="VSI Desarrollos es una plataforma financiera y comercial, de inteligencia y consultoría,
    que junto a su unidad operativa de negocio, VILLASI Construcciones, se encargan del
    desarrollo de proyectos inmobiliarios de alto impacto para sus clientes y socios.">
    <meta name="keywords" content="VSI, Desarrolladora, Inmobiliaria, Proyectos inmobiliarios">
    <meta name="author" content="A W Software">
    <link rel="shortcut icon" href="assets/icons/favicon.PNG" type="image/x-icon">
    <link rel="stylesheet" href="assets/scss/estilos.css">
    <link rel="stylesheet" href="assets/scss/media_query.css">

    <title>VSI</title>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178026606-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-178026606-2');
    </script>


    <!-- Facebook Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '358553948843919');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=358553948843919&ev=PageView
&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->


</head>

<body>
    <header id="contenedor-slider" class="contenedor-slider">
        <div id="slider" class="slider">
            <div class="slider_section">
                <img class="slider_img" src="assets/img/banner_1.jpg" alt="Banner 1">
                <!--h1 class="slider_img"><b>CREAMOS ASOMBROSOS</b><br>PROYECTOS INMOBILIARIOS</h1-->
            </div>
            <div class="slider_section">
                <img class="slider_img" src="assets/img/banner_2.jpg" alt="Banner 2">
                <!--h2 class="slider_img">CREAMOS ASOMBROSOS<br>PROYECTOS INMOBILIARIOS</h2-->
            </div>
            <div class="slider_section">
                <img class="slider_img" src="assets/img/banner_3.jpg" alt="Banner 3">
                <!--h2 class="slider_img">CREAMOS ASOMBROSOS<br>PROYECTOS INMOBILIARIOS</h2-->
            </div>
        </div>
        <nav class="contenedor1">
            <div class="menu">
                <button id="menu1">
                    <img class="menu-icono" src="assets/icons/menu_blanco.png" alt="Menu">
                    <span class="header-menu">MENÚ</span>
                </button>
                <ul class="enlaces">
                    <li>
                        <a href="#inicio"><span class="menu_inicio">INICIO</span></a>
                    </li>
                    <li>
                        <a href="#nosotros"><span class="menu_nosotros">NOSOTROS</span></a>
                    </li>
                    <li>
                        <a href="#desarrollo"><span class="menu_desarrollo">DESARROLLO</span></a>
                    </li>
                    <li>
                        <a href="#capital"><span class="menu_capital">CAPITAL</span></a>
                    </li>
                    <li>
                        <a href="#contacto"><span class="menu_contacto">CONTACTO</span></a>
                    </li>
                </ul>
            </div>
            <div class="idioma">
                <button id="btn_idioma">
                    <img class="redes-icono" src="assets/icons/idioma_icono.png" alt="Idioma">
                </button>
                <div class="es-en">
                    <button class="es idioma-activo" href="#">ESP</button> /
                    <button class="en" href="#">ENG</button>
                </div>
            </div>
        </nav>
        <div class="titulo">
            <img src="assets/img/vsi_logo.png" alt="VSI">
            <h1 class="header_titulo"><b>CREAMOS ASOMBROSOS</b><br>PROYECTOS INMOBILIARIOS</h1>
        </div>
        <div class="slider-controles">
            <button id="prev">
                <img class="img-100" src="assets/icons/flecha_izq.png" alt="prev">
            </button>
            <label><span id="no-img"></span>/3</label>
            <button id="sig">
                <img class="img-100" src="assets/icons/flecha-der.png" alt="sig">
            </button>
        </div>
        <!--
        <div class="correo">
            <a href="mailto:contacto@vsidesarrollos.com">
                <img class="redes-icono" src="assets/icons/mail_icono.png" alt="Correo">
                <span class="header-correo">contacto@vsidesarrollos.com</span>
            </a>
        </div>
    -->
    </header>
    <main>
        <nav>
            <div class="menu">
                <button id="menu2">
                    <img class="menu-icono" src="assets/icons/menu_gris.png" alt="Menu">
                    MENÚ
                </button>
                <ul class="enlaces">
                    <li>
                        <a href="#inicio"><span class="menu_inicio">INICIO</span></a>
                    </li>
                    <li>
                        <a href="#nosotros"><span class="menu_nosotros">NOSOTROS</span></a>
                    </li>
                    <li>
                        <a href="#desarrollo"><span class="menu_desarrollo">DESARROLLO</span></a>
                    </li>
                    <li>
                        <a href="#capital"><span class="menu_capital">CAPITAL</span></a>
                    </li>
                    <li>
                        <a href="#contacto"><span class="menu_contacto">CONTACTO</span></a>
                    </li>
                </ul>
            </div>
            <div class="correo">
                <a href="mailto:contacto@vsidesarrollos.com" class="correo">
                    <img class="redes-icono" src="assets/icons/mail_icono_2.png" alt="Correo">
                    <span class="mail">contacto@vsidesarrollos.com</span>
                </a>
            </div>
        </nav>
        <div class="cuerpo">
            <div class="contenedor2">
                <!-- NOSOTROS -->
                <section class="nosotros">
                    <h2>Sobre <span>Nosotros</span></h2>
                    <div class="info-nosotros">
                        <div class="img-nosotros">
                            <img src="assets/img/nosotros.jpg" alt="Nosotros">
                            <div class="col-nosotros">
                                <div class="villasi">
                                    <img src="assets/img/villasi_logo.png" alt="">
                                    <a href="#">LEER MÁS</a>
                                </div>
                                <div class="pv">
                                    <img src="assets/img/pauvillarreal_logo.png" alt="">
                                    <a href="#">LEER MÁS</a>
                                </div>
                            </div>
                        </div>
                        <div class="texto-nosotros">
                            <p>
                                VSI Desarrollos es una plataforma financiera y comercial, de inteligencia y consultoría,
                                que junto a su unidad operativa de negocio, VILLASI Construcciones, se encargan del
                                desarrollo de proyectos inmobiliarios de alto impacto para sus clientes y socios.

                            </p>
                            <p>
                                Después de años de trabajo en México, VSI está entrando en el mercado de Estados Unidos
                                con altas expectativas, y con la experiencia de VillaSi, tiene la garantía de tener una
                                operación y resultados óptimos. La atención está puesta particularmente en los proyectos
                                residenciales y comerciales tanto en Texas como en México.
                                El Grupo VSI incluye un despacho de arquitectura, una constructora, gerencia de obra y
                                por otra parte, el desarrollo inmobiliario y la plataforma financiera en VSI.
                            </p>
                            <a href="#">Conócenos más...</a>
                        </div>
                    </div>
                </section>
                <!--CAJA NUMEROS-->
                <section class="caja-numeros">
                    <div class="col col-1">
                        <img src="assets/img/experiencia.png" alt="">
                        <h2 id="contador1">0</h2>
                        <p>Años de <br>expreiencia</p>
                    </div>
                    <div class="col col-2">
                        <img src="assets/img/proyectos.png" alt="">
                        <h2 id="contador2">0</h2>
                        <p>Proyectos <br>realizados</p>
                    </div>
                    <div class="col col-3">
                        <img src="assets/img/clientes.png" alt="">
                        <h2 id="contador3">0</h2>
                        <p>Clientes y <br>colaboradores</p>
                    </div>
                    <div class="col col-4">
                        <img src="assets/img/invertidos.png" alt="">
                        <h2 id="contador4">0</h2>
                        <p>Invertidos y <br>gestionados</p>
                    </div>
                </section>
                <section class="caja-proyectos">
                    <?php
                        $consulta = $con->query("SELECT * FROM proyectos");
                        while ($proyecto = mysqli_fetch_array($consulta)) {
                            echo '<div class="proyectos">
                                    <img id="'.$proyecto["id"].'" src="./assets/proyectos/'.$proyecto["foto"].'" alt="Proyectos VSI">
                                    <a href="'.$proyecto["enlace"].'">'.$proyecto["nombre"].'</a>
                                  </div>';
                        }
                    ?>
                </section>
                <!-- Grid Proyectos -->
                <?php
                    $consulta = $con->query("SELECT * FROM galeria");
                ?>
                    <div id="caja-img" class="caja-img">
                        <div class="info">
                            <?php 
                                if($galeria = $consulta->fetch_assoc()) { ?>
                                    <h2><?php echo $galeria['titulo']; ?></h2>
                                    <p><?php echo $galeria['descripcion']; ?></p>
                                    <span id="<?php echo $galeria['id_proyecto']; ?>">X</span>
                            <?php } ?>   
                        </div>
                    </div>
                <!--<div id="caja-img" class="caja-img">
                    <div class="info">
                        <h2>Postal</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius mollitia repellendus, quos eum
                            rem amet nesciunt beatae doloremque eaque quisquam, neque cum delectus. Praesentium quam sit
                            earum error. Impedit, ipsum!</p>
                        <span id="cerrar">X</span>
                    </div>
                    <div class="galeria">
                        <img src="assets/img/galeria-postal/1.jpg" alt="Galería Postal">
                        <img src="assets/img/galeria-postal/2.jpg" alt="Galería Postal">
                        <img src="assets/img/galeria-postal/3.jpg" alt="Galería Postal">
                        <img src="assets/img/galeria-postal/4.jpg" alt="Galería Postal">
                        <img src="assets/img/galeria-postal/5.jpg" alt="Galería Postal">
                        <img src="assets/img/galeria-postal/6.jpg" alt="Galería Postal">
                        <img src="assets/img/galeria-postal/7.jpg" alt="Galería Postal">
                        <img src="assets/img/galeria-postal/8.jpg" alt="Galería Postal">
                    </div>
                </div>-->
                <div id="caja-img1" class="caja-img">
                    <div class="info">
                        <h2>Palo Blanco</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius mollitia repellendus, quos eum
                            rem amet nesciunt beatae doloremque eaque quisquam, neque cum delectus. Praesentium quam sit
                            earum error. Impedit, ipsum!25</p>
                        <span id="cerrar1">X</span>
                    </div>
                    <div class="galeria">
                        <img src="assets/img/galeria-palo/galeria-palo (1).jpg" alt="Galería Palo Blaco">
                        <img src="assets/img/galeria-palo/galeria-palo (2).jpg" alt="Galería Palo Blaco">
                        <img src="assets/img/galeria-palo/galeria-palo (3).jpg" alt="Galería Palo Blaco">
                        <img src="assets/img/galeria-palo/galeria-palo (4).jpg" alt="Galería Palo Blaco">
                        <img src="assets/img/galeria-palo/galeria-palo (5).jpg" alt="Galería Palo Blaco">
                        <img src="assets/img/galeria-palo/galeria-palo (6).jpg" alt="Galería Palo Blaco">
                        <img src="assets/img/galeria-palo/galeria-palo (7).jpg" alt="Galería Palo Blaco">
                        <img src="assets/img/galeria-palo/galeria-palo (8).jpg" alt="Galería Palo Blaco">
                        <img src="assets/img/galeria-palo/galeria-palo (9).jpg" alt="Galería Palo Blaco">
                        <img src="assets/img/galeria-palo/galeria-palo (10).jpg" alt="Galería Palo Blaco">
                        <img src="assets/img/galeria-palo/galeria-palo (11).jpg" alt="Galería Palo Blaco">
                    </div>
                </div>
                <div id="caja-img2" class="caja-img">
                    <div class="info">
                        <h2>Plaza Saltilo 400</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius mollitia repellendus, quos eum
                            rem amet nesciunt beatae doloremque eaque quisquam, neque cum delectus. Praesentium quam sit
                            earum error. Impedit, ipsum!54545</p>
                        <span id="cerrar2">X</span>
                    </div>
                    <div class="galeria">
                        <img src="assets/img/galeria-saltillo/galeria-saltillo (1).jpg" alt="Galería Saltillo 400">
                        <img src="assets/img/galeria-saltillo/galeria-saltillo (2).jpg" alt="Galería Saltillo 400">
                    </div>
                </div>
                <div id="caja-img3" class="caja-img">
                    <div class="info">
                        <h2>Noma</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius mollitia repellendus, quos eum
                            rem amet nesciunt beatae doloremque eaque quisquam, neque cum delectus. Praesentium quam sit
                            earum error. Impedit, ipsum!</p>
                        <span id="cerrar3">X</span>
                    </div>
                    <div class="galeria">
                        <img src="assets/img/galeria-noma/galeria-noma1.jpg" alt="Galería Noma">
                        <img src="assets/img/galeria-noma/galeria-noma2.jpg" alt="Galería Noma">
                        <img src="assets/img/galeria-noma/galeria-noma3.jpg" alt="Galería Noma">
                        <img src="assets/img/galeria-noma/galeria-noma4.jpg" alt="Galería Noma">
                    </div>
                </div>

                <!-- DESARROLLOS -->
                <section class="desarrollosInm">
                    <div class="txt-info">
                        <h2>Desarrolladora <br><span>Inmobiliaria</span></h2>
                        <p>
                            VSI Desarrollos/VSI Development es la desarrolladora inmobiliaria de Grupo VSI, encargada
                            del desarrollo de proyectos inmobiliarios con el fin de implementarlos en México y Estados
                            Unidos, ofreciendo soluciones inmobiliarias de vanguardia, inteligentes, socialmente
                            involucradas, y de importante impacto económico.
                            Actualmente contamos con grandes desarrollos inmobiliarios en Querétaro, Torreón, San Miguel
                            de Allende y al rededor. Para lograr esto, nuestro equipo está formado por arquitectos,
                            ingenieros, expertos financieros, y asesores comerciales para cubrir todas las áreas y
                            garantizar el éxito para los involucrados.
                        </p>
                        <b>Nuestros Servicios:</b>
                        <ul>
                            <li>● Administración Comercial</li>
                            <li>● Planeación Financiera</li>
                            <li>● Estrategias de Comunicación</li>
                            <li>● Plan de Administración</li>
                            <li>● Carteras de Centas</li>
                            <li>● Y MÁS</li>
                        </ul>
                    </div>
                </section>
                <section class="desarrollosCap">
                    <div class="txt-info">
                        <h2>VSI <br><span>Capital</span></h2>
                        <p>
                            VSI Capital es la plataforma para inversión en los proyectos inmobiliarios de VSI
                            Desarrollos. Se invita a inversionistas para participar con nosotros en los proyectos bajo
                            diversas
                            estructuras, ofreciendo rendimientos agresivos, tanto en pesos como en dólares.

                        </p>
                    </div>
                </section>
                <!--<section id="nosotros" class="nosotros">
                    <div class="nosotros-col-1">
                        <img class="img-logo" src="assets/img/icono_nosotros.png" alt="Nosotros">
                        <h2 class="main_nosotros"><b>SOBRE</b> NOSOTROS</h2>
                    </div>
                    <div class="nosotros-col-2">
                        <p class="main_nosotros_p1">
                            VSI es una plataforma financiera y comercial, de inteligencia y consultoría, que junto a su
                            unidad operativa de negocio, VillaSi Construcciones, se encargan del desarrollo de proyectos
                            inmobiliarios de alto impacto para sus clientes y socios.
                        </p>
                        <p class="main_nosotros_p2">

                            Después de años de trabajo en México, VSI está entrando en el mercado de Estados Unidos con
                            altas expectativas, y con la experiencia de VillaSi, tiene la garantía de tener una
                            operación y resultados óptimos. La atención está puesta particularmente en
                            los proyectos residenciales y comerciales tanto en Texas como en México.
                        </p>
                        <p class="main_nosotros_p3">
                            El Grupo VSI incluye un despacho de arquitectura, una constructora, gerencia de obra y por
                            otra parte, el desarrollo inmobiliario y la plataforma financiera en VSI.
                        </p>
                    </div>
                </section>
                <div class="fila">
                    <div class="columna-2 div-vert">
                        <div class="img-cont">
                            <img src="assets/img/villasi_logo.png" alt="Villasi">
                            <a class="btn" href="https://www.villasi.com/" target="_blank">
                                <span class="main_nosotros_leer main_nosotros_leermas">
                                    LEER MÁS
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="columna-2">
                        <div class="img-cont">
                            <img src="assets/img/pauvillarreal_logo.png" alt="Pauvillarreal">
                            <a class="btn" href="http://pauvillarrealarq.com/" target="_blank">
                                <span class="main_nosotros_leer main_nosotros_leermas">
                                    LEER MÁS
                                </span>
                            </a>
                        </div>
                    </div>
                </div>-->
                <!-- <section id="desarrollo" class="desarrollo">
                    <div class="titulo-desarrollo">
                        <img class="img-logo" src="assets/img/icono_desarrollo.png" alt="Desarrollo">
                        <h2 class="main_desarrollo">DESARROLLADORA INMOBILIARIA</h2>

                        <p class="main_desarrollo_p1">

                            VSI Desarrollos/VSI Development es la desarrolladora inmobiliaria de Grupo VSI, encargada
                            del desarrollo de proyectos inmobiliarios con el fin de implementarlos en México y Estados
                            Unidos, ofreciendo soluciones inmobiliarias de vanguardia, inteligentes,
                            socialmente involucradas, y de importante impacto económico.
                        </p>
                        <p class="main_desarrollo_p2">
                            Actualmente contamos con grandes desarrollos inmobiliarios en Querétaro, Torreón, San Miguel
                            de Allende y al rededor. Para lograr esto, nuestro equipo está formado por arquitectos,
                            ingenieros, expertos financieros, y asesores comerciales para cubrir todas
                            las áreas y garantizar el éxito para los involucrados.
                        </p>
                        <p class="main_desarrollo_p3">
                            Nos encargamos de: <br> Administración Comercial, Planeación Financiera, Estrategias de
                            Comunicación, Plan de Administración, Cartera de Ventas Y más.
                        </p>

                        <div class="fila">
                            <div class="columna-2">
                                <img class="img-100 img-des-1" src="assets/img/desarrollo_paloblanco.jpg"
                                    alt="Desarrollo Paloblanco">
                                <a class="btn leer_mas" href="https://www.villasi.com/paloblanco/" target="_blank">
                                    <span class="main_nosotros_leer">
                                        PALO BLANCO
                                    </span>
                                </a>
                               h6>PALO BLANCO</h6
                            </div>
                            <div class="columna-2">
                                <img class="img-100 img-des-2" src="assets/img/desarrollo_plaza.jpg"
                                    alt="Desarrollo Plaza">
                                <a class="btn leer_mas" href="https://www.villasi.com" target="_blank">
                                    <span class="main_nosotros_leer">
                                        PLAZA SALTILLO 400
                                    </span>
                                </a>
                                h6>PLAZA SALTILLO 400</h6
                            </div>
                        </div>
                    </div>
                </section>
                <section id="capital" class="capital">
                    <div class="titulo-capital">
                        <img class="img-logo" src="assets/img/icono_capital.png" alt="Capital">
                        <h2 class="main_capital">CAPITAL</h2>

                        <p class="main_capital_p1">


                            VSI Capital es la plataforma para inversión en los proyectos inmobiliarios de VSI
                            Desarrollos.




                        </p>
                        <p class="main_capital_p2">

                            Se invita a inversionistas para participar con nosotros en los proyectos bajo diversas
                            estructuras, ofreciendo rendimientos agresivos, tanto en pesos como en dólares.

                        </p>

                        <div class="fila">
                            <div class="columna-3">
                                <img src="assets/img/capital_noma.jpg" alt="Capital Noma" class="img-100 img-cap-1">
                                <a class="btn leer_mas" href="https://www.orangemultifamily.mx/invierte.html"
                                    target="_blank">
                                    <span class="main_nosotros_leer">
                                        NOMA
                                    </span>
                                </a>
                               h6>NOMA</h6
                            </div>
                            <div class="columna-3">
                                <img src="assets/img/capital_postal.jpg" alt="Capital Postal" class="img-100 img-cap-2">
                                <a class="btn leer_mas" href="http://postal.mx" target="_blank">
                                    <span class="main_nosotros_leer">
                                        POSTAL
                                    </span>
                                </a>
                                h6>POSTAL</h6
                            </div>
                            <div class="columna-3">
                                <img src="assets/img/capital_paloblanco.jpg" alt="Capital Paloblanco"
                                    class="img-100 img-cap-3">
                                <a class="btn leer_mas" href="https://www.villasi.com/paloblanco/" target="_blank">
                                    <span class="main_nosotros_leer">
                                        PALO BLANCO
                                    </span>
                                </a>
                                h6>PALO BLANCO</h6>
                            </div>
                        </div>
                    </div>
                </section> -->
                <section id="contacto" class="contacto">
                    <div class="titulo-cuerpo">
                        <h2 class="main_contacto"><b>PONTE EN</b> CONTACTO</h2>

                        <div class="fila">
                            <div class="columna-2">
                                <form id="contacto_vsi" method="POST" action="php/contacto.php">
                                    <div class="grupo-input">
                                        <label class="main_contacto_nombre" for="nombre">Nombre Completo *</label>
                                        <input type="text" name="nombre" id="nombre">
                                    </div>
                                    <div class="grupo-input">
                                        <label class="main_contacto_telefono" for="telefono">Teléfono *</label>
                                        <input type="tel" name="telefono" id="telefono">
                                    </div>
                                    <div class="grupo-input">
                                        <label class="main_contacto_correo" for="correo">Correo Electrónico *</label>
                                        <input type="email" name="correo" id="correo">
                                    </div>
                                    <div class="grupo-input">
                                        <label class="main_contacto_mensaje" for="mensaje">Mensaje</label>
                                        <textarea name="mensaje" id="mensaje" rows="1"></textarea>
                                    </div>
                                    <div class="grupo-input captcha" style="margin: 0 auto">
                                        <div class="g-recaptcha"
                                            data-sitekey="6Le75LIUAAAAABYHgij-x95msLSUQvm_sn0lyxyL"></div>
                                    </div>
                                    <div class="grupo-input">
                                        <button class="main_contacto_enviar" name="enviar" id="enviar">ENVIAR</button>
                                    </div>
                                    <div class="grupo-input">
                                        <div class="respuesta">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="columna-2">
                                <div class="contenedor-2 contacto_red">
                                    <a href="">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.1951216425273!2d-103.40758248518736!3d25.53187662430663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fdb9df0e82999%3A0xc5bbfd7e27aa3c7c!2sCalz%20Saltillo%20400%20685-interior%2016%2C%20Torre%C3%B3n%20Residencial%2C%20Torre%C3%B3n%2C%20Coah.!5e0!3m2!1ses-419!2smx!4v1621264899706!5m2!1ses-419!2smx"
                                            width="600" height="350" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </a>
                                    <a href="#" target="_blank">
                                        <img src="assets/icons/ubicacion_icono.png" alt="Ubicación" class="redes-icono">
                                        Calzada Saltillo 400, #685 sur, interior 16 colonia Ex Hacienda los Ángeles, CP.
                                        27260
                                    </a>
                                    <a href="tel:8712033381">
                                        <img src="assets/icons/telefono_icono.png" alt="Teléfono" class="redes-icono">
                                        +52 1 871 203 3381
                                    </a>
                                    <a href="mailto:contacto@vsidesarrollos.com">
                                        <img src="assets/icons/mail_icono_2.png" alt="Correo" class="redes-icono">
                                        contacto@vsidesarrollos.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <footer class="container-2">
        <h5 class="footer_desarrollador"><b>DESARROLLADOR POR</b> A W SOFTWARE</h5>
    </footer>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=es' async defer></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/animacionNumeros.js"></script>
    <script src="assets/js/proyectos.js"></script>

</body>

</html>