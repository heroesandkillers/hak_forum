<?php
// phpBB 3.0.x auto-generated configuration file
// Do not change anything in this file!

if(empty($MYSQL_LOCATION)){
    $MYSQL_LOCATION = "localhost";
}
if(empty($MYSQL_DATABASE)){
    $MYSQL_DATABASE = "hak";
}
if(empty($MYSQL_USERNAME)){
    $MYSQL_USERNAME = "hak";
}
if(empty($MYSQL_PASSWORD)){
    $MYSQL_PASSWORD = "&MOVy1PV";
}


$dbms = 'mysqli';
$dbhost = $MYSQL_LOCATION;
$dbport = '3306';
$dbname = $MYSQL_DATABASE;
$dbuser = $MYSQL_USERNAME;
$dbpasswd = $MYSQL_PASSWORD;
$table_prefix = 'phpbb_';
$acm_type = 'file';
$load_extensions = '';

@define('PHPBB_INSTALLED', true);
// @define('DEBUG', true);
// @define('DEBUG_EXTRA', true);
