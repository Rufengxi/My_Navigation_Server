<?php

/**
 * ���ݿ���������
 */
$config = array(
	'mysql'	=>	array(
		// Ĭ�����ݿ�
		'default'	=> array(
			// �������ݿ�
			'product'	=>	array(
				'master'	=> array(
					'host' 		=>	'127.0.0.1',
					'username' 	=>	'root',
					'password'	=>	'root',
					'database'	=>	'cob',
					'port'		=>	3306,
					'charset'	=>	'UTF-8'
				),
				'slave'		=>	array(
					'host' 		=>	'127.0.0.1',
					'username' 	=>	'root',
					'password'	=>	'root',
					'database'	=>	'cob',
					'port'		=>	3306,
					'charset'	=>	'UTF-8'
				)
			),
			
			// �������ݿ�
			'test'	=>	array(),
			// �������ݿ�
			'dev'	=>	array()
		)
	),
	'mongo'	=>	array(
		// Ĭ�����ݿ�
		'default'	=> array(
			// �������ݿ�
			'product'	=>	array(
				'master'	=> array(
					'host' 		=>	'127.0.0.1',
					'username' 	=>	'navigation',
					'password'	=>	'123456',
					'database'	=>	'navigation',
					'port'		=>	27017,
					'charset'	=>	'UTF-8'
				),
				'slave'		=>	array(
					'host' 		=>	'127.0.0.1',
					'username' 	=>	'navigation',
					'password'	=>	'123456',
					'database'	=>	'navigation',
					'port'		=>	27017,
					'charset'	=>	'UTF-8'
				)
			),
			
			// �������ݿ�
			'test'	=>	array(),
			// �������ݿ�
			'dev'	=>	array()
		)
	),
		
	'memcache'	=>	array(),
	'radis'	=>	array()
	
);


class DBConfig {
	
	public static $config = array();
	
	public static function set($config)
	{
		self::$config = $config;
	}
}

DBConfig::set($config);

