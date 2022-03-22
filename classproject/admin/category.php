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
      <h1>Category Management</h1>
    </div>
    <!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title border-bottom">Add new category</h5>
              <form class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id='title' name='title' placeholder="Category title" required>
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
              <table class="table datatable  table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">File</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Ad Type</th>
                    <th scope="col">Type of <br> Advertise</th>
                    <th scope="col">Page No</th>
                    <th scope="col">Size</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>first ad <br>
                      <a href='#'><i class="bi bi-trash-fill"></i></a>
                      <a href='#'><i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                      <img src="https://picsum.photos/100" class="img-fluid">
                    </td>
                    <td>200</td>
                    <td>News Paper</td>
                    <td>Black White</td>
                    <td>10</td>
                    <td>10x12</td>
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