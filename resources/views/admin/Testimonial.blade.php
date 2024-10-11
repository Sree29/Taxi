<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard - City Drivers</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
  <style>
    .row.justify-content-center {
      display: flex;
      /* Enable flexbox on the row */
      flex-wrap: wrap;
      /* Allow items to wrap */
    }

    .testimonial-card {
      background-color: #fff;
      /* Card background color */
      border: 1px solid #ccc;
      /* Card border */
      border-radius: 8px;
      /* Rounded corners */
      padding: 20px;
      /* Inner padding */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      /* Shadow for card effect */
      margin-bottom: 20px;
      /* Space between cards */
      text-align: center;
      /* Center text inside card */
      display: flex;
      /* Enable flexbox on card */
      flex-direction: column;
      /* Stack children vertically */
      justify-content: space-between;
      /* Distribute space evenly */
      height: 100%;
      /* Set height to fill the column */
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      /* Smooth transition for hover effects */
    }


    .testimonial-card:hover {
      transform: translateY(-5px);
      /* Elevate card slightly on hover */
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      /* Increase shadow on hover */
    }

    .icon {
      font-size: 48px;
      /* Increased icon size */

      display: flex;
      justify-content: center;
      /* Center icon horizontally */
      align-items: center;
      /* Center icon vertically */
    }

    .card-body .d-flex {
      display: flex;
      justify-content: flex-end;
      /* Align to the right */
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="images/taxiii.png" alt="Online Taxi Logo" style="height: 100px; width: 50px;">
        <span class="d-none d-lg-block">City Drivers</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->


  </header>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.index') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.booking') }}">
          <i class="bi bi-file-earmark-text"></i>
          <span>Bookings</span>
        </a>
      </li>
      <li class="nav-item ">
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
      </li>
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
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.testimonial') }}">
          <i class="bi bi-person-circle"></i>
          <span>Testimonial</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.contact') }}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li>
    </ul>
  </aside>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Testimonial</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Testimonial</li>
        </ol>
      </nav>
    </div>
    <section class="ftco-section" style="padding-top: 1rem;">
      <div class="container" style="padding-top: 0;">
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="text-end mt-3 mb-3" style="margin-top: 1rem;">
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Add New
                Testimonial</button>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach($testimonials as $testimonial)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4"> <!-- Added mb-4 for spacing -->
        <div class="testimonial-card">
          <div class="icon color-{{ $loop->index % 3 + 1 }}">
          <i class="{{ $testimonial->icon }}"></i>
          </div>
          <div class="content">
          <h5>{{ $testimonial->name }}</h5>
          <p>{{ $testimonial->description }}</p>
          <div class="d-flex justify-content-end">
            <a href="#" class="btn btn-primary btn-sm mx-1 edit-btn" title="Edit" data-bs-toggle="modal"
            data-bs-target="#editModal{{ $testimonial->id }}">
            <i class="bi bi-pencil-square"></i>
            </a>
            <a href="#" class="btn btn-danger btn-sm mx-1" title="Delete" data-bs-toggle="modal"
            data-bs-target="#deleteModal{{ $testimonial->id }}">
            <i class="bi bi-trash"></i>
            </a>
          </div>
          </div>
        </div>
        </div>
      @endforeach
        </div>

      </div>
      </div>
    </section>
  </main>

  <!-- Add Testimonial Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
          <h5 class="modal-title" id="addModalLabel">Add Testimonial</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('admin.testimonial.store') }}">
            @csrf <!-- CSRF Token -->

            <div class="mb-3">
              <div class="d-flex align-items-center">
                <!-- <i class="fas fa-user me-2" style="font-size: 1.2rem;"></i> -->
                <label for="testimonialName" class="form-label">Name</label>
              </div>
              <input type="text" class="form-control" id="testimonialName" name="name" required>
            </div>
            <div class="mb-3">
              <div class="d-flex align-items-center">
                <!-- <i class="fas fa-icon me-2" style="font-size: 1.2rem;"></i> -->
                <label for="testimonialIcon" class="form-label">Icon</label>
              </div>
              <input type="text" class="form-control" id="testimonialIcon" name="icon" required
                placeholder="e.g., lni lni-user">
            </div>
            <div class="mb-3">
              <div class="d-flex align-items-center">
                <!-- <i class="fas fa-comment me-2" style="font-size: 1.2rem;"></i> -->
                <label for="testimonialMessage" class="form-label">Message</label>
              </div>
              <textarea class="form-control" id="testimonialMessage" name="description" rows="3" required></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Testimonial</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

 
  @foreach($testimonials as $testimonial)
    <div class="modal fade" id="editModal{{ $testimonial->id }}" tabindex="-1"
    aria-labelledby="editModalLabel{{ $testimonial->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
        <h5 class="modal-title" id="editModalLabel{{ $testimonial->id }}">Edit Testimonial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('admin.testimonial.update', $testimonial->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="editName{{ $testimonial->id }}" class="form-label">Name</label>
          <input type="text" class="form-control" id="editName{{ $testimonial->id }}" name="name"
          value="{{ old('name', $testimonial->name) }}" required>
        </div>

        <div class="mb-3">
          <label for="testimonialIcon{{ $testimonial->id }}" class="form-label">Icon</label>
          <input type="text" class="form-control" id="testimonialIcon{{ $testimonial->id }}" name="icon"
          value="{{ old('icon', $testimonial->icon) }}" required>
        </div>

        <div class="mb-3">
          <label for="editMessage{{ $testimonial->id }}" class="form-label">Message</label>
          <textarea class="form-control" id="editMessage{{ $testimonial->id }}" name="description" rows="3"
          required>{{ old('description', $testimonial->description) }}</textarea>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
        </form>
      </div>
      </div>
    </div>
    </div>
  @endforeach

 

  @foreach($testimonials as $testimonial)
    <!-- Delete Testimonial Modal for each testimonial -->
    <div class="modal fade" id="deleteModal{{ $testimonial->id }}" tabindex="-1"
    aria-labelledby="deleteModalLabel{{ $testimonial->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
        <h5 class="modal-title" id="deleteModalLabel{{ $testimonial->id }}">Delete Testimonial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this testimonial
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <form method="POST" action="{{ route('admin.testimonial.delete', $testimonial->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
      </div>
    </div>
    </div>
  @endforeach

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>City Drivers</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    </div>
  </footer><!-- End Footer -->
  <!-- Repeat the Edit and Delete modals for other testimonials as needed -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>