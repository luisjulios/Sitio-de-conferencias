<?php 
require 'paypal/autoload.php';
define('URL_SITIO', 'http://localhost/GDLWEBCAMP/');
$apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    //ClienteID
    'AQ1ghG10-W6x5TomUDfgMOCvG_3wEAW-2naiok37kM1R5xoK4CzREVKkR31exQ2hi0KqpMtCb-Ge7_uI',
    //Secret
    'EORBmQfba3jk4B2f7lONNlKnLCC1PJw4qSbovhucEkyxmx-vtRqaNnPVdt0iUhlHuvmcIN7OXaCMQ9Jo'
    )
  );
?>