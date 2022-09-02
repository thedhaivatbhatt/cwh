<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Password hash using php</h1>
    <!-- if we dont given address of webpage in action tag it will submit input on same page -->
    <form action="" method="post">
        <input type="text" name="password" placeholder="enter your plain text password" required>
        <br>
        <input type="submit" name="btnsubmit" value="Hash this password" />
    </form>
    <?php 
        if(isset($_POST['btnsubmit'])==true)
        {
            //web page is loaded because of user has clicked on submit button
            $password = $_POST['password'];
            //now hash this password
            $HashedPassword = password_hash($password,PASSWORD_DEFAULT);
            echo "<h3 align='center'>$HashedPassword</h3>";
        }
    ?>
</body>
</html>