<?php include_once 'funciones/funciones.php';

if(isset($_POST['agregar-admin'])) {
  $usuario = $_POST['usuario'];
  $nombre = $_POST['nombre'];
  $password = $_POST['password'];

  $opciones = array(
    'cost' => 12
  );
  $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);
}











?>