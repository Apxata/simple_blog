<?php

// Keep database credentials in a separate file
// 1. Easy to exclude this file from source code managers
// 2. Unique credentials on development and production servers
// 3. Unique credentials if working with multiple developers

define("DB_SERVER", "localhost");
define("DB_HOST_AND_NAME", "mysql:host=localhost;dbname=blog");
define("DB_USER", "blouser");
define("DB_PASS", "\"\WAS%pl4ALu#):");
define("DB_NAME", "blog");

?>
