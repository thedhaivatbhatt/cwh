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
              <div class="float-start">
                <h5 class="card-title border-bottom"> Rahul Mehta(001) - 
                    settled Advertise(Payment)</h5>
              </div>
              <div class="float-end mt-4">
                <a href="booked_advertise.php" class="btn btn-success">Due Payment (Pending)</a>
              </div>
              <div style="clear:both"></div>
              <table class="table datatable">
                <thead>

                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type of Ad</th>
                    <th scope="col">Template</th>
                    <th scope="col">Ad Booking Dt.</th>
                    <th scope="col">Ad Dt.</th>
                    <th scope="col">Days</th>
                    <th scope="col">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Multicolor Ad</td>
                    <td>Front page mid size</td>
                    <td>01-feb-2022</td>
                    <td>10-feb-2022</td>
                    <td>1</td>
                    <td>2500</td>
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