<?php
//mostarmos todos los errores
ini_set('memory_limit', -1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//mandamos llamar composer
require_once '../app/vendor/autoload.php';
//mandamos llamar core de la aplicacion
require_once '../app/core/app.php';

?>