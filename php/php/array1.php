<?php
    function PrintArray($arr) //user defined function
    {
        //$arr means any type of array (numeric/multidimensional/associative)
        echo "<hr>";
        print_r($arr);
        echo "<hr>";
    }
    //numeric array 
    //1st method to create 
    $data = array("Ankit",37,true,75.25);
    PrintArray($data); //calling user defined 

    //2nd method to create array 
    $data2[] = "The EasyLeearn Academy"; //create an array $data2
    $data2[] = "105, Eva surbhi, opp aksharwadi road, bhavnagar"; // this will add new element into array at next available position which 1 and store value in it 
    $data2[] = 364002; //same as above

    PrintArray($data2);
    $data[] = 123456789;
    PrintArray($data);

    //how to remove element from array 
    //unset function is used to remove specific element from any type of array
    //let us remove first value from data array
    unset($data[0]);
    PrintArray($data);

    //let us create multidimensional array 
    $family = array(
        array("Ram",45,81.25,true),
        array("Sita",41,70.25,false),
        array("Lav",15,25.25,true),
        array("Kush",18,25.25,true),
    );
    PrintArray($family);

    
?>