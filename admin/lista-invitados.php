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
        Invitados
        <small>Puedes ver/editar/eliminar los invitados</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="border-radius: 15px;">
            <div class="box-header">
              <h3 class="box-title">Lista de Invitados al Eventos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre  <span><i class="fa fa-sort"></i></span></th>
                  <th>Biografía  <span><i class="fa fa-sort"></i></span></th>
                  <th>Imagen  <span><i class="fa fa-sort"></i></span></th>
                  <th>Acciones  <span><i class="fa fa-sort"></i></span></th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  try {
                    $sql = "SELECT * FROM invitados";
                    $resultado = $conn->query($sql);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                    echo $error;
                  }
                  while($invitado = $resultado->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $invitado['nombre_invitado'] . " " . $invitado['apellido_invitado']; ?></td>
                    <td style="width: 40%;"><?php echo $invitado['descripcion']; ?></td>
                    <td><img src="../img/invitados/<?php echo $invitado['url_imagen']; ?>" width="150" style="border-radius:10px;"></td>
                    <td style="width: 200px;">
                      <a href="editar-invitado.php?id=<?php echo $invitado['invitado_id'];?>" class="btn bg-orange btn-flat margin" style="border-radius: 5px;"><i class="fa fa-pencil"></i></a>
                      <a href="#" data-id="<?php echo $invitado['invitado_id'];?>" data-tipo="invitado" class="btn bg-red btn-flat margin borrar-registro" style="border-radius: 5px;"><i class="fa fa-trash"></i></a>
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