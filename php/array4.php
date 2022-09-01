<?php
    function PrintArray($arr) //user defined function
    {
        //$arr means any type of array (numeric/multidimensional/associative)
        echo "<hr>";
        print_r($arr);
        echo "<hr>";
    }
    //numeric array 
    $numbers = array(100,50,75,25,11,85);
    PrintArray($numbers); //calling user defined 

    sort($numbers,SORT_NUMERIC);

    PrintArray($numbers);

    $names = array("mohan","shyam","adi","birju");
    PrintArray($names);

    sort($names,SORT_STRING);
    PrintArray($names);

    $data = array("gender"=>true,"weight"=>75.25,"name"=>"Ankit","age"=>37); //associative array (mixed)
    PrintArray($data);
    asort($data);
    PrintArray($data);

    echo "no of elements in numbers array = " . count($numbers);
    $total = sizeof($names);
    echo "<br/> no of elements in  data array = $total";
?>