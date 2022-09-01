<?php
require_once("inc/header.php");
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
                        <div class="card mt-2">
                            <div class="card-header">
                                <div class="main">
                                    <div class="pagetitle">
                                        <h3>Customer Management</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title border-botttom">Costomer detail</h5>
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <td colspan="2">company name</td>
                                        <td colspan="2">Lorem ipsum dolor sit amet.</td>
                                    </tr>
                                    <tr>
                                        <td>Contact Person Name</td>
                                        <td>Lorem ipsum</td>
                                        <td>mobile</td>
                                        <td>Lorem ipsum</td>
                                    </tr>
                                    <tr>
                                        <td>Address Line 1</td>
                                        <td>Lorem ipsum</td>
                                        <td>Address Line 2</td>
                                        <td>Lorem ipsum</td>
                                    </tr>
                                    <tr>
                                        <td>City</td>
                                        <td>Lorem ipsum</td>
                                        <td>State</td>
                                        <td>Lorem ipsum</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>Lorem ipsum</td>
                                        <td>Last Payment Detail</td>
                                        <td>Lorem ipsum</td>
                                    </tr>
                                    <tr>
                                        <td>Payment Due</td>
                                        <td>Lorem ipsum</td>
                                        <td>Customer Id</td>
                                        <td>1</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            <?php
            require_once("inc/footer.php");
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