<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/asset/SKN.png"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuat Sinyal | Rural</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
   integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
   crossorigin=""/>

   <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
   integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
   crossorigin=""></script>

   <script src="https://unpkg.com/esri-leaflet@3.0.8/dist/esri-leaflet.js"
    integrity="sha512-E0DKVahIg0p1UHR2Kf9NX7x7TUewJb30mxkxEm2qOYTVJObgsAGpEol9F6iK6oefCbkJiA4/i6fnTHzM6H1kEA=="
    crossorigin=""></script>
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-map">
        <div id="map"></div>
        <div class="card card-map">
            <div class="card-body">
                <h1 class="h5 fw-bold">
                    Peta kekuatan sinyal di <br /> daerah Sendang Gedhe, Sambeng
                </h1>
                <form method="GET" action="{{ route('pathloss.rural.input')}}">
                    <p>Untuk menghitung Pathloss, tekan tombol dibawah!</p>
                    <input type="submit" class="btn btn-success"  name="model" value="Hitung Pathloss"/>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<script>
    var map = L.map('map').setView([-7.135428275065109, 111.62303814611816], 16);
    L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
		maxZoom: 50,
        subdomains:['mt0','mt1','mt2','mt3']
	}).addTo(map);

	function onMapClick(e) {
		L.popup()
			.setLatLng(e.latlng)
			.setContent('You clicked the map at ' + e.latlng.toString())
			.openOn(map);
	}

	map.on('click', onMapClick);

    L.marker('')
    
    var btsIcon = L.icon({
    iconUrl: 'https://cdn0.iconfinder.com/data/icons/communication-icons-rounded/110/Antenna-512.png',
    iconSize:     [30, 30], // size of the icon
    shadowSize:   [30, 30], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
var Icon1 = L.icon({
    iconUrl: '/asset/pin.png',
    iconSize:     [30, 30], // size of the icon
    shadowSize:   [30, 30], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
//Pusat BTS
L.marker([-7.135428275065109, 111.62303814611816], {icon:btsIcon}).addTo(map).bindPopup("<b>Posisi BTS:</b><br><b>Sendang Gedhe, Sambeng, Kec. Kasiman, Kabupaten Bojonegoro, Jawa Timur 62164</b><br>Latitude:-7.135100709531907 <br>Longitude:111.62308310766925 <br> hB:30 meter").openPopup();

//user

L.marker([-7.136083177404034, 111.62276788642312], {icon:Icon1}).addTo(map).bindPopup(
     "<b>Sendang Kijing, Sambeng, Kec. Kasiman, Kabupaten Bojonegoro, Jawa Timur 62164</b><br>Latitude: -7.136083177404034, <br>Longitude: 111.62276788642312 <br>Kuat Sinyal:-66 dBm <br>Jarak: 32 meter").openPopup();

L.marker([-7.136383226466853, 111.62302461694257], {icon:Icon1}).addTo(map).bindPopup(
   "<b> Jl. Wonosari, Sendang Gedhe, Sambeng, Kec. Kasiman, Kabupaten Bojonegoro, Jawa Timur 62164 </b> <br>Latitude: -7.136383226466853 , <br>Longitude: 111.62302461694257  <br>Kuat Sinyal: -89 dBm <br>Jarak: 83 meter").openPopup();

L.marker([-7.136150606147128, 111.62416247678499], {icon:Icon1}).addTo(map).bindPopup(
    "<b> Sendang Gedhe, Sambeng, Kec. Kasiman, Kabupaten Bojonegoro, Jawa Timur 62164</b> <br>Latitude: -7.136150606147128  , <br>Longitude: 111.62416247678499  <br>Kuat Sinyal: -85 dBm <br>Jarak: 105 meter").openPopup();

L.marker([-7.135912810584075, 111.62506430604958], {icon:Icon1}).addTo(map).bindPopup(
    "<b> Sendang Gedhe, Sambeng, Kec. Kasiman, Kabupaten Bojonegoro, Jawa Timur 62164</b> <br>Latitude: -7.135912810584075, <br>Longitude: 111.62506430604958  <br>Kuat Sinyal: -85 dBm <br>Jarak:  145 meter").openPopup();

L.marker([-7.1358498957531635, 111.62514854086201], {icon:Icon1}).addTo(map).bindPopup(
    "<b> Jl. Wonosari, Sendang Gedhe, Sambeng, Kec. Kasiman, Kabupaten Bojonegoro, Jawa Timur 62164</b> <br>Latitude: -7.1358498957531635, <br>Longitude: 111.62514854086201  <br>Kuat Sinyal: -68 dBm <br>Jarak: 217 meter").openPopup();

L.marker([-7.134723159571443, 111.62568665203928], {icon:Icon1}).addTo(map).bindPopup(
    "<b> Sendang Gedhe, Sambeng, Kec. Kasiman, Kabupaten Bojonegoro, Jawa Timur 62164</b> <br>Latitude: -7.134723159571443, <br>Longitude: 111.62568665203928  <br>Kuat Sinyal: -75 dBm <br>Jarak: 238 meter").openPopup();

L.marker([-7.131654475745247, 111.62358130399727], {icon:Icon1}).addTo(map).bindPopup(
    "<b> Sendang Gedhe,Sambeng, Kec. Kasiman, Kabupaten Bojonegoro, Jawa Timur 62164</b> <br>Latitude: -7.131654475745247, <br>Longitude: 111.62358130399727  <br>Kuat Sinyal: -88 dBm <br>Jarak: 308 meter").openPopup();

L.marker([-7.133940379010553, 111.62601388344424], {icon:Icon1}).addTo(map).bindPopup(
    "<b> Sendang Gedhe,Sambeng, Kec. Kasiman, Kabupaten Bojonegoro, Jawa Timur 62164</b> <br>Latitude: -7.133940379010553, <br>Longitude: 111.62601388344424 <br>Kuat Sinyal: -96 dBm <br>Jarak: 326 meter").openPopup();

L.marker([-7.131936106901456, 111.62360184221977], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Sendang Gedhe, Sambeng, Kec. Kasiman, Kabupaten Bojonegoro, Jawa Timur 62164</b> <br>Latitude: -7.131936106901456, <br>Longitude: 111.62360184221977<br>Kuat Sinyal:-97 dBm <br>Jarak: 367 meter").openPopup();
    
L.marker([-7.138952639190507, 111.63227390126201], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Sendang Kijing, Sambeng, Kec. Kasiman, Kabupaten Bojonegoro, Jawa Timur 62164</b> <br>Latitude: -7.138952639190507, <br>Longitude: 111.63227390126201 <br>Kuat Sinyal:-115 dBm <br>Jarak: 433 meter").openPopup();

//     var latlngs = [
  // [-7.135428275065109, 111.62303814611816],
    //[-7.138952639190507, 111.63227390126201],
//];

//var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);

// zoom the map to the polyline
//map.fitBounds(polyline.getBounds());

</script>
</html>