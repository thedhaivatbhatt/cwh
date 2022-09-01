<?php
require_once("../inc/varify_login.php");
require_once("../inc/connection.php");
extract($_POST);
try
{
    $sql="select password from admin where id=?";
    $statement = $db->prepare($sql);
    $statemnet-> setFatchMode(PDO::FETCH_ASSOC);
    $statement->bindparam(1,$_SESSION['id']);
    $statement->execute();
    $row = $statement->fetch();
    if(sizeof($row)>=1)
    {
        if($newpassword!=$confirmnewpassword)
        {
            $_SESSION['message']="password and confirm new password must be same";
        }
        else
        {
            try
            {
                $NewHashePassword = password_hash($newpassword,PASSWORD_DEFAULT);
                $sql="update admin set password=? where id =?";
                $statement=$db->prepare($sql);
                $statement->bindparam(1,$NewHashePassword);
                $statement->bindparam(2,$_SESSION['id']);
                $statement->execute();
                $_SESSION['message']="password change succsesfully";
            }
            catch(PDOException $error)
            {
                LogError($error,__FILE__);
            }
        }
    } 
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
header("location:../change_password.php");
?>