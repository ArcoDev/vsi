<?php
error_reporting(E_ALL ^ E_NOTICE);
/* Crear proyecto y mandar ifo a la BD */
include_once "functions/funciones.php";
$titulo = $_POST['titulo'];
$desc = $_POST['desc'];
$id_registroEditar = $_POST['id_registro'];
$proyecto_gal = $_POST['proyecto_gal'];

if($_POST['registro'] == 'nuevo') {
    /*Comprobar si se esta mandado los datos de file y de post
    $respuesta = array(
        'post' => $_POST,
        'file' => $_FILES
    );
    die(json_encode($respuesta));
    */
   foreach ($_FILES['archivo']['tmp_name'] as $key => $tmp_name) {
        if($_FILES['archivo']['name'][$key]) {
            
            $filename = $_FILES['archivo']['name'][$key];
            $temporal = $_FILES['archivo']['tmp_name'][$key];

            $directorio = "../../assets/galeria/";

            if(!file_exists($directorio)) {
                mkdir($directorio, 0755, true);
            }
            //directorio destino
            $dir = opendir($directorio);
            $ruta = $directorio.'/'.$filename;

            if(move_uploaded_file($temporal, $ruta)) {
                echo 'Se cargo correctamnte';
            } else {
                echo 'error';
            }
            closedir($dir);
        }
   }
    try {
        include_once "functions/funciones.php";
        $stmt = $con->prepare("INSERT INTO galeria (titulo, descripcion, id_proyecto) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $titulo, $desc, $proyecto_gal);
        $stmt->execute();
        $id_insertado = $stmt->insert_id;
        if ($stmt->affected_rows){
            $respuesta=array(
                'respuesta'=>'exito',
                'id_proyecto'=>$id_insertado,
                //'resultado_imagen' => $imagen_resultado
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
/*Actualizar Registro de la galeria */
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
/*Eliminar Proyecto */
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