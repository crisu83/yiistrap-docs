<?php
// application configuration
return array(
	// application base path
	'basePath' => dirname(__DIR__),
	// application name
	'name' => 'Yiistrap',
	// application language
	'language' => 'en',
	// components to preload
	'preload' => array('log'),
	// path aliases
	'aliases' => array(
        'root' => dirname(dirname(__DIR__)),
		'app' => 'root.app',
		'vendor' => 'root.vendor',
		'bootstrap' => 'vendor.crisu83.yiistrap',
	),
	// paths to import
	'import' => array(
		'app.models.*',
		'app.components.*',
        'bootstrap.form.*',
        'bootstrap.helpers.*',
	),
	// application components
	'components' => array(
		'bootstrap'	=> array(
			'class' => 'bootstrap.components.TbApi',
            'forceCopyAssets' => true,
		),
		'errorHandler' => array(
			'errorAction' => 'site/error',
		),
		'log' => array(
			'class'  => 'CLogRouter',
			'routes' => array(
				array(
					'class'  => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
			),
		),
		'urlManager' => array(
			'urlFormat' => 'path',
			'showScriptName' => false,
			'caseSensitive' => false,
			'rules' => array(
				// default rules
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),
		'user' => array(
			'allowAutoLogin' => true,
		),
	),
	// application parameters
	'params' => array(
        'pageTitle' => 'Yiistrap, Twitter Bootstrap for Yii',
    ),
);