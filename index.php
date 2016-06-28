<?php
require_once "vendor/autoload.php";

use \BorYar\Factories\ControllerFactory;
use App\Controllers\PageController;

define('APP_ROOT', __DIR__);

$controller_factory = new ControllerFactory();
$controller = $controller_factory->getController(PageController::class);
$controller->showPage(1);