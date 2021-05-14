$(document).ready(function(){
    $("#contacto_vsi").bind("submit", function(){
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(answer){
                if (answer ==  "success") {
                    $(".respuesta").html("<p style='text-align: center; color: green;'>Gracias por tu mensaje, Nos pondremos en contacto contigo lo más pronto posible.</p>");                                                                                                                                                                                              

                    $("#nombre").val('');
                    $("#telefono").val('');
                    $("#correo").val('');
                    $("#mensaje").val('');

                    grecaptcha.reset(opt_widget_id);//RESET DEL CAPTCHA
                    
                }else if(answer == "captcha") {
                    $(".respuesta").html("<p style='text-align: center; color: red;'>Por favor resuelve el captcha para continuar.</p>");                                                                                                                                                                                              
                }else if(answer == "servidor") {
                    $(".respuesta").html("<p style='text-align: center; color: red;'>Ha ocurrido un error de servidor.</p>");                                                                                                                                        
                }else if(answer == "error") {
                    $(".respuesta").html("<p style='text-align: center; color: red;'>Ha ocurrido un error. Tu mensaje no se ha enviado. Por favor intentalo nuevamente más tarde.</p>");                                                                                     
                }
                else if(answer == "empty") {
                    $(".respuesta").html("<p style='text-align: center; color: red;'>Mensaje no enviado. Por favor, llena todos los campos para continuar.</p>");                                 
                }
            },
            error: function(){
                $(".respuesta").html("<p style='text-align: center; color: red;'>Ha ocurrido un error. Tu mensaje no se ha enviado. Por favor intentalo nuevamente más tarde.</p>");                                                                                     
            }
        });


        return false;
    });
});