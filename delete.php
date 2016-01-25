<?php

include('config.php');

$id = $_GET['id'];
mysql_query ("delete from days_off where id='". $id ."'");
mysql_close($bd);
header("location: http://localhost/calendar/crud.php");

?>