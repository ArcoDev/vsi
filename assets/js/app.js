$(document).ready(function() {
    //DESLIZAMIENTO SUAVE
    $('a[href^="#"]').click(function() {
        var destino = $(this.hash);
        if (destino.length == 0) {
            destino = $('a[name="' + this.hash.substr(1) + '"]');
        }
        if (destino.length == 0) {
            destino = $('html');
        }
        $('html, body').animate({ scrollTop: destino.offset().top }, 900);

        $(".enlaces").css("display", "none");

        return false;
    });
    //DESLIZAMIENTO SUAVE

    //PRIMER MENÚ
    $("#menu1").click(function() {
        $(".enlaces").slideToggle("fast");
    });
    //PRIMER MENÚ
    //PRIMER MENÚ
    $("#menu2").click(function() {
        $(".enlaces").slideToggle("fast");
    });
    //PRIMER MENÚ

    //SILIDER
    //almacenar slider en una variable
    var slider = $('#slider');
    //almacenar botones
    var siguiente = $('#sig');
    var anterior = $('#prev');

    //idioma activo
    var idioma = "es";
    //número de imágen
    var no = 1;
    //titulos español-inglés
    var titulo_es1 = "<b>CREAMOS ASOMBROSOS</b><br>PROYECTOS INMOBILIARIOS",
        titulo_es2 = "<b>CREAMOS ASOMBROSOS</b><br>PROYECTOS INMOBILIARIOS",
        titulo_es3 = "<b>CREAMOS ASOMBROSOS</b><br>PROYECTOS INMOBILIARIOS";
    var titulo_en1 = "<b>WE CREATE AMAZING REAL</b><br>ESTATE PROJECTS",
        titulo_en2 = "<b>WE CREATE AMAZING REAL</b><br>ESTATE PROJECTS",
        titulo_en3 = "<b>WE CREATE AMAZING REAL</b><br>ESTATE PROJECTS";

    $("#no-img").html(no);

    function sumar_no() {
        if (no > 2) {
            no = 1;
        } else {
            no++;
        }
        titulo();
        $("#no-img").html(no);
    }

    function restar_no() {
        if (no < 2) {
            no = 3;
        } else {
            no--;
        }
        titulo();
        $("#no-img").html(no);
    }

    function titulo() {
        //español
        if (no == 1 && idioma == "es") {
            $(".header_titulo").html(titulo_es1);
        } else if (no == 2 && idioma == "es") {
            $(".header_titulo").html(titulo_es2);
        } else if (no == 3 && idioma == "es") {
            $(".header_titulo").html(titulo_es3);
        }
        //inglés
        if (no == 1 && idioma == "en") {
            $(".header_titulo").html(titulo_en1);
        } else if (no == 2 && idioma == "en") {
            $(".header_titulo").html(titulo_en2);
        } else if (no == 3 && idioma == "en") {
            $(".header_titulo").html(titulo_en3);
        }
    }

    //mover ultima imagen al primer lugar
    $('#slider .slider_section:last').insertBefore('#slider .slider_section:first');
    //mostrar la primera imagen con un margen de -100%
    //slider.css('margin-left', '-'+200+'%');

    function moverD() {
        slider.animate({
            marginLeft: '-' + 200 + '%'
        }, 700, function() {
            $('#slider .slider_section:first').insertAfter('#slider .slider_section:last');
            slider.css('margin-left', '-' + 100 + '%');
            sumar_no();
            titulo();
        });

    }

    function moverI() {
        slider.animate({
            marginLeft: 0
        }, 700, function() {
            $('#slider .slider_section:last').insertBefore('#slider .slider_section:first');
            slider.css('margin-left', '-' + 100 + '%');
            restar_no();
            titulo();
        });
    }

    function autoplay() {
        interval = setInterval(function() {
            moverD();
        }, 8000);
    }
    siguiente.on('click', function() {
        moverD();
        clearInterval(interval);
        autoplay();
    });

    anterior.on('click', function() {
        moverI();
        clearInterval(interval);
        autoplay();
    });
    autoplay();
    //SILIDER

    //IDIOMA
    if ($(window).width() < 540) {
        $("#btn_idioma").click(function() {
            $(".es-en").slideToggle("slow");
        });
    }

    $(".es").click(function() {
        $(".en").removeClass("idioma-activo");
        $(".es").addClass("idioma-activo");
        idioma = "es";
        sessionStorage.setItem("idioma", "es");
        titulo();

        //MENU
        $(".menu_inicio").html("INICIO");
        $(".menu_nosotros").html("NOSOTROS");
        $(".menu_desarrollo").html("PROYECTOS");
        $(".menu_capital").html("DESARROLLOS");
        $(".menu_contacto").html("CONTACTO");

        //MENU
        //HEADER
        //$(".header_titulo").html("<b>CREAMOS ASOMBROSOS</b><br>PROYECTOS INMOBILIARIOS");
        //HEADER
        //NOSOTROS
        $(".main_nosotros").html("<b>SOBRE</b> NOSOTROS");
        $(".main_nosotros_p1").html("VSI es una plataforma financiera y comercial, de inteligencia y consultoría, que junto a su unidad operativa de negocio, VillaSi Construcciones, se encargan del desarrollo de proyectos inmobiliarios de alto impacto para sus clientes y socios.");
        $(".main_nosotros_p2").html("Después de años de trabajo en México, VSI está entrando en el mercado de Estados Unidos con altas expectativas, y con la experiencia de VillaSi, tiene la garantía de tener una operación y resultados óptimos. La atención está puesta particularmente en los proyectos residenciales y comerciales tanto en Texas como en México. El Grupo VSI incluye un despacho de arquitectura, una constructora, gerencia de obra y por otra parte, el desarrollo inmobiliario y la plataforma financiera en VSI.");
        $(".main_nosotros_p3").html("El Grupo VSI incluye un despacho de arquitectura, una constructora, gerencia de obra y por otra parte, el desarrollo inmobiliario y la plataforma financiera en VSI.");
        $(".main_nosotros_leermas").html("LEER MÁS");
        $(".main_nosotros_conocemas").html("Conócenos más...");
        $(".main_años").html("<p>Años de <br>experiencia</p>");
        $(".main_proyectos").html("<p>Proyectos <br>realizados</p>");
        $(".main_clientes").html("<p>Clientes y <br>colaboradores</p>");
        $(".main_inversion").html("<p>Invertidos y <br>gestionados</p>");
        //NOSOTROS
        //DESARROLLO
        $(".main_desarrollo").html("<h2>Desarrolladora <br><span>Inmobiliaria</span></h2>");
        $(".main_desarrollo_p1").html("VSI Desarrollos/VSI Development es la desarrolladora inmobiliaria de Grupo VSI, encargada del desarrollo de proyectos inmobiliarios con el fin de implementarlos en México y Estados Unidos, ofreciendo soluciones inmobiliarias de vanguardia, inteligentes, socialmente involucradas, y de importante impacto económico. Actualmente contamos con grandes desarrollos inmobiliarios en Querétaro, Torreón, San Miguel de Allende y al rededor. Para lograr esto, nuestro equipo está formado por arquitectos, ingenieros, expertos financieros, y asesores comerciales para cubrir todas las áreas y garantizar el éxito para los involucrados.");
        $(".main_b").html("Nuestros Servicios:");
        $('main_lista').html("<li>● Administración Comercial</li><li>● Planeación Financiera</li><li>● Estrategias de Comunicación</li><li>● Plan de Administración</li><li>● Carteras de Centas</li><li>● Y MÁS</li>");
        //CAPITAL
        $(".main_capital_p1").html("VSI Capital es la plataforma para inversión en los proyectos inmobiliarios de VSI Desarrollos. Se invita a inversionistas para participar con nosotros en los proyectos bajo diversas estructuras, ofreciendo rendimientos agresivos, tanto en pesos como en dólares.");
        //CONTACTO
        $(".main_contacto").html("<b>PONTE EN</b> CONTACTO");
        $(".main_contacto_nombre").html("Nombre Completo *");
        $(".main_contacto_telefono").html("Teléfono *");
        $(".main_contacto_correo").html("Correo Electrónico");
        $(".main_contacto_mensaje").html("Mensaje (Opcional)");
        $(".main_contacto_enviar").html("ENVIAR");
        //CONTACTO
        //FOOTER
        $(".footer_desarrollador").html("<b>DESARROLLADO POR<b> AWSOFTWARE");
        //FOOTER
    });

    $(".en").click(function() {
        $(".es").removeClass("idioma-activo");
        $(".en").addClass("idioma-activo");
        idioma = "en";
        sessionStorage.setItem("idioma", "en");
        titulo();

        //MENU
        $(".menu_inicio").html("HOME");
        $(".menu_nosotros").html("ABOUT US");
        $(".menu_desarrollo").html("DEVELOPMENT");
        $(".menu_capital").html("CAPITAL");
        $(".menu_contacto").html("CONTACT");

        //MENU
        //HEADER
        $(".header_titulo").html("<b>WE CREATE AMAZING REAL</b><br>ESTATE PROJECTS");
        //HEADER
        //NOSOTROS
        $(".main_nosotros").html("<b>ABOUT</b> US");
        $(".main_nosotros_p1").html("VSI is a financial and commercial, intelligence and consulting platform that, together with its operational business unit, VillaSi Construcciones, is in charge of developing high-impact real estate projects for its clients and partners.");
        $(".main_nosotros_p2").html("After years of work in Mexico, VSI is entering the United States market with high expectations, and with VillaSi's experience, it is guaranteed to have optimal operation and results. The focus is particularly on residential and commercial projects in both Texas and Mexico.");
        $(".main_nosotros_p3").html("The VSI Group includes an architecture firm, a construction company, construction management and on the other hand, the real estate development and financial platform in VSI.");
        $(".main_nosotros_leermas").html("READ MORE");
        $(".main_nosotros_conocemas").html("Know mores...");
        $(".main_años").html("<p>Year of <br>experience</p>");
        $(".main_proyectos").html("<p>Fulfilled  <br>projects</p>");
        $(".main_clientes").html("<p>Clients and <br>collaborators</p>");
        $(".main_inversion").html("<p>Invested and <br>managed</p>");
        //NOSOTROS
        //DESARROLLO
        $(".main_desarrollo").html("REAL ESTATE DEVELOPER");
        $(".main_desarrollo_p1").html("VSI Development / VSI Development is the real estate developer of Grupo VSI, in charge of the development of real estate projects in order to implement them in Mexico and the United States United, offering cutting-edge real estate solutions, smart, socially involved, and of significant economic impact. We currently have large real estate developments in Querétaro, Torreón, San Miguel Allende and around. To achieve this, our team is made up of architects, engineers, financial experts, and business advisers to cover all areas and ensure success for those involved.");
        $(".main_desarrollo_p2").html("We currently have large real estate developments in Querétaro, Torreón, San Miguel de Allende and the surrounding area. To achieve this, our team is made up of architects, engineers, financial experts, and business consultants to cover all areas and ensure success for those involved.");
        $(".main_desarrollo_p3").html("We take care of: <br> Business Administration, Financial Planning, Communication Strategies, Management Plan, Sales Portfolio And more.");
        $(".main_b").html("Our services:");
        $('.main_lista').html("<li>● Commercial administration</li><li>● Financial planning</li><li>● Communication strategies</li><li>● Administration Plan</li><li>● Centas Wallets</li><li>● AND MORE</li>")
        //DESARROLLO
        //CAPITAL
        $(".main_capital_p1").html("VSI Capital is the platform for investment in the real estate projects of VSI Desarrollos. Investors are invited to participate with us in projects under various structures, offering aggressive returns, both in pesos and dollars.");
        $(".main_capital_p2").html("We invite investors and partners to participate with us under different structures, offering aggressive returns, whether in Dollars or in Pesos.");
        //CAPITAL
        //CONTACTO
        $(".main_contacto").html("<b>GET IN</b> TOUCH");
        $(".main_contacto_nombre").html("Full Name");
        $(".main_contacto_telefono").html("Phone");
        $(".main_contacto_correo").html("Email");
        $(".main_contacto_mensaje").html("Message (Optional)");
        $(".main_contacto_enviar").html("SUBMIT");
        //CONTACTO
        //FOOTER
        $(".footer_desarrollador").html("<b>POWERED BY<b> AWSOFTWARE");
        //FOOTER
    });
    //IDIOMA
    //FORMULARIO DE CONTACTO

    var p_abre_success = "<p style='text-align: center; color: green;'>";
    var p_abre_error = "<p style='text-align: center; color: red;'>";
    //respuestas en español
    var r_success_es = "Gracias por tu mensaje, Nos pondremos en contacto contigo lo más pronto posible.</p>";
    var r_error_es = "Ha ocurrido un error. Tu mensaje no se ha enviado. Por favor intentalo nuevamente más tarde.</p>";
    var r_empty_es = "Mensaje no enviado. Por favor, llena todos los campos para continuar.</p>";
    var r_captcha_es = "Por favor resuelva el captcha para continuar.</p>";
    var r_servidor_es = "Ha ocurrido un error de servidor.</p>";
    //respuestas en inglés
    var r_success_en = "Thank you for your message, we will contact you as soon as possible.</p>";
    var r_error_en = "An error has occurred. Your message has not been sent. Please try again later.</p>";
    var r_empty_en = "Message not sent. Please fill in all fields to continue.</p>";
    var r_captcha_en = "Please solve the captcha to continue.</p>";
    var r_servidor_en = "A server error has occurred.</p>";

    $("#contacto_vsi").bind("submit", function() {
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(answer) {
                if (idioma == "es") {
                    if (answer == "success") {
                        // $(".respuesta").html(p_abre_success + r_success_es);

                        // $("#nombre").val('');
                        // $("#telefono").val('');
                        // $("#correo").val('');
                        // $("#mensaje").val('');

                        grecaptcha.reset(); //RESET DEL CAPTCHA

                        window.location.href = "sentmail/?sent=true";

                    } else if (answer == "captcha") {
                        $(".respuesta").html(p_abre_error + r_captcha_es);
                    } else if (answer == "servidor") {
                        $(".respuesta").html(p_abre_error + r_servidor_es);
                    } else if (answer == "error") {
                        $(".respuesta").html(p_abre_error + r_error_es);
                    } else if (answer == "empty") {
                        $(".respuesta").html(p_abre_error + r_empty_es);
                    }
                } else if (idioma == "en") {
                    if (answer == "success") {
                        // $(".respuesta").html(p_abre_success + r_success_en);

                        // $("#nombre").val('');
                        // $("#telefono").val('');
                        // $("#correo").val('');
                        // $("#mensaje").val('');

                        grecaptcha.reset(); //RESET DEL CAPTCHA

                        window.location.href = "sentmail/?sent=true";

                    } else if (answer == "captcha") {
                        $(".respuesta").html(p_abre_error + r_captcha_en);
                    } else if (answer == "servidor") {
                        $(".respuesta").html(p_abre_error + r_servidor_en);
                    } else if (answer == "error") {
                        $(".respuesta").html(p_abre_error + r_error_en);
                    } else if (answer == "empty") {
                        $(".respuesta").html(p_abre_error + r_empty_en);
                    }
                }
            },
            error: function() {
                if (idioma == "es") {
                    $(".respuesta").html(p_abre_error + r_error_es);
                } else if (idioma == "en") {
                    $(".respuesta").html(p_abre_error + r_error_en);
                }
            }
        });


        return false;
    });


    if (sessionStorage.getItem("idioma") != null) {
        if (sessionStorage.getItem("idioma") == "en")
            $(".en").click();
        else if (sessionStorage.getItem("idioma") == "es")
            $(".es").click();
        else {
            sessionStorage.setItem("idioma") == "es";
        }
    } else {
        sessionStorage.setItem("idioma", "es");
    }

    //FORMULARIO DE CONTACTO
});