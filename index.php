<?php
define('BASE_ROOT', 'http://localhost/magebittest');
define('VIEW_ROOT', __DIR__ . '/views');
define('HOME_ROOT', '/magebittest');

session_start();

require_once('./system/router.php');
require_once('./system/Database.php');

include_once('./models/user.php');
include_once('./models/attribute.php');

$router = new Router();

$router->run();
