<?php 
    $id_img = $_POST['elimina_img'];
    //var_dump($id_img);
     
    if($id_img) {
      
      $respuesta=array(
        'respuesta'=>'exito',
    );
      unlink($id_img);

    }
?>