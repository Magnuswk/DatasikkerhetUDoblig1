<?php
//server side script aka config fil
// MUTE NOTICES
error_reporting(E_ALL & ~E_NOTICE);

// LIB PATH
// ! MANUALLY CHANGE THIS IF PHP IS THROWING FILE-NOT-FOUND ERRORS !
define('PATH_LIB', __DIR__ . DIRECTORY_SEPARATOR);

// DATABASE SETTINGS
// ! CHANGE THESE TO YOUR OWN !
define('DB_HOST', 'localhost');
define('DB_NAME', 'multi_login');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Cyber&sec&g11');
?>