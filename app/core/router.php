<?php

$app->get('/validate/{rfcEmisor}/{rfcReceptor}/{uuid}/{total}', \App\Controllers\Api\ValidacionCfdiController::class.':line');

?>