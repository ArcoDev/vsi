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
                    <a data-toggle="modal" data-target="#galeria-proyectos" class="btn btn-success btn-flat margin"
                      title="Ver imagenes de la galería">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="editar-galeria.php?id=<?php echo $galeria['id_proyecto']?>"
                      class="btn btn-warning btn-flat margin" title="Editar">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="#" data-id="<?php echo $galeria['id_gal']?>" data-tipo="galeria"
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
<div class="modal fade" id="galeria-proyectos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h1 class="modal-title" id="exampleModalLabel">Galeria</h1>
        <p>Click Sobre la imagen para eliminarla del proyecto</p>
      </div>
      <div class="modal-body">
        <div class="gal-contenedor">
          <?php
              $consulta = $con->query("SELECT * FROM galeria");
              while($galeria = mysqli_fetch_array($consulta)) {
                $nombre_archivo = $galeria['titulo'];
                //var_dump($nombre_archivo);
              }
               // $nom_carpeta = $galeria['titulo'];
                $directorio = "../../assets/galerias/$nombre_archivo/";
                $directorio_fin = dir($directorio);
                while(($archivo = $directorio_fin->read()) != false) {
                  $imagenes = $directorio.$archivo;
                  echo '<a class="accion-img" href="">
                           <img src="'.$imagenes.'" alt="Galeria de imagenes">
                        </a>';
                }
                 $directorio_fin->close();
          ?>
          <!--<a class="accion-img" href="">
            <img src="../../assets/proyectos/proyecto-noma.jpg" alt="">
          </a> -->
        </div>
      </div>
    </div>
  </div>
</div>
<?php
/* AGregado los tempaltes de la plantilla */
  include_once "templates/footer.php";

?>