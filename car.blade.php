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

<style>
  .card-body {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .card-title {
    margin-bottom: 0;
  }

  .btn-group {
    display: flex;
  }

  .btn-group .btn {
    margin-left: 5px;
    /* Adjust spacing between buttons */
  }
</style>

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
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="booking.html">
          <i class="bi bi-file-earmark-text"></i>
          <span>Bookings</span>
        </a>
      </li><!-- End Bokings page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="driver.html">
          <i class="bi bi-person"></i>
          <span>Driver</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="service.html">
          <i class="bi bi-card-checklist"></i>
          <span>Services</span>
        </a>
      </li> <!-- End Services page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="car.html">
          <i class="bi bi-car-front-fill"></i>
          <span>Our Cars</span>
        </a>
      </li> <!-- End Our cars page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pricing.html">
          <i class="bi bi-cash"></i>
          <span>Pricing</span>
        </a>
      </li> <!-- End Pricing page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pricing.html">
          <i class="bi bi-person-circle"></i>
          <span>Testimonial</span>
        </a>
      </li> <!-- End Testimonial page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="Contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetit">
      <h1>Our Cars </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Cars</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!-- <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-right mt-4 mb-3 mr-4">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCarModal">
              Add New Car
            </button>
          </div> -->

    <!-- Car 1 Column -->
    <!-- <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img src="images/Toyota Innova Crysta.webp" class="card-img-top" alt="Toyota Innova Crysta">
              <div class="card-body d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Toyota Innova<br>₹4000 /day</h5>
                <div class="btn-group">
                  <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editCarModal"
                    data-id="2"><i class="bi bi-pencil-square" title="Edit"></i></button>
                  <button class="btn btn-danger btn-sm delete-btn ms-1" data-bs-toggle="modal"
                    data-bs-target="#deleteModal" data-id="2" title="Delete"><i class="bi bi-trash"></i></button>
                </div>
              </div>
            </div>
          </div> -->

    <!-- Car 2 Column -->
    <!-- <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img src="images/Mahindra-Verito.webp" class="card-img-top" alt="Car 2">
              <div class="card-body d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Mahindra Verito<br>₹3000/day</h5>
                <div class="btn-group">
                  <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editCarModal"
                    data-id="2"><i class="bi bi-pencil-square" title="Edit"></i></button>
                  <button class="btn btn-danger btn-sm delete-btn ms-1" data-bs-toggle="modal"
                    data-bs-target="#deleteModal" data-id="2" title="Delete"><i class="bi bi-trash"></i></button>
                </div>
              </div>
            </div>
          </div> -->

    <!-- Car 3 Column -->
    <!-- <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img src="images/Suzuki Swift Dzire1.webp" class="card-img-top" alt="Car 3">
              <div class="card-body d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Suzuki Swift Dzire<br>₹4000/day</h5>
                <div class="btn-group">
                  <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editCarModal"
                    data-id="3"><i class="bi bi-pencil-square" title="Edit"></i></button>
                  <button class="btn btn-danger btn-sm delete-btn ms-1" data-bs-toggle="modal"
                    data-bs-target="#deleteModal" data-id="3" title="Delete"><i class="bi bi-trash"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Add New Car Modal -->
    <!-- <div class="modal fade" id="addCarModal" tabindex="-1" aria-labelledby="addCarModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color:  #f5f5f5; color: #000000;">
            <h5 class="modal-title" id="addCarModalLabel">Add New Car</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="addCarForm">
              <div class="mb-3">
                <label for="carName" class="form-label">Car Name</label>
                <input type="text" class="form-control" id="carName" required>
              </div>
              <div class="mb-3">
                <label for="carImage" class="form-label">Car Image Path</label>
                <input type="text" class="form-control" id="carImage"
                  placeholder="Enter image path (e.g., Maruti.png/.jpg/.jpeg/.webp)" required>
              </div>
              <div class="mb-3">
                <label for="carPrice" class="form-label">Price per Day</label>
                <input type="number" class="form-control" id="carPrice" required>
              </div>
              
              <div class="modal-footer">
                <div class="d-flex justify-content-end w-100">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary ms-2">Add Car</button>
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    </section> -->
    <!-- <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-right mt-4 mb-3 mr-4">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCarModal">
              Add New Car
            </button>
          </div>
          @foreach ($cars as $car)
        <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="card-body d-flex flex-column justify-content-between align-items-start">
          <h5 class="card-title mb-0">{{ $car->car_name }}</h5>
          <img src="{{ asset('storage/' . $car->car_image) }}" class="card-img-top" alt="{{ $car->car_name }}">
          <p class="mb-0">₹{{ $car->price_per_day }}/day</p>
          <div class="btn-group mt-2">
            <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editCarModal"
            data-id="{{ $car->id }}">
            <i class="bi bi-pencil-square" title="Edit"></i>
            </button>
           

            <button class="btn btn-danger btn-sm delete-btn ms-1" data-bs-toggle="modal"
            data-bs-target="#deleteModal" data-id="{{ $car->id }}" title="Delete">
            <i class="bi bi-trash"></i>
            </button>
          </div>
          </div>
        </div>
        </div>
      @endforeach

        </div>
      </div>
    </section> -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-right mt-4 mb-3 mr-4">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCarModal">
              Add New Car
            </button>
          </div>
          @foreach ($cars as $car)
        <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="card-body d-flex flex-column justify-content-between align-items-start">
          <h5 class="card-title mb-0">{{ $car->car_name }}</h5>
          <img src="{{ asset('storage/' . $car->car_image) }}" class="card-img-top" alt="{{ $car->car_name }}">
          <p class="mb-0">₹{{ $car->price_per_day }}/day</p>
          <!-- <div class="btn-group mt-2">
          <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" 
          data-bs-target="#editCarModal{{ $car->id }}"
          data-id="{{ $car->id }}">
          <i class="bi bi-pencil-square" title="Edit"></i>
          </button>
          <button type="button" class="btn btn-danger btn-sm delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $car->id }}">
      <i class="bi bi-trash" title="Delete"></i>
      </button>-->


          <div class="btn-group mt-2 ms-auto">
            <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal"
            data-bs-target="#editCarModal{{ $car->id }}" data-id="{{ $car->id }}">
            <i class="bi bi-pencil-square" title="Edit"></i>
            </button>
            <button type="button" class="btn btn-danger btn-sm delete-btn ms-1" data-bs-toggle="modal"
            data-bs-target="#deleteModal{{ $car->id }}">
            <i class="bi bi-trash" title="Delete"></i>
            </button>
          </div>

          </div>
        </div>
        </div>

        <!-- Edit Car Modal -->
        <div class="modal fade" id="editCarModal{{ $car->id }}" tabindex="-1"
        aria-labelledby="editCarModalLabel{{ $car->id }}" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
            <h5 class="modal-title" id="editCarModalLabel{{ $car->id }}">Edit Car Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{ route('car.update', $car->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="editCarName{{ $car->id }}" class="form-label">Car Name</label>
              <input type="text" class="form-control" id="editCarName{{ $car->id }}" name="car_name"
              value="{{ $car->car_name }}" required>
            </div>
            <div class="mb-3">
              <label for="carImage{{ $car->id }}" class="form-label">Car Image</label>
              <input type="file" class="form-control" id="carImage{{ $car->id }}" name="car_image"
              accept="image/*">
            </div>
            <div class="mb-3">
              <label for="editCarPrice{{ $car->id }}" class="form-label">Price per Day</label>
              <input type="number" class="form-control" id="editCarPrice{{ $car->id }}" name="price_per_day"
              value="{{ $car->price_per_day }}" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
          </div>
        </div>
        </div>
      @endforeach
        </div>
      </div>
    </section>



    <!-- Add New Car Modal -->
    <div class="modal fade" id="addCarModal" tabindex="-1" aria-labelledby="addCarModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
            <h5 class="modal-title" id="addCarModalLabel">Add New Car</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="addCarForm" action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="carName" class="form-label">Car Name</label>
                <input type="text" class="form-control" id="carName" name="car_name" required>
              </div>
              <div class="mb-3">
                <label for="carImage" class="form-label">Image</label>
                <input type="file" name="car_image" class="form-control" id="carImage" accept="image/*" required>
              </div>
              <div class="mb-3">
                <label for="carPrice" class="form-label">Price per Day</label>
                <input type="number" class="form-control" id="carPrice" name="price_per_day" required>
              </div>
              <div class="modal-footer">
                <div class="d-flex justify-content-end w-100">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary ms-2">Add Car</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>



    <!-- Edit Car Modal -->
    <!-- <div class="modal fade" id="editCarModal" tabindex="-1" aria-labelledby="editCarModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color:  #f5f5f5; color: #000000;">
            <h5 class="modal-title" id="editCarModalLabel">Edit Car Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="editCarForm">
              <div class="mb-3">
                <label for="editCarName" class="form-label">Car Name</label>
                <input type="text" class="form-control" id="editCarName" required>
              </div>
              <div class="mb-3">
                <label for="carImage" class="form-label">Car Image Path</label>
                <input type="text" class="form-control" id="carImage"
                  placeholder="Enter image path (e.g., Maruti.png/.jpg/.jpeg/.webp)" required>
              </div>
              <div class="mb-3">
                <label for="editCarPrice" class="form-label">Price per day</label>
                <input type="text" class="form-control" id="editCarPrice" required>
              </div>
              <input type="hidden" id="editCarId">
              <div class="modal-footer">
                <div class="d-flex justify-content-end w-100">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary ms-2">Save changes</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div> -->




    <!-- Delete Car Modal -->
    <!-- <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color:  #f5f5f5; color: #000000;">
            <h5 class="modal-title" id="deleteModalLabel">Delete car</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete this car?</p>
            <input type="hidden" id="deleteBookingId">
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
          </div>
        </div>
      </div>
    </div> -->
    @foreach ($cars as $car)
    <div class="modal fade" id="deleteModal{{ $car->id }}" tabindex="-1"
      aria-labelledby="deleteModalLabel{{ $car->id }}" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
        <h5 class="modal-title" id="deleteModalLabel{{ $car->id }}">Delete Car</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>Are you sure you want to delete the car <strong>{{ $car->car_name }}</strong>?</p>
        <form action="{{ route('car.destroy', $car->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <input type="hidden" name="car_id" value="{{ $car->id }}">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Delete</button>
        </form> <!-- Make sure this closing tag is inside the modal footer -->
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
  <script src="assets/js/main.js"></script>\

</body>

</html>