<?php 
    date_default_timezone_set("asia/kolkata");

    //check whether current timestamp is in office ours or not (09:00 am to 06:PM)
    $currenttimestamp = time(); 
    $startime = mktime("09","00","00",date("m"),date("d"),date("Y"));
    $endtime = mktime("18","00","00",date("m"),date("d"),date("Y"));
    echo "<br/> startime = $startime current time = $currenttimestamp end time = $endtime";
    if($currenttimestamp>=$startime && $currenttimestamp<=$endtime)
    {
        echo "<br/> Current time is in office hour";
    }
    else 
    {
        echo "<br/> Current time is not in office hour";
    }
?>