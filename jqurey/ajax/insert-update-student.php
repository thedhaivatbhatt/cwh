<?php
require_once("../ajax/connection.php");
extract($_POST);
if($gender="0")
  $gender="female";
else
  $gendar="male";
//var_dump($_POST);
if($studentid=="")
{
    $sql="insert into student (name,class,mark,gendar) values (?,?,?,?) ";
    $data=array($name,$class,$marks,$gender);
    RunQuery($sql,$data);
    $NewStudentId =$db->lastInsertId();
    echo $NewStudentId;
}
else
{
    $sql = "update student set name=?,class=?,mark=?,gendar=? whare id=?";
    $data=array($name,$class,$marks,$gender,$studentid);
    RunQuery($sql,$data);
    echo $studentid;
}
//echo '1';
?>