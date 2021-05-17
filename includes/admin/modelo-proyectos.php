<?php
error_reporting(E_ALL ^ E_NOTICE);
/* Crear proyecto y mandar ifo a la BD */
include_once "functions/funciones.php";
$nombre = $_POST['nombre'];
$url_foto = $_POST['foto'];
$enlace = $_POST['enlace'];
$id_registroEditar = $_POST["id_registro"];

if($_POST['registro'] == 'nuevo') {
    
    /*Comprobar si se esta mandado los datos de file y de post
    $respuesta = array(
        'post' => $_POST,
        'file' => $_FILES
    );
    die(json_encode($respuesta));
    */
    $directorio = "../../assets/proyectos/";
    if(!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }
    if(move_uploaded_file($_FILES['archivo_imagen']['tmp_name'], $directorio . $_FILES['archivo_imagen']['name'])) {
        $imagen_url = $_FILES['archivo_imagen']['name'];
        $imagen_resultado = "Se cargo correctamente";
    } else {
        $respuesta = array(
            'respuesta' => error_get_last()
        );
    }
    try {
        include_once "functions/funciones.php";
        $stmt = $con->prepare("INSERT INTO proyectos (nombre, foto, enlace) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre, $imagen_url, $enlace);
        $stmt->execute();
        $id_insertado = $stmt->insert_id;
        if ($stmt->affected_rows){
            $respuesta=array(
                'respuesta'=>'exito',
                'id_proyecto'=>$id_insertado,
                'resultado_imagen' => $imagen_resultado
            );
        }else{
            $respuesta=array(
                'respuesta'=>'Error'
            );
        }
        $stmt->close();
        $con->close();
    } catch (Exception $e) {
        echo "Error: ".$e->getMessage();
    }
    die(json_encode($respuesta));
}
/*Actualizar Registro de proyecto */
if($_POST['registro'] == 'actualizar') {
    
    $directorio = "../../assets/proyectos/";
    if(!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }
    if(move_uploaded_file($_FILES['archivo_imagen']['tmp_name'], $directorio . $_FILES['archivo_imagen']['name'])) {
        $imagen_url = $_FILES['archivo_imagen']['name'];
        $imagen_resultado = "Se cargo correctamente";
    } else {
        $respuesta = array(
            'respuesta' => error_get_last()
        );
    }
    try {
        if($_FILES['archivo_imagen']['size'] > 0) {
            //con imagen
            $stmt = $con->prepare("UPDATE proyectos SET nombre = ?, foto = ?, enlace = ? WHERE id = ?");
            $stmt->bind_param("sssi", $nombre, $imagen_url, $enlace, $id_registroEditar);
        } else {
            //sin imagen
            $stmt = $con->prepare("UPDATE proyectos SET nombre = ?, enlace = ? WHERE id = ?");
            $stmt->bind_param("ssi", $nombre, $enlace, $id_registroEditar);
        }
        $estado = $stmt->execute();
        if($estado == true) {
            $respuesta = array(
                'respuesta' => 'actualizar',
                'actualizar' => $id_registroEditar
            );
        } else {
            $respuesta + array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $con->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));
}
/* Eliminar Proyecto */
if($_POST['registro'] == 'eliminar') { 
    $id_borrar = $_POST['id'];
    try {
        $stmt = $con->prepare("DELETE FROM proyectos WHERE id = ?");
        $stmt->bind_param('i', $id_borrar);
        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_eliminado' => $id_borrar
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));
}