// Reference to the Firebase database
const database = firebase.database();

// Reference to the form element
const form = document.getElementById('reservation-form');

// Listen for form submission
form.addEventListener('submit', function (e) {
  e.preventDefault(); // Prevent the default form submission

  // Get form values
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;
  const date = document.getElementById('date').value;
  const time = document.getElementById('time').value;
  const guests = document.getElementById('guests').value;
  const specialRequests = document.getElementById('special-requests').value;

  // Create a unique key for the reservation data
  const reservationKey = database.ref().child('reservations').push().key;

  // Define the data to be stored
  const reservationData = {
    name,
    email,
    phone,
    date,
    time,
    guests,
    specialRequests,
  };

  // Store the reservation data in the database
  database.ref('reservations/' + reservationKey).set(reservationData)
    .then(function () {
      // Data successfully saved
      alert('Reservation submitted successfully!');
      // You can also reset the form here if needed
      form.reset();
    })
    .catch(function (error) {
      // Handle errors here
      console.error('Error submitting reservation:', error);
    });
});
