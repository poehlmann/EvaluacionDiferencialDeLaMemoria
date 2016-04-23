//var nombre = '<?php echo $nombre; ?>' ;
//document.write("VariableJS = " + variablejs);
//document.getElementById("paciente").innerHTML =nombre;
//alert('nombre: ' + nombre);
/*
function CambiarColorCasilla(color) {
    document.getElementById("formButton").click();
    celda = document.getElementById("2");
    celda.style.backgroundColor = "green";
}
*/
function loadScript(src,callback){

    var script = document.createElement("script");
    script.type = "text/javascript";
    if(callback)script.onload=callback;
    document.getElementsByTagName("head")[0].appendChild(script);
    script.src = src;
}
loadScript('http://maps.googleapis.com/maps/api/js?v=3&sensor=false&callback=initialize',
    function(){log('Visualice su doctor mas cercano a usted para que pueda realizar su lectura de analisis');});
function initialize() {
    var mapOptions = {
        zoom: 17,
        center: new google.maps.LatLng(-34.397, 150.644),
        mapTypeControlOptions: {
            mapTypeIds: [
                google.maps.MapTypeId.ROADMAP,
                google.maps.MapTypeId.SATELLITE
            ],
            position: google.maps.ControlPosition.BOTTOM_LEFT
        }
    };

    map = new google.maps.Map(document.getElementById('map_canvas'),
        mapOptions);
    //geolocation
    var infoWindow = new google.maps.InfoWindow({map: map});
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            //infoWindow.setPosition(pos);
            //infoWindow.setContent('Localizacion encontrada.');
            map.setCenter(pos);
            var geocoder = new google.maps.Geocoder;
            var infowindow = new google.maps.InfoWindow({map: map});
            geocodeLatLng(geocoder, map, infowindow,pos);
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        //handleLocationError(false, infoWindow, map.getCenter());
    }
}
function geocodeLatLng(geocoder, map, infowindow,pos) {
    console.log("pos",pos);
    var latlng = {lat: parseFloat(pos.lat), lng: parseFloat(pos.lng)};
    console.log("latlng",latlng);
    geocoder.geocode({'location': latlng}, function(results, status) {
        console.log("result",results);
        if (status === google.maps.GeocoderStatus.OK) {
            if (results[1]) {
                map.setZoom(16);
                var marker = new google.maps.Marker({
                    position: latlng,
                    map: map
                });
            } else {
                window.alert('No results found');
            }
        } else {
            window.alert('Geocoder failed due to: ' + status);
        }
    });


}
function log(str){
    //document.getElementsByTagName('pre')[0].appendChild(document.createTextNode('['+new Date().getTime()+']\n'+str+'\n\n'));
}
