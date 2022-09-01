    <?php 
    session_start(); //do not put any line above this line
    require_once("../../inc/connection.php");
    extract($_POST);
    $sql = "update category set title=?,description=?,adtype=?,subadtype=?,pageno=?,adsize=?,rate=?,sampleimage=? where id=?";
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
        if(strlen($_FILES['sample']['name'])>=1)
        {
            $photo = rand(10,99) . rand(10,99) .  rand(10,99) . $_FILES['sample']['name'];
            move_uploaded_file($_FILES['sample']['tmp_name'],"../images/category/$photo");
            unlink("../images/category/$oldsampleimage");
        }
        else 
        {
            $photo = $oldsampleimage;
        }
        $statement->bindparam(8,$photo);
        $statement->bindparam(9,$categoryid);
        $statement->execute(); //actually query execute 
        $_SESSION['message'] = "category updated";
    }
    catch(PDOException $error)
    {
        LogError($error,__FILE__);
    }
    header("Location:../category.php");
    ?>