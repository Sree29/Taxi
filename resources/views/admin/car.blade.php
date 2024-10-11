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
      </li><!-- End Bokings page Nav -->
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
        <a class="nav-link " href="{{ route('admin.car') }}">
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
    
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-right mt-4 mb-3 mr-4">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCarModal">
              Add New Car
            </button>
          </div>

          <!-- Loop through each car -->
          <div class="row">
            @foreach($cars as $car)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
          <img src="{{ asset('storage/images/' . $car->car_image) }}" class="card-img-top"
            alt="{{ $car->car_name }}">

          <div class="card-body d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">{{ $car->car_name }}<br>₹{{ $car->price_per_day }} /day</h5>
            <div class="btn-group" >
            <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal"
              data-bs-target="#editCarModal{{ $car->id }}">
              <i class="bi bi-pencil-square" title="Edit"></i>
            </button>
            <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
              data-bs-target="#deleteModal{{ $car->id }}">
              <i class="bi bi-trash"></i>
            </button>
            </div>
          </div>
          </div>
        </div>
      @endforeach
          </div>

          <!-- Optionally display success message -->
          @if(session('success'))
        <div class="alert alert-success mt-3">
        {{ session('success') }}
        </div>
      @endif

        </div>
      </div>
    </section>

    <div class="modal fade" id="addCarModal" tabindex="-1" aria-labelledby="addCarModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
            <h5 class="modal-title" id="addCarModalLabel">Add New Car</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{ route('admin.carStore') }}" method="POST" enctype="multipart/form-data">
              @csrf <!-- Laravel security token for form submission -->
              <div class="mb-3">
                <label for="carName" class="form-label">Car Name</label>
                <input type="text" class="form-control" id="carName" name="car_name" required>
              </div>
              <div class="mb-3">
                <label for="carImage" class="form-label">Car Image</label>
                <input type="file" class="form-control" id="carImage" name="car_image" accept="image/*" required>
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
    

    <!-- Loop through each car and create a modal for each -->
    @foreach($cars as $car)
    <div class="modal fade" id="editCarModal{{ $car->id }}" tabindex="-1"
      aria-labelledby="editCarModalLabel{{ $car->id }}" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
        <h5 class="modal-title" id="editCarModalLabel{{ $car->id }}">Edit Car Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{ route('admin.carUpdate') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT') <!-- This specifies that the form should be treated as a PUT request -->
          <div class="mb-3">
          <label for="editCarName{{ $car->id }}" class="form-label">Car Name</label>
          <input type="text" class="form-control" name="car_name" id="editCarName{{ $car->id }}"
            value="{{ old('car_name', $car->car_name) }}" required>
          </div>
          <div class="mb-3">
          <label for="editCarImage{{ $car->id }}" class="form-label">Car Image</label>
          <input type="file" class="form-control" id="editCarImage{{ $car->id }}" name="car_image"
            accept="image/*">
          <small class="form-text text-muted">Leave blank if you don't want to change the image.</small>
          </div>
          <div class="mb-3">
          <label for="editCarPrice{{ $car->id }}" class="form-label">Price per day</label>
          <input type="number" class="form-control" name="price_per_day" id="editCarPrice{{ $car->id }}"
            value="{{ old('price_per_day', $car->price_per_day) }}" required>
          </div>
          <input type="hidden" name="car_id" value="{{ $car->id }}">
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
    </div>
  @endforeach


    <!-- Delete Car Modal -->
   
    @foreach($cars as $car)
    <div class="modal fade" id="deleteModal{{ $car->id }}" tabindex="-1"
      aria-labelledby="deleteModalLabel{{ $car->id }}" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
        <h5 class="modal-title" id="deleteModalLabel{{ $car->id }}">Delete Car</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>Are you sure you want to delete the car</p>
        <input type="hidden" id="deleteCarId" value="{{ $car->id }}">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <form action="{{ route('cardestroy', $car->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
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
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Event listeners for edit buttons
      document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
          const card = this.closest('.card'); // Adjust selector if necessary
          const cardTitle = card.querySelector('.card-title').innerText.split('\n');
          const carName = cardTitle[0].trim();
          const carPrice = cardTitle[1].trim().replace('₹', '').replace('/day', '');

          // Populate edit form
          document.getElementById('editCarName').value = carName;
          document.getElementById('editCarPrice').value = carPrice;
          document.getElementById('editCarId').value = this.getAttribute('data-id'); // Store card id
        });
      });

      // Confirm edit
      document.getElementById('editCarForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const cardId = document.getElementById('editCarId').value;
        const card = document.querySelector(`.edit-btn[data-id="${cardId}"]`).closest('.card'); // Adjust selector if necessary
        const carName = document.getElementById('editCarName').value;
        const carPrice = '₹' + document.getElementById('editCarPrice').value + '/day';

        // Update card details
        card.querySelector('.card-title').innerHTML = `${carName}<br>${carPrice}`;

        // Hide modal
        const editModal = bootstrap.Modal.getInstance(document.getElementById('editCarModal'));
        editModal.hide();
      });

      // Event listeners for delete buttons
      document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function () {
          const cardId = this.getAttribute('data-id');
          document.getElementById('deleteBookingId').value = cardId; // Store card id
        });
      });

      // Confirm deletion
      document.getElementById('confirmDelete').addEventListener('click', function () {
        const cardId = document.getElementById('deleteBookingId').value;
        const card = document.querySelector(`.delete-btn[data-id="${cardId}"]`).closest('.col-lg-4'); // Adjust selector if necessary

        if (card) {
          card.remove(); // Remove the card element
          const deleteModal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
          deleteModal.hide(); // Hide modal
        }
      });
    });
    document.addEventListener('DOMContentLoaded', () => {
      const deleteButtons = document.querySelectorAll('.delete-btn'); // Select all delete buttons
      const confirmDeleteBtn = document.getElementById('confirmDelete'); // Confirm delete button
      const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal')); // Initialize the modal
      let currentCarId; // Variable to store the car ID of the car being deleted

      // Add click event listener to each delete button
      deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
          currentCarId = button.getAttribute('data-id'); // Store car ID
          deleteModal.show(); // Show the delete confirmation modal
        });
      });

      // Add click event listener to the confirm delete button
      confirmDeleteBtn.addEventListener('click', () => {
        if (currentCarId) {
          // Handle the deletion process here (e.g., send an AJAX request to your server)
          console.log(`Deleting car with ID: ${currentCarId}`);
          // For demonstration, just remove the car card from the DOM
          document.querySelector(`.card [data-id="${currentCarId}"]`).closest('.card').remove();
          // Hide the modal
          deleteModal.hide();
          // Clear the currentCarId variable
          currentCarId = null;
        }
      });
    });
    document.addEventListener('DOMContentLoaded', () => {
      const addCarForm = document.getElementById('addCarForm');
      const addCarModal = new bootstrap.Modal(document.getElementById('addCarModal')); // Initialize the modal

      addCarForm.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent the default form submission

        const carName = document.getElementById('carName').value;
        const carModel = document.getElementById('carModel').value;
        const carPrice = document.getElementById('carPrice').value;
        const carImage = document.getElementById('carImage').value;

        // Add new car to the list
        const carList = document.querySelector('.row'); // Assume you have a container for car cards
        const newCarCol = document.createElement('div');
        newCarCol.className = 'col-lg-4 col-md-6 mb-4';
        newCarCol.innerHTML = `
      <div class="card">
        <img src="${carImage}" class="card-img-top" alt="New Car">
        <div class="card-body">
          <h5 class="card-title">${carName}<br>₹${carPrice} /day</h5>
          <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editCarModal">Edit</button>
          <button class="btn btn-danger btn-sm delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
        </div>
      </div>
    `;
        carList.appendChild(newCarCol);

        // Reset the form and hide the modal
        addCarForm.reset();
        addCarModal.hide();
      });

    });

  </script>

</body>

</html>