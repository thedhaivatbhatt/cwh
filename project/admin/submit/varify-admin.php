<?php
require_once("../../inc/connection.php");
extract($_POST);
try
{
    $sql = "select id,password from admin where email=?";
    $statement = $db->prepare($sql);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->bindparam(1,$email);
    $statement->execute();
    $row = $statement->fetch();
    if (isset($row)==0)
    {
        $_SESSION['message']= "invalid login attampt";
    }  
    else
    {
        $password = $row['password'];
        echo $password;
    }
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
?>