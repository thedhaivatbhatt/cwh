<?php
    //Initializing the session
    session_start();
      
    //writing MySQL Query to insert the details
    $insert_query = 'insert into subscriptions (
        quantity,
        length,
        micronaite,
        strength,
        txtother,
        shipment,
        payment,
        schedule,
        comname,
        conperson,
        position,
        busnature,
        address,
        txtcity,
        pincode,
        txtstate,
        txtcountry,
        txtphone,
        txtemail,
        filfile1,
        specitications,
        findus,
        comname,
                    ) values (
                    ' . $_SESSION['quantity'] . ",
                    " . $_SESSION['length'] . ",
                    " . $_SESSION['micronaite'] . ",
                    " . $_POST['strength']. ",
                    " . $_POST['txtother']. ",
                    " . $_POST['shipment']. ",
                    " . $_POST['payment']. ",
                    " . $_POST['schedule']. ",
                    " . $_POST['comname']. ",
                    " . $_POST['conperson']. ",
                    " . $_POST['position']. ",
                    " . $_POST['busnature']. ",
                    " . $_POST['address']. ",
                    " . $_POST['txtcity']. ",
                    " . $_POST['pincode']. ",
                    " . $_POST['txtstate']. ",
                    " . $_POST['txtcountry']. ",
                    " . $_POST['txtphone']. ",
                    " . $_POST['txtemail']. ",
                    " . $_POST['filfile1']. ",
                    " . $_POST['specitications']. ",
                    " . $_POST['findus']. ",
                    " . $_POST['comname']. "
                    );"
  
    //let's run the query
    mysql_query($insert_query);
    ?>
<pre>Successfully Registered</pre