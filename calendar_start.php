<?php

$showmonth = $_POST['showmonth'];
$showyear = $_POST['showyear'];
$showmonth = preg_replace('#[^0-9]#i', '', $showmonth);
$showyear = preg_replace('#[^0-9]#i', '', $showyear);

//$showmonth = 2;

//$showyear = 2016;

$day_count = cal_days_in_month(CAL_GREGORIAN, $showmonth, $showyear);
$pre_days = date('w', mktime(0, 0, 0, $showmonth, 0, $showyear));
$post_days = (6 - (date('w',mktime(0,0,0,$showmonth, $day_count, $showyear))));

echo '<div id="calendar_wrap">';
    echo '<h2><a href="crud.php">Add Dates</a></h2>';
    echo '<div class ="title_bar">';
        
        echo '<div class ="previous_month"><input name = "myBtn" type= "submit" value="Previous Month" onClick="javascript:last_month();"></div>'; 
        echo '<div class ="next_month"><input name = "myBtn" type= "submit" value="Next Month" onClick="javascript:next_month();"></div>'; 
    echo '</div>';
    echo '<div class ="title_bar">';
        echo '<div class ="previous_month"><input name = "myBtn" type= "submit" value="Previous Year" onClick="javascript:last_year();"></div>'; 
        echo '<div class ="next_month"><input name = "myBtn" type= "submit" value="Next Year" onClick="javascript:next_year();"></div>'; 
        
        
        
    echo '</div>';
    
    echo '<div class ="title_bar">';
              echo '<div class="show_month"><strong>'. $showmonth . '/'.$showyear . '</strong></div>';
    echo '</div>';

    echo '<div class="week_days">';
        echo '<div class="days_of_week">Mon</div>';
        echo '<div class="days_of_week">Tue</div>';
        echo '<div class="days_of_week">Wed</div>';
        echo '<div class="days_of_week">Thur</div>';
        echo '<div class="days_of_week">Fri</div>';
        echo '<div class="days_of_week">Sat</div>';
        echo '<div class="days_of_week">Sun</div>';
        echo '<div class="clear"></div>';
    echo '</div>';
    if ($pre_days != 0){
        for ($i=1; $i<=$pre_days;$i++){
          echo '<div class="non_cal_day"></div>';
        }
    }
    /*Current Month*/
include('config.php');
for($i=1; $i<= $day_count; $i++){
        //events logic
        $date = $showyear.'-'.$showmonth.'-'.$i;
        $query = mysql_query('select id from days_off where date_day=" '.$date.'"');
        $num_rows = mysql_num_rows($query);
        if ($num_rows > 0)
            $event = "<input name='$date' type='submit' value='Details' id ='$date' 
            onClick='javascript:show_details(this);'>";
        echo '<div class = "cal_day">';
            echo '<div class = "day_heading">'.$i.'</div>';
            //show events button 
            if ($num_rows != 0){echo "<div class ='openings'></br>". $event . "</div>";}
            //end 
        echo '</div>';
}

 /*Next Month Fillers DAys*/
if ($post_days != 0){
    for($i=1; $i<=$post_days; $i++){
        echo '<div class="non_cal_day"></div>';
    }
}
echo '</div>';


?>