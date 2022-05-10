<?php
session_start();
require_once("../inc/connection.php");
try
{
    $sql = "delete from cetegory where id=?";
    $statemnet = $db->prepare($sql);
    $data = array($_REQUEST['cetegoryid']);
    $statemnet->execute($data);
    unlink("../images/category/{$_REQUEST['photo']}");
    $_SESSION['message'] = "Category deleted";

}
catch(PDOException $error){
    LogError($error,__FILE__);
}
header("Location:cetegory.php");
?>
