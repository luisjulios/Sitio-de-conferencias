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
        Categorías
        <small>Puedes ver/editar/eliminar las categorías</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-8">
          <div class="box" style="border-radius: 15px;">
            <div class="box-header">
              <h3 class="box-title">Lista de Categorías de Eventos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Categorías  <span><i class="fa fa-sort"></i></span></th>
                  <th>Icono  <span><i class="fa fa-sort"></i></span></th>
                  <th>Acciones  <span><i class="fa fa-sort"></i></span></th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  try {
                    $sql = "SELECT * FROM categoria_evento";
                    $resultado = $conn->query($sql);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                    echo $error;
                  }
                  while($categoria_evento = $resultado->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $categoria_evento['cat_evento']; ?></td>
                    <td><i class="fa <?php echo $categoria_evento['icono']; ?>" style="color: #f39c12; font-size: 20px;"></i></td>
                    <td>
                      <a href="editar-categoria.php?id=<?php echo $categoria_evento['id_categoria'];?>" class="btn bg-orange btn-flat margin" style="border-radius: 5px;"><i class="fa fa-pencil"></i></a>
                      <a href="#" data-id="<?php echo $categoria_evento['id_categoria'];?>" data-tipo="categoria" class="btn bg-red btn-flat margin borrar-registro" style="border-radius: 5px;"><i class="fa fa-trash"></i></a>
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