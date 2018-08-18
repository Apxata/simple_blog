<?php 

function root_path($script_path) {
    // добавляет лидирующий / если нет
    // if($script_path[0] != '/') {
    //     $script_path = "/" . $script_path;
    // }
    return WWW_ROOT . $script_path;
}

function u($string="") {
    return urlencode($string);
  }
  
  function raw_u($string="") {
    return rawurlencode($string);
  }
  
  function h($string="") {
    return htmlspecialchars($string);
  }