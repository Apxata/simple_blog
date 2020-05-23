<?php
//
//$q = $_GET['q'];
//
//// Redirect c index.php на /
//if ($_SERVER['REQUEST_URI'] == '/index.php' ) {
//    header("HTTP/1.1 301 Moved Permanently");
//    header("Location: /");
//    die();
//}
//
//class Route
//{
//    public function render()
//    {
//
//        $url = substr($_SERVER['REQUEST_URI'], 1);
//        $url = rtrim($url, '/');
//        $url = explode('/', $url);
//
//        if (!empty($url[0])) {
//            $fileController = $url[0] . 'Controller' . '.php';
//        } else {
//            $url[0] = 'main';
//            $fileController = $url[0] . 'Controller' . '.php';
//        }
//
//        $controller = $url[0] . 'Controller';
//        if (is_null($url[1])) {
//            $action = 'main';
//        } else {
//            $action = $url[1];
//        }
//        $access = new Access();
//        if ($access->checkAccess() or $url[0] == "login") {
//            if (file_exists(CONTROLLER . "/$fileController")) {
//                require_once CONTROLLER . "/$fileController";
//                if (method_exists($controller, $action . 'Action')) {
//                    $controller = new $controller($action);
//                } else {
//                    return header("location:/error/error404");
//                }
//            } else {
//                return header("location:/error/error404");
//            }
//        } else {
//            return header("location:/login");
//        }
//
//
//    }
//
//}

//
//$url_arr = explode('/', $q);
//foreach($url_arr as $k => $v ) {
//    if (empty($v) ) unset($url_arr[$k]);
//}
//
//if ( !empty($url_arr) ) {
//    // Ищем page1...999 и удаляем их, присваивая $_GET[curpage]
//    foreach( $url_arr as $k => $url ) {
//        if ( preg_match( '/page(\d{1,})/', $url, $page_id ) ) {
//            $_GET['page'] = $page_id[1];
//            unset($url_arr[$k]);
//        }
//    }
//
//    foreach( $url_arr as $k => $url ) {
//        if ( preg_match( '/start(\d{1,})/', $url, $page_id ) ) {
//            $_GET['start'] = $page_id[1];
//            unset($url_arr[$k]);
//        }
//    }
//
//    // Ищем _f_*--* и удаляем их, присваивая $_GET[_f][k] = v
//    foreach( $url_arr as $k => $url ) {
//        if ( preg_match( '/_f_(.*?)--(\d{1,})/', $url, $arr ) ) {
//            $_GET['_f'][$arr[1]] = $arr[2];
//            unset($url_arr[$k]);
//        }
//    }
//
//    $url_arr = array_values($url_arr);
//    $cnt = count($url_arr);
//    if ($cnt > 1 ) {
//        $l1_url = $url_arr[0];
//    } else {
//        $l1_url = '';
//    }
//    $full_url = mysql_real_escape_string(implode('/', $url_arr));
//
//    // TODO: Эти значения можно хранить в массиве для ускорения работы
//
//    $db2 = $core_db->q('SELECT `obj_name`, `attr_templ` FROM `_sys_datatypes` WHERE `attr_type` = "full_url"');
//    while($db2->nr()) {
//        $obj_name = $db2->f('obj_name');
//        list( $url_prefix, $url_cat ) = explode('|', $db2->f('attr_templ'));
//        $tmpobj = new cobject( $obj_name );
//        $db3 = $tmpobj->getDB()->q( $tmpobj->getSelect( ' AND `url` = "' . $full_url . '" ' )) ;
//        //$db3 = $core_db->q('SELECT `id` FROM `' . $obj_name . '` WHERE `url` = "' . $full_url . '" AND !`_sys_deleted`');
//        if ($db3->nr() ) {
//            $_GET['cat'] = $url_cat;
//            $_GET['id'] = $db3->f('id');
//            break;
//        }
//    }
//
//    if ( !$_GET['cat']  ) {
//        // Если не находим, то парсим как /cat/key/val/key/val
//        $_GET['cat'] = $url_arr[0];
//        for($i=1; $i<=count($url_arr); $i+=2 ) {
//            $_GET[$url_arr[$i]] = $url_arr[$i+1];
//        }
//        if (count($url_arr) > 1 ) {
//            define('NOINDEX', 1);
//        }
//    }
//
//} else {
//    if (!$_GET['cat']) {
//        $_GET['cat'] = 'index';
//    }
//}
//if ( !$_GET['cat'] ) {
//    header("HTTP/1.1 404 Not Found");
//    $_GET['cat'] = '404';
//}
//
//?>

