<?php
/* AGregado los tempaltes de la plantilla */
  include_once "functions/sesiones.php";
  include_once "functions/funciones.php";
  $id = $_GET['id'];
  if(!filter_var($id, FILTER_VALIDATE_INT)) {
    die("Error");
  }
  include_once "templates/header.php";
  include_once "templates/barra.php";
  include_once "templates/navegacionLateral.php"; 

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Productos Amora
    </h1>
  </section>

  <div class="row">
    <div class="col-md-10">
      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Editar Usuario</h3>
          </div>
          <div class="box-body">
            <?php
                $sql ="SELECT * FROM `galeria` WHERE `id_gal` = $id";
                $resultado = $con->query($sql);
                $galeria = $resultado->fetch_assoc();
             ?>
            <!-- form start -->
            <form role="form" name="guardar-galeria" id="guardar-galeria" method="post" action="modelo-galeria.php"
              enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="foto">Titulo del proyecto</label>
                  <input autocomplete="off" type="text" class="form-control" id="titulo" name="titulo"
                   value="<?php echo $galeria['titulo']; ?>">
                </div>
                <div class="form-group">
                  <label for="foto">Descripcion del proyecto</label>
                  <input autocomplete="off" type="text" class="form-control" id="desc" name="desc"
                  value="<?php echo $galeria['descripcion']; ?>">
                </div>
                <!-- select -->
                <div class="form-group">
                  <label for="precio">Proyecto*</label>
                  <?php
                  try {
                    $consulta = "SELECT * FROM proyectos";
                    $resultado = $con->query($consulta);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                    echo $error;
                  }?>
                  <select name="proyecto_gal" class="form-control">
                    <option>Selecciona el proyecto al que pertenecera la galeria</option>
                    <?php while($infoSelect = mysqli_fetch_array($resultado)) { 
                      echo '<option value="'.$infoSelect['id'].'">'.$infoSelect['nombre'].'</option>';
                     }?>
                  </select>
                </div>
                <div class="box-footer">
                  <input type="hidden" name="registro" value="actualizar">
                  <input type="hidden" name="id_registro"  value="<?php echo $proyecto['id_gal']; ?>">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
  </div>
</div>
<!-- /.content-wrapper -->
<?php
/* AGregado los tempaltes de la plantilla */
  include_once "templates/footer.php";

?>