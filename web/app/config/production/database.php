<?php

return array(

	'connections' => array(

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => $_ENV['OPENSHIFT_MYSQL_DB_HOST'],
			'database'  => 'blog_local',
			'username'  => $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'],
			'password'  => $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'],
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

	)

);
