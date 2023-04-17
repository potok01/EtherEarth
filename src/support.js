$(document).ready(function(){
    $('form').submit(function(event){
      var formdata = $(this).serialize(); 
      var email = $('#email').val(); 
      var issue = $('#issue').val(); 
  
      // Stop the window from scrolling up if the user submits a blank form
      event.preventDefault();
  
      // Make sure user has filled out all form fields
      if(email === '' || issue === ''){ 
          alert('Please fill out all fields.'); 
      } else {
          $.ajax({
            type: 'POST',
            url: '../php/support.php',
            data: formdata,
            success: function(response){
              $('form').trigger('reset'); // reset the form after submitting
              $('#response').html(response);
            },
            error: function(xhr, status, error) {
              console.log(xhr.responseText);
              console.log(status);
              console.log(error);
            }
          });
      }
    });
  });
  