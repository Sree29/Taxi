document.addEventListener('DOMContentLoaded', () => {
  let currentRow;
  let isAdding = false;

  // Add event listeners for all edit buttons
  document.querySelector('#serviceTableBody').addEventListener('click', (event) => {
    if (event.target.classList.contains('edit-btn')) {
      isAdding = false;
      currentRow = event.target.closest('tr');
      const serviceName = currentRow.children[1].innerText;
      const serviceDescription = currentRow.children[2].innerHTML.replace(/<br\s*\/?>/gi, "\n");
      const serviceRate = currentRow.children[3].innerText;

      document.getElementById('serviceName').value = serviceName;
      document.getElementById('serviceDescription').value = serviceDescription;
      document.getElementById('serviceRate').value = serviceRate;
      document.getElementById('editModalLabel').innerText = 'Edit Service';
    }

    if (event.target.classList.contains('delete-btn')) {
      event.target.closest('tr').remove();
    }
  });

  // Add event listener for the add service button
  document.getElementById('addServiceBtn').addEventListener('click', () => {
    isAdding = true;
    document.getElementById('editForm').reset();
    document.getElementById('editModalLabel').innerText = 'Add Service';
  });

  // Save changes on modal save button click
  document.getElementById('saveChanges').addEventListener('click', () => {
    const updatedServiceName = document.getElementById('serviceName').value;
    const updatedServiceDescription = document.getElementById('serviceDescription').value.replace(/\n/g, "<br>");
    const updatedServiceRate = document.getElementById('serviceRate').value;

    if (isAdding) {
      // Add new service
      const tableBody = document.getElementById('serviceTableBody');
      const newRow = tableBody.insertRow();
      const cell1 = newRow.insertCell(0);
      const cell2 = newRow.insertCell(1);
      const cell3 = newRow.insertCell(2);
      const cell4 = newRow.insertCell(3);
      const cell5 = newRow.insertCell(4);

      cell1.scope = "row";
      cell1.innerText = tableBody.rows.length;
      cell2.innerText = updatedServiceName;
      cell3.innerHTML = updatedServiceDescription;
      cell4.innerText = updatedServiceRate;
      cell5.className = "button-container";
      cell5.innerHTML = `
        <button class="btn btn-primary btn-sm edit-btn" data-toggle="modal" data-target="#editModal">Edit</button>
        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
      `;
    } else {
      // Update existing service
      currentRow.children[1].innerText = updatedServiceName;
      currentRow.children[2].innerHTML = updatedServiceDescription;
      currentRow.children[3].innerText = updatedServiceRate;
    }

    $('#editModal').modal('hide');
  });





  document.addEventListener('DOMContentLoaded', function() {
let deleteButton = document.getElementById('confirmDelete');

deleteButton.addEventListener('click', function() {
  let bookingId = document.getElementById('deleteBookingId').value;

  // Perform the delete operation (e.g., send a request to your server)
  console.log(`Deleting booking with ID: ${bookingId}`);

  // Example: Sending a DELETE request (adjust the URL and method as needed)
  fetch(`/api/delete-booking/${bookingId}`, {
    method: 'DELETE',
  })
  .then(response => response.json())
  .then(data => {
    console.log('Delete successful:', data);
    // Close the modal and remove the row from the table
    $('#deleteModal').modal('hide');
    document.querySelector(`tr[data-id="${bookingId}"]`).remove();
  })
  .catch(error => {
    console.error('Error:', error);
  });
});

// Set the booking ID to delete when the delete button is clicked
document.querySelectorAll('.delete-btn').forEach(button => {
  button.addEventListener('click', function() {
    let bookingId = this.getAttribute('data-id');
    document.getElementById('deleteBookingId').value = bookingId;
  });
});
});





document.addEventListener('DOMContentLoaded', function() {
// Handle click event on delete buttons
document.querySelectorAll('.delete-btn').forEach(button => {
  button.addEventListener('click', function() {
    const bookingId = this.getAttribute('data-id');
    document.getElementById('deleteBookingId').value = bookingId;
  });
});

// Handle confirm delete
document.getElementById('confirmDelete').addEventListener('click', function() {
  const bookingId = document.getElementById('deleteBookingId').value;

  if (!bookingId) {
    console.error('No booking ID found');
    return;
  }

  fetch(`/api/delete-booking/${bookingId}`, {
    method: 'DELETE',
  })
  .then(response => response.json())
  .then(data => {
    console.log('Delete successful:', data);
    document.querySelector(`tr[data-id="${bookingId}"]`).remove();
    $('#deleteModal').modal('hide');
  })
  .catch(error => {
    console.error('Error:', error);
  });
});

// Handle edit button clicks
document.querySelectorAll('.edit-btn').forEach(button => {
  button.addEventListener('click', function() {
    const bookingId = this.getAttribute('data-id');
    document.getElementById('editBookingId').value = bookingId;

    // Fetch booking data and populate the form (example)
    fetch(`/api/get-booking/${bookingId}`)
      .then(response => response.json())
      .then(data => {
        document.getElementById('editPickupLocation').value = data.pickupLocation;
        document.getElementById('editDropoffLocation').value = data.dropoffLocation;
        document.getElementById('editPickupDate').value = data.pickupDate;
        document.getElementById('editDropoffDate').value = data.dropoffDate;
        document.getElementById('editPickupTime').value = data.pickupTime;
      })
      .catch(error => {
        console.error('Error fetching booking data:', error);
      });
  });
});

// Handle edit form submission
document.getElementById('editForm').addEventListener('submit', function(event) {
  event.preventDefault();
  
  const bookingId = document.getElementById('editBookingId').value;

  fetch(`/api/update-booking/${bookingId}`, {
    method: 'PUT',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({
      pickupLocation: document.getElementById('editPickupLocation').value,
      dropoffLocation: document.getElementById('editDropoffLocation').value,
      pickupDate: document.getElementById('editPickupDate').value,
      dropoffDate: document.getElementById('editDropoffDate').value,
      pickupTime: document.getElementById('editPickupTime').value,
    }),
  })
  .then(response => response.json())
  .then(data => {
    console.log('Edit successful:', data);
    $('#editModal').modal('hide');
    // Update table row data here if necessary
  })
  .catch(error => {
    console.error('Error updating booking:', error);
  });
});
});

});
