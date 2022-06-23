<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/asset/SKN.png"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuat Sinyal | Urban 2</title>
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
    var map = L.map('map').setView([-7.263239789053495, 112.74588116808381], 16);
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
L.marker([-7.263239789053495, 112.74588116808381], {icon:btsIcon}).addTo(map).bindPopup("<b>Posisi BTS 2:</b><br><b>Jl. Yos Sudarso 11-15, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271 </b><br>Latitude:-7.263239789053495,  <br>Longitude:112.74588116808381  <br>hB: 30 meter").openPopup();

//user

L.marker([-7.262810472882235, 112.74503101390876], {icon:Icon1}).addTo(map).bindPopup(
    "<b>PPPW+R2M, Jl. Ketabang Kali, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272 </b><br>Latitude: -7.262810472882235, <br>Longitude: 112.74503101390876 <br>Kuat Sinyal: -70 dBm <br>Jarak: 100 meter").openPopup();

L.marker([-7.262758588264806, 112.74409541393177], {icon:Icon1}).addTo(map).bindPopup(
    "<b>PPPV+VH9, Embong Kaliasin, Genteng, Surabaya City, East Java </b><br>Latitude: -7.262758588264806, <br>Longitude: 112.74409541393177 <br>Kuat Sinyal: -85 dBm <br>Jarak: 200 meter").openPopup();

L.marker([-7.2659761238324005, 112.74475158075326], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Panglima Sudirman No.20-22, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271 </b><br>Latitude: -7.2659761238324005, <br>Longitude: 112.74475158075326 <br>Kuat Sinyal: -83 dBm <br>Jarak: 300 meter").openPopup();

L.marker([-7.259715496320213, 112.74369059387611], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Surabaya, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272 </b><br>Latitude: -7.259715496320213, <br>Longitude: 112.74369059387611 <br>Kuat Sinyal: -75 dBm <br>Jarak: 400 meter").openPopup();

L.marker([-7.2586599683598045, 112.74409238678518], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Ngemplak 20-10, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272 </b><br>Latitude: -7.2586599683598045, <br>Longitude:  112.74409238678518 <br>Kuat Sinyal: -66 dBm <br>Jarak: 500 meter").openPopup();

L.marker([-7.257861099957248, 112.74446031231011], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Ngemplak 20-10, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272 </b><br>Latitude: -7.257861099957248, <br>Longitude: 112.74446031231011 <br>Kuat Sinyal: -74 dBm <br>Jarak: 600 meter").openPopup();

L.marker([-7.256649387864306, 112.7466212288286], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Ruko Sentra Fortuna, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272 </b><br>Latitude: -7.256649387864306, <br>Longitude: 112.7466212288286 <br>Kuat Sinyal: -83 dBm <br>Jarak: 700 meter").openPopup();

L.marker([-7.260072797327386, 112.7524918834037], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Legundi Dka No.15F, RT.006/RW.03, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272 </b><br>Latitude: -7.260072797327386, <br>Longitude: 112.7524918834037 <br>Kuat Sinyal: -88 dBm <br>Jarak: 800 meter").openPopup();

L.marker([-7.2658276052816095, 112.75358364810201], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Surabaya, Pacar Keling, Kec. Tambaksari, Kota SBY, Jawa Timur 60131</b><br>Latitude: -7.2658276052816095, <br>Longitude: 112.75358364810201 <br>Kuat Sinyal: -85 dBm <br>Jarak: 900 meter").openPopup();

L.marker([-7.270889526595898, 112.74921946165908], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Kalimantan 10-2, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281 </b><br>Latitude: -7.270889526595898, <br>Longitude: 112.74921946165908 <br>Kuat Sinyal: -92 dBm <br>Jarak: 1000 meter").openPopup();


//     var latlngs = [
  // [-7.135428275065109, 111.62303814611816],
    //[-7.138952639190507, 111.63227390126201],
//];

//var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);

// zoom the map to the polyline
//map.fitBounds(polyline.getBounds());

</script>
</html>