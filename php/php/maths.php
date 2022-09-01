<?php 
    //maths related library functions 
    $num1 = rand(10,99); 
    $num2 = rand(10,99); 
    $result = $num1 - $num2;
    echo "result is $result";
    echo "<br/> positive result is " . abs($result);
    $num3 = 4.55;
    echo "<br> ceil value $num3 = " . ceil($num3);
    echo "<br> floor value $num3 = " . floor($num3);
    echo "<br> integer round value $num3 = " . round($num3);
    echo "<br> float round value $num3 = " . round($num3,1);
    $numbers = array(rand(10,99),rand(10,99),rand(10,99),rand(10,99),rand(10,99));
    echo "<br/>";
    print_r($numbers);
    echo "<br/>";
    echo "minimum value from array " . min($numbers);
    echo "<br/> maximum value from array " . max($numbers);
    echo "<br/> value of pi " . pi();
    
?>