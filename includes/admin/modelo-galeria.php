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

            $directorio = "../../assets/galerias/$titulo";

        }
        if(!file_exists($directorio)) {
            mkdir($directorio, 0755, true);
        }
        //directorio destino
        $dir = opendir($directorio);
        $ruta = $directorio.'/'.$filename;
    
        if(move_uploaded_file($temporal, $ruta)) {
            $cargaCorrecta = 'Se cargo correctamnte';
        } else {
            $cargaCorrecta = 'Error';
        }
        closedir($dir);
    }

    try {
        include_once "functions/funciones.php";
        $stmt = $con->prepare("INSERT INTO galeria (titulo, descripcion, imagenes, id_proyecto) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $titulo, $desc, $filename, $proyecto_gal);
        $stmt->execute();
        $id_insertado = $stmt->insert_id;
        if ($stmt->affected_rows){
            $respuesta=array(
                'respuesta'=>'exito',
                'id_proyecto'=>$id_insertado,
                 'resultado_imagen' => $cargaCorrecta
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

/* ELiminar Imagenes de la galeria de proyectos */
if($_POST['registro'] == 'eliminaImg') { 
    $id_img = $_POST['eliminar_img'];
    $respuesta=array(
      'respuesta'=>'correcto'
    );
    if($id_img) {
      unlink($id_img);
    }
    die(json_encode($respuesta));
}

/*Actualizar Registro de la galeria */
if($_POST['registro'] == 'actualizar') {
    try {
        $stmt = $con->prepare("UPDATE galeria SET titulo = ?, descripcion = ?, id_proyecto = ? WHERE id_gal = ?");
         $stmt->bind_param("ssii", $titulo, $desc, $proyecto_gal, $id_registroEditar);
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
        /* Eliminar carpeta e informacion de la BD, mediante el id de la galeria */
        $carpeta = "../../assets/galerias/".$titulo;
        foreach(glob($carpeta."/*.*") as $archivos_carpeta) {
            unlink($archivos_carpeta);
        }
        rmdir($carpeta);
        $stmt = $con->prepare("DELETE FROM galeria WHERE id_gal = ?");
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