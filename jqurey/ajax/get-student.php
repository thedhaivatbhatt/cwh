<?php
require_once("../ajax/connection.php");
$sql = "select * from student order by name";
$statement = $db->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$table = $statement->fetchall();

//convert JSON array (which is compatiable in javascript)
echo json_encode($table); //return JSON ARRAY
?>