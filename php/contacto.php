<?php
    error_reporting(E_ALL ^ E_NOTICE);
    include("gcaptcha.php");
    header('Content-type: application/json');

    $nombre = test_input($_POST['nombre']);
    $correo = test_input($_POST['correo']);
    $telefono = test_input($_POST['telefono']);
    $mensaje = test_input($_POST['mensaje']);


    if (empty($nombre) ||  empty($correo) || empty($telefono))
    {
        return print(json_encode('empty')); 
    }
    else
    {
        $para = 'contacto@vsidesarrollos.com';
        // $para = 'mgonzalez@awsoftware.mx';
        $titulo = $nombre.' está interesado en tus servicios.';
        $mensaje = '
        <html>
        <head>

            <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
            <title>Contacto villasi</title>
        </head>
        <body>
            <table width="690" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
            <tbody>
                <tr colspan="3" height="100" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#0045be" style="padding:0;margin:0;font-size:1;line-height:0">
                <td>
                    <table width="690" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="20"></td>
                        <td>
                        <center>
                            <h1 style="color: #FFF; line-height: 30px; font-weight: 5px; font-size:28px;   text-align: center;">Han enviado un mensaje de contacto desde tu sitio web.</h1>
                        </center>
                        </td>
                    </tr>
                    </table>
                </td>
                </tr>
                <tr colspan="3" height="50" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFF" style="padding:0;margin:0;font-size:1;">
                <td>
                    <table width="690" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="20"></td>
                        <td>
                        <center><h3 style="color: #000;">Información del contacto</h3></center>
                        </td>
                    </tr>
                    <tr>
                        <td width="20"></td>
                        <td><h4 style="color: #000;">Nombre: '.$nombre.'</h4></td>
                    </tr>
                    <tr>
                        <td width="20"></td>
                        <td><h4 style="color: #000;">correo: '.$correo.'</h4></td>
                    </tr>
                    <tr>
                        <td width="20"></td>
                        <td><h4 style="color: #000;">Telefono: '.$telefono.'</h4></td>
                    </tr>
                    </table>
                </td>
                </tr>
                <tr>
                    <td height="5"></td>
                </tr>
                <tr colspan="3" height="110" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#EBEBEB" style="padding:0;margin:0;font-size:1;">
                <td>
                    <table width="690" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="20"></td>
                        <td><h4 style="color: #000;">Mensaje: </h4></td>
                    </tr>
                    <tr>
                        <td width="20"></td>
                        <td height="40"><p style="font-size:16px;line-height:20px;padding:0;padding-right: 15px; margin 0px; text-align: justify;">'.$mensaje.'</p></td>
                    </tr>
                    </table>
                </td>
                </tr>
            </tbody>
            </table>

        </body>
        </html>';
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        $cabeceras .= 'Para: vsidesarrollos <contacto@vsidesarrollos.com>' . "\r\n";
        $cabeceras .= 'From:  VSI DESARROLLOS WEB  <www.vsidesarrollos.com>' . "\r\n";

        if ($jsonResponse->success === true) {

            $mensaje=utf8_decode($mensaje);
            $titulo=utf8_decode($titulo);
            $sent = mail($para, utf8_encode($titulo), utf8_encode($mensaje), utf8_encode($cabeceras));

            if ($sent) {
                return print(json_encode('success'));
            }
            else {
                return print(json_encode('servidor'));            
            }
        } else {
            return print(json_encode('captcha'));                
        }

    }


    function test_input($field) {
        $field = trim($field);
        $field = stripslashes($field);
        $field = htmlspecialchars($field);
        return $field;
    }
 ?>
