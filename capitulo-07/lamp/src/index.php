<?php

define('MYSQL_HOST', 'mysql');
define('MYSQL_DATABASE', 'tienda');
define('MYSQL_USER', 'user');
define('MYSQL_PASSWORD', 'password');

$mysqli = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);

$result = $mysqli->query("SELECT * FROM fabricante");

$mysqli->close();

foreach ($result as $row) {
  echo $row['nombre']."<br>";
}

?>