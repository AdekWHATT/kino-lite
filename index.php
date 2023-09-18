<?php
require_once __DIR__ . '/vendor/autoload.php';
//Константа путь до папки сайта
define('APP_PATH', __DIR__);

use App\App;

$app = new App();

$app->run();