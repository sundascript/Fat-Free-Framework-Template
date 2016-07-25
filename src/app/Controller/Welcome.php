<?php 

/**
* welcome controller
*/
class Welcome extends Shared
{
	
	function __construct()
	{
		parent::__construct();
	}

	// use non static method style:
	// Welcome->index
	function index(){


		$classes=array(
			'Base'=>
				array(
					'hash',
					'json',
					'session'
				),
			'Cache'=>
				array(
					'apc',
					'memcache',
					'wincache',
					'xcache'
				),
			'DB\SQL'=>
				array(
					'pdo',
					'pdo_dblib',
					'pdo_mssql',
					'pdo_mysql',
					'pdo_odbc',
					'pdo_pgsql',
					'pdo_sqlite',
					'pdo_sqlsrv'
				),
			'DB\Jig'=>
				array('json'),
			'DB\Mongo'=>
				array(
					'json',
					'mongo'
				),
			'Auth'=>
				array('ldap','pdo'),
			'Bcrypt'=>
				array(
					'mcrypt',
					'openssl'
				),
			'Image'=>
				array('gd'),
			'Lexicon'=>
				array('iconv'),
			'SMTP'=>
				array('openssl'),
			'Web'=>
				array('curl','openssl','simplexml'),
			'Web\Geo'=>
				array('geoip','json'),
			'Web\OpenID'=>
				array('json','simplexml'),
			'Web\Pingback'=>
				array('dom','xmlrpc')
		);
		$this->f3->set('classes',$classes);
		$this->f3->set('content','welcome.htm');
		echo View::instance()->render('layout.htm');
		// echo view;

	}

	// use static method style 
	// Welcome::userref
	static public function userref(){


		echo "<pre>";
		print_r(base::instance());
		echo "</pre>";
		

		base::instance()->set('content','userref.htm');
		// echo View::instance()->render('layout.htm');
		
	}

}




 ?>