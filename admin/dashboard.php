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
        Dashboard
        <small>Información sobre los eventos</small>
      </h1>
    </section>
    <section class="content">
      <div class="row">
      <div class="col-lg-6 col-xs-12">
      <div class="box-body chart-responsive">
              <div class="chart" id="grafica-registros" style="height: 300px;"></div>
            </div>
            </div>
          </div>
      <h2 class="page-header">Resumen de registros</h2>

      <div class="row">
        <div class="col-lg-2 col-xs-6">
              <?php 
                  $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados";
                  $resultado = $conn->query($sql);
                  $registrados = $resultado->fetch_assoc();
              ?>
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?></h3>

                <p>Total usuarios registrados</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-plus"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                Más Información <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-2 col-xs-6">
              <?php 
                  $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE pagado = 1";
                  $resultado = $conn->query($sql);
                  $registrados = $resultado->fetch_assoc();
              ?>
            <div class="small-box bg-blue">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?></h3>

                <p>Total pagados</p>
              </div>
              <div class="icon">
                <i class="fa fa-dollar"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                Más Información <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-2 col-xs-6">
              <?php 
                  $sql = "SELECT COUNT(ID_Registrado) AS registros FROM registrados WHERE pagado = 0";
                  $resultado = $conn->query($sql);
                  $registrados = $resultado->fetch_assoc();
              ?>
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $registrados['registros']; ?></h3>

                <p>Total no pagados</p>
              </div>
              <div class="icon">
              <i class="fa fa-user-times"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                Más Información <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-2 col-xs-6">
              <?php 
                  $sql = "SELECT SUM(total_pagado) AS ganancias FROM registrados WHERE pagado = 1";
                  $resultado = $conn->query($sql);
                  $registrados = $resultado->fetch_assoc();
              ?>
            <div class="small-box bg-green">
              <div class="inner">
                <h3>$<?php echo (float) $registrados['ganancias']; ?></h3>

                <p>Total recaudado</p>
              </div>
              <div class="icon">
              <i class="fa fa-money"></i>
              </div>
              <a href="lista-registrados.php" class="small-box-footer">
                Más Información <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <h2 class="page-header">Regalos</h2>
        <div class="row">
          <div class="col-lg-2 col-xs-6">
                <?php 
                    $sql = "SELECT COUNT(total_pagado) as pulseras FROM registrados WHERE regalo = 1 && pagado = 1";
                    $resultado = $conn->query($sql);
                    $regalo = $resultado->fetch_assoc();
                ?>
              <div class="small-box bg-teal">
                <div class="inner">
                  <h3><?php echo (float) $regalo['pulseras']; ?></h3>

                  <p>Pulseras</p>
                </div>
                <div class="icon">
                <i class="fa fa-gift"></i>
                </div>
                <a href="lista-registrados.php" class="small-box-footer">
                  Más Información <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
              
            </div>
            <div class="col-lg-2 col-xs-6">
                <?php 
                    $sql = "SELECT COUNT(total_pagado) as etiquetas FROM registrados WHERE regalo = 2 && pagado = 1";
                    $resultado = $conn->query($sql);
                    $regalo = $resultado->fetch_assoc();
                ?>
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3><?php echo (float) $regalo['etiquetas']; ?></h3>

                  <p>Etiquetas</p>
                </div>
                <div class="icon">
                <i class="fa fa-gift"></i>
                </div>
                <a href="lista-registrados.php" class="small-box-footer">
                  Más Información <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
              
            </div>
            <div class="col-lg-2 col-xs-6">
                <?php 
                    $sql = "SELECT COUNT(total_pagado) as plumas FROM registrados WHERE regalo = 3 && pagado = 1";
                    $resultado = $conn->query($sql);
                    $regalo = $resultado->fetch_assoc();
                ?>
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?php echo (float) $regalo['plumas']; ?></h3>

                  <p>Plumas</p>
                </div>
                <div class="icon">
                <i class="fa fa-gift"></i>
                </div>
                <a href="lista-registrados.php" class="small-box-footer">
                  Más Información <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
              
            </div>
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include_once 'templates/footer.php'; ?>