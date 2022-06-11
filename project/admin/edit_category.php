<?php
session_start();
require_once("../admin/inc/header.php");
require_once("../admin/inc/connection.php");
?>
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
         <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Sidebar Start -->
        <?php
        require_once("../admin/inc/saidbar.php");
        ?>
        <!-- Sidebar End -->
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            require_once("../admin/inc/navbar.php");
            ?>
            <!-- Navbar End -->
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3>Category Management</h3>
                        <!-- //  require("inc/message.php");  -->
                        <div class="card mt-2">
                            <div class="card-header">
                                <div class="card-body">
                                    <h5 class="card-title">Edit Category</h5>
                                    <?php
                                    try {
                                        $sql = "select * from category  where id=?";
                                        $statement = $db->prepare($sql);
                                        $statement->setFetchMode(PDO::FETCH_ASSOC);
                                        $statement->bindparam(1, $_REQUEST['categoryid']);
                                        $statement->execute();
                                        $row = $statement->fetch();
                                        // var_dump($row);
                                    ?>
                                </div>
                                <form method="post" enctype="multipart/form-data" action="submit/update_category.php">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id='title' name='title' placeholder="Category title" required value="<?= $row['title']; ?>">
                                                <label for="title">Title</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="description" name='description' placeholder="Description" value="<?= $row['description']; ?>" required>
                                                <label for="description">Description</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <fieldset class="row mb-3">
                                                <legend class="col-form-label col-sm-12 pt-0">Select Advertise type</legend>
                                                <?php
                                                $newspaper = "checked";
                                                $website = null;
                                                if ($row['adtype'] == '2') {
                                                    $newspaper = null;
                                                    $website = "checked";
                                                }
                                                ?>
                                                <div class="col-sm-12">
                                                    <div class="form-check">
                                                        <input required class="form-check-input" type="radio" name="adtype" id="news" value="1" <?php echo $newspaper; ?>>
                                                        <label class="form-check-label" for="news">
                                                            News Paper
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required class="form-check-input" type="radio" name="adtype" id="website" value="2" <?php echo $website; ?>>
                                                        <label class="form-check-label" for="website">
                                                            Website/Application
                                                        </label>
                                                    </div>

                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="row mb-3">
                                                <?php
                                                $text = "checked";
                                                $classified = null;
                                                $color = null;
                                                if ($row['subadtype'] == '2') {
                                                    $text = null;
                                                    $classified = "checked";
                                                    $color = null;
                                                } else if ($row['subadtype'] == '3') {
                                                    $text = null;
                                                    $classified = null;
                                                    $color = "checked";
                                                }
                                                ?>
                                                <legend class="col-form-label col-sm-12 pt-0">Select type of Advertisement</legend>
                                                <div class="col-sm-12">
                                                    <div class="form-check">
                                                        <input required class="form-check-input" type="radio" name="subadtype" id="standard" value="1" <?php echo $text; ?>checked>
                                                        <label class="form-check-label" for="standard">
                                                            Stanard (Black & White)
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required class="form-check-input" type="radio" name="subadtype" id="Classified" value="2" <?php echo $classified; ?>>
                                                        <label class="form-check-label" for="Classified">
                                                            Classified (multicolor)
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required class="form-check-input" type="radio" name="subadtype" id="Animation" value="3" <?php echo $color; ?>>
                                                        <label class="form-check-label" for="Animation">
                                                            Animation
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="pageno" name="pageno" placeholder="Page No" value="<?php echo $row['pageno']; ?>" required>
                                                <label for="floatingZip">Page No</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="adsize" name='adsize' placeholder="Ad Size" value="<?php echo $row['adsize']; ?>" required>>
                                                <label for="adsize">Ad Size</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="rate" name='rate' name='rate' placeholder="Rate" value="<?php echo $row['rate']; ?>" required>
                                                <label for="rate">Rate</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="sample">Select sample file</label>
                                            <div class="form-floating">
                                                <input type="file" class="form-control-file" id="sample" name='sample' placeholder="Select Sample" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="col-6 offset-3">
                                            <h3>Sample Image</h3>
                                            <img src="../admin/images/category/<?php echo $row['sampleimage']; ?>" class="img-fluid" style='width:300px;'>

                                        </div>
                                        <div class="text-end">
                                          <a href="category.php">  <button type="submit" class="btn btn-primary">Save</button></a>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                        <?php
                                        require("../admin/inc/message.php");
                                        ?>
                                    </div>
                                    <input type="hidden" name="categoryid" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="oldsampleimage" value="<?php echo $row['sampleimage']; ?>">
                                </form><!-- End floating Labels Form -->
                            <?php
                                    } //end of try
                                    catch (PDOException $error) {
                                        LogError($error, __FILE__);
                                    }
                            ?>
                            <?php
                            require("../admin/inc/message.php");
                            ?>
                            </div>
                        </div>
                        <!-- end of card -->
                    </div>
                    <!--end of column -->
                </div>

                <!--end of row-->
            </div>
        </div>
    </div>
    </div>
    </section>
    </main>
    <?php require_once("../admin/inc/script.php"); ?>