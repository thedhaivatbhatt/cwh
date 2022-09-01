<?php 
    //string related libarary functions 
    $amount =112233;
    printf("<br/>[%s]",$amount);
    echo "<pre>";
    printf("<br/>[%10s]",$amount);
    printf("<br/>[%-10s]",$amount);
    printf("<br/>[%010s]",$amount);
    echo "</pre>";
    printf("<br/>[%'#10s]",$amount);
    $FileName = "amount.txt";
    $file = fopen($FileName,"a"); //create file 
    fprintf($file,"\n %s",$amount);
    fclose($file);
    $name = "  the easylearn academy  ";
    $fees = 8500;
    $output = sprintf("name = %s and [%010s]",$name,$fees);
    echo $output;
    $name = "  The EasyLearn Academy  ";
    echo "<br> $name in uppercase " . strtoupper($name);
    echo "<br> $name in lowercase " . strtolower($name);
    echo "<br> length of $name is  " . strlen($name);
    $name = ltrim($name);
    echo "<br> length of $name after ltrim  " . strlen($name);
    $name = rtrim($name);
    echo "<br> length of $name after rtrim  " . strlen($name);
    echo "<br>" . str_repeat("*",100);
    echo "<br>" . str_pad($name,50,"*");
    echo "<br>" . str_pad($name,50,"*",STR_PAD_LEFT);
    echo "<br>" . str_pad($name,50,"*",STR_PAD_BOTH);
    echo "<br>" . str_repeat("*",100);
    echo "<br/> first 3 letter of $name " . substr($name,0,3);
?>