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
        p {
            line-height: 1.8;
            color: #666;
        }

        /* Buttons */
        .btn-primary {
            background-color: #4e6ef1;
            border-color: #4e6ef1;
            color: #fff;
            padding: 10px 20px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #4e6ef1;
            border-color: #4e6ef1;
            box-shadow: 0px 4px 10px rgba(255, 109, 97, 0.3);
        }

        /* Contact Form */
        .contact-form-wrapper {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        /* Section Titles */
        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        .section-title p {
            font-size: 1rem;
            color: #666;
        }

        header {
            position: fixed;
            width: 100%;
            z-index: 1000;
            /* Ensures the header stays above other content */
            top: 0;
            left: 0;
        }

        .map-responsive {
            position: relative;
            padding-bottom: 0;
            /* Remove padding so it stretches */
            height: 100%;
            /* Ensure it takes full height of the parent */
        }

        .map-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* Ensure iframe also takes full height */
        }

        /* Ensure the logo image is responsive */
        .navbar-brand img {
            max-width: 100%;
            height: auto;
        }

        /* Section titles responsive */
        .section-title h1 {
            font-size: 2.5rem;
        }

        @media (max-width: 768px) {
            .section-title h1 {
                font-size: 2rem;
            }

            .section-title p {
                font-size: 0.9rem;
            }

            /* Contact form responsiveness */
            .contact-form-wrapper {
                padding: 20px;
            }

            /* Footer widget responsiveness */
            .footer-widget h3 {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 576px) {
            .section-title h1 {
                font-size: 1.8rem;
            }

            .section-title p {
                font-size: 0.8rem;
            }

            .footer-widget h3 {
                font-size: 1rem;
            }

            /* Adjust map for small devices */
            .map-responsive iframe {
                height: 300px;
            }
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
    <header class="header"></header>
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
                                <li class="nav-item"><a href="{{ route('user.pricing') }}">Pricing</a></li>
                                <li class="nav-item active"><a href="{{ route('user.contact') }}">Contacts</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar area -->

    <!-- Contact Us Section -->
    <section id="contact" class="contact-section pt-30 pb-150">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-left px-0 pt-0">
                    <div class="section-title">
                        <h1 style="color: #1d2a5d;">Contact Us</h1>
                        <p>If you have any questions or need help, feel free to contact us!</p><br>
                    </div>
                </div>
            </div>

            <div class="row mt-4 d-flex align-items-stretch">
                <!-- Contact Form -->
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="contact-form-wrapper w-100">
                        <form id="contact-form" action="{{ route('user.contact.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone:</label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Phone"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="message">Message:</label>
                                <textarea id="message" name="message" class="form-control" rows="5"
                                    placeholder="Your Message" required></textarea>
                            </div>
                            <div class="form-group text-center" style="position: relative; z-index: 999;">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>

                        </form>
                    </div>
                </div>

                <!-- Contact Info with Map -->
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="contact-info-wrapper w-100">
                        <!-- Embedded Google Map -->
                        <div class="map-responsive w-100 h-100">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d502964.2944092993!2d75.97124856516207!3d9.983071006728155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d3368b217ef%3A0x7f896a781ded28b1!2sKerala!5e0!3m2!1sen!2sin!4v1628780294695!5m2!1sen!2sin"
                                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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