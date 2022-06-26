<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/asset/SKN.png"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuat Sinyal | Urban 3</title>
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
<div class="container-map">
        <div id="map"></div>
        <div class="card card-map">
            <div class="card-body">
                <h1 class="h5 fw-bold">
                    Peta kekuatan sinyal di <br /> daerah Kec. Genteng, Kabupaten Gresik
                </h1>
                <form method="GET" action="{{ route('pathloss.urban.bts')}}">
                    <p>Untuk menghitung Pathloss, tekan tombol dibawah!</p>
                    <input type="submit" class="btn btn-success"  name="model" value="Hitung Pathloss"/>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<script>
    var map = L.map('map').setView([-7.262815805870083, 112.74630336927797], 16);
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
L.marker([-7.262815805870083, 112.74630336927797], {icon:btsIcon}).addTo(map).bindPopup("<b>Posisi BTS 3:</b><br><b>Jl. Yos Sudarso No.28, Bedilan, Embong Kaliasin, Kec. Genteng, Kabupaten Gresik, Jawa Timur 61114 </b><br>Latitude:-7.262815805870083, <br>Longitude: 112.74630336927797 <br>hB: 30 meter ").openPopup();

//user

L.marker([-7.261868619914383, 112.74608749734757], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Yos Sudarso No.16, RT.003/RW.06, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272 </b><br>Latitude: -7.261868619914383, <br>Longitude: 112.74608749734757 <br>Kuat Sinyal: -66 dBm <br>Jarak: 100 meter").openPopup();

L.marker([-7.260885548396194, 112.74710335025527], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Walikota Mustajab No.74, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272 </b><br>Latitude: -7.260885548396194, <br>Longitude: 112.74710335025527 <br>Kuat Sinyal: -81 dBm <br>Jarak: 200 meter").openPopup();

L.marker([-7.260349232148024, 112.74543515301566], {icon:Icon1}).addTo(map).bindPopup(
    "<b> Jl. Walikota Mustajab 72-62, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272 </b><br>Latitude: -7.260349232148024, <br>Longitude: 112.74543515301566 <br>Kuat Sinyal: -77 dBm <br>Jarak: 300 meter").openPopup();

L.marker([-7.259924290371219, 112.74404942352204], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Walikota Mustajab 36-14, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272 </b><br>Latitude: -7.259924290371219, <br>Longitude: 112.74404942352204 <br>Kuat Sinyal: -75 dBm <br>Jarak: 400 meter").openPopup();

L.marker([-7.260845731879628, 112.74220139681204], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Simpang Dukuh No.01 B, RT.002/RW.09, Genteng, Kec. Genteng, Kota SBY, Jawa Timur 60275 </b><br>Latitude: -7.260845731879628, <br>Longitude: 112.74220139681204 <br>Kuat Sinyal: -77 dBm <br>Jarak: 500 meter").openPopup();

L.marker([-7.263698004484351, 112.74087005825723], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Kedungdoro, Kec. Tegalsari, Kota SBY, Jawa Timur </b><br>Latitude: -7.263698004484351, <br>Longitude: 112.74087005825723 <br>Kuat Sinyal: -85 dBm <br>Jarak: 600 meter").openPopup();

L.marker([-7.2661066071541525, 112.74087877773444], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Basuki Rahmat No.3, Tegalsari, Kec. Tegalsari, Kota SBY, Jawa Timur 60271 </b><br>Latitude: -7.2661066071541525, <br>Longitude: 112.74087877773444 <br>Kuat Sinyal: -89 dBm <br>Jarak: 700 meter").openPopup();

L.marker([-7.269514587656222, 112.74357756807883], {icon:Icon1}).addTo(map).bindPopup(
    "<b>PT. Bank CIMB Niaga. Tbk, Kios Sudirman, JL. Jenderal Sudirman No.59-61, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271 </b><br>Latitude: -7.269514587656222, <br>Longitude: 112.74357756807883 <br>Kuat Sinyal: -88 dBm <br>Jarak: 800 meter").openPopup();

L.marker([-7.26709299999009, 112.74571201155597], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Embong Tj. No.10, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271 </b><br>Latitude: -7.26709299999009, <br>Longitude: 112.74571201155597 <br>Kuat Sinyal: -87 dBm <br>Jarak: 900 meter").openPopup();

L.marker([-7.267145420178209, 112.74900503664085], {icon:Icon1}).addTo(map).bindPopup(
    "<b>Jl. Embong Kenongo No.72, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271 </b><br>Latitude: -7.267145420178209, <br>Longitude: 112.74900503664085 <br>Kuat Sinyal: -89 dBm <br>Jarak: 1000 meter").openPopup();

//     var latlngs = [
  // [-7.135428275065109, 111.62303814611816],
    //[-7.138952639190507, 111.63227390126201],
//];

//var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);

// zoom the map to the polyline
//map.fitBounds(polyline.getBounds());

</script>
</html>