<?php 
    session_start(); //do not put any line above this line
    //database connectivity
    require_once("../inc/connection.php");
    extract($_POST);
        //unnamed placeholder
    $sql = "INSERT INTO category (title,description,adtype,subadtype,pageno,adsize,rate,sampleimage) VALUES (?,?,?,?,?,?,?,?)";
    try
    {
        $statement = $db->prepare($sql);
        $statement->bindparam(1,$title);
        $statement->bindparam(2,$description);
        $statement->bindparam(3,$adtype);
        $statement->bindparam(4,$subadtype);
        $statement->bindparam(5,$pageno);
        $statement->bindparam(6,$adsize);
        $statement->bindparam(7,$rate);
        $photo = rand(10,99) . rand(10,99) .  rand(10,99) . $_FILES['sample']['name'];
        $statement->bindparam(8,$photo);
        $statement->execute(); //actually query execute 
        move_uploaded_file($_FILES['sample']['tmp_name'],"../images/category/$photo");
        $_SESSION['message'] = "category inserted";
    }
    catch(PDOException $error)
    {
        LogError($error,__FILE__);
    }
     header("Location:../category.php");
?>