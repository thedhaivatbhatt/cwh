<?php //start of php script
    echo "This is first line in <b>php</b>";
    echo "<br/> this is second line ";
    print "<br/> this is third line ";

    //how to create variables in php 
    $name = "the easylearn academy";
    $year = 2022; //integer 
    $pi = 3.14; //float
    $leapyear = true; //boolean 
    echo "<br/> name = $name year = $year pi = $pi leapyear = $leapyear";
    $year = "two thousand twenty two";
    $pi = 3; //integer variable
    echo "<br/> year = " . $year;
    echo "<br/> pi = " . $pi;

    //delete variable
    unset($name); //this will delete variable unset from memory
    echo "<br/> name = $name";
//end of php script
?>