<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-21 02:28:57 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\FreeAds\system\classes\Kohana\Cookie.php:67
2013-10-21 02:28:57 --- DEBUG: #0 C:\wamp\www\FreeAds\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\FreeAds\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\wamp\www\FreeAds\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\FreeAds\system\classes\Kohana\Cookie.php:67
2013-10-21 14:47:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\users.php [ 47 ] in file:line
2013-10-21 14:47:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 14:47:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\users.php [ 47 ] in file:line
2013-10-21 14:47:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 14:48:07 --- CRITICAL: ErrorException [ 1 ]: Class 'base' not found ~ APPPATH\views\template.php [ 15 ] in file:line
2013-10-21 14:48:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 15:14:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\users.php [ 43 ] in file:line
2013-10-21 15:14:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 18:23:40 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\wamp\www\FreeAds\modules\database\classes\Kohana\Database\MySQL.php:75
2013-10-21 18:23:40 --- DEBUG: #0 C:\wamp\www\FreeAds\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\wamp\www\FreeAds\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\wamp\www\FreeAds\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\wamp\www\FreeAds\application\classes\Controller\users.php(19): Kohana_ORM::factory('user')
#9 C:\wamp\www\FreeAds\system\classes\Kohana\Controller.php(84): Controller_Users->action_register()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\FreeAds\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\FreeAds\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\FreeAds\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\FreeAds\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\FreeAds\modules\database\classes\Kohana\Database\MySQL.php:75
2013-10-21 18:37:22 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'freeads' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\wamp\www\FreeAds\modules\database\classes\Kohana\Database\MySQL.php:75
2013-10-21 18:37:22 --- DEBUG: #0 C:\wamp\www\FreeAds\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('freeads')
#1 C:\wamp\www\FreeAds\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\wamp\www\FreeAds\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\wamp\www\FreeAds\application\classes\Controller\users.php(19): Kohana_ORM::factory('user')
#9 C:\wamp\www\FreeAds\system\classes\Kohana\Controller.php(84): Controller_Users->action_register()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\FreeAds\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#12 C:\wamp\www\FreeAds\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\FreeAds\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\FreeAds\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\FreeAds\modules\database\classes\Kohana\Database\MySQL.php:75
2013-10-21 18:39:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in file:line
2013-10-21 18:39:38 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('pppppppppp')
#1 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(1210): call_user_func_array(Array, Array)
#2 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(732): Kohana_ORM->run_filter('password', 'pppppppppp')
#3 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('password', 'pppppppppp')
#4 C:\wamp\www\FreeAds\modules\orm\classes\Kohana\ORM.php(804): Kohana_ORM->__set('password', 'pppppppppp')
#5 C:\wamp\www\FreeAds\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#6 C:\wamp\www\FreeAds\application\classes\Controller\users.php(23): Model_Auth_User->create_user(Array, Array)
#7 C:\wamp\www\FreeAds\system\classes\Kohana\Controller.php(84): Controller_Users->action_register()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\FreeAds\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#10 C:\wamp\www\FreeAds\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\FreeAds\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\FreeAds\index.php(118): Kohana_Request->execute()
#13 {main} in file:line