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
                <h5 class="card-title border-bottom">Customer detail</h5>
                <table class="table table-striped table-bordered">
                    <tr>
                        <td colspan=2>company Name</td>
                        <td colspan=2>Lorem ipsum dolor sit amet.</td>
                    </tr>
                    <tr>
                        <td>Contact Person Name</td>
                        <td>Lorem ipsum</td>
                        <td>Mobile</td>
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
      </section>
    </main>
    <?php require_once("inc/script.php"); ?>
  </body>
</html>