<?php
    function PrintArray($arr) //user defined function
    {
        echo "<hr>";
        foreach($arr as $key=>$value) //works only on associative array
        {
            echo "$key = $value  <br>";
        }
        echo "<hr>";
    }
    //associative array 
    //1st method to create 
    $data = array("name"=>"Ankit","age"=>37,"gender"=>true,"weight"=>75.25);
    
    PrintArray($data); //calling user defined 

    //2nd method to create array 
    $data2['name'] = "The EasyLeearn Academy"; //create an array $data2
    $data2['address'] = "105, Eva surbhi, opp aksharwadi road, bhavnagar"; // this will add new element into array at next available position which 1 and store value in it 
    $data2['pincode'] = 364002; //same as above

    PrintArray($data2);
    $data['mobile'] = 9662512857;
    PrintArray($data);

    //how to remove element from array 
    //unset function is used to remove specific element from any type of array
    //let us remove first value from data array
    unset($data['name']);
    PrintArray($data);    
?>