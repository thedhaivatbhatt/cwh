<?php
extract($_REQUEST);
require_once("../ajax/connection.php");
$sql="select * from student where name=?";
$statement = $db ->prepare($sql);
$statement->bindparam(1,$name);
$statement->execute();
    $table = $statement->fetchall();
    echo "<table class='table-bordered table-striped table-hover' width='100%'>";
    foreach($table as $row)
    {
        echo "<tr><td>{$row['name']}</td> <td>{$row['class']}</td><td> {$row['mark']} </td><td>{$row['gender']}</td></tr>";
    }
    echo "<table>";
?>