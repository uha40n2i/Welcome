
var radiusKm = 20;

function distance(lat1, lon1, lat2, lon2) {
    var p = 0.017453292519943295;    // Math.PI / 180
    var c = Math.cos;
    var a = 0.5 - c((lat2 - lat1) * p)/2 +
        c(lat1 * p) * c(lat2 * p) *
        (1 - c((lon2 - lon1) * p))/2;

    return 12742 * Math.asin(Math.sqrt(a)); // 2 * R; R = 6371 km
}

$("#host-button").click(function(){

    $(".results-contacts").empty();

    $.ajax({

        url: "http://welcomen2i.eu/data/hebergements.json"

    }).done(function( dataHebergements ) {

        var location = $("#location-input").val();

        if(location==""){

            for(var hebergements in dataHebergements.markers.marker){

                $(".results-contacts").append('<div class="cadre-contacts"><h6><a href="'+ dataHebergements.markers.marker[hebergements]._url +'" target="_blank">'+ dataHebergements.markers.marker[hebergements]._nom +'</a> à '+dataHebergements.markers.marker[hebergements]._ville +'</h6></div> <br/>');

            }

        }else{

            $.ajax({

                url: "http://api.opencagedata.com/geocode/v1/json?q="+ encodeURI($("#location-input").val()) +"&key=ec7d80425487db49c7d5a28f2b96f3e3"

            }).done(function( dataGeocoding ) {

                var latitude = dataGeocoding.results[0].geometry.lat;
                var longitude = dataGeocoding.results[0].geometry.lng;
                var postCode = dataGeocoding.results[0].components.postcode;
                var city = dataGeocoding.results[0].components.town;
                var qibla = dataGeocoding.results[0].annotations.qibla;
                var mapUrl = dataGeocoding.results[0].annotations.OSM.url;

                for(var hebergements in dataHebergements.markers.marker){

                    if (distance(latitude, longitude, dataHebergements.markers.marker[hebergements]._lat, dataHebergements.markers.marker[hebergements]._lng) <= radiusKm){

                        $(".results-contacts").append('<div class="cadre-contacts"><h6><a href="'+ dataHebergements.markers.marker[hebergements]._url +'" target="_blank">'+ dataHebergements.markers.marker[hebergements]._nom +'</a> à '+dataHebergements.markers.marker[hebergements]._ville +'</h6><p>L\'emplacement se trouve à <b>'+ Math.floor(distance(latitude, longitude, dataHebergements.markers.marker[hebergements]._lat, dataHebergements.markers.marker[hebergements]._lng)) +'km</b><p> Cliquez <a href="https://www.google.fr/maps/dir/\''+ latitude +','+ longitude +'\'/'+ dataHebergements.markers.marker[hebergements]._lat +','+ dataHebergements.markers.marker[hebergements]._lng +'/" target="_blank">ici</a> pour voir l\'itinéraire vous menant jusqu\'à l\'emplacement</p></div> <br/>');

                    }

                }

            });
        }

    });

});
