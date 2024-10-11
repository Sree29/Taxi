<!DOCTYPE html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>City Drivers</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg" />
	<!-- Place favicon.ico in the root directory -->

	<!-- ========================= CSS here ========================= -->
	<link rel="stylesheet" href="assets/css/bootstrap-5.0.0-alpha-2.min.css" />
	<link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
	<link rel="stylesheet" href="assets/css/animate.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<style>
		.modal-body {
			padding: 20px;
			/* Add padding around the modal body */
		}

		.form-group {
			margin-bottom: 20px;
			/* Add space between form elements */
		}

		.modal-header {
			background-color: #f8f9fa;
			/* Light background for the header */
			border-bottom: 1px solid #dee2e6;
			/* Light border at the bottom */
		}

		.modal-title {
			color: #343a40;
			/* Darker color for title */
		}

		.btn-primary {
			background-color: #007bff;
			/* Customize button color */
			border-color: #007bff;
			/* Customize button border color */
		}

		.btn-primary:hover {
			background-color: #0056b3;
			/* Darker shade on hover */
			border-color: #004085;
			/* Darker border on hover */
		}

		.btn-secondary {
			background-color: #6c757d;
			/* Secondary button color */
			border-color: #6c757d;
			/* Secondary button border color */
		}

		.hero-btns .main-btn {
			padding: 8px 15px;
			/* Adjust padding for smaller buttons */
			font-size: 14px;
			/* Reduce font size */
			border-radius: 5px;
			/* Optional: change border radius */
		}

		.nav-item.active a {
			color: black;

		}

		.nav-item.active a:hover {
			color: black;

		}

		body,
		html {
			width: 100%;
			overflow-x: hidden;
			/* Hides any overflow */
		}
	</style>
</head>

