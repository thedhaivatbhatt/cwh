<?php
session_start();
require_once("../../inc/connection.php");
extract($_POST);
try{
    $sql="select count(*) 'total'from admin where email=?";
    $statement = $db->prepare($sql);
    $statement=setFetchMode(PDO::FETCH_ASSOC);
    $statement->bindparam(1, $email);
    $statement->execute();
    $row = $statement->fetch();
    //print_r($row);
    if ($row['total'] == 0) 
    {
        $_SESSION['message'] = "email is not valid";
    } 
    else 
    {
        //generate new random password
        $newpassword = rand(10, 99) . rand(10, 99) . rand(10, 99);
        $HashedPassword = password_hash($newpassword, PASSWORD_DEFAULT);

        //update password in admin table
        try 
        {
            $sql = "update admin set password=? where email=?";
            $statement = $db->prepare($sql);
            $statement->bindparam(1, $HashedPassword);
            $statement->bindparam(2, $email);
            $statement->execute();

            require_once("../../inc/function.php");
            $subject = "Attention, we have successfully reovered your account";
            $content = "Dear User <br/> your new password is $newpassword ";
            SendMail($email,$subject,$content);
            $_SESSION['message'] = "password recovery mail sent to your registered email address";
        } 
        catch (PDOException $error) {
            LogError($error, __FILE__);
        }
    }
    header("location:../index.php");
} catch (PDOException $error) {
    LogError($error, __FILE__);
}
?>