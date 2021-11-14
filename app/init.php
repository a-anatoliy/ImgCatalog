<?php

mb_internal_encoding("UTF-8");
date_default_timezone_set('CET');

error_reporting(E_ALL);
//    ini_set('display_errors', 0);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('DEBUG',true);

# protocal type http or https
define('PROTOCAL','http');

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')
     { define("SEPARATOR", "\\");}
else { define("SEPARATOR", "/"); }

# web root and asset paths
// define('ROOT'  , $_SERVER['DOCUMENT_ROOT'] .SEPARATOR. 'public'.SEPARATOR);
define('ROOT'  , SEPARATOR.'public'.SEPARATOR);
define('ASSETS', ROOT . SEPARATOR . 'assets'.SEPARATOR);


# OS level directory path
define("ROOT_DIR" ,  str_replace(SEPARATOR.'app' , '', __DIR__) );

# config & db config
define('CONFIG'     , join(SEPARATOR, array(ROOT_DIR,'app','Config','core.php')));
define('DB_CONFIG'  , join(SEPARATOR, array(ROOT_DIR,'app','Config','database.php')));

$GLOBALS['cfg'] = array_merge(
    require_once CONFIG,    // get main configuration
    require_once DB_CONFIG  // get the database configuration
);

// define("THEME"      , 'default' );
// define("DIR_TMPL"   , ROOT_DIR.'/themes/'.THEME.'/tmpl/' );
// define("MAIN_LAYOUT", "main" );
// define('_ATHREERUN' , 1 );
//include ROOT_DIR      .'/lib/SxGeo.php';
// require_once ROOT_DIR . '/lib/Utils.php';

if ( !isset( $_SESSION["origURL"] ) ) {

    $_SESSION["origURL"] =
        isset($_SERVER['HTTP_REFERER'])
            ? urldecode($_SERVER['HTTP_REFERER'])
            : 'empty_REFER';
}


set_include_path(
    ROOT_DIR.SEPARATOR.'app'.SEPARATOR.'core'
    // .PATH_SEPARATOR.'controllers'
    // .PATH_SEPARATOR.'objects'
);
spl_autoload_extensions(".php");
spl_autoload_register();

// require "../app/core/config.php";
require "../app/core/functions.php";
// require "../app/core/database.php";
// require "../app/core/controller.php";
// require "../app/core/app.php";