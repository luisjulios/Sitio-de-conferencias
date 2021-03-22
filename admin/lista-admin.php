<?php 
include_once 'funciones/sesiones.php';
include_once 'funciones/funciones.php';
include_once 'templates/header.php'; 
include_once 'templates/barra.php';
include_once 'templates/navegacion.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administradores
        <small>Puedes ver/editar/eliminar los administradores de la página</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="border-radius: 15px;">
            <div class="box-header">
              <h3 class="box-title">Lista de Administradores</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID  <span><i class="fa fa-sort"></i></span></th>
                  <th>Usuario  <span><i class="fa fa-sort"></i></span></th>
                  <th>Nombre  <span><i class="fa fa-sort"></i></span></th>
                  <th>Acciones  <span><i class="fa fa-sort"></i></span></th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  try {
                    $sql = "SELECT id_admin, usuario, nombre FROM admins";
                    $resultado = $conn->query($sql);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                    echo $error;
                  }
                  while($admin = $resultado->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $admin['id_admin']; ?></td>
                    <td><?php echo $admin['usuario']; ?></td>
                    <td><?php echo $admin['nombre']; ?></td>
                    <td>
                      <a href="editar-admin.php?id=<?php echo $admin['id_admin'];?>" class="btn bg-orange btn-flat margin" style="border-radius: 5px;"><i class="fa fa-pencil"></i></a>
                      <a href="#" data-id="<?php echo $admin['id_admin'];?>" data-tipo="admin" class="btn bg-red btn-flat margin borrar-registro" style="border-radius: 5px;"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
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

<?php include_once 'templates/footer.php'; ?>