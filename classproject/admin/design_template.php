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
        <h1>Design Template</h1>
      </div>
      <!-- End Page Title -->
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title border-bottom">Add new template</h5>
                <form class="row g-3">
          
                <div class="col-md-4">
                  <div class="form-floating">
                        <select class="form-select" id="categoryid" name="categoryid" aria-label="State">
                            <option selected>Dummy category</option>
                            <option value="1">another dummy category</option>
                        </select>
                        <label for="categoryid">select category</label>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="Title" name="Title" placeholder="Title">
                    <label for="title">Title</label>
                  </div>
                </div>
                <div class="col-md-4">
                    <label for="filphoto">select photo</label>
                    <input type="file" class="form-control-file" id="filphoto">
                </div>
                <div class="col-md-8">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="description" id="description"  name="description" style="height: 100px;"></textarea>
                        <label for="description">Description</label>
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
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title border-bottom">Existing design template</h5>
                <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th>Task</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                        <a href='#'><i class="bi bi-trash-fill"></i></a>
                        <a href='#'><i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>Template title</td>
                    <td>Dummary category</td>
                    <td>
                        <img src="https://www.picsum.photos/100">
                    </td>
                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate accusamus pariatur cumque, hic delectus perferendis tempore aperiam impedit itaque optio, quis laborum explicabo corrupti veniam qui vitae minima excepturi omnis!</td>
                  </tr>
                </tbody>
              </table>
              </div>
            </div>
            <!-- end of card -->
          </div>
          <!--end of column -->
        </div>
      </section>
    </main>
    <?php require_once("inc/script.php"); ?>
  </body>
</html>