<body>


	<!-- ========================= preloader start ========================= -->
	<div class="preloader">
		<div class="loader">
			<div class="ytp-spinner">
				<div class="ytp-spinner-container">
					<div class="ytp-spinner-rotator">
						<div class="ytp-spinner-left">
							<div class="ytp-spinner-circle"></div>
						</div>
						<div class="ytp-spinner-right">
							<div class="ytp-spinner-circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- preloader end -->


	<!-- ========================= header start ========================= -->
	<header class="header">
		<div class="navbar-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg">
							<a class="navbar-brand" href="index.html">
								<!-- <img src="assets/img/logo/logo.svg" alt="Logo" /> -->
								<img src="images/logo.png" alt="Taxi Logo" style="width: 90px; height: auto;">

							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
								<ul id="nav" class="navbar-nav ml-auto">
									<li class="nav-item active">
										<a class="page-scroll" href="{{ route('user.index') }}">Home</a>
									</li>
									<li class="nav-item ">
										<a class="page-scroll" href="{{ route('user.index') }}">About</a>
									</li>

									<li class="nav-item">
										<a class="page-scroll" href="{{ route('user.index') }}">Services</a>

									</li>
									<li class="nav-item ">
										<a class="page-scroll" href="{{ route('user.index') }}">Testimonials</a>
									</li>
									<li class="nav-item"><a href="{{ route('user.cars') }}">Our Cars</a></li>
									<li class="nav-item"><a href="{{ route('user.pricing') }}">Pricing</a></li>
									<li class="nav-item"><a href="{{ route('user.contact') }}">Contacts</a></li>

								</ul>
							</div>
							<!-- navbar collapse -->
						</nav>
						<!-- navbar -->
					</div>
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- navbar area -->
	</header>
	<!-- ========================= header end ========================= -->

	<!-- ========================= hero-section start ========================= -->
	<section id="home" class="hero-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="hero-content">
						<h1 class="wow fadeInUp" data-wow-delay=".2s">Fast & Easy Way To Book A Taxi</h1>
						<p class="wow fadeInUp" data-wow-delay=".4s">Embark on your next adventure with our hassle-free
							car booking service. Find the perfect ride for every destination, ensuring your journey is
							as memorable as the destination itself.

						</p>
						<div class="hero-btns">
							<a href="#" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s" data-toggle="modal"
								data-target="#bookingModal" data-car-name="Tata Nexon"
								data-car-price="₹4000">Booking</a>
							<a href="#" class="main-btn btn-hover" data-toggle="modal"
								data-target="#selectDriverModal">Driver</a>

						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="hero-img wow fadeInUp" data-wow-delay=".5s">
						<img src="assets/img/hero/hero-img.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="hero-shape">
			<img src="assets/img/hero/hero-shape-1.svg" alt="" class="shape shape-1">
		</div>
	</section>
	<!-- ========================= hero-section end ========================= -->

	<!-- Booking Modal -->
	<!-- <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="bookingModalLabel">Booking Information</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="pickup-location">Pick Up Location:</label>
							<input type="text" id="pickup-location" name="pickup-location" class="form-control"
								placeholder="Enter Pick Up Location" required>
						</div>
						<div class="form-group mt-3">
							<label for="dropoff-location">Drop Off Location:</label>
							<input type="text" id="dropoff-location" name="dropoff-location" class="form-control"
								placeholder="Enter Drop Off Location" required>
						</div>
						<div class="form-group mt-3">
							<label for="pickup-date">Pick Up Date:</label>
							<input type="date" id="pickup-date" name="pickup-date" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<label for="dropoff-date">Drop Off Date:</label>
							<input type="date" id="dropoff-date" name="dropoff-date" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<label for="pickup-time">Pick Up Time:</label>
							<input type="time" id="pickup-time" name="pickup-time" class="form-control" required>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Confirm Booking</button>
				</div>
			</div>
		</div>
	</div> -->

	<div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="bookingModalLabel">Booking Information</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- Laravel form to store booking details -->
					<form action="{{ route('user.booking.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<label for="pickup-location">Pick Up Location:</label>
							<input type="text" id="pickup-location" name="pick_up_location" class="form-control"
								placeholder="Enter Pick Up Location" required>
						</div>
						<div class="form-group mt-3">
							<label for="dropoff-location">Drop Off Location:</label>
							<input type="text" id="dropoff-location" name="drop_off_location" class="form-control"
								placeholder="Enter Drop Off Location" required>
						</div>
						<div class="form-group mt-3">
							<label for="pickup-date">Pick Up Date:</label>
							<input type="date" id="pickup-date" name="pick_up_date" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<label for="dropoff-date">Drop Off Date:</label>
							<input type="date" id="dropoff-date" name="drop_off_date" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<label for="pickup-time">Pick Up Time:</label>
							<input type="text" id="pickup-time" name="pick_up_time" class="form-control" required>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Confirm Booking</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Select Driver Modal -->
	<div class="modal fade" id="selectDriverModal" tabindex="-1" role="dialog" aria-labelledby="selectDriverModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="selectDriverModalLabel">Select a Driver</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('user.driver.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<label for="driver-select">Choose Driver:</label>
							<select id="driver-select" name="driver-select" class="form-control" required>
								<option value="">Select a Driver</option>
								<option value="John Doe">John Doe</option>
								<option value="Jane Smith">Jane Smith</option>
								<option value="Mark Brown">Mark Brown</option>
							</select>
						</div>
						<div class="form-group mt-3">
							<label for="pickup-location">Pickup Location:</label>
							<input type="text" id="pickup-location" name="pickup-location" class="form-control"
								placeholder="Enter Pickup Location" required>
						</div>
						<div class="form-group mt-3">
							<label for="dropoff-location">Drop Off Location:</label>
							<input type="text" id="dropoff-location" name="dropoff-location" class="form-control"
								placeholder="Enter Drop Off Location" required>
						</div>
						<div class="form-group mt-3">
							<label for="pickup-date">Pickup Date:</label>
							<input type="date" id="pickup-date" name="pickup-date" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<label for="dropoff-date">Drop Off Date:</label>
							<input type="date" id="dropoff-date" name="dropoff-date" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<label for="pickup-time">Pick Up Time:</label>
							<input type="text" id="pickup-time" name="pickup_time" class="form-control"
								placeholder="e.g. 1:00 PM" required>
						</div>


						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Select Driver</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>



	<!-- ========================= about-section start ========================= -->
	<section id=about class="search-section pt-0 ">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-7 col-lg-6 order-last order-lg-first">
					<div class="search-content">
						<div class="section-title mb-40">
							<h1 class="mb-40 wow fadeInUp" data-wow-delay=".2s">About Us</h1>
							<p class="wow fadeInUp" data-wow-delay=".4s">Since its establishment in 1999, City Drivers
								has been a strong advocate of experiential and road travel, offering a unique and
								immersive experience beyond being just a logistics provider. Our commitment to the car
								rental service industry spans 16 years, where we've gone beyond being a mere taxi
								service provider. We see road travel as an opportunity to observe gradual changes in
								culture, climate, and scenery, appreciating remarkable richness and diversity while
								acknowledging underlying continuity. City Drivers highly values this sensitivity,
								appreciation for diversity, and spirit of adventure, actively promoting and embodying
								these principles. Whether you're looking to rent a car or explore Savaari car rentals,
								our mission is clear: 'Making India fall in love with Road Travel.'</p>
						</div>
						<p>Join us and enjoy a ride that meets your expectations and goes beyond.</p>
					</div>
				</div>

				<div class="col-xl-5 col-lg-6">
					<div class="search-img text-lg-right">
						<img src="assets/img/search/search-img.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========================= about-section end ========================= -->

	<!-- ========================= service-section start ========================= -->

	<section id="services" class="tracking-section pt-40">
		<div class="tracking-shape">
			<img src="assets/img/plan/plan-shape.svg" alt="" class="shape shape-1">
		</div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-xl-7">
					<div class="tracking-image">
						<img src="assets/img/plan/plan-img.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-xl-5">
					<div class="tracking-content">
						<div class="section-title mb-50">
							<h1 class="mb-40 wow fadeInUp" data-wow-delay=".2s">Our Services</h1>
							<p class="wow fadeInUp" data-wow-delay=".4s">What Services we offer to our clients.</p>
						</div>

						@foreach ($services as $service) 
							<div class="single-plan">
								<div class="icon-style color-{{ ($loop->index % 3) + 1 }}">

									<i class="{{ $service->service_icon }}"></i>
								</div>

								<div class="content">
									<h3>{{ $service->service_name }}</h3>

									<p>{{ $service->description }}</p>

								</div>
							</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- ========================= service-section end ========================= -->

	<section id="testimonial" class="feature-section pt-90 pb-150">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center mb-30">
					<h1 class="mb-25">Testimonials</h1>
				</div>
			</div>

			<div class="row">
				@foreach ($testimonials as $testimonial)
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="single-feature text-center">
							<div class="icon color-{{ $loop->index % 3 + 1 }}">
								<i class="{{ $testimonial->icon }}"></i>
							</div>
							<div class="content">
								<h3>{{ $testimonial->name }}</h3>
								<p>{{ $testimonial->description }}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>


	<!-- ========================= testimonial-section end ========================= -->


	<!-- ========================= footer start ========================= -->
	<footer id="footer" class="footer">
		<div class="footer-shape">
			<img src="assets/img/footer/footer-shape-1.svg" alt="" class="shape shape-1">
		</div>
		<div class="container">
			<div class="widget-wrapper">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="footer-widget">
							<div class="logo">
								<a href="index.html">
									<img src="images/logo.png" alt="Taxi Logo" style="width: 90px; height: auto;">

									<!-- <img src="assets/img/logo/logo.svg" alt="" class="logo-1"> -->
								</a>
							</div>
							<ul class="socials">
								<li>
									<a href="javascript:void(0)"> <i class="lni lni-facebook-filled"></i> </a>
								</li>
								<li>
									<a href="javascript:void(0)"> <i class="lni lni-twitter-filled"></i> </a>
								</li>
								<li>
									<a href="javascript:void(0)"> <i class="lni lni-instagram-filled"></i> </a>
								</li>
								<li>
									<a href="javascript:void(0)"> <i class="lni lni-linkedin-original"></i> </a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="footer-widget">
							<h3>Features</h3>
							<ul class="links">
								<li> <a href="javascript:void(0)">Quick & Easy Booking Process</a> </li>

								<li> <a href="javascript:void(0)">Track Your Journey Live</a> </li>
								<li> <a href="javascript:void(0)">Multiple Payment Options Available</a> </li>
								<li> <a href="javascript:void(0)">24/7 Customer Support</a> </li>
							</ul>
						</div>
					</div>


					<div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
						<div class="footer-widget">
							<h3>Information</h3>
							<ul class="links">
								<li> <a href="javascript:void(0)">Home</a> </li>
								<li> <a href="javascript:void(0)">Abou Us</a> </li>
								<li> <a href="javascript:void(0)">Serives</a> </li>
								<li> <a href="javascript:void(0)">Testimonials</a> </li>
							</ul>
						</div>
					</div>

					<div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
						<div class="footer-widget">
							<h3>Support</h3>
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">123 Street Kerala,
										India</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+91
											2323232323</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">info@citydrivers.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="copy-right-wrapper">
				<!-- <p>Designed and Developed by <a href="https://graygrids.com" rel="nofollow" target="_blank">GrayGrids</a></p> -->
				<p>© <span>Copyright</span> <strong class="px-1 sitename">City Drivers</strong> <span>All Rights
						Reserved</span></p>
			</div>
		</div>


	</footer>

	<!-- ========================= footer end ========================= -->

	<!-- ========================= scroll-top ========================= -->
	<a href="#" class="scroll-top btn-hover">
		<i class="lni lni-chevron-up"></i>
	</a>

	<!-- ========================= JS here ========================= -->
	<script src="assets/js/bootstrap.5.0.0.alpha-2-min.js"></script>
	<script src="assets/js/count-up.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>