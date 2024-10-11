booking

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .icon-circle {
      font-size: 15px;
      color: #333;
      vertical-align: middle;
      width: 30px;
      /* Size of the circle */
      height: 30px;
      /* Size of the circle */
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      /* Makes the icon circular */
      border: 1px solid #333;
      /* Border color and thickness */
      background-color: #fff;
      /* Background color inside the circle */
      transition: background-color 0.3s, color 0.3s, border-color 0.3s;
      /* Smooth transition */
    }

    .icon-circle:hover {
      background-color: #f1f1f1;
      /* Change background color on hover */
      color: #007bff;
      /* Change icon color on hover */
      border-color: #007bff;
      /* Change border color on hover */
    }

    /* Styling for action buttons (edit and delete) */
    .action-btn {
      font-size: 15px;
      /* Adjust the size of the icon */
      color: #fff;
      /* Icon color */
      background-color: #007bff;
      /* Default background color (blue for edit) */
      width: 30px;
      /* Size of the circle */
      height: 30px;
      /* Size of the circle */
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      /* Makes the button circular */
      border: 1px solid transparent;
      /* Border color is transparent by default */
      transition: background-color 0.3s, color 0.3s, border-color 0.3s;
      /* Smooth transition */
    }

    .btn-danger.action-btn {
      background-color: #dc3545;
      /* Red background for delete button */
      border-color: #dc3545;
      /* Red border for delete button */
    }

    .btn-primary.action-btn {
      background-color: #007bff;
      /* Blue background for edit button */
      border-color: #007bff;
      /* Blue border for edit button */
    }

    /* Hover effect for action buttons */
    .action-btn:hover {
      background-color: #f1f1f1;
      /* Light background color on hover */
      color: #fff;
      /* Icon color on hover */
      border-color: #fff;
      /* Border color on hover */
    }

    .btn-danger.action-btn:hover {
      background-color: #c82333;
      /* Darker red background on hover for delete button */
    }

    .btn-primary.action-btn:hover {
      background-color: #0056b3;
      /* Darker blue background on hover for edit button */
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
      </li><!-- End Bookings page Nav -->
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
      </li><!-- End Service page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.car') }}">
          <i class="bi bi-car-front-fill"></i>
          <span>Our Cars</span>
        </a>
      </li>

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
      </li><!-- End Testimonial page Nav -->
      <li class="nav-item">
        <a class="nav-link " href="{{ route('admin.contact') }}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  <!-- Main Content -->
  <main id="main" class="main">
    <div class="pagetit">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12 table-responsive">
          <table class="table datatable ">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($contacts as $contact)
          <tr>
          <td>{{ $contact->name }}</td>
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->phone }}</td>
          <td>{{ $contact->message }}</td>
          <td class="d-flex">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
            data-bs-target="#deleteModal{{ $contact->id }}">
            <i class="bi bi-trash" title="Delete"></i>
            </button>
          </td>
          </tr>
        @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->
        </div>
      </div>
    </section>

    <!-- Delete Modal -->

    @foreach($contacts as $contact)
    <!-- Modal for Each Contact -->
    <div class="modal fade" id="deleteModal{{ $contact->id }}" tabindex="-1"
      aria-labelledby="deleteModalLabel{{ $contact->id }}" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
        <h5 class="modal-title" id="deleteModalLabel{{ $contact->id }}">Delete Contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>Are you sure you want to delete the contact </p>
        <input type="hidden" name="contact_id" value="{{ $contact->id }}">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <!-- Form to handle the deletion -->
        <form action="{{ route('admin.deleteContact') }}" method="POST" style="display:inline;">
          @csrf
          <input type="hidden" name="contact_id" value="{{ $contact->id }}">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </div>
      </div>
      </div>
    </div>
  @endforeach

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
  <!-- Bootstrap JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




  <!-- Template Main JS File -->
  <!-- <script src="assets/js/main.js"></script> -->

</body>

</html>