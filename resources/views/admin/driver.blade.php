<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin - City Drivers </title>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="icon" type="image" href="images/city_drivers_logo.png">

  <style>
    /* Info Card Styles */
    .info-card {
      background: #fff;
      /* White background */
      border: none;
      /* No border */
      box-shadow: rgba(247, 235, 1, 0.2) 0px 7px 29px 0px;
      /* Shadow */
      transition: box-shadow 0.3s ease, transform 0.3s ease;
      /* Smooth transition */
      position: relative;
      overflow: hidden;
    }

    .info-card:hover {
      box-shadow: rgba(247, 235, 1, 0.4) 0px 12px 35px 0px;
      /* Darker shadow on hover */
      transform: translateY(-5px);
      /* Slight lift effect on hover */
    }

    /* Card Icon Styles */
    .card-icon {
      background-color: white;
      /* Icon background */
      width: 90px;
      /* Width of icon */
      height: 60px;
      /* Height of icon */
      border-radius: 50%;
      /* Circle shape */
      box-shadow: 0 0 15px 5px rgba(196, 194, 194, 0.3);
      /* Shadow around icon */
      text-align: center;
      /* Center text */
      display: flex;
      /* Flexbox alignment */
      align-items: center;
      /* Center vertically */
      justify-content: center;
      /* Center horizontally */
      font-size: 14px;
      /* Font size */
      font-weight: bold;
      /* Bold text */
      line-height: 1;
      /* Line height */
    }

    /* Card Body Styles */
    .card-body {
      display: flex;
      /* Flexbox layout */
      align-items: center;
      /* Center items vertically */
      justify-content: space-between;
      /* Space between items */
    }

    .card-body .d-flex {
      flex-grow: 1;
      /* Allow flex items to grow */
      text-align: center;
      /* Center text */
    }

    .card-title {
      font-size: 1.25rem;
      /* Title font size */
    }

    .card-body h6 {
      font-size: 2rem;
      /* Increased font size for numbers */
      font-weight: bold;
      /* Bold numbers */
    }

    .card-body p {
      font-size: 0.875rem;
      /* Smaller font size for descriptions */
    }

    /* Table and Container Styles */
    .table {
      margin: 0 !important;
      /* Remove margin */
      padding: 0 !important;
      /* Remove padding */
    }

    .container {
      padding: 10 !important;
      /* Remove container padding */
    }

    .row {
      margin: 0 !important;
      /* Remove row margin */
    }

    .card {
      margin-bottom: 20px;
      /* Space below cards */
    }

    .card-body {
      padding: 1rem;
      /* Padding inside card body */
    }

    /* Modal Header and Footer Styles */
    .modal-header,
    .modal-footer {
      background-color: #f5f5f5;
      /* Modal background color */
      color: #000000;
      /* Modal text color */
    }


    /* General styles for buttons in the container */
    .d-flex button[data-bs-target*="editModal"],
    .d-flex button[data-bs-target*="deleteModal"] {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 30px;
      /* Width of the circle */
      height: 30px;
      /* Height of the circle */

      padding: 0;
      /* Remove default padding */
      font-size: 15px;
      /* Size of the icon */
      text-decoration: none;
      /* Remove underline */
      border: 2px solid transparent;
      /* Default border is transparent */
      color: #ffffff;
      /* Default icon color */
      transition: background-color 0.3s, border-color 0.3s, color 0.3s;
      /* Smooth transitions */
    }

    /* Edit button styling */
    .d-flex button[data-bs-target*="editModal"] {
      background-color: #007bff;
      /* Blue background */
      border-color: #007bff;
      /* Blue border */
    }

    /* Delete button styling */
    .d-flex button[data-bs-target*="deleteModal"] {
      background-color: #dc3545;
      /* Red background */
      border-color: #dc3545;
      /* Red border */
    }

    /* Hover effects for Edit button */
    .d-flex button[data-bs-target*="editModal"]:hover {
      background-color: #e9f5ff;
      /* Light blue background on hover */
      border-color: #007bff;
      /* Blue border on hover */
    }

    .d-flex button[data-bs-target*="editModal"]:hover i {
      color: #007bff;
      /* Icon color changes to blue on hover */
    }

    /* Hover effects for Delete button */
    .d-flex button[data-bs-target*="deleteModal"]:hover {
      background-color: #fbe9e9;
      /* Light red background on hover */
      border-color: #dc3545;
      /* Red border on hover */
    }

    .d-flex button[data-bs-target*="deleteModal"]:hover i {
      color: #dc3545;
      /* Icon color changes to red on hover */
    }
  </style>

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

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->
    <!-- End Search Bar -->



  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.index') }}">
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
        <a class="nav-link" href="{{ route('admin.driver') }}">
          <i class="bi bi-person"></i>
          <span>Driver</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.service') }}">
          <i class="bi bi-card-checklist"></i>
          <span>Services</span>
        </a>
      </li><!-- End services page Nav -->

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
      </li> <!-- End Pricing page Nav -->
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

  <!-- Main Content -->
  <main id="main" class="main">
    <div class="pagetit">
      <h1>Drivers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Driverss</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="container">
        <div class="row mt-4">
          <div class="col-lg-12">
            <h2 class="text-center">Driver Details</h2><br>
            <table class="table datatable table-responsive">
              <thead>
                <tr>
                  <th>Driver</th>
                  <th>Pick-up Location</th>
                  <th>Drop-off Location</th>
                  <th>Pick-up Date</th>
                  <th>Drop-off Date</th>
                  <th>Pick-up Time</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($drivers as $driver)
          <tr>
            <td>{{ $driver->name }}</td>
            <td>{{ $driver->pickup_location }}</td>
            <td>{{ $driver->dropoff_location }}</td>
            <td>{{ $driver->pickup_date }}</td>
            <td>{{ $driver->dropoff_date }}</td>
            <td>{{ $driver->pickup_time }}</td>
            <td class="d-flex">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
              data-bs-target="#deleteModal{{ $driver->id }}">
              <i class="bi bi-trash" title="Delete"></i>
            </button>
            </td>
          </tr>
        @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>








    <!-- Edit Modal -->
    <!-- <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
            <h5 class="modal-title" id="editModalLabel">Edit Booking Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="editForm">
              <div class="mb-3">
                <label for="editPickupLocation" class="form-label">Pick-up Location</label>
                <input type="text" class="form-control" id="editPickupLocation" required>
              </div>
              <div class="mb-3">
                <label for="editDropoffLocation" class="form-label">Drop-off Location</label>
                <input type="text" class="form-control" id="editDropoffLocation" required>
              </div>
              <div class="mb-3">
                <label for="editPickupDate" class="form-label">Pick-up Date</label>
                <input type="date" class="form-control" id="editPickupDate" required>
              </div>
              <div class="mb-3">
                <label for="editDropoffDate" class="form-label">Drop-off Date</label>
                <input type="date" class="form-control" id="editDropoffDate" required>
              </div>
              <div class="mb-3">
                <label for="editPickupTime" class="form-label">Pick-up Time</label>
                <input type="time" class="form-control" id="editPickupTime" required>
              </div>
              <input type="hidden" id="editBookingId">
              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Save Changes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
            <h5 class="modal-title" id="deleteModalLabel">Delete Booking Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
              style="width: 30px; height: 30px; padding: 0; border-radius: 50%;"></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete this booking?</p>
            <input type="hidden" id="deleteBookingId">
          </div>
          <div class="modal-footer" style="background-color: #ffffff; border-top: 1px solid #dddddd;">
            <button type="button" class="btn btn-danger" id="confirmDelete" data-bs-dismiss="modal">Delete</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div> -->
    @foreach($drivers as $driver)
    <div class="modal fade" id="deleteModal{{ $driver->id }}" tabindex="-1"
      aria-labelledby="deleteModalLabel{{ $driver->id }}" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
        <h5 class="modal-title" id="deleteModalLabel{{ $driver->id }}">Delete Driver Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>Are you sure you want to delete the driver</p>
        <input type="hidden" name="driver_id" value="{{ $driver->id }}">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <form action="{{ route('admin.deleteDriver') }}" method="POST" style="display:inline;">
          @csrf
          <input type="hidden" name="driver_id" value="{{ $driver->id }}">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </div>
      </div>
      </div>
    </div>
  @endforeach


  </main><!-- End #main -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>City Drivers</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    </div>
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

  <!-- Template Main JS File -->
  <!-- <script src="assets/js/main.js"></script> -->

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      function updateCardData() {
        // Fetch booking data
        fetch('/admin/todays-bookings')
          .then(response => response.json())
          .then(data => document.getElementById('todaysBookings').textContent = data.count);

        fetch('/admin/month-bookings')
          .then(response => response.json())
          .then(data => document.getElementById('monthBookings').textContent = data.count);

        fetch('/admin/total-bookings')
          .then(response => response.json())
          .then(data => document.getElementById('totalBookings').textContent = data.count);
      }

      function updateDateInfo() {
        const today = new Date();
        const dayOfWeek = today.toLocaleDateString('en-US', { weekday: 'short' }); // Shortened day name
        const monthOfYear = today.toLocaleDateString('en-US', { month: 'short' }); // Shortened month name
        const year = today.getFullYear().toString().slice(-2); // Last two digits of the year

        // Update the card content
        document.getElementById('todaysDate').textContent = dayOfWeek; // Shortened day name
        document.getElementById('monthDate').textContent = monthOfYear; // Shortened month name
        document.getElementById('totalDate').textContent = year; // Last two digits of the year
      }

      // Call functions to update data and date info
      updateCardData();
      updateDateInfo();
    });
  </script>


</body>

</html>