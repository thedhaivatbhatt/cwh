<?php
require_once("inc/header_part.php");
?>
</head>

<body>
    <?php
    require_once("inc/sidebar.php");
    ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Customer Management</h1>
        </div>
        <!-- End Page Title -->
        <section class="section">

            <!--end of row-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Existing Customer</h5>
                            <table class="table datatable">
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
    <?php require_once("inc/script.php"); ?>
</body>

</html>