<?php
session_start();
require_once("inc/header.php");
require_once("inc/connection.php");
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
        require_once("inc/saidbar.php");
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            require_once("inc/navbar.php");
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
                                <h5 class="card-title">Add new category</h5>
                            </div>
                                <form method="post" enctype="multipart/form-data" action="submit/insert_category.php">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id='title' name='title' placeholder="Category title" required>
                                                <label for="title">Title</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="description" name='description' placeholder="Description">
                                                <label for="description">Description</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <fieldset class="row mb-3">
                                                <legend class="col-form-label col-sm-12 pt-0">Select Advertise type</legend>
                                                <div class="col-sm-12">
                                                    <div class="form-check">
                                                        <input required class="form-check-input" type="radio" name="adtype" id="news" value="1" checked>
                                                        <label class="form-check-label" for="news">
                                                            News Paper
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required class="form-check-input" type="radio" name="adtype" id="website" value="2">
                                                        <label class="form-check-label" for="website">
                                                            Website/Application
                                                        </label>
                                                    </div>

                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <fieldset class="row mb-3">
                                                <legend class="col-form-label col-sm-12 pt-0">Select type of Advertisement</legend>
                                                <div class="col-sm-12">
                                                    <div class="form-check">
                                                        <input required class="form-check-input" type="radio" name="subadtype" id="standard" value="1" checked>
                                                        <label class="form-check-label" for="standard">
                                                            Stanard (Black & White)
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required class="form-check-input" type="radio" name="subadtype" id="Classified" value="2">
                                                        <label class="form-check-label" for="Classified">
                                                            Classified (multicolor)
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input required class="form-check-input" type="radio" name="subadtype" id="Animation" value="3">
                                                        <label class="form-check-label" for="Animation">
                                                            Animation
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="pageno" name="pageno" placeholder="Page No">
                                                <label for="floatingZip">Page No</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="adsize" name='adsize' placeholder="Ad Size">
                                                <label for="adsize">Ad Size</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="rate" name='rate' name='rate' placeholder="Rate">
                                                <label for="rate">Rate</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="sample">Select sample file</label>
                                            <div class="form-floating">
                                                <input type="file" class="form-control-file" id="sample" name='sample' placeholder="Select Sample">
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                    </div>
                                </form><!-- End floating Labels Form -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="card-titel border-bottom">Existing Categories</h5>
                                    <table id="table_id" class="table datatable dataTable-table border">
                                        <thead>
                                            <th scope="col">#</th>
                                            <th scope="col">title</th>
                                            <th scope="col">file</th>
                                            <th scope="col">rate</th>
                                            <th scope="col">ad type</th>
                                            <th scope="col">type of <br> Advertise </th>
                                            <th scope="col">page no</th>
                                            <th scope="col">size</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM category ORDER BY id DESC";
                                            $statement = $db->prepare($sql);
                                            $statement->execute();
                                            $count = 1;
                                            while ($row = $statement->fetch()) {
                                                extract($row);
                                            ?>
                                                <tr>
                                                    <td scope="row"><?= $count++; ?></td>
                                                    <td><?= $title; ?> <br>
                                                        <a href='cetegory_delete.php?categoryid=<?php echo $row['id']; ?>&photo=<?php echo $row['sampleimage']; ?>'><i class="bi bi-trash-fill"></i></a>
                                                        <a href='edit_category.php?categoryid=<?php echo $row['id']; ?>&photo=<?php echo $row['sampleimage']; ?>'><i class="bi bi-pencil-square"></i></a>
                                                    </td>
                                                    <td>
                                                        <img src="images/category/<?php echo $sampleimage ?>" width="100px">
                                                    </td>
                                                    <td><?= $rate ?></td>
                                                    <td>
                                                        <?php
                                                        if ($adtype == 1) {
                                                            echo "News Paper";
                                                        } else {
                                                            echo "Website/Application";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($subadtype == 1) {
                                                            echo "Stanard (Black & White) ";
                                                        } elseif ($subadtype == 2) {
                                                            echo "Classified (multicolor)";
                                                        } else {
                                                            echo "Animation";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $pageno ?></td>
                                                    <td><?php echo $adsize ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blank End -->


        <!-- Footer Start -->
        <?php
        // require_once("inc/footer.php");
        ?>
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php
    require_once("inc/script.php");
    ?>
</body>

</html>