<!DOCTYPE HTML>
<html>
<head>

<link href="CalcStyle.css" rel="stylesheet" type="text/css" media="all" />



</head>



<body onload="initialCalendar();">

<script  >
    function initialCalendar(){
        var hr = new XMLHttpRequest();
        var url = "calendar_start.php";
        var currentTime = new Date();
        var month = currentTime.getMonth()+1;
        var year = currentTime.getFullYear();
        showmonth = month;
        showyear = year;
        var vars = "showmonth="+showmonth+"&showyear="+showyear;
        hr.open("POST", url, true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.onreadystatechange = function (){
            if (hr.readyState == 4 && hr.status == 200){
                var return_data = hr.responseText;
                document.getElementById("showCalendar").innerHTML = return_data;
            }
        }
        hr.send(vars);
        document.getElementById("showCalendar").innerHTML = "processing...";
    }
</script>

<script  >
    function next_month(){
        var nextmonth = showmonth + 1;
        if (nextmonth > 12){
            nextmonth = 1;
            showyear = showyear +1;
        }
        showmonth = nextmonth;
        var hr = new XMLHttpRequest();
        var url = "calendar_start.php";
        var vars = "showmonth="+showmonth+"&showyear="+showyear;
        hr.open("POST", url, true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.onreadystatechange = function (){
            if (hr.readyState == 4 && hr.status == 200){
                var return_data = hr.responseText;
                document.getElementById("showCalendar").innerHTML = return_data;
            }
        }
        hr.send(vars);
        document.getElementById("showCalendar").innerHTML = "processing...";
    }
</script>

<script  >
    function last_month(){
        var lastmonth = showmonth - 1;
        if (lastmonth < 1){
            lastmonth = 12;
            showyear = showyear - 1;
        }
        showmonth = lastmonth;
        var hr = new XMLHttpRequest();
        var url = "calendar_start.php";
        var vars = "showmonth="+showmonth+"&showyear="+showyear;
        hr.open("POST", url, true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.onreadystatechange = function (){
            if (hr.readyState == 4 && hr.status == 200){
                var return_data = hr.responseText;
                document.getElementById("showCalendar").innerHTML = return_data;
            }
        }
        hr.send(vars);
        document.getElementById("showCalendar").innerHTML = "processing...";
    }
</script>

<script  >
    function last_year(){
        var lastyear = showyear - 1;
        showyear = lastyear
        var hr = new XMLHttpRequest();
        var url = "calendar_start.php";
        var vars = "showmonth="+showmonth+"&showyear="+showyear;
        hr.open("POST", url, true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.onreadystatechange = function (){
            if (hr.readyState == 4 && hr.status == 200){
                var return_data = hr.responseText;
                document.getElementById("showCalendar").innerHTML = return_data;
            }
        }
        hr.send(vars);
        document.getElementById("showCalendar").innerHTML = "processing...";
    }
</script>

<script  >
    function next_year(){
        var nextyear = showyear + 1;
        showyear = nextyear;
        var hr = new XMLHttpRequest();
        var url = "calendar_start.php";
        var vars = "showmonth="+showmonth+"&showyear="+showyear;
        hr.open("POST", url, true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.onreadystatechange = function (){
            if (hr.readyState == 4 && hr.status == 200){
                var return_data = hr.responseText;
                document.getElementById("showCalendar").innerHTML = return_data;
            }
        }
        hr.send(vars);
        document.getElementById("showCalendar").innerHTML = "processing...";
    }
</script>

<script type="text/javascript">
    function overlay(){
        el = document.getElementById("overlay");
        el.style.display = (el.style.display == "block")? "none" : "block";
        el = document.getElementById("events");
        el.style.display = (el.style.display == "block")? "none" : "block";
        el = document.getElementById("eventsBody");
        el.style.display = (el.style.display == "block")? "none" : "block";
        
    }
</script>

<script type="text/javascript">
    function show_details(theId) {
       var deets = (theId.id);
       el = document.getElementById("overlay");
       el.style.display = (el.style.display == "block") ? "none" : "block";
       el = document.getElementById("events");
       el.style.display = (el.style.display == "block") ? "none" : "block";
       var hr = new XMLHttpRequest();
       var url = "events.php";
       var vars = "deets="+deets;
       hr.open("POST", url, true);
       hr.setRequestHeader('Content-type', 'application/x-www-formurlencoded');
       hr.onreadystatechange = function (){
            if(hr.readyState == 4 && hr.status == 200){
                var return_data = hr.responseText;
                document.getElementById("events").innerHTML = return_data;
            }
       }
       hr.send(vars);
       document.getElementById("events").innerHTML = "processing";
       
    }
</script>

<div id="showCalendar"></div>
<div id="overlay">
    <div id="events"></div>
</div>

</body>
</html>