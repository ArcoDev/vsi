<?php
/* AGregado los tempaltes de la plantilla */
  include_once "functions/sesiones.php";
  include_once "functions/funciones.php";
  include_once "templates/header.php";
  include_once "templates/barra.php";
  include_once "templates/navegacionLateral.php"; 

?>
<style>
  .galeria-vistaPrevia {
    margin: 5px;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Lista de la Información de la galeria
      <small>registrada en la base de datos de VSI</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <!--<h3 class="box-title">Maneja los usuarios en esta seccion</h3>-->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="registros" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Titulo</th>
                  <th>Descripcion</th>
                  <th>Proyecto perteneciente</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    try {
                      $sql = "SELECT * 
                              FROM proyectos proy
                              INNER JOIN galeria gal 
                              ON proy.id = gal.id_proyecto";
                      $resultado = $con->query($sql);
                    } catch (Exception $e) {
                      $error = $e->getMessage();
                      echo $error;
                    }
                    while ($galeria = $resultado->fetch_assoc()) {?>
                <tr>
                  <td><?php echo $galeria['titulo'] ?></td>
                  <td><?php echo $galeria['descripcion'] ?></td>
                  <td><?php echo $galeria['nombre'] ?></td>
                  <td>
                    <a data-toggle="modal" data-target="#galeria-<?php echo $galeria['id_proyecto']?>" class="btn btn-success btn-flat margin"
                      title="Ver imagenes de la galería">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="editar-galeria.php?id=<?php echo $galeria['id_proyecto']?>"
                      class="btn btn-warning btn-flat margin" title="Editar">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="#" data-id="<?php echo $galeria['id_gal']?>" data-tipo="galeria" 
                                data-titulo="<?php echo $galeria['titulo'] ?>"
                      class="btn btn-danger btn-flat margin borrar_registro" title="Eliminar">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Titulo</th>
                  <th>Descripcion</th>
                  <th>Acciones</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
    //variables
    $sql = $con->query("SELECT * FROM galeria");
    while($galeria_modal = mysqli_fetch_array($sql)) {
      $nom_carpeta = $galeria_modal['titulo'];
      $directorio = "../../assets/galerias/$nom_carpeta/";
      $directorio_fin = dir($directorio);
      $incrementaID = 0;
      echo  '<div class="modal fade" id="galeria-'.$galeria_modal['id_proyecto'].'" tabindex="-1" role="dialog"     aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                      <h2 class="modal-title" id="exampleModalLongTitle">Galería proyecto '.$galeria_modal['titulo'].'</h2>
                      <p>Click sobre la imagen si deseas eliminarla del proyecto</p>
                    </div>
                    <div class="modal-body">';
                       while(($archivo = $directorio_fin->read()) != false) {
                         $nombre_img = $directorio.$archivo;
                         $incrementaID ++;
                         echo '<div class="accion-img" href="">
                         <img id="'.$incrementaID.'" class="img_gal" src="'.$nombre_img.'" alt="Galeria de imagenes">
                         <form action="modelo-galeria.php" method="POST" name="eliminar-img" class="borrar">
                         <input type="hidden" name="registro" value="eliminaImg">
                              <button type="submit"
                                      name="elimina_img" 
                                      class="btn btn-danger btn-flat margin eliminar-img borrar_img" 
                                      value = "'.$nombre_img.'"
                                      >
                              <i class="fas fa-trash-alt"></i>
                              </button>
                         
                                 </form>
                               </div>';
                       }
                    echo '</div>
                  </div>
                </div>
     </div>';
    }
?>

<?php
/* Agregando los templates de la plantilla */
  include_once "templates/footer.php";

?>