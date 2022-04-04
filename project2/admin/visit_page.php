<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="TemplateMo">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<title>Education Meeting HTML5 Template</title>

	<!-- Bootstrap core CSS -->
	<link href="theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="theme/assets/css/fontawesome.css">
	<link rel="stylesheet" href="theme/assets/css/templatemo-edu-meeting.css">
	<link rel="stylesheet" href="theme/assets/css/owl.css">
	<link rel="stylesheet" href="theme/assets/css/lightbox.css">
	<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>

	<!-- Sub Header -->

	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="index.html" class="logo">
							Online Advertise Book
						</a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
							<li><a href="meetings.html">Meetings</a></li>
							<li class="scroll-to-section"><a href="#apply">Advertise Type</a></li>
							<li class="has-sub">
								<a href="javascript:void(0)">Pages</a>
								<ul class="sub-menu">
									<li><a href="meetings.html">Upcoming Meetings</a></li>
									<li><a href="meeting-details.html">Meeting Details</a></li>
								</ul>
							</li>
							<li class="scroll-to-section"><a href="#courses">Courses</a></li>
							<li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
						</ul>
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

	<!-- ***** Main Banner Area Start ***** -->
	
	<!-- ***** Main Banner Area End ***** -->
	

	
	<section class="our-courses" id="courses">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<h2>Offical website for E-Paper's</h2>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="owl-courses-item owl-carousel">
						<div class="item">
							<img src="img/Screenshot 2022-04-04 120645.png" alt="Course One">
							<div class="down-content">
							<a href="https://epaper.divyabhaskar.co.in/bhavnagar/71/11082012/0/1/">	<h4>This Our Divya Bhaskar(Saurashtra Samachar) Offical website for E-Paper</h4></a>
								<div class="info">
									<div class="row">
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/59f8633e310d7.jpg" alt="Course Two">
							<div class="down-content">
								<a href="https://sandeshepaper.in/category/35/bhavnagar"><h4>This Our Sandesh Newspaper Offical website for E-Paper</h4></a>
								<div class="info">
									<div class="row">
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/Gujaratsam.jpg" alt="">
							<div class="down-content">
								<a href="http://www.epapergujaratsamachar.com/"><h4>This Our Gujrat Samachar Offical website for E-Paper</h4></a>
								<div class="info">
									<div class="row">
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/times-of-india-500x500.png" alt="">
							<div class="down-content">
								<a href="https://epaper.timesgroup.com/home"><h4>This Our Times of India Offical website for E-Paper</h4></a>
								<div class="info">
									<div class="row">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<!-- Scripts -->
	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script src="theme/assets/js/isotope.min.js"></script>
	<script src="theme/assets/js/owl-carousel.js"></script>
	<script src="theme/assets/js/lightbox.js"></script>
	<script src="theme/assets/js/tabs.js"></script>
	<script src="theme/assets/js/video.js"></script>
	<script src="theme/assets/js/slick-slider.js"></script>
	<script src="theme/assets/js/custom.js"></script>
	<script>
		//according to loftblog tut
		$('.nav li:first').addClass('active');

		var showSection = function showSection(section, isAnimate) {
			var
				direction = section.replace(/#/, ''),
				reqSection = $('.section').filter('[data-section="' + direction + '"]'),
				reqSectionPos = reqSection.offset().top - 0;

			if (isAnimate) {
				$('body, html').animate({
						scrollTop: reqSectionPos
					},
					800);
			} else {
				$('body, html').scrollTop(reqSectionPos);
			}

		};

		var checkSection = function checkSection() {
			$('.section').each(function() {
				var
					$this = $(this),
					topEdge = $this.offset().top - 80,
					bottomEdge = topEdge + $this.height(),
					wScroll = $(window).scrollTop();
				if (topEdge < wScroll && bottomEdge > wScroll) {
					var
						currentId = $this.data('section'),
						reqLink = $('a').filter('[href*=\\#' + currentId + ']');
					reqLink.closest('li').addClass('active').
					siblings().removeClass('active');
				}
			});
		};

		$('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
			e.preventDefault();
			showSection($(this).attr('href'), true);
		});

		$(window).scroll(function() {
			checkSection();
		});
	</script>
</body>

</body>

</html>