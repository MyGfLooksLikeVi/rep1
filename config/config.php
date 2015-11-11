<?php

ini_set('display_errors', 0);
error_reporting(0);

// database connection

define('gDBHost',     'localhost');
define('gDBName',     'new'); // временно сменено на  travma
define('gDBUser',     'root');
define('gDBPassword', '');

// database query trace options
// define('gDBDefaultTrace', true);
define('gDBDefaultTrace', false);
define('gDBDefaultTraceErr', false);

// root directory -- usualy '/'
define('gRootDirectory', '/emst.local/');

// some u.i. options
define('gMinYear',    2005);
define('gMaxYear',    2200);

// профиль для ЕИС-ОМС
define('defaultService', 'аТрОт');

?>
