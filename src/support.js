$(document).ready(function(){
    $('#support-form').submit(function(event){
      var formdata = $(this).serialize(); 
      var name = $('#name').val();
      var email = $('#email').val(); 
      var issue = $('#issue').val(); 
  
      // Stop the window from scrolling up if the user submits a blank form
      event.preventDefault();
  
      // Makes sure user has filled out all form fields
      if(name === '' || email === '' || issue === ''){ 
          alert('Please fill out all fields.'); 
      } else {
          $.ajax({
            type: 'POST',
            url: '../php/support.php',
            data: formdata,
            success: function(response){
              // Resets the form
              $('support-form').trigger('reset'); 
              // Display response message
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
  
