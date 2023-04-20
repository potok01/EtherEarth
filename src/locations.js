$(document).ready(function() {
  const locations = [
    {
      "name": "Michigan",
      "latitude": "42.3314270",
      "longitude": "-83.0457538",
    },
    {
      "name": "Germany",
      "latitude": "52.52437",
      "longitude": "13.41053",
    },
    {
      "name": "England",
      "latitude": "51.50853",
      "longitude": "-0.12574",
    },
    {
      "name": "Spain",
      "latitude": "41.3874",
      "longitude": "2.1686",
    },
    {
      "name": "France",
      "latitude": "48.85341",
      "longitude": "2.3488",
    },
    {
      "name": "Canada",
      "latitude": "43.6532260",
      "longitude": "-79.3831843",
    },
    {
      "name": "Mexico",
      "latitude": "19.4326",
      "longitude": "-99.1332",
    },
    {
      "name": "Kentucky",
      "latitude": "38.2527",
      "longitude": "-85.7585",
    },
    {
      "name": "Vermont",
      "latitude": "44.4758825",
      "longitude": "-73.2120720",
    }
  ];
  
  var map;

  $(function() {
    // Show loading animation
    $('.animLoading').show();
    
    $('.card').on('click', function() {
        // Retrieve the ID of the clicked card
        var locationName = $(this).attr('id');

        // Retreive the location JSON
        var location = locations.find(location => location.name === locationName);

        // Update the Google Map with the location data
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: new google.maps.LatLng(location.latitude, location.longitude),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
      
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(location.latitude, location.longitude),
          map: map
        });
      
        // Update the information displayed below the map with the location data
        $('#location-name').text(location.name);
        $('#location-description').text(location.description);

        // Scroll to map
        $('html, body').animate({
          scrollTop: $('#map').offset().top - ($(window).height() / 2)
        }, 500);
        
        // all done so now hide the animated loading GIF
        $('.animLoading').fadeOut("slow");
    });

    // Initialize map
    initMap();

    // Hide the loading gif once the map is loaded
    google.maps.event.addListenerOnce(map, 'tilesloaded', function() {
      $('.animLoading').hide();
    });
  });

  // initialize map
  function initMap() {
    var location = locations[0];

    // Initialize map centering
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      center: new google.maps.LatLng(location.latitude, location.longitude),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
  
    // Initialize map marker
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(location.latitude, location.longitude),
      map: map
    });
  }
});
