<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>
<?php
        $path = $_SERVER['SCRIPT_NAME'];
        $arr = explode("/",$path);
        echo $arr[sizeof($arr)-1];
        echo "<BR/>" . $_SERVER['SERVER_NAME'];
    ?>
    </H1>
</body>
</html>