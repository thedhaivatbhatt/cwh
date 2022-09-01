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
            <main id="main" class="main">
                <div class="pagetitle">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Customer Management</h5>

                        </div>
                    </div>
                </div>
                <!-- End Page Title -->
                <section class="section">

                    <!--end of row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title border-bottom">Existing Customer</h5>
                                    <table id="table_id" class="table datatable dataTable-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Contact</th>
                                                <th scope="col">Mobile(s)</th>
                                                <th scope="col">Last Payment Detail</th>
                                                <th scope="col">Payment Due</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><a href='advertiser_detail.php' title='click to view detail'>abc xyz</a></td>
                                                <td>Mr xyz</td>
                                                <td>1234567890 <br>
                                                    9876543210</td>
                                                <td>01-feb-2022 <br> Rs 2500</td>
                                                <td><a href='booked_advertise.php'>Rs. 5000</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

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