<?php 

// Kickstart the framework
$f3=require('../lib/base.php');

define('FFPATH', dirname(__DIR__).'/');
define('APPPATH', FFPATH . 'app/');

// store view location
$f3->set('UI',FFPATH.'ui/');

// store path
$f3->set('APPPATH',APPPATH);
$f3->set('FFPATH',FFPATH);

// store debug mode
$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config( APPPATH . 'config/config.ini');
$f3->set('AUTOLOAD', $f3->get('AUTOLOAD_CLASS'));

$f3->config( APPPATH . 'config/routes.ini');
$f3->config( APPPATH . 'config/maps.ini');

// here we launch
$f3->run();


 ?>