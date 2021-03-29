<?php
include_once 'funciones/funciones.php'; 
if(isset($_POST['boletos'])) {$boletos_adquiridos= $_POST['boletos'];}
if(isset($_POST['icono'])) {$icono = $_POST['icono'];} 
if(isset($_POST['id_registro'])) {$id_registro = $_POST['id_registro'];}
if(isset($_POST['id_registro'])) {$id_registro = $_POST['id_registro'];} 
if(isset($_POST['id_registro'])) {$id_registro = $_POST['id_registro'];} 
if(isset($_POST['id_registro'])) {$id_registro = $_POST['id_registro'];} 
if(isset($_POST['id_registro'])) {$id_registro = $_POST['id_registro'];} 
if(isset($_POST['id_registro'])) {$id_registro = $_POST['id_registro'];} 
if(isset($_POST['id_registro'])) {$id_registro = $_POST['id_registro'];} 
if(isset($_POST['id_registro'])) {$id_registro = $_POST['id_registro'];} 
if(isset($_POST['id_registro'])) {$id_registro = $_POST['id_registro'];} 
if(isset($_POST['id_registro'])) {$id_registro = $_POST['id_registro'];} 
if(isset($_POST['id_registro'])) {$id_registro = $_POST['id_registro'];} 

$pedido = productos_json($boletos_adquiridos);

if($_POST['registro'] == 'nuevo') {
  $respuesta = array(
    'boletos' => $pedido
  );
  die(json_encode($respuesta));
  try {
  $stmt = $conn->prepare('INSERT INTO categoria_evento (cat_evento, icono) VALUES (?, ?)');
  $stmt->bind_param('ss', $nombre_categoria, $icono);
  $stmt->execute();
  $id_insertado = $stmt->insert_id;
  if ($stmt->affected_rows) {
      $respuesta = array(
        'respuesta' => 'exito',
        'id_insertado' => $id_insertado
      );
  } else {
    $respuesta = array(
      'respuesta' => 'error'
    );
  }
  $stmt->close();
  $conn->close();
  } catch (Exception $e) {
  $respuesta = array(
    'respuesta' => $e->getMessage()
    );
  }
  die(json_encode($respuesta));
}

if($_POST['registro'] == 'actualizar') {
  try {  
    $stmt = $conn->prepare('UPDATE categoria_evento SET cat_evento = ?, icono = ? WHERE id_categoria = ? ');
    $stmt->bind_param("ssi", $nombre_categoria, $icono, $id_registro);
    $stmt->execute();
    if ($stmt->affected_rows) {
      $respuesta = array(
        'respuesta' => 'exito',
        'id_actualizado' => $id_registro
      );
    } else {
      $respuesta = array(
        'respuesta' => 'error'
      );
    }
    $stmt->close();
    $conn->close();
  } catch (Exception $e) {
    $respuesta = array(
      'respuesta' => $e->getMessage()
    );
  }
  die(json_encode($respuesta));

}

if($_POST['registro'] == 'eliminar') {
  $id_borrar = $_POST['id'];
  try {
    $stmt = $conn->prepare('DELETE FROM categoria_evento  WHERE id_categoria = ? ');
    $stmt->bind_param('i', $id_borrar);
    $stmt->execute();
    if ($stmt->affected_rows) {
      $respuesta = array(
        'respuesta' => 'exito',
        'id_eliminado' => $id_borrar
      );
    } else {
      $respuesta = array(
        'respuesta' => 'error'
      );
    }
  } catch (Exception $e) {
    $respuesta = array(
      'respuesta' => $e->getMessage()
    );
  }
  die(json_encode($respuesta));
}
?>
