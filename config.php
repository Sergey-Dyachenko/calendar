<?php

$mysql_hostname = "localhost";
$mysql_user ="root";
$mysql_password = "";
$mysql_database = "days";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die ('Упс, что то пошло не так');
mysql_select_db($mysql_database, $bd) or die ("Что то пошло не так");



?>