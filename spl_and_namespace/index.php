<?php
/*
include 'namespace.php';

$init = new longdo\longdoclass;
$init->longdox();

exit;
 */

if (!defined('WWW_ROOT')) {
    define('WWW_ROOT', dirname(__FILE__));
}

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

class f4 {
    function __construct() {
        // show class in use
        echo __CLASS__ . '<br>';
    }
}

function myClass($class) {
    $path = str_replace('\\', DS, $class . '.php');
    if (file_exists($path)) {
        // if have a file this function will include it
        include_once $path;
    } else {
        echo $path . '<BR>';
    }
}
// auto load files when new class
spl_autoload_register('myClass');

/** use namespace [dir/filename] */
// use Classes\Database\Database;
use Classes\file2 as f2;
use Classes\file3 as f3;
use Classes\Research as r;

/** call class with new command */
// $init = new Database;
new r;
$init = new f2;
$init->print2();
new f3;
new f4;
