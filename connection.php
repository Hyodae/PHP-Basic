<?php

$host = "52.78.207.222";    // hostname
$username = "root";         // username for database
$password = "password";     // password for database
$db_name = "game";          // database name

// connect to database
mysql_connect($host, $username, $password) or die("cannot connect to server");
mysql_select_db($db_name) or die("cannot select database");

?>