<?php 
    echo "form submitted.";
    //create variable
    $number1 = $_POST['txtnum1']; //will return input given by user in frontpage's input txtnum1
    $number2 = $_POST['txtnum2']; //will return input given by user in frontpage's input txtnum2
    $operation = $_POST['rdooperation'];
    echo "$number1 $number2 $operation";
    $result = null; //null means nothing
    if($operation==1)
    {
        $result = $number1 + $number2;
    }
    else if($operation==2)
    {
        $result = $number1 - $number2;
    }
    else if($operation==3)
    {
        $result = $number1 * $number2;
    }
    else 
    {
        $result = round($number1 / $number2,2);
    }
    echo "<br/> result = $result";
?>