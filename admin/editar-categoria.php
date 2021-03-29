<?php 
  $id = $_GET['id'];
  if(!filter_var($id, FILTER_VALIDATE_INT)):
    die("Error");
      else :
  include_once 'funciones/sesiones.php';
  include_once 'funciones/funciones.php'; 
  include_once 'templates/header.php'; 
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php'
?>
<?php 
    $sql = "SELECT * FROM `categoria_evento` WHERE `id_categoria` = $id";
    $resultado = $conn->query($sql);
    $categoria_evento = $resultado->fetch_assoc();
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Editar Categoría<br><small>Llena el formulario para editar la categoría.</small></h1>
    </section>
  <div class="row">
  <div class="col-xs-4">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box" style="border-radius: 15px;">
        <div class="box-header with-border">
          <h3 class="box-title">Editando <?php echo $categoria_evento['cat_evento']; ?></h3>
        </div>
        <div class="box-body">
            <!-- form start -->
            <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-categoria.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="categoria">Nombre de categoría:</label>
                  <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" required placeholder="Categoria" autocomplete="username" value="<?php echo $categoria_evento['cat_evento']; ?>">
                </div>
                <div class="form-group">
                  <label for="icono">Icono:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background-color: black; color:  #f39c12; font-size: 20px;">
                      <i class="fa fa-address-book"></i>
                    </div>
                    <input type="text" id="icono" name="icono" class="form-control pull-right" placeholder="Elige un icono" value="<?php echo $categoria_evento['icono']; ?>">
                  </div>
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