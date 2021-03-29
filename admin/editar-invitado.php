<?php 
  $id = $_GET['id'];
  if(!filter_var($id, FILTER_VALIDATE_INT)):
    die("Error");
      else :
  include_once 'funciones/sesiones.php';
  include_once 'funciones/funciones.php'; 
  include_once 'templates/header.php'; 
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';


  $sql = "SELECT * FROM `invitados` WHERE `invitado_id` = $id";
  $resultado = $conn->query($sql);
  $invitados = $resultado->fetch_assoc();
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Editar Categoría<br><small>Llena el formulario para editar la categoría.</small></h1>
    </section>
  <div class="row">
  <div class="col-xs-8">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box" style="border-radius: 15px;">
        <div class="box-header with-border">
          <h3 class="box-title">Editando <?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?></h3>
        </div>
        <div class="box-body">
            <!-- form start -->
            <form role="form" name="guardar-registro" id="guardar-registro-archivo" enctype="multipart/form-data" method="post" action="modelo-invitado.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre_invitado">Nombre de invitado:</label>
                  <input type="text" class="form-control" id="nombre_invitado" name="nombre_invitado" required placeholder="Nombre" autocomplete="username" value="<?php echo $invitados['nombre_invitado']; ?>">
                </div>
                <div class="form-group">
                  <label for="apellido_invitado">Apellido de invitado:</label>
                  <input type="text" class="form-control" id="apellido_invitado" name="apellido_invitado" required placeholder="Apellido" autocomplete="username" value="<?php echo $invitados['apellido_invitado']; ?>">
                </div>
                <div class="form-group">
                  <label for="descripcion_invitado">Biografía de invitado:</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="6" placeholder="Biografía" required><?php echo $invitados['descripcion']; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="imagen_actual">Imagen actual:</label>
                  <br>
                  <img src="../img/invitados/<?php echo $invitados['url_imagen']; ?>" width="100">
                </div>
                <div class="form-group">
                  <label for="imagen_invitado">Imagen:</label>
                  <input class="form-control" type="file" id="imagen_invitado" name="archivo_imagen">
                  <p class="help-block">Si desea actualizar la imagen, seleccione el archivo aquí.</p>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="registro" value="actualizar">
                <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                <button type="submit" class="btn btn-primary" id="crear_registro" >Guardar</button>
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

<?php 
  include_once 'templates/footer.php'; 
  endif;
  ?>