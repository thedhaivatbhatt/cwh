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
      <h1>Advertisement Management</h1>
    </div>
    <!-- End Page Title -->
    <section class="section">

      <!--end of row-->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              
              <div class="row mb-3 pb-3 pt-3 border-bottom">
                <h5 class="border-bottom">
                 select date to filter Advertisement
                </h5>
                <div class="col-12">
                  <form action="">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-floating">
                          <input type="date" class="form-control" id="dob" name='dob' placeholder="Date of birth">
                          <label for="sample">Select start date</label>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-floating">
                          <input type="date" class="form-control" id="dob" name='dob' placeholder="Date of birth">
                          <label for="sample">Select end date</label>
                        </div>
                      </div>
                      <div class="col-md-2 d-grid">
                        <button type="submit" class="btn btn-primary">Search</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <h5 class="card-title border-bottom">
                Tomrrow's Advertisement
              </h5>
              <table class="table datatable ">
                <thead>

                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type of Ad</th>
                    <th scope="col">Template</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Multicolor Ad</td>
                    <td>Front page mid size</td>
                    <td><a href="advertiser_detail.php" target='blank'>Rahul Mehta</a></td>
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