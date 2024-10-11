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
  <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
  <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">


  <style>
    table {
      width: 100%;
      /* Make the table full width */
      border-collapse: collapse;
      /* Collapse borders */
    }

    /* Specific styles for the header and cells of the "Description" column */
    .centered-header {
      text-align: center;
      /* Center-align text in header */
      width: 380px;
      /* Set a fixed width for the column */
      overflow: hidden;
      /* Hide overflow content */
      text-overflow: ellipsis;
      /* Show ellipsis for overflow */
      white-space: nowrap;
      /* Prevent wrapping */
      padding: 10px;
      /* Add padding for better spacing */
    }

    th,
    td {
      text-align: left;
      /* Center-align text in header and cells */
      padding: 10px;
      /* Add padding for spacing */
      border: 0px solid #ddd;
      /* Add border to cells */
    }

    .column {
      width: 20%;
      /* Set width for each column */
    }

    .button-container {
      display: flex;
      gap: 0.5rem;
      /* Adjust the gap as needed */
    }

    .icon-style {
      font-size: 24px;
      /* Adjust the icon size */
      color: #007bff;
      /* Change to desired color */
      text-align: center;
      /* Center the icon */
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
    <!-- 
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->
    <!-- End Search Bar -->

    <!-- <nav class="header-nav ms-auto"></nav>
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>End Search Icon -->

    <!-- <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a>End Profile Iamge Icon -->

    <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Marketing Manager</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="admin-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul>End Profile Dropdown Items -->
    <!-- </li>End Profile Nav -->
    <!-- </ul>
    </nav>End Icons Navigation -->

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
        <a class="nav-link collapsed" href="{{ route('admin.driver') }}">
          <i class="bi bi-person"></i>
          <span>Driver</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{ route('admin.service') }}">
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
      </li> <!-- End Pricing page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.testimonial') }}">
          <i class="bi bi-person-circle"></i>
          <span>Testimonial</span>
        </a> <!-- End Testimonial page Nav -->
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.contact') }}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->
  <main id="main" class="main">

    <div class="pagetit">
      <h1>Services</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Services</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="text-end mt-3 mb-3">
      <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Add New Service</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color:  #f5f5f5; color: #000000;">
            <h5 class="modal-title" id="addModalLabel">Add New Service</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{ route('services.store') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="service_icon" class="form-label">Service Icon</label>
                <input type="text" class="form-control" id="service_icon" name="service_icon" required
                  placeholder="e.g., lni lni-car">
              </div>

              <div class="mb-3">
                <label for="service_name" class="form-label">Service Name</label>
                <input type="text" class="form-control" id="service_name" name="service_name" required>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Add Service</button>
            </form>

          </div>
        </div>
      </div>
    </div>

    @foreach ($services as $service)
    <div class="modal fade" id="editModal{{ $service->id }}" tabindex="-1"
      aria-labelledby="editModalLabel{{ $service->id }}" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
        <h5 class="modal-title" id="editModalLabel{{ $service->id }}">Edit Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
          <label for="editServiceName{{ $service->id }}" class="form-label">Service Name</label>
          <input type="text" name="service_name" class="form-control" id="editServiceName{{ $service->id }}"
            value="{{ $service->service_name }}" required>
          </div>


          <div class="mb-3">
          <label for="editServiceIcon{{ $service->id }}" class="form-label">Service Icon</label>
          <input type="text" name="service_icon" class="form-control" id="editServiceIcon{{ $service->id }}"
            value="{{ $service->service_icon }}" required placeholder="e.g., lni lni-car">

          </div>
          <div class="mb-3">
          <label for="editServiceDescription{{ $service->id }}" class="form-label">Description</label>
          <textarea name="description" class="form-control" id="editServiceDescription{{ $service->id }}" rows="3"
            required>{{ $service->description }}</textarea>
          </div>


        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
        </form>
      </div>
      </div>
    </div>
  @endforeach

    <!-- Delete Service Modal -->
    @foreach ($services as $service)
    <div class="modal fade" id="deleteModal{{ $service->id }}" tabindex="-1"
      aria-labelledby="deleteModalLabel{{ $service->id }}" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
        <h5 class="modal-title" id="deleteModalLabel{{ $service->id }}">Delete Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>Are you sure you want to delete this service?</p>
        </div>
        <div class="modal-footer">
        <form method="POST" action="{{ route('service.destroy', $service->id) }}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
      </div>
    </div>
  @endforeach

    <!-- Table -->
    <section class="section">
      <div class="card">
        <div class="card-body table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Service ID</th>
                <th scope="col">Service Icon</th>
                <th scope="col">Service Name</th>
                <th class="centered-header" scope="col" style="text-align: center;">Description</th>
                <!-- <th scope="col">Per Hour Rate</th> -->
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="serviceTableBody">
              @foreach($services as $service)
          <tr>
          <th scope="row">{{ $service->id }}</th>
          <td><i class="{{ $service->service_icon }}"></i></td>
          <td>{{ $service->service_name }}</td>
          <td>{{ $service->description }}</td>

          <td class="button-container">
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
            data-bs-target="#editModal{{ $service->id }}">
            <i class="bi bi-pencil-square" title="Edit"></i>
            </button>
            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
            data-bs-target="#deleteModal{{ $service->id }}">
            <i class="bi bi-trash" title="Delete"></i>
            </button>
          </td>
          </tr>
        @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>

    </div>
  </main>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>

</html>