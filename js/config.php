<?php
/*
 * Site : http:www.smarttutorials.net
 * Author :muni
 * 
 */
 
/*define('BASE_PATH','http://demo.smarttutorials.net/autocomplete/'); */
define('DB_HOST', 'localhost');
define('DB_NAME', 'dbrivfarca');
define('DB_USER','root');
define('DB_PASSWORD',' ');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Falló al conectar a MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Falló al conectar a MySQL: " . mysql_error());

?>