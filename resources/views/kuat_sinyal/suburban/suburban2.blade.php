<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/asset/SKN.png"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuat Sinyal | Suburban 2</title>
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
                <form method="GET" action="{{ route('pathloss.suburban.bts') }}">
                <p>Untuk mengihtung Pathloss, tekan tombol dibawah!</p>
                    <input type="submit" class="btn btn-success btn-block"  name="model" value="Pathloss"/>
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
    var map = L.map('map').setView([-7.252789356267445, 112.79087076697697], 16);
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
L.marker([-7.252789356267445, 112.79087076697697], {icon:btsIcon}).addTo(map).bindPopup("<b>Posisi BTS 2:</b><br><b>Jl. Babatan Pantai Ut. No.18, Kalijudan, Kec. Mulyorejo, Kota SBY, Jawa Timur 60114 </b><br>Latitude:-7.252789356267445, <br>Longitude: 112.79087076697697 <br>hB: 45 meter  ").openPopup();

//user

L.marker([-7.253175990557081, 112.79105675390302], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Babatan Pantai Utara I, Kalijudan, Kec. Mulyorejo, Kota SBY, Jawa Timur 60114 </b><br>Latitude: -7.253175990557081, <br>Longitude: 112.79105675390302 <br>Kuat Sinyal: -65 dBm <br>Jarak: 100 meter").openPopup();

L.marker([-7.252232816313839, 112.79246999669238], {icon:Icon1}).addTo(map).bindPopup(
    "<bJl. Babatan Pantai No.24B, Dukuh Sutorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60113></b><br>Latitude: -7.252232816313839, <br>Longitude: 112.79246999669238 <br>Kuat Sinyal: -83 dBm <br>Jarak: 200 meter").openPopup();

L.marker([-7.252576337324097, 112.79352825969175], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Kenjeran 632-616, Dukuh Sutorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60113</b><br>Latitude: -7.252576337324097, <br>Longitude: 112.79352825969175 <br>Kuat Sinyal: -75 dBm <br>Jarak: 300 meter").openPopup();

L.marker([-7.254529994755221, 112.79364530282655], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Babatan Pantai VII 17-19, Dukuh Sutorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60113</b><br>Latitude: -7.254529994755221, <br>Longitude: 112.79364530282655  <br>Kuat Sinyal: -78 dBm <br>Jarak: 400 meter").openPopup();

L.marker([-7.255946003660024, 112.7880813377968], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Babatan Pantai Bar I 1-37, Dukuh Sutorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60114 </b><br>Latitude: -7.255946003660024, , <br>Longitude: 112.7880813377968<br>Kuat Sinyal: - 67 dBm <br>Jarak: 500 meter").openPopup();

L.marker([-7.250003161221293, 112.79594369220366], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Wiratno, Komp. Kenjeran, Kec. Bulak, Kota SBY, Jawa Timur 60121 </b><br>Latitude: -7.250003161221293, <br>Longitude: 112.79594369220366 <br>Kuat Sinyal: -81 dBm <br>Jarak: 600 meter").openPopup();

L.marker([-7.253608656548175, 112.79703986348727], {icon:Icon1}).addTo(map).bindPopup(
    "<b>PQWW+HRR, Tempurejo Tanggul, Dukuh Sutorejo, Mulyorejo, Surabaya City, East Java 60113 </b><br>Latitude: -7.253608656548175, <br>Longitude: 112.79703986348727 <br>Kuat Sinyal: -83 dBm <br>Jarak: 700 meter").openPopup();

L.marker([-7.25224980644074, 112.78354594415983], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Dr. Ir. H. Soekarno, Kalijudan, Kec. Mulyorejo, Kota SBY, Jawa Timur 60134 </b><br>Latitude: -7.25224980644074, <br>Longitude: 112.78354594415983 <br>Kuat Sinyal: -90 dBm <br>Jarak: 800 meter").openPopup();

L.marker([-7.2541157316270075, 112.78284203093564], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Dr. Ir. H. Soekarno No.195, Kalijudan, Kec. Mulyorejo, Kota SBY, Jawa Timur 60133</b><br>Latitude: -7.2541157316270075, <br>Longitude: 112.78284203093564 <br>Kuat Sinyal: -97 dBm <br>Jarak: 900 meter").openPopup();

L.marker([-7.249202161979778, 112.7821806129253], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Kenjeran, Gading, Kec. Tambaksari, Kota SBY, Jawa Timur 60134</b><br>Latitude: -7.249202161979778, <br>Longitude: 112.7821806129253 <br>Kuat Sinyal: -82 dBm <br>Jarak: 1000 meter").openPopup();

//     var latlngs = [
  // [-7.135428275065109, 111.62303814611816],
    //[-7.138952639190507, 111.63227390126201],
//];

//var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);

// zoom the map to the polyline
//map.fitBounds(polyline.getBounds());

</script>
</html>