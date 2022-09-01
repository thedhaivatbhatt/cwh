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
                                <h5>Add new operators</h5>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Operator's fullname">
                                            <label for="adsize">Fullname</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="mobile">
                                            <label for="adsize">mobile</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="dob" name="dob" placeholder="date of birth">
                                            <label for="adsize">date</label>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="save" class="btn btn-primary">save</button>
                                        <button type="reset" class="btn btn-secondary">reset</button>
                                    </div>
                                </form><!-- end floating labels forms -->
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body">
                                        <h5 class="card-title border-bottom">Existing Categories</h5>
                                        <table id="table_id" class="table datatable dataTable-table">
                                           <thead>
                                               <tr>
                                               <th scope="col">#</th> 
                                               <th scope="col">Email</th> 
                                               <th scope="col">Fullname</th> 
                                               <th scope="col">Mobile</th> 
                                               <th scope="col">BirthDate</th> 
                                               <th scope="col">last login</th> 
                                               <th scope="col">Operations</th> 
                                            </tr>
                                           </thead> 
                                           <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>email@website.com</td>
                    <td>abc xyz</td>
                    <td>1234567890</td>
                    <td>12th july 1988</td>
                    <td>01-feb-2022</td>
                    <td>
                        <a href='#'><i class="bi bi-trash-fill"></i></a>
                        <a href='#'><i class="bi bi-pencil-square"></i></a>
                    </td>
                  </tr>
                  
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