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
        <a class="nav-link " href="{{ route('admin.pricing') }}">
          <i class="bi bi-cash "></i>
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
      <h1>Pricing</h1>

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">pricing</li>
          <!-- <li class="breadcrumb-item active">General</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="text-end mt-3 mb-3">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Add New Car</button>
      </div>
      <div class="card">
        <div class="card-body table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Car Name</th>
                <th scope="col">Image</th>
                <th>Per Hour Rate</th>
                <th>Per Day Rate</th>
                <th>Leasing Rate</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="serviceTableBody">
              @foreach($pricing as $item)
          <tr>
          <td>{{ $item->car_name }}</td>
          <td>
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->car_name }}" style="width: 100px;">
          </td>

          <td>₹{{ $item->per_hour_rate }}</td>
          <td>₹{{ $item->per_day_rate }}</td>
          <td>₹{{ $item->leasing_rate }}</td>
          <td class="d-flex">

            <a href="#" class="btn btn-primary btn-sm d-inline mx-1 edit-btn" title="Edit" data-toggle="modal"
            data-target="#editModal{{ $item->id }}">
            <i class="bi bi-pencil-square"></i>

            <a href="#" class="btn btn-danger btn-sm d-inline mx-1 delete-btn" title="Delete"
              data-toggle="modal" data-target="#deleteModal{{ $item->id }}">
              <i class="bi bi-trash"></i>
            </a>
          </td>
          </tr>
        @endforeach
            </tbody>

          </table>
        </div>
      </div>
    </section>


    @foreach ($pricing as $item)
    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog"
      aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
        <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Car Pricing</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="editForm{{ $item->id }}" enctype="multipart/form-data" method="POST"
        action="{{ route('pricing.update', $item->id) }}">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
          <label for="carName{{ $item->id }}" class="form-label">Car Name</label>
          <input type="text" name="car_name" class="form-control" id="carName{{ $item->id }}"
            value="{{ $item->car_name }}" required>
          </div>
          <div class="mb-3">
          <label for="carImage{{ $item->id }}" class="form-label">Image</label>
          <input type="file" name="car_image" class="form-control" id="carImage{{ $item->id }}" required>
          </div>
          <div class="mb-3">
          <label for="perHourRate{{ $item->id }}" class="form-label">Per Hour Rate</label>
          <input type="text" name="per_hour_rate" class="form-control" id="perHourRate{{ $item->id }}"
            value="{{ $item->per_hour_rate }}" required>
          </div>
          <div class="mb-3">
          <label for="perDayRate{{ $item->id }}" class="form-label">Per Day Rate</label>
          <input type="text" name="per_day_rate" class="form-control" id="perDayRate{{ $item->id }}"
            value="{{ $item->per_day_rate }}" required>
          </div>
          <div class="mb-3">
          <label for="leasingRate{{ $item->id }}" class="form-label">Leasing Rate</label>
          <input type="text" name="leasing_rate" class="form-control" id="leasingRate{{ $item->id }}"
            value="{{ $item->leasing_rate }}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
        </form>
      </div>
      </div>
    </div>
  @endforeach



    @foreach($pricing as $item)
    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog"
      aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Delete Pricing Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        Are you sure you want to delete this pricing details?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form action="{{ route('pricing.destroy', $item->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </div>
      </div>
      </div>
    </div>
  @endforeach



    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #f5f5f5; color: #000000;">
            <h5 class="modal-title" id="addModalLabel">Add New Pricing</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="addForm" enctype="multipart/form-data" method="POST" action="{{ route('pricing.store') }}">
            @csrf <!-- CSRF token for security -->
            <div class="modal-body">
              <div class="mb-3">
                <label for="carName" class="form-label">Car Name</label>
                <input type="text" name="car_name" class="form-control" id="carName" required>
              </div>
              <div class="mb-3">
                <label for="carImage" class="form-label">Image</label>
                <input type="file" name="car_image" class="form-control" id="carImage" required>
              </div>

              <div class="mb-3">
                <label for="perHourRate" class="form-label">Per Hour Rate</label>
                <input type="text" name="per_hour_rate" class="form-control" id="perHourRate" required>
              </div>
              <div class="mb-3">
                <label for="perDayRate" class="form-label">Per Day Rate</label>
                <input type="text" name="per_day_rate" class="form-control" id="perDayRate" required>
              </div>
              <div class="mb-3">
                <label for="leasingRate" class="form-label">Leasing Rate</label>
                <input type="text" name="leasing_rate" class="form-control" id="leasingRate" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Car</button>
            </div>
          </form>

        </div>
      </div>
    </div>


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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <script>
    document.getElementById('addForm').addEventListener('submit', function (event) {
      console.log('Form submitted');
    });

    document.addEventListener('DOMContentLoaded', function () {
      // Edit button click handler
      document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function (event) {
          event.preventDefault();
          const row = this.closest('tr');
          const id = row.dataset.id;

          // Populate the modal with the row data
          document.getElementById('edit-id').value = id;
          document.getElementById('edit-model').value = row.children[1].textContent.trim();
          document.getElementById('edit-hour-rate').value = row.children[2].textContent.trim();
          document.getElementById('edit-day-rate').value = row.children[3].textContent.trim();
          document.getElementById('edit-leasing').value = row.children[4].textContent.trim();

          // Show the modal using Bootstrap 5
          const editModal = new bootstrap.Modal(document.getElementById('editModal'));
          editModal.show();
        });
      });

      // Save button click handler
      document.getElementById('save-btn').addEventListener('click', function () {
        const id = document.getElementById('edit-id').value;
        const carModel = document.getElementById('edit-model').value.trim();
        const perHourRate = document.getElementById('edit-hour-rate').value.trim();
        const perDayRate = document.getElementById('edit-day-rate').value.trim();
        const leasing = document.getElementById('edit-leasing').value.trim();

        // Validate input
        if (carModel && perHourRate && perDayRate && leasing) {
          console.log('Saving Data:', { id, carModel, perHourRate, perDayRate, leasing });

          // Update the row data
          const row = document.querySelector(`tr[data-id="${id}"]`);
          row.children[1].textContent = carModel;
          row.children[2].textContent = perHourRate;
          row.children[3].textContent = perDayRate;
          row.children[4].textContent = leasing;

          // Hide the modal using Bootstrap 5
          const editModal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
          editModal.hide();
        } else {
          alert('Please fill in all fields.');
        }
      });

      let rowToDelete = null;

      document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function (event) {
          event.preventDefault();
          rowToDelete = this.closest('tr');
          $('#deleteModal').modal('show');
        });
      });

      document.getElementById('confirmDelete').addEventListener('click', function () {
        if (rowToDelete) {
          console.log('Deleting ID:', rowToDelete.dataset.id);

          // Remove the row from the table
          rowToDelete.remove();
          $('#deleteModal').modal('hide');
        }
      });

    });

  </script>
</body>

</html>