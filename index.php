<?php 
session_start();
require_once("vendor/autoload.php");

// require_once("vendor/hcodebr/php-classes/src/DB/Sql.php");

use \Slim\Slim;

$app = new \Slim\Slim();

$app->config('debug', true);

require_once("functions.php");
require_once("site.php");
require_once("admin.php");
require_once("admin-users.php");
require_once("admin-categories.php");
require_once("admin-products.php");
require_once("admin-orders.php");

$app->run();

function dd($v){
    var_dump($v);
    die;
}

?>