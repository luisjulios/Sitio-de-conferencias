<?php 
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php'; 
include_once 'templates/header.php'; 
include_once 'templates/barra.php';
include_once 'templates/navegacion.php'
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Agregar Invitado<br><small>Llena el formulario para crear un invitado.</small></h1>
    </section>
  <div class="row">
  <div class="col-lg-6 col-xs-12">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box" style="border-radius: 15px;">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Invitado</h3>
        </div>
        <div class="box-body">
            <!-- form start -->
            <form role="form" name="guardar-registro" id="guardar-registro-archivo" enctype="multipart/form-data" method="post" action="modelo-invitado.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre_invitado">Nombre de invitado:</label>
                  <input type="text" class="form-control" id="nombre_invitado" name="nombre_invitado" required placeholder="Nombre" autocomplete="username">
                </div>
                <div class="form-group">
                  <label for="apellido_invitado">Apellido de invitado:</label>
                  <input type="text" class="form-control" id="apellido_invitado" name="apellido_invitado" required placeholder="Apellido" autocomplete="username">
                </div>
                <div class="form-group">
                  <label for="descripcion_invitado">Biografía de invitado:</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="6" placeholder="Biografía" required></textarea>
                </div>
                <div class="form-group">
                  <label for="imagen_invitado">Imagen</label>
                  <input class="form-control" type="file" id="imagen_invitado" name="archivo_imagen" required>
                  <p class="help-block">Añadir fotografía del invitado aquí.</p>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="registro" value="nuevo">
                <button type="submit" class="btn btn-primary" id="crear_registro" >Añadir</button>
              </div>
            </form>        
          </div>
        <!-- /.box-body -->

      </div>
      <!-- /.box -->

    </section>
  </div>
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include_once 'templates/footer.php'; ?>