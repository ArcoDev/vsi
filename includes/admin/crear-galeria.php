<?php
/* AGregado los tempaltes de la plantilla */
  include_once "functions/sesiones.php";
  include_once "functions/funciones.php";
  include_once "templates/header.php";
  include_once "templates/barra.php";
  include_once "templates/navegacionLateral.php"; 

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Información de la galería de los proyectos de VSI
    </h1>
  </section>

  <div class="row">
    <div class="col-md-10">
      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Guardar Categoria</h3>
          </div>
          <div class="box-body">
            <!-- form start -->
            <form role="form" name="guardar-galeria" id="guardar-galeria" method="post" action="modelo-galeria.php"
              enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="foto">Titulo del proyecto</label>
                  <input autocomplete="off" type="text" class="form-control" id="titulo" name="titulo"
                    placeholder="Ingresa el titulo de la galeria">
                </div>
                <div class="form-group">
                  <label for="foto">Descripcion del proyecto</label>
                  <input autocomplete="off" type="text" class="form-control" id="desc" name="desc"
                    placeholder="Ingresa la descripcion de la galeria">
                </div>
                <!-- select -->
                <div class="form-group">
                  <label for="precio">Proyecto</label>
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
                <div class="form-group">
                  <label for="imagen-proyecto">Imagenes</label>
                  <input type="file" id="archivo[]" name="archivo[]" multiple="" accept="image/*">
                  <div id="loader" class="form-group" style="display: none;">
                  <img src="../../assets/img/preloader.gif" alt="Cargando" style="margin: 10px 0 10px 20px;">
                  <p>Espere un momento porfavor, se estan cargandon las imagenes...</p>
                </div>
                  <div
                    style="display: flex; flex-wrap: wrap; justify-content: space-between: text-align: center; margin-top: 10px;">
                    <p style="width: 50%;" class="help-block">• Medida recomendada de la imagen: <strong>762 x
                        608</strong> </p>
                    <p style="width: 50%;" class="help-block">• Peso ideal de la imagen, menos de <strong>1
                        MB</strong>
                    </p>
                    <p style="width: 100%;" class="help-block">• Extenciónes permitidas: <strong>jpg, png,
                        svg, webp</strong>
                    </p>
                  </div>
                </div>
                <div class="box-footer">
                  <input type="hidden" name="registro" value="nuevo">
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