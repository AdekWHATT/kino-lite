<?php
require_once __DIR__ . '/vendor/autoload.php';
//Константа путь до папки сайта
const APP_PATH = __DIR__;

use App\Kernel\App;

$app = new App();

$app->run();