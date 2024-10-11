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
        .custom-table th {
            background-color: #007bff;
            /* Bootstrap primary color */
            color: white;
            font-size: 20px !important;
            /* Adjust the font size for table headers */
            text-align: center;
            /* Horizontally center the text in table headers */
            vertical-align: middle;
            /* Vertically align to the middle */
            padding: 40px;
            /* Adjust padding for header cells */
            line-height: 1.2;
            /* Adjust line-height for header cells */

        }

        .custom-table td {
            vertical-align: middle;
            /* Center align content vertically */
            text-align: center;
            /* Center align content horizontally */
            padding: 0px;
            /* Reduce padding for data cells */
            line-height: 1.2;
            /* Adjust line-height for data cells to reduce height */
        }

        .custom-table th:nth-child(2) {
            background-color: white;
            /* Color for Per Hour Rate header */

        }

        .custom-table th:nth-child(1) {
            background-color: white;
            /* Color for Per Hour Rate header */

        }

        .custom-table th:nth-child(3) {
            background-color: blue;
            /* Color for Per Hour Rate header */
            color: #000;
            /* Change text color for readability */
        }

        .custom-table th:nth-child(4) {
            background-color: rgb(63, 57, 57);
            /* Color for Per Day Rate header */
            color: #000;
            /* Change text color for readability */
        }

        .custom-table th:nth-child(5) {
            background-color: black;
            /* Color for Leasing header */
            color: white;
            /* Keep text white for contrast */
        }

        .custom-table td {
            vertical-align: middle;
            /* Center align content vertically */
            text-align: center;
            /* Center align content horizontally */
            font-size: 14px !important;
            /* Adjust the font size for table data */
            padding: 5px;
            /* Adjust padding for data cells */
            line-height: 1.2;
            /* Adjust line-height for data cells */
        }

        .custom-table td:nth-child(3) {
            background-color: #eeecec;
            /* Light ash color for Per Hour Rate content */
            color: #000;
            /* Change text color for readability */
        }

        .custom-table td:nth-child(4) {
            background-color: #eeecec;
            /* Light ash color for Per Day Rate content */
            color: #000;
            /* Change text color for readability */
        }

        .custom-table td:nth-child(5) {
            background-color: #eeecec;
            /* Light ash color for Leasing content */
            color: #000;
            /* Change text color for readability */
        }

        .car-image {
            display: flex;
            /* Use flexbox for centering */
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */

        }

        .car-image .img {
            width: 200px;
            /* Set a fixed width for images */
            height: 150px;
            /* Set a fixed height for images */
            background-size: contain;
            /* Ensure the entire image is contained within the div */
            background-repeat: no-repeat;
            /* Prevent the image from repeating */
            background-position: center;
            /* Center the image */
            margin: auto;
            /* Center the image within the cell */
        }


        .form-element {
            margin-bottom: 15px;
            /* Space between form elements */
        }

        .custom-table .per-hour-rate:hover,
        .custom-table .per-day-rate:hover,
        .custom-table .leasing:hover {
            background-color: inherit;
            /* Keep background color the same as normal state */
        }

        .custom-table td,
        .custom-table th {
            border-collapse: collapse;
            /* Ensure borders don't overlap */
        }


        .nav-item.active a {
            color: black;

        }

        .nav-item.active a:hover {
            color: black;

        }


        .footer {
            width: 100%;
            /* Ensure the footer takes full width */
            overflow: hidden;
            /* Prevent overflow */
            padding: 30px 0;
            /* Adjust padding */
            box-sizing: border-box;
            /* Include padding in width calculations */
        }

        .footer .container {
            max-width: 1200px;
            /* Limit the maximum width of the container */
            padding: 0 15px;
            /* Add horizontal padding */
            margin: 0 auto;
            /* Center the container */
        }

        .footer .widget-wrapper {
            display: flex;
            flex-wrap: wrap;
            /* Allow wrapping for responsiveness */
            justify-content: space-between;
            /* Space items evenly */
        }

        .footer .footer-widget {
            flex: 1 1 200px;
            /* Flex-grow and set a base width */
            margin: 10px;
            /* Margin for spacing */
        }

        .footer h3 {
            margin-bottom: 10px;
            /* Space below headings */
        }

        @media (max-width: 768px) {
            .footer .widget-wrapper {
                flex-direction: column;
                /* Stack widgets on smaller screens */
            }

            .footer .footer-widget {
                margin: 15px 0;
                /* Space between stacked items */
            }
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
                                    <li class="nav-item"><a href="{{ route('user.cars') }}">Our Cars</a></li>
                                    <li class="nav-item active"><a href="{{ route('user.pricing') }}">Pricing</a></li>
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


    <section class="ftco-section ftco-cart pb-150 pt-200">
        <h1 class="text-black" style="padding-left: 50px; padding-top: 0;">Pricing</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="car-list">
                        <div class="table-responsive">
                            <table class="table custom-table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th
                                            style="width: 10%; text-align: center; vertical-align: middle; color: white;">
                                            Image</th>
                                        <th
                                            style="width: 20%; text-align: center; vertical-align: middle; color: white;">
                                            Car Name</th>
                                        <th
                                            style="width: 20%; text-align: center; vertical-align: middle; color: white; border: 2px solid white;">
                                            Per Hour Rate</th>
                                        <th
                                            style="width: 20%; text-align: center; vertical-align: middle; color: white; border: 2px solid white;">
                                            Per Day Rate</th>
                                        <th
                                            style="width: 20%; text-align: center; vertical-align: middle; color: white; border: 2px solid white;">
                                            Leasing</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pricings as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/' . $item->image) }}"
                                                    alt="{{ $item->car_name }}" style="width: 200px;">
                                            </td>

                                            <td class="product-name">
                                                <h4 style="font-weight: 100; color: black">{{ $item->car_name }}</h4>
                                                <!-- Use $item here -->
                                            </td>

                                            <td class="price shadow-effect per-hour-rate"
                                                style="color: #f5f5f5; border: 2px solid white;">
                                                <div class="price-rate">
                                                    <h4>
                                                        <span class="num"
                                                            style="color: #506cf4; font-weight: 300; font-size: larger;">
                                                            <small class="currency">₹</small> {{ $item->per_hour_rate }}
                                                            <!-- Use $item here -->
                                                        </span>
                                                        <span class="per"
                                                            style="color: #948f8f; font-weight: 10; font-size: medium">/per
                                                            hour</span>
                                                    </h4>
                                                </div>
                                            </td>

                                            <td class="price shadow-effect per-day-rate"
                                                style="color: #f5f5f5; border: 2px solid white;">
                                                <div class="price-rate">
                                                    <h4>
                                                        <span class="num"
                                                            style="color: #506cf4; font-weight: 300; font-size: larger;">
                                                            <small class="currency">₹</small> {{ $item->per_day_rate }}
                                                            <!-- Use $item here -->
                                                        </span>
                                                        <span class="per"
                                                            style="color: #948f8f; font-weight: 10; font-size: medium">/per
                                                            day</span>
                                                    </h4>
                                                </div>
                                            </td>

                                            <td class="price shadow-effect leasing"
                                                style="color: #f5f5f5; border: 2px solid white;">
                                                <div class="price-rate">
                                                    <h4>
                                                        <span class="num"
                                                            style="color: #506cf4; font-weight: 300; font-size: larger;">
                                                            <small class="currency">₹</small> {{ $item->leasing_rate }}
                                                            <!-- Use $item here -->
                                                        </span>
                                                        <span class="per"
                                                            style="color: #948f8f; font-weight: 10; font-size: medium">/per
                                                            month</span>
                                                    </h4>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div> <!-- End Responsive Table Wrapper -->
                    </div> <!-- End car-list -->
                </div> <!-- End col-md-12 -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>

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