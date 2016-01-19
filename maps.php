<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Google StreetViews Ex</title>
    <script type="text/javascript">
    function initMap() {
        var map;
        var $div = document.getElementById('map');
        map = new google.maps.StreetViewPanorama($div, {
            zoom: 1,
            position: {
                lat: 15.2415826,
                lng: 104.8471357,
            },
            pov: {
                heading: 0,
                pitch: 0
            }
        });

        console.log(map.getCenter().lat());
        // Create LatLng Class
        // var latLng = new google.maps.LatLng(lat, lng);
        var marker;
        $.each(positions, function(index, val) {
            marker = createmarker(val.lat, val.lng, map, val.title, val.detail, val.address);
            marker.setMap(map);
        });
    }

    function createmarker(lat, lng, map, title, detail, address) {
        // console.log(title);
        var marker = new google.maps.Marker({
            position: {
                lat: lat,
                lng: lng
            },
            title: title
        });
        var info = new google.maps.InfoWindow({
            content: '<div class="col-md-12 text-center"><strong>' + detail + '</strong></div><div class="col-md-12 text-center">' + address + '</div>'
        });

        marker.addListener('click', function() {
            info.open(map, marker);
        });

        return marker;
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArNDS9don3Y-aywBRd-1GgMW7NAGiL6_o&callback=initMap">
    </script>
    <style type="text/css">
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    #map {
        height: 100%;
    }
    </style>
</head>

<body>
    <div id="map"></div>
</body>

</html>
