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

        .car-card {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;

        }

        .car-img {
            background-size: cover;
            background-position: center;
            height: 200px;
            transition: filter 0.3s ease;
            /* Smooth transition for the image filter */
        }

        .car-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.5);
            /* Light overlay color */
            opacity: 0;
            /* Initially hidden */
            transition: opacity 0.3s ease;
            /* Smooth transition for opacity */
            z-index: 1;
            /* Position above the image */
        }

        .car-card:hover::before {
            opacity: 1;
            /* Show overlay on hover */
        }

        .car-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .car-card:hover .car-img {
            filter: brightness(70%);
            /* Darken the image on hover */
        }

        body {
            padding-top: 150px;

        }

        .main-btn.btn-hover {
            padding: 10px 10px;
            /* Adjust padding to reduce button height and width */
            font-size: 15px;
            /* Adjust font size for smaller text */
            width: 100px;
            /* Set a fixed width for the button */
            line-height: normal;
            /* Adjust line height for proper alignment */
            border-radius: 4px;
            /* Optional: Adjust border radius for rounded corners */
            text-align: center;
            /* Center align text */
            position: relative;
            /* Ensure button is above the overlay */
            z-index: 2;
            /* Position above the overlay */
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
                                    <li class="nav-item"><a href="{{ route('user.index') }}">Home</a></li>
                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}">About</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}">Services</a>

                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}">Testimonials</a>
                                    </li>
                                    <li class="nav-item active"><a href="{{ route('user.cars') }}">Our Cars</a></li>
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

    <!-- ========================= our cars section start ========================= -->

    <section id="cars" class="container section-padding pt-0 pb-150">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12" style="padding-bottom: 40px;">
                <h1 class="text-black">Our Cars</h1>
            </div>
        </div>

        <div class="row" style="padding-top: 10px;">
            @foreach ($cars as $car)
                <div class="col-md-4">
                    <div class="card car-card">
                        <!-- <div class="car-img" ><img src="{{ asset('images/' . $car->car_image) }}" class="card-img-top" alt="{{ $car->car_name }}"></div> -->
                        <div class="car-img">
                            <img src="{{ asset('storage/images/' . $car->car_image) }}" class="card-img-top"
                                alt="{{ $car->car_name }}">
                        </div>



                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $car->car_name }}</b></h5>
                            <p class="card-text">₹{{ $car->price_per_day }} <span>/day</span></p><br>
                            <a href="/pricings" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">
                                Details
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <!-- ========================= our cars section end ========================= -->

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