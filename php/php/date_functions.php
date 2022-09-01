<?php 
    date_default_timezone_set("asia/kolkata");

    //get today's date in indian format 
    $today = date("d-m-Y"); //d = day m=month Y = year in 4 digit 
    echo "<br/> indian format today's date $today";

    //get today's date in us format 
    $today = date("m-d-Y");
    echo "<br/> us format today's date $today";

     //get today's date in japanies format 
     $today = date("Y-m-d");
     echo "<br/> japanies format today's date $today";

     //get current time 
     $currenttime = date("h:i:s A"); //h = hour i = minutes s = seconds a AM/PM
     echo "<br/> current time is $currenttime";

     //get current timestamp (timestamp means no of seconds since epcoh)
     $currenttimestamp = time(); 
     echo "<br/> current time stamp is " . number_format($currenttimestamp);
     
     //get timestamp of specific date 
     $birthtimestamp = strtotime("12-july-1985"); 
     echo "<br/> birth time stamp is " . number_format($birthtimestamp);

     //get difference between two date (using timestamp) differen will be seconds 
     $difference = $currenttimestamp - $birthtimestamp;
     echo "<br/> difference in seconds $difference";
     echo "<br/> difference in days " . ceil(($difference/(60*60*24)));
     echo "<br/> difference in years " . ceil(($difference/(60*60*24*365)));

     //get timestamp of 35 days later 
     $futuretimestmap = strtotime("+35 days");
     echo "<br/> after 35 days timestamp will be " . $futuretimestmap;
     echo "<br/> after 35 days date &time will be " . date("h:m:s A d-m-Y",$futuretimestmap);
?>