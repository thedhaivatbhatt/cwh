<?php 
   extract($_REQUEST);
   require_once("../ajax/connection.php");
   $sql = "delete from student where id=?";   
   $data = array($studentid);
   RunQuery($sql,$data);
?>