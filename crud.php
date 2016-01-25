<?php

include ('config.php');
$sql = "select * from days_off order by date_day";
$rsd = mysql_query($sql);

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Sergey Dyachenko" />

	<title>Display Customers</title>
</head>

<body>

<h3><a href="add.php">Add New Date</a></h3>

<table border="1" >
<thead>
<tr>
    <th width="30">ID</th>
    <th>Date_Day</th>
    <th>Date_Name</th>
    <th>Actions</th>
    <th>Actions</th>
</tr>
</thead>
<?php
    $n=0;
    while ($row = mysql_fetch_array($rsd))
    {
        $n = $n+1;
        $f1 = $row['id'];
        $f2 = $row['date_day'];
        $f3 = $row['date_name'];
        
    
 
?>
<tr>
    <td><?php echo $f1; ?> </td>
    <td><?php echo $f2; ?> </td>
    <td><?php echo $f3; ?> </td>
    <td><a href="update.php?id=<?php echo $f1?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $f1?>">Delete</a></td>
</tr>
<?php 
}//end while
?>

</table>



</body>
</html>