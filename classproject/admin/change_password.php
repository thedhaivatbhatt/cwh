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
        <h1>Settings</h1>
      </div>
      <!-- End Page Title -->
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title border-bottom">Change Password</h5>
                <form class="row g-3">
               
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Existing Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">New Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Confirm New Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
              </div>
            </div>
            <!-- end of card -->
          </div>
          <!--end of column -->
        </div>
        <!--end of row-->
      </section>
    </main>
    <?php require_once("inc/script.php"); ?>
  </body>
</html>