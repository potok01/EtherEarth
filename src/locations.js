$(function () {
    $('.animLoading').show();
    
    var f1 = "../php/locations.php";
    var param = ['GB:London', 'DE:Berlin', 'CA:Toronto', 'FR:Paris', 'ES:Barcelona', 'MX:Mexico City', 'US:Detroit', 
		         'US:Kentucky', 'US:Louisville', 'US:Burlington'];
    
    // make request for list of cities for specified countries and cities
    $.get(f1, {data: param})
        .done(function (data) {
            var data = JSON.parse(data);
            // loop through returned array of cities
            $.each(data, function(index, city) {
                // check if this is one of the desired cities
                var found = false;
                for (var i = 0; i < param.length; i++) {
                    var p = param[i].split(':');
                    if (city.iso === p[0] && city.name === p[1]) {
                        found = true;
                        break;
                    }
                }
                if (found) {
                    // create new empty list item
                    var item = $('<li>');
                    // list item using data attributes
                    item.attr( "data-lat", city.latitude);
                    item.attr( "data-long", city.longitude);
                    item.html('<a href="#">' + city.name + '</a>');
                    $("#cities").append(item);
                }
             });
             // add handler for clicking on list items
             $("#cities li").on("click", function () {
                 displayMap($(this));
             });

        })
        .fail(function (jqXHR) {
            alert("Error: " + jqXHR.status);
        })
        .always(function () {
            // all done so now hide the animated loading GIF
            $('.animLoading').fadeOut("slow");
        });
});


// display map for selected city 
function displayMap(selectedCity) {
    // the lat and long of city is contained within
    // the clicked <li> element
    var ourLatLong = {lat: Number(selectedCity.attr("data-lat")) ,
                      lng: Number(selectedCity.attr("data-long"))};
    var ourMap = new google.maps.Map(document.getElementById('map'), {
        center: ourLatLong,
        scrollwheel: false,
        zoom: 13
     });
}
