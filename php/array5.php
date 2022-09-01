<?php 
    function PrintArray($arr) //user defined function
    {
        //$arr means any type of array (numeric/multidimensional/associative)
        echo "<hr>";
        print_r($arr);
        echo "<hr>";
    }
    $data = array("name"=>"Ankit","age"=>37,"gender"=>true,"weight"=>75.25);
    extract($data);
    echo "<br/> $name $age $gender $weight";
    $fruit = array("apple","red","sweet"); //numeric 
    list($name,$color,$taste) = $fruit;
    echo "<br/> $name $color $taste";
    $stack = array("desk","chair","fan","light");
    PrintArray($stack);
    array_push($stack,"calendar","cup-board");
    PrintArray($stack);
    $value = array_pop($stack);
    echo "<br/> removed value = $value";
    PrintArray($stack);
    array_unshift($stack,"computer","switch board");
    PrintArray($stack);
    PrintArray($data);
    $data= array_change_key_case($data,CASE_UPPER);
    PrintArray($data);
    if(array_key_exists("email",$data)==false)
    {
        echo "<br/> email key not found";
    }
    else 
    {
        echo "<br/> key found";
    }
    $numbers = array(10,20,30,50,200);
    PrintArray($numbers);
    $total = array_sum($numbers);
    echo "<br/> total = $total";
    $reversed_number = array_reverse($numbers);
    PrintArray($reversed_number);
?>