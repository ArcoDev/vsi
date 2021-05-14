$(document).ready(function() {

    if (!getQueryVariable('sent'))
        window.location.href = "../";
    else {
        if (sessionStorage.getItem("idioma") != null) {
            if (sessionStorage.getItem("idioma") == "en") {
                $(".gracias").text("Thank you for your message.");
                $(".texto").text("WE WILL CONTACT YOU SOON.");
            } else if (sessionStorage.getItem("idioma") == "es") {
                $(".gracias").text("GRACIAS POR TU MENSAJE.");
                $(".texto").text("NOS PONDREMOS EN CONTACTO CONTIGO A LA BREVEDAD.");
            }
        } else {
            window.location.href = "../";
        }
    }

    $(".btn-regresar").click(function() {
        $(".alerta").fadeOut();
        setTimeout(function() {
            window.location.href = "../";
        }, 2000);
    });

    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        return false;
    }
});