<?php
 var_dump($deets);
$deets = $_POST['deets'];
$deets = preg_replace('#[^0-9-]#i', '', $deets);
 include('config.php');
 
 $events='';
 
 $query = mysql_query('select date_name from days_off where date_day ="'.$deets.'"');

 $num_rows = mysql_num_rows($query);
 if ($num_rows > 0){
   $events.='<div id="eventsControl"><button onMouseDown="overlay()">Close</button><br/><br/><b> ' . $deets .'</b><br/><br/></div>'; 
   while ($row = mysql_fetch_array($query)){
        $desc = $row['date_name'];
        $events .= '<div id="eventsBody">' . $desc .'<br/><hr><br/></div>';
   }
 }
echo $events;
?>