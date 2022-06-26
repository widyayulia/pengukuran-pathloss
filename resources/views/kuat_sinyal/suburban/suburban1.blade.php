<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/asset/SKN.png"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuat Sinyal | Suburban 1</title>
       <!-- Bootstrap CSS -->
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
<body>
    <div class="container-map">
        <div id="map"></div>
        <div class="card card-map">
            <div class="card-body">
                <h1 class="h5 fw-bold">
                    Peta kekuatan sinyal di <br /> daerah Kenjeran, Kec. Bulak, Kota SBY
                </h1>
                <form method="GET" action="{{ route('pathloss.suburban.bts')}}">
                    <p>Untuk menghitung Pathloss, tekan tombol dibawah!</p>
                    <input type="submit" class="btn btn-success"  name="model" value="Hitung Pathloss"/>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<script>
    var map = L.map('map').setView([-7.235329469675816, 112.79121959730983], 16);
    L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
		maxZoom: 100,
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
L.marker([-7.235397321375052, 112.79118003472776], {icon:btsIcon}).addTo(map).bindPopup("<b>Posisi BTS 1:</b><br>Surabaya, Kenjeran, Kec. Bulak, Kota SBY, Jawa Timur 60123 </b><br>Latitude:-7.235397321375052, <br>Longitude: 112.79118003472776 <br>hB: 30 meter ").openPopup();

//user
L.marker([-7.235565553762014, 112.79032827962759], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Surabaya, Kenjeran, Kec. Bulak, Kota SBY, Jawa Timur 60123 </b><br>Latitude:-7.235565553762014, <br>Longitude: 112.79032827962759 <br>Kuat Sinyal: - 77 dBm <br>Jarak: 100 meter").openPopup();

L.marker([-7.237086471169927, 112.79107535777834], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Mentari Kenjeran Barat-I 28-30, Kenjeran, Kec. Bulak, Kota SBY, Jawa Timur 60121 </b><br>Latitude:-7.237086471169927, <br>Longitude:112.79107535777834  <br>Kuat Sinyal: -80 dBm <br>Jarak: 200 meter").openPopup();

L.marker([-7.238005533678877, 112.79106898601627], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Memet Sastrowiryo, Komp. Kenjeran, Kec. Bulak, Kota SBY, Jawa Timur 60121 </b><br>Latitude: -7.238005533678877, <br>Longitude: 112.79106898601627 <br>Kuat Sinyal: -88 dBm <br>Jarak: 300 meter").openPopup();

L.marker([-7.235334656162481, 112.79480044939292], {icon:Icon1}).addTo(map).bindPopup(
    "<b>QQ7V+QVX, Jl. Kav. Mentari IV, Tambaksari, Tambakrejo, Kec. Waru, Kabupaten Sidoarjo, Jawa Timur </b><br>Latitude: -7.235334656162481, <br>Longitude: 112.79480044939292 <br>Kuat Sinyal: -82 dBm <br>Jarak: 400 meter").openPopup();

L.marker([-7.238208218988793, 112.79493602316875], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Mentari Kenjeran Tim. IV 21-26, Kenjeran, Kec. Bulak, Kota SBY, Jawa Timur 60123 </b><br>Latitude:-7.238208218988793 , <br>Longitude: 112.79493602316875 <br>Kuat Sinyal: -77 dBm <br>Jarak: 500 meter").openPopup();

L.marker([-7.240486674577221, 112.79293804830523], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Banuriyadi Kadir 1-39, Komp. Kenjeran, Kec. Bulak, Kota SBY, Jawa Timur 60121</b><br>Latitude: -7.240486674577221, <br>Longitude: 112.79293804830523 <br>Kuat Sinyal: -83 dBm <br>Jarak: 600 meter").openPopup();

L.marker([ -7.229183111958091, 112.79193517990393], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Ko Pantai Mentari Blok U2 No.7A, RT.001/RW.05, Kenjeran, Kec. Bulak, Kota SBY, Jawa Timur 60123</b><br>Latitude: -7.229183111958091, <br>Longitude:  112.79193517990393 <br>Kuat Sinyal: -85 dBm <br>Jarak: 700 meter").openPopup();

L.marker([-7.240484435980602, 112.79617059656078], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Pantai Kenjeran No.31-33, Kenjeran, Kec. Bulak, Kota SBY, Jawa Timur 60123 </b><br>Latitude: -7.240484435980602, <br>Longitude: 112.79617059656078 <br>Kuat Sinyal: -83 dBm <br>Jarak: 800 meter").openPopup();

L.marker([-7.228505147510819, 112.78654466624737], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Bulak, Kec. Bulak, Kota SBY, Jawa Timur </b><br>Latitude: -7.228505147510819, <br>Longitude: 112.78654466624737 <br>Kuat Sinyal: -99 dBm <br>Jarak: 900 meter").openPopup();

L.marker([-7.244557877140862, 112.7923167777143], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Tohir No.7, Komp. Kenjeran, Kec. Bulak, Kota SBY, Jawa Timur 60121</b><br>Latitude:-7.244557877140862 , <br>Longitude: 112.7923167777143 <br>Kuat Sinyal: -82 dBm <br>Jarak: 1000 meter").openPopup();

//     var latlngs = [
  // [-7.135428275065109, 111.62303814611816],
    //[-7.138952639190507, 111.63227390126201],
//];

//var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);

// zoom the map to the polyline
//map.fitBounds(polyline.getBounds());

</script>
</html>