<?php include_once 'includes/templates/header.php';?>
      <div class="formulario">
            <h2>Información de compra</h2>
            <?php
            $resultado = $_GET['exito'];
            if($resultado == "true"){
              echo "El pago se realizó exitosamente. <br/>";
              $paymentId = $_GET['paymentId'];
              echo "El ID es {$paymentId}.";
            } else {
              echo "Se canceló la compra correctamente. <br/>";
              echo "No se realizó ningún cobro.";
            }
            ?>
        </div>
<?php include_once 'includes/templates/footer.php';?>
