<?php

include('config.php');
$f2 = $_POST['f2'];
$f3 = $_POST ['f3'];
var_dump($_POST['f2']);
var_dump($_POST['f3']);
mysql_query("insert into days_off (date_day, date_name) values ('$f2','$f3') ");
mysql_close($bd);

?>

<a href="crud.php"> Back to Main Page</a>