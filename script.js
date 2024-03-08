// script.js
$(document).ready(function() {
    $('#donationForm').submit(function(e) {
      e.preventDefault(); // Prevent the default form submission
  
      // Get form data
      var formData = $(this).serialize();
  
      // Send the form data using AJAX
      $.ajax({
        type: 'POST',
        url: 'send_email.php',
        data: formData,
        success: function(response) {
          // Handle success response here if needed
          alert('Form submitted successfully!');
          // You can optionally redirect the user to another page here
        },
        error: function(xhr, status, error) {
          // Handle error response here if needed
          console.error(xhr.responseText);
        }
      });
    });
  });
  