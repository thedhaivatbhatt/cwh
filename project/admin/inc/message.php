<div class="row">
    <div class="col-12">
        <?php
        if (isset($_SESSION['message']) == true) {
        ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <?php
                echo $_SESSION['message'];
                //delete messsage variable from session 
                unset($_SESSION['message']);
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?php
        } //end of if 
            ?>
            <?php
            if (isset($_SESSION['error']) == true) {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php
                    echo $_SESSION['error'];
                    //delete messsage variable from session 
                    unset($_SESSION['error']);
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <?php
            } //end of if 
                ?>
                </div>
            </div>