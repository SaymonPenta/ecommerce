<?php 

require_once("vendor/autoload.php");

require_once("vendor/hcodebr/php-classes/src/DB/Sql.php");

use\Slim\Slim;
use Hcode\Page;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Page();
	
	$page->setTpl("index");

});

$app->run();

 ?>