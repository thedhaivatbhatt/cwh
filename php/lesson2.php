<?php //start of php 
    $CurrentDate = date("d-m-Y");
    $color = 'yellow';
    $Name = "Learning PHP @ The EasyLearn Academy";
//end of php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            echo "Today is $CurrentDate";
        ?>
    </title>
</head>
<body bgcolor="<?php echo $color; ?>">
    <h1>
        <?php 
            echo $Name;
        ?>
    </h1>
</body>
</html>