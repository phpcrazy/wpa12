<?php

define('DD', __DIR__ . '/../'); 
require DD . "/vendor/autoload.php";

use Wpa12\Application;
$app = new Application();
$app->databaseLoader();
$app->run();
unset($app);
?>
