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
			<main id="main" class="main">
				<div class="pagetitle">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Customer Management</h5>
						</div>
					</div>
				</div>
				<!-- End Page Title -->
				<section class="section">

					<!--end of row-->
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h5 style="display: inline;"> Rahul Mehta(001) - settled Advertise(Payment)</h5>
										<span class="float-end" >
										<a href="booked_advertise.php" class="btn btn-success">Due Payment(paid)</a>
										</span>
										<hr>
									</div>
									

									<table id="table_id" class="table datatable dataTable-table">
										<thead>

											<tr>
												<th scope="col" data-sortable="" style="width: 4.32034%;"><a href="#" class="dataTable-sorter">#</a></th>
												<th scope="col" data-sortable="" style="width: 16.9652%;"><a href="#" class="dataTable-sorter">Type of Ad</a></th>
												<th scope="col" data-sortable="" style="width: 23.393%;" class="desc"><a href="#" class="dataTable-sorter">Template</a></th>
												<th scope="col" data-sortable="" style="width: 19.4942%;"><a href="#" class="dataTable-sorter">Ad Booking Dt.</a></th>
												<th scope="col" data-sortable="" style="width: 15.49%;"><a href="#" class="dataTable-sorter">Ad Dt.</a></th>
												<th scope="col" data-sortable="" style="width: 8.32455%;"><a href="#" class="dataTable-sorter">Days</a></th>
												<th scope="col" data-sortable="" style="width: 12.0126%;"><a href="#" class="dataTable-sorter">Amount</a></th>
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
		</div>
		</section>
		</main>

		<!-- Blank End -->


		<!-- Footer Start -->

		<?php
		// require_once("inc/footer.php");
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