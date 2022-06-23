<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/asset/SKN.png"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuat Sinyal | Urban 1</title>
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
</head>
<body>
<p>
<center> <div class="container px-4">
<div class="row gx-5">
<div class="col">
<div class="grid-tombol">
                <form method="GET" action="{{ route('pathloss.urban.bts') }}">
                    <p>Untuk mengihtung Pathloss, tekan tombol dibawah!</p>
                    <input type="submit" class="btn btn-success btn-block"  name="model" value="Hitung Pathloss"/>
                </form>
    </div>
</div>
</div>
</div>
</center>
</p>
<style>
        #map { height: 600px; }
        </style>
<div id="map"></div> 

</body>
<script>
    var map = L.map('map').setView([-7.263702995398022, 112.74587072694965], 16);
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
L.marker([-7.263702995398022, 112.74587072694965], {icon:btsIcon}).addTo(map).bindPopup("<b>Posisi BTS 1:</b><br><b>Bank Mega (Embong Kaliasin), Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur </b><br>Latitude:-7.263702995398022, <br>Longitude: 112.74587072694965 <br>hB: 35 meter  ").openPopup();

//user

L.marker([-7.2633209051627246, 112.7461267098337], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Surabaya, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271 </b><br>Latitude: -7.2633209051627246, <br>Longitude: 112.7461267098337 <br>Kuat Sinyal: -65 dBm <br>Jarak: 100 meter").openPopup();

L.marker([-7.263527137575626, 112.7435644517461], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Gubernur Suryo No.9, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271 </b><br>Latitude: -7.263527137575626, <br>Longitude:  112.7435644517461 <br>Kuat Sinyal: -74 dBm <br>Jarak: 200 meter").openPopup();

L.marker([-7.265038387896521, 112.74766889520072], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Plaza Boulevard, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271 </b><br>Latitude: -7.265038387896521, <br>Longitude: 112.74766889520072  <br>Kuat Sinyal: -80 dBm <br>Jarak: 300 meter").openPopup();

L.marker([-7.262580665164125, 112.74186860048589], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Gubernur Suryo No.1, RW.3, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271 </b><br>Latitude: -7.262580665164125, <br>Longitude: 112.74186860048589 <br>Kuat Sinyal: -78 dBm <br>Jarak: 400 meter").openPopup();

L.marker([-7.261219505702919, 112.7414646640723], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Kenari 14-2, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60275 </b><br>Latitude: -7.261219505702919, <br>Longitude: 112.7414646640723 <br>Kuat Sinyal: -76 dBm <br>Jarak: 500 meter").openPopup();

L.marker([-7.26379534380202, 112.73996201163268], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Kaliasin Pompa No.23, RT.001/RW.11, Kedungdoro, Kec. Tegalsari, Kota SBY, Jawa Timur 60261 </b><br>Latitude: -7.26379534380202, <br>Longitude: 112.73996201163268 <br>Kuat Sinyal: -74 dBm <br>Jarak: 600 meter").openPopup();

L.marker([-7.266859753986062, 112.7398658522478], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Pregolan No.6b, Tegalsari, Kec. Tegalsari, Kota SBY, Jawa Timur 60262 </b><br>Latitude:-7.266859753986062, <br>Longitude: 112.7398658522478 <br>Kuat Sinyal: -73 dBm <br>Jarak: 700 meter").openPopup();

L.marker([-7.269498548928732, 112.74139909003073], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Surabaya, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur </b><br>Latitude: -7.269498548928732,  <br>Longitude: 112.74139909003073 <br>Kuat Sinyal: -81 dBm <br>Jarak: 800 meter").openPopup();

L.marker([-7.269028653562911, 112.75127081808057], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Nias No.22, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281 </b><br>Latitude: -7.269028653562911, <br>Longitude: 112.75127081808057 <br>Kuat Sinyal: -81 dBm <br>Jarak: 900 meter").openPopup();

L.marker([-7.271394478442376, 112.74981004863523], {icon:Icon1}).addTo(map).bindPopup(
    "<b>PPHX+FXC, Jl. Kalimantan, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281 </b><br>Latitude: -7.271394478442376, <br>Longitude: 112.74981004863523 <br>Kuat Sinyal: -89 dBm <br>Jarak: 1000 meter").openPopup();

//     var latlngs = [
  // [-7.135428275065109, 111.62303814611816],
    //[-7.138952639190507, 111.63227390126201],
//];

//var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);

// zoom the map to the polyline
//map.fitBounds(polyline.getBounds());

</script>
</html>