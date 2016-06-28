<?php
require_once "vendor/autoload.php";

use \App\Controllers\NewsController;

define('APP_ROOT', __DIR__);

$controller = new NewsController;
$controller->showArticle(1);