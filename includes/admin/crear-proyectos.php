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
      Proyectos VSI
      <small>llena el formulario para crear el proyecto</small>
    </h1>
  </section>

  <div class="row">
    <div class="col-md-10">
      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Guardar proyecto</h3>
          </div>
          <div class="box-body">
            <!-- form start -->
            <form role="form" name="guardar-proyecto" id="guardar-proyecto-archivo" method="post"
              action="modelo-proyectos.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input autocomplete="off" type="text" class="form-control" id="nombre" name="nombre"
                    placeholder="Ingresa el nombre del proyecto">
                </div>
                <div class="form-group">
                  <label for="imagen-proyecto">Foto</label>
                  <input type="file" id="imagen-proyecto" name="archivo_imagen">
                  <div
                    style="display: flex; flex-wrap: wrap; justify-content: space-between: text-align: center; margin-top: 10px;">
                    <p style="width: 50%;" class="help-block">• Medida recomendada de la imagen: <strong>1500 x
                        1500</strong> </p>
                    <p style="width: 50%;" class="help-block">• Peso ideal de la imagen, menos de <strong>1
                        MB</strong>
                    </p>
                    <p style="width: 100%;" class="help-block">• Extenciónes permitidas: <strong>jpg, png,
                        svg</strong>
                    </p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="enlace">Enlace</label>
                  <input autocomplete="off" type="text" class="form-control" id="enlace" name="enlace"
                    placeholder="Ingresa el enlace del proyecto">
                </div>
                <div id="loader" class="form-group" style="display: none;">
                  <img src="../../assets/img/preloader.gif" alt="Cargando" style="margin: 10px 0 10px 20px;">
                  <p>Espere un momento porfavor, se esta cargando la imagen...</p>
                </div>
                <div class="box-footer">
                  <input type="hidden" name="registro" value="nuevo">
                  <button type="submit" class="btn btn-primary">Enviar</button>
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