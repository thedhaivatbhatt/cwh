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
        <h1>Operators Management</h1>
      </div>
      <!-- End Page Title -->
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title border-bottom">Add new operators</h5>
                <form class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id='email' name='email' placeholder="Email" required>
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="password" name='password' placeholder="Password">
                    <label for="password">Password</label>
                  </div>
                </div>
                
                
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="fullname" name='fullname' placeholder="Operator's fullname">
                    <label for="adsize">Fullname</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="number" class="form-control" id="mobile" name='mobile' placeholder="Mobile">
                    <label for="mobile">Mobile</label>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="date" class="form-control" id="dob" name='dob' placeholder="Date of birth">
                        <label for="sample">Select birth date</label>
                  </div>
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
              </div>
            </div>
            <!-- end of card -->
          </div>
          <!--end of column -->
        </div>
        <!--end of row-->
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-body">
                <h5 class="card-title border-bottom">Existing Categories</h5>
                <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">BirthDate</th>
                    <th scope="col">Last Login</th>
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
      </section>
    </main>
    <?php require_once("inc/script.php"); ?>
  </body>
</html>