<?php 

require_once("vendor/autoload.php");

require_once("vendor/hcodebr/php-classes/src/DB/Sql.php");

use\Slim\Slim;
use Hcode\Page;
use Hcode\PageAdmin;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Page();
	
	$page->setTpl("index");

});

$app->get('/admin', function() {

	$page = new PageAdmin();
	
	$page->setTpl("index");

});

$app->run();

 ?>