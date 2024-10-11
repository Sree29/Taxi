<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - City Drivers </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="images/taxiii.png" width="50px" height="100" alt="Logo">
        <span class="d-none d-lg-block">City Drivers</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('admin.index') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.booking') }}">
          <i class="bi bi-file-earmark-text"></i>
          <span>Bookings</span>
        </a>
      </li> <!-- End Bookings page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.driver') }}">
          <i class="bi bi-person"></i>
          <span>Driver</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.service') }}">
          <i class="bi bi-card-checklist"></i>
          <span>Services</span>
        </a>
      </li> <!-- End Services page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.car') }}">
          <i class="bi bi-car-front-fill"></i>
          <span>Our Cars</span>
        </a>
      </li> <!-- End Our cars page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.pricing') }}">
          <i class="bi bi-cash"></i>
          <span>Pricing</span>
        </a>
      </li><!-- End pricing Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.testimonial') }}">
          <i class="bi bi-person-circle"></i>
          <span>Testimonial</span>
        </a>
      </li> <!-- End Testimonial page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.contact') }}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="row">
      <!-- Service Card -->
      <div class="col-xxl-4 col-md-4">
        <a href="{{ route('admin.service') }}" class="card-link">
          <div class="card info-card revenue-card hover-effect"
            style="background:#fff; border: none; box-shadow: rgba(247, 235, 1, 0.2) 0px 7px 29px 0px; height: 200px;">
            <div class="card-body d-flex align-items-center">
              <div class="d-flex flex-column flex-grow-1 text-center">
                <h4 class="card-title">Services</h4>
                <h6 class="mb-0">{{ $totalServices }}</h6> <!-- Display total services -->
                <p class="mb-0">Total number of services</p>
              </div>
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ml-3"
                style="background-color: white; width: 60px; height: 60px; border-radius: 50%; box-shadow: 0 0 15px 5px rgba(196, 194, 194, 0.3);">
                <i class="bi bi-card-checklist" style="font-size: 30px; color: #007bff;"></i>
                <!-- Increased size and color -->
              </div>
            </div>
          </div>
        </a>
      </div><!-- End Service Card -->


      <!-- Testimonials Card -->
      <div class="col-xxl-4 col-md-4">
        <a href="{{ route('admin.testimonial') }}" class="card-link">
          <div class="card info-card customers-card hover-effect"
            style="background:#fff; border: none; box-shadow: rgba(247, 235, 1, 0.2) 0px 7px 29px 0px; height: 200px;">
            <div class="card-body d-flex align-items-center">
              <div class="d-flex flex-column flex-grow-1 text-center">
                <h4 class="card-title">Testimonials</h4>
                <h6 class="mb-0">{{ $totalTestimonials }}</h6> <!-- Display total testimonials -->
                <p class="mb-0">Total testimonials</p>
              </div>
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ml-3"
                style="background-color: white; width: 60px; height: 60px; border-radius: 50%; box-shadow: 0 0 15px 5px rgba(196, 194, 194, 0.3);">
                <i class="bi bi-person-circle" style="font-size: 30px; color: #6f42c1;"></i>
                <!-- Increased size and color -->
              </div>
            </div>
          </div>
        </a>
      </div><!-- End Testimonials Card -->


      <!-- Our Cars Card -->
      <div class="col-xxl-4 col-md-4">
        <a href="{{ route('admin.car') }}" class="card-link">
          <div class="card info-card customers-card hover-effect"
            style="background:#fff; border: none; box-shadow: rgba(247, 235, 1, 0.2) 0px 7px 29px 0px; height: 200px;">
            <div class="card-body d-flex align-items-center">
              <div class="d-flex flex-column flex-grow-1 text-center">
                <h4 class="card-title">Our Cars</h4>
                <h6 class="mb-0">{{ $totalCars }}</h6> <!-- Display total testimonials -->
                
                <p class="mb-0">Total number of cars</p>
              </div>
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ml-3"
                style="background-color: white; width: 60px; height: 60px; border-radius: 50%; box-shadow: 0 0 15px 5px rgba(196, 194, 194, 0.3);">
                <i class="bi bi-car-front-fill" style="font-size: 30px; color: #28a745;"></i>
                <!-- Increased size and color -->
              </div>
            </div>
          </div>
        </a>
      </div><!-- End Our Cars Card -->


      <!-- Pricing Card -->
      <div class="col-xxl-4 col-md-4">
        <a href="{{ route('admin.pricing') }}" class="card-link">
          <div class="card info-card customers-card hover-effect"
            style="background:#fff; border: none; box-shadow: rgba(247, 235, 1, 0.2) 0px 7px 29px 0px; height: 200px;">
            <div class="card-body d-flex align-items-center">
              <div class="d-flex flex-column flex-grow-1 text-center">
                <h4 class="card-title">Pricing</h4>
                <h6 class="mb-0">{{ $totalPricing }}</h6> <!-- Display total pricing entries -->
                <p class="mb-0">Total pricing entries</p>
              </div>
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ml-3"
                style="background-color: white; width: 60px; height: 60px; border-radius: 50%; box-shadow: 0 0 15px 5px rgba(196, 194, 194, 0.3);">
                <i class="bi bi-cash" style="font-size: 30px; color: #17a2b8;"></i> <!-- Increased size and color -->
              </div>
            </div>
          </div>
        </a>
      </div><!-- End Pricing Card -->


      <!-- Contacts Card -->
      <div class="col-xxl-4 col-md-4">
        <a href="{{ route('admin.contact') }}" class="card-link">
          <div class="card info-card customers-card hover-effect"
            style="background:#fff; border: none; box-shadow: rgba(247, 235, 1, 0.2) 0px 7px 29px 0px; height: 200px;">
            <div class="card-body d-flex align-items-center">
              <div class="d-flex flex-column flex-grow-1 text-center">
                <h4 class="card-title">Contacts</h4>
                <h6 class="mb-0">{{ $totalContact }}</h6> <!-- Display total pricing entries -->
                <p class="mb-0">Total contact entries</p>
              </div>
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ml-3"
                style="background-color: white; width: 60px; height: 60px; border-radius: 50%; box-shadow: 0 0 15px 5px rgba(196, 194, 194, 0.3);">
                <i class="bi bi-telephone-fill" style="font-size: 30px; color: #17a2b8;"></i>
                <!-- Increased size and color -->
              </div>
            </div>
          </div>
        </a>
      </div><!-- End Contacts Card -->

      <!-- Bookings Card -->
      <div class="col-xxl-4 col-md-4">
        <a href="{{ route('admin.booking') }}" class="card-link">
          <div class="card info-card customers-card hover-effect"
            style="background:#fff; border: none; box-shadow: rgba(247, 235, 1, 0.2) 0px 7px 29px 0px; height: 200px;">
            <div class="card-body d-flex align-items-center">
              <div class="d-flex flex-column flex-grow-1 text-center">
                <h4 class="card-title">Bookings</h4>
                <h6 class="mb-0">{{ $totalBooking }}</h6> <!-- Display total pricing entries -->
                <p class="mb-0">Total booking entries</p>
              </div>
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ml-3"
                style="background-color: white; width: 60px; height: 60px; border-radius: 50%; box-shadow: 0 0 15px 5px rgba(196, 194, 194, 0.3);">
                <i class="bi bi-calendar-check" style="font-size: 30px; color: #dc3545;"></i>
                <!-- Increased size and color -->
              </div>
            </div>
          </div>
        </a>
      </div><!-- End Bookings Card -->

      <!-- Drivers Card -->
      <div class="col-xxl-4 col-md-4">
        <a href="{{ route('admin.driver') }}" class="card-link">
          <div class="card info-card customers-card hover-effect"
            style="background:#fff; border: none; box-shadow: rgba(247, 235, 1, 0.2) 0px 7px 29px 0px; height: 200px;">
            <div class="card-body d-flex align-items-center">
              <div class="d-flex flex-column flex-grow-1 text-center">
                <h4 class="card-title">Drivers</h4>
                <h6 class="mb-0">{{ $totalDrivers }}</h6> <!-- Display total pricing entries -->
                <p class="mb-0">Total driver booking entries</p>
              </div>
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center ml-3"
                style="background-color: white; width: 60px; height: 60px; border-radius: 50%; box-shadow: 0 0 15px 5px rgba(196, 194, 194, 0.3);">
                <i class="bi bi-person-fill" style="font-size: 30px; color: #ffc107;"></i>
                <!-- Increased size and color -->
              </div>
            </div>
          </div>
        </a>
      </div><!-- End Drivers Card -->


    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>City Drivers</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>