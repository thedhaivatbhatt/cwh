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
								<h3>Design Template</h3>
							</div>
							<div class="card-header">
								<h5 class="card-title border-bottom">Add new template</h5>
								<form class="row g-3">

									<div class="col-md-4">
										<div class="form-floating">
											<select class="form-select" id="categoryid" name="categoryid" aria-label="State">
												<option selected="">Dummy category</option>
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
											<textarea class="form-control" placeholder="description" id="description" name="description" style="height: 95px;"></textarea>
											<label for="description">Description</label>
										</div>
									</div>
									<div class="text-end">
										<button type="submit" class="btn btn-primary">Save</button>
										<button type="reset" class="btn btn-secondary">Reset</button>
									</div>
								</form>
							</div>
							<div class="card-body">
								<table id="table_id" class="table datatable dataTable-table">
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