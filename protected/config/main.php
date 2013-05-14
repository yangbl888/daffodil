<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array (
    
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..', 
    'name' => 'My Web Application', 
    'sourceLanguage'=>'zh_cn',
    'language'=>'zh_cn',  // 语言 中文

    // preloading 'log' component
    
	//'preload' => array ('log'), 
    
    // autoloading model and component classes
    'import' => array (
        
        'application.models.*', 
        'application.components.*', 
    ), 
    
    'modules' => array (
        // uncomment the following to enable the Gii tool
        'admin',
        'gii' => array (            
            'class' => 'system.gii.GiiModule', 
            'password' => 'admin', 
            // If removed, Gii defaults to localhost only. Edit carefully to
            // taste.
            'ipFilters' => array (
                '127.0.0.1', '::1' 
            ), 
			'generatorPaths'=>array(
				'ext.dwz.gii', //可以继续配置其他路径
            ),
        ), 
    ), 
    
    // application components
    'components' => array (
        
        'user' => array (
        // enable cookie-based authentication
        'allowAutoLogin' => true 
        ), 
        'authManager' => array (            
            'class' => 'srbac.components.SDbAuthManager', 
            'connectionID' => 'db', 
            'itemTable' => 'authitem', 
            'assignmentTable' => 'authassignment', 
            'itemChildTable' => 'authitemchild' 
        ), 
        
        // uncomment the following to enable URLs in path-format
        /*
         * 'urlManager'=>array( 'urlFormat'=>'path', 'rules'=>array(
         * '<controller:\w+>/<id:\d+>'=>'<controller>/view',
         * '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
         * '<controller:\w+>/<action:\w+>'=>'<controller>/<action>', ), ), /*
         * 'db'=>array( 'connectionString' =>
         * 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db', ),
         */
        // uncomment the following to use a MySQL database
        
        'db' => array (            
 		    'connectionString' => 'mysql:host=localhost;dbname=daffodil',
            'emulatePrepare' => true, 
            'username' => 'root', 
            'password' => '', 
            'charset' => 'utf8', 
            'tablePrefix' => '' 
        ), 
        
        'errorHandler' => array (
        // use 'site/error' action to display errors
        'errorAction' => 'site/error' 
        ), 
        'log' => array (
            
            'class' => 'CLogRouter', 
            'routes' => array (
                array (
                'class' => 'CFileLogRoute', 'levels' => 'error, warning' 
            ), 
                // uncomment the following to show log messages on web pages
                /*
                 * array( 'class'=>'CWebLogRoute', ),
                 */
                array (
                    'class' => 'CWebLogRoute',
					'levels'=>'trace',     //级别为trace
                    'categories'=>'system.db.*' //只显示关于数据库信息,包括数据库连接,数据库执行语句
                )
                 
            ) 
        ) 
    ), 
    
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array (
    // this is used in contact page
    'adminEmail' => 'webmaster@example.com' 
    ) 
);