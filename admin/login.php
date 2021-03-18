<?php 
session_start();
$cerrar_sesion = isset($_GET['cerrar_sesion']);
if ($cerrar_sesion) {
  session_destroy();
}
include_once 'funciones/funciones.php'; 
include_once 'templates/header.php'; 
?>
<body class="hold-transition login-page" style="background-image: url(https://image.freepik.com/free-vector/wide-abstract-white-grey-background-3d-paper-pattern-with-stars-geometric_108964-1551.jpg)">

<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>GDL</b>WebCamp</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicio de administrador</p>
    <form name="login-admin-form" id="login-admin" method="post" action="insertar-admin.php">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" required placeholder="Usuario" autocomplete="username">
        <span class=" form-control-feedback"><i class="fa fa-user"></i></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" required placeholder="Password" autocomplete="current-password">
        <span class=" form-control-feedback"><i class="fa fa-key"></i></span>
      </div>
      <div class="row">
        <div class="col-xs12">
          <input type="hidden" name="login-admin" value="1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>

<?php include_once 'templates/footer.php'; ?>