<?php 
include_once 'funciones/sesiones.php';
include_once 'templates/header.php'; 
include_once 'funciones/funciones.php'; 
$id = $_GET['id'];
if(!filter_var($id, FILTER_VALIDATE_INT)){
  die("Error");
}
include_once 'templates/barra.php';
include_once 'templates/navegacion.php'
?>
          <?php 
          $sql = "SELECT * FROM `admins` WHERE `id_admin` = $id";
          $resultado = $conn->query($sql);
          $admin = $resultado->fetch_assoc();
          ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Editar administrador<br><small>Completa los campos que requieras editar.</small></h1>
    </section>
  <div class="row">
  <div class="col-xs-8">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box" style="border-radius: 15px;">
        <div class="box-header with-border">
          <h3 class="box-title">Editando el usuario de <?php echo $admin['nombre']; ?></h3>
        </div>
        <div class="box-body">

            <!-- form start -->
            <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="id">ID:</label>
                  <input type="text" class="form-control" id="id" name="id_registro" required readonly="readonly" value="<?php echo $id; ?>">
                </div>
                <div class="form-group">
                  <label for="usuario">Usuario:</label>
                  <input type="text" class="form-control" id="usuario" name="usuario" required placeholder="Usuario" value="<?php echo $admin['usuario']; ?>">
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre" autocomplete="username" value="<?php echo $admin['nombre']; ?>">
                </div>
                <?php if($_SESSION['nivel'] == 1): ?>
                <div class="form-group">
                  <label for="nivel">Nivel:</label>
                  <input type="number" min="0" max="1"  class="form-control" id="nivel" name="nivel" required value="<?php echo $admin['nivel']; ?>">
                </div>
                <?php endif; ?>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="current-password">
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="registro" value="actualizar">
                <button type="submit" class="btn btn-primary">Guardar</button>
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