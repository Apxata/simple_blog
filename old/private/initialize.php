<?php
    define ("ROOT", dirname(__DIR__));
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');
    define("CONTROLLER", ROOT . '/controller');


//    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
//    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", '');


    //function
    require_once('functions.php');
    require_once('db_cfg.php');
    require_once('Parsedown.php');
    require_once('singletone.db.php');
    require_once('validation_functions.php');
    require_once('status_error_functions.php');
    require_once('rewrite.php');
    require_once('test.php');

    // CLASSES
    require_once('class/article.class.php');
    require_once('class/smarty/Smarty.class.php');
    require_once('class/comment.class.php');
    require_once('class/user.class.php');
    require_once('class/pagination.class.php');
    require_once('class/session.class.php');
    
    $session = new Session;


     


    