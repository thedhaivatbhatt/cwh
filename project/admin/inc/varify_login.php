<?php
session_start();

if(isset($_SESSION['id'])==false)
{
$_SESSION['message'] = "login is required";
var_dump($_SESSION);
header("location:index.php");
exit();
}
?>