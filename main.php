<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array (
    
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..', 
    'name' => 'My Web Application', 
    'sourceLanguage'=>'zh_cn',
    // preloading 'log' component
    'preload' => array (
        'log' 
    ), 
    
    // autoloading model and component classes
    'import' => array (
        
        'application.models.*', 
        'application.components.*', 
        'application.modules.srbac.controllers.SBaseController' 
    ), 
    
    'modules' => array (
        // uncomment the following to enable the Gii tool
        
        'gii' => array (
            
            'class' => 'system.gii.GiiModule', 
            'password' => '123456', 
            // If removed, Gii defaults to localhost only. Edit carefully to
            // taste.
            'ipFilters' => array (
                '127.0.0.1', '::1' 
            ) 
        ), 
        'srbac' => array (
            
            'userclass' => 'RbacUser',  // default: User
            'userid' => 'UserId',  // default: userid
            'username' => 'Name',  // default:username
            'delimeter' => '@',  // default:-
            'debug' => true,  // default :false
            'pageSize' => 10,  // default : 15
            'superUser' => 'Authority',  // default: Authorizer
            'css' => 'srbac.css',  // default: srbac.css
            'layout' => 'application.views.layouts.main',  // default:
                                                                // application.views.layouts.main,
                                                                // must be an
                                                                // existing
                                                                // alias
            'notAuthorizedView' => 'srbac.views.authitem.unauthorized',  // default:
                                                                       // //srbac.views.authitem.unauthorized,
                                                                       // must
                                                                       // be an
                                                                       // existing
                                                                       // alias
            'alwaysAllowed' => array (
            // default: array()
            'SiteLogin', 'SiteLogout', 'SiteIndex', 'SiteAdmin', 'SiteError', 'SiteContact' 
            ), 
            'userActions' => array (
                'Show', 'View', 'List' 
            ),  // default: array()
            'listBoxNumberOfLines' => 15,  // default : 10
            'imagesPath' => 'srbac.images',  // default: srbac.images
            'imagesPack' => 'noia',  // default: noia
            'iconText' => true,  // default : false
            'header' => 'srbac.views.authitem.header',  // default :
                                                     // srbac.views.authitem.header,//must
                                                     // be an existing alias
            'footer' => 'srbac.views.authitem.footer',  // default:
                                                     // srbac.views.authitem.footer,
                                                     // //must be an existing
                                                     // alias
            'showHeader' => true,  // default: false 'showFooter'=>true, //
                                // default: false
            'alwaysAllowedPath' => 'srbac.components'  // default: srbac.components //
                                                 // must be an existing alias
            ),
            
        
        /* 'srbac' => array(
                'userclass'=>'User', //可选,默认是 User
                'userid'=>'id', //可选,默认是 userid
                'username'=>'username', //可选，默认是 username
                'debug'=>true, //可选,默认是 false
                'pageSize'=>10, //可选，默认是 15
                'superUser' =>'Authority', //可选，默认是 Authorizer
                'css'=>'srbac.css', //可选，默认是 srbac.css
                'layout'=>
                'application.views.layouts.main', //可选,默认是
                // application.views.layouts.main, 必须是一个存在的路径别名
                'notAuthorizedView'=>
                'srbac.views.authitem.unauthorized', // 可选,默认是unauthorized.php
                //srbac.views.authitem.unauthorized, 必须是一个存在的路径别名
                'alwaysAllowed'=>array(    //可选,默认是 gui
                        'SiteLogin','SiteLogout','SiteIndex','SiteAdmin',
                        'SiteError', 'SiteContact'),
                'userActions'=>array(//可选,默认是空数组
                        'Show','View','List'),
                'listBoxNumberOfLines' => 15, //可选,默认是10
                'imagesPath' => 'srbac.images', //可选,默认是 srbac.images
                'imagesPack'=>'noia', //可选,默认是 noia
                'iconText'=>true, //可选,默认是 false
                'header'=>'srbac.views.authitem.header', //可选,默认是
                // srbac.views.authitem.header, 必须是一个存在的路径别名
                'footer'=>'srbac.views.authitem.footer', //可选,默认是
                // srbac.views.authitem.footer, 必须是一个存在的路径别名
                'showHeader'=>true, //可选,默认是false
                'showFooter'=>true, //可选,默认是false
                //'alwaysAllowedPath'=>'srbac.components', //可选,默认是 srbac.components
                // 必须是一个存在的路径别名
        ), */
	         
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
            'itemTable' => 'items', 
            'assignmentTable' => 'assignments', 
            'itemChildTable' => 'itemchildren' 
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
                    'class' => 'CWebLogRoute' 
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