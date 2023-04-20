$(document).ready(function() {
    $('#technology').change(function() {
      var technology = $(this).val();
      if (technology === 'oil') {
        $('#oil-form').show();
        $('#solar-form').hide();
      } else if (technology === 'solar') {
        $('#oil-form').hide();
        $('#solar-form').show();
      } else {
        $('#oil-form').hide();
        $('#solar-form').hide();
      }
    });

    $('form').submit(function(event){
        var formdata = $(this).serialize(); 
        var technology = $('#technology').val();
        var name = $('#name').val();
        var email = $('#email').val();
        var address = $('#address').val();

        // Stop the window from scrolling up if the user submits a blank form
        event.preventDefault();
    
        var url;
        if (technology === 'oil') {
            url = '../php/oil_quoting.php';
            var type_of_oil = $('#type_of_oil').val();
            var type_of_surface = $('#type_of_surface').val(); 
            var size = $('#size').val();
            //alerts if all fields not filled
            if(name === '' || email === '' || address === '' || type_of_oil === '' || type_of_surface === '' || size === ''){
                alert('Please fill out all fields.'); 
            }
            else{
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formdata,
                    success: function(response){
                        // Reset form
                        $('form').trigger('reset'); 
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
        } else if (technology === 'solar') {
            url = '../php/solar_quoting.php';
            var type_of_panels = $('#type_of_panels').val();
            var type_of_inverters = $('#type_of_panels').val(); 
            var energy_usage = $('#energy_usage').val(); 
            if(name === '' || email === '' || address === '' || type_of_panels === '' || type_of_inverters === '' || energy_usage === ''){
                alert('Please fill out all fields.'); 
            }
            else{
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formdata,
                    success: function(response){
                        // Resets the form
                        $('form').trigger('reset'); 
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
        }

    });
    
});
  
