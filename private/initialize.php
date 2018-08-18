<?php 

    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');

    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);
    
    //function
    require_once('functions.php');
    require_once('db_cfg.php');
    require_once('database_functions.php');
    require_once('Parsedown.php');
    require_once('singletone.db.php');
    require_once('validation_functions.php');

    // CLASSES
    require_once('class/article.class.php');
    require_once('class/smarty/smarty.class.php');


    