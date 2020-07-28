<!DOCTYPE html>
<html>
  <head>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
    <script
      data-require="jquery@3.1.1"
      data-semver="3.1.1"
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"
    ></script>
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
    />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet-src.js"></script>
    <style>
      html,
      body {
        height: 100%;
      }

      #map {
        height: 98%;
      }
    </style>
  </head>

  <body>
  <div id='map2' style='width: 400px; height: 300px;'></div>
  <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoicmVzdHVhZGtoIiwiYSI6ImNrZDVpZTlrdzBlemwydGxvMW95YXgybmMifQ.1AkYQsO13ET8Y1rQcAxy5Q';
    var map = new mapboxgl.Map({
    container: 'map2',
    style: 'mapbox://styles/mapbox/streets-v11'
    });
  </script>
    <div id="map"></div>
    <script>
      // Define map
      var map = L.map('map', {
        center: [-7.8899, 110.3271],
        minZoom: 1,
        zoom: 13,
        //layers: [googleMLayer, cheese_commGroup, countyGroup]
      });
      var scale = L.control.scale(); // Creating scale control
         scale.addTo(map); // Adding scale control to the map
      //// DEFINE BASE MAP LAYERS
      //
      // Open StreetMap
      var osmlink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
      var osmlink1 = '<a href="http://openstreetmap.org">Black And White</a>';
      var osmlink2 = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
      var osmlink3 = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
      var osmlink4 = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
      var osmLayer = L.tileLayer(
        '//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', //Mapnik
        {
          attribution: 'Map data &copy; ' + osmlink,
          maxZoom: 19,
        }
      ).addTo(map);
      var osmLayer1 = L.tileLayer(
        '//{s}.tiles.wmflabs.org/bw-mapnik/{z}/{x}/{y}.png', //Black And White
        {
          attribution: 'Map data &copy; ' + osmlink1,
          maxZoom: 19,
        }
      ).addTo(map);
      var osmLayer2 = L.tileLayer(
        '//{s}.tile.opentopomap.org/{z}/{x}/{y}.png', //OpenTopoMap
        {
          attribution: 'Map data &copy; ' + osmlink2,
          maxZoom: 19,
        }
      ).addTo(map);
      var osmLayer3 = L.tileLayer(
        '//{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', //France
        {
          attribution: 'Map data &copy; ' + osmlink3,
          maxZoom: 19,
        }
      ).addTo(map);
      var osmLayer4 = L.tileLayer(
        '//tile.openstreetmap.bzh/br/{z}/{x}/{y}.png', //BZH
        {
          attribution: 'Map data &copy; ' + osmlink4,
          maxZoom: 19,
        }
      ).addTo(map);

        //// Map Control
        // Basemaps for control
        var baseLayers = {
          'Black And White': osmLayer1,
          'OpenTopoMap': osmLayer2,
          'France': osmLayer3,
          'BZH': osmLayer4,
          'Open Street Map': osmLayer,
        };

        // Feature layers for control
        var P_Banguntapan_I = L.marker([-7.829245, 110.413952]).bindPopup('Puskesmas Banguntapan I'),
            P_Imogiri_I    = L.marker([-7.91984, 110.38024]).bindPopup('Puskesmas Imogiri I'),
            P_Piyungan    = L.marker([-7.831355, 110.458602]).bindPopup('Puskesmas Piyungan'),
            P_Sedayu_I     = L.marker([-7.80168, 110.27651]).bindPopup('Puskesmas Sedayu I'),
            P_Srandakan    = L.marker([-7.93812, 110.25074]).bindPopup('Puskesmas Srandakan'),
            P_Pembantu_Tirtohargo    = L.marker([-7.99894, 110.29189]).bindPopup('Puskesmas Pembantu Tirtohargo'),
            P_Kasihan_I    = L.marker([-7.838309, 110.312136]).bindPopup('Puskesmas Kasihan I'),
            P_Sewon_1    = L.marker([-7.860926, 110.353437]).bindPopup('Puskesmas Sewon 1'),
            P_Pembantu_Pendowoharjo_Pkm_Sewon_I    = L.marker([-7.864185, 110.339006]).bindPopup('Puskesmas Pembantu Pendowoharjo Pkm Sewon I'),
            P_Pembantu_Gowasari_1    = L.marker([-7.878420, 110.314518]).bindPopup('Puskesmas Pembantu Gowasari 1'),
            
            P_Pembantu_Bantul    = L.marker([-7.882562, 110.331560]).bindPopup('Puskesmas Pembantu Bantul'),
            P_Pembantu_Ringinharjo    = L.marker([-7.885449, 110.317196]).bindPopup('Puskesmas Pembantu Ringinharjo'),
            P_Jetis_I    = L.marker([-7.897813, 110.375126]).bindPopup('Puskesmas Jetis I'),
            P_Pajangan    = L.marker([-7.893505, 110.289605]).bindPopup('Puskesmas Pajangan'),
            P_Pandak_1    = L.marker([-7.901229, 110.301281]).bindPopup('Puskesmas Pandak 1'),
            P_Bantul_1    = L.marker([-7.903459, 110.321769]).bindPopup('Puskesmas Bantul 1'),
            P_Sumbermulyo    = L.marker([-7.921783, 110.313084]).bindPopup('Puskesmas Sumbermulyo'),
            P_Bambangliouro_I    = L.marker([-7.921725, 110.313516]).bindPopup('Puskesmas Bambangliouro'),
            P_Pembantu_Canden    = L.marker([-7.926757, 110.360336]).bindPopup('Puskesmas Pembantu Canden'),
            P_Jetis_2    = L.marker([-7.928300, 110.349403]).bindPopup('Puskesmas Jetis 2'),
            
            P_Caturharjo    = L.marker([-7.940360, 110.269267]).bindPopup('Puskesmas Caturharjo'),
            P_Bambanglipuro_II    = L.marker([-7.955712, 110.292818]).bindPopup('Puskesmas Bambanglipuro II'),
            P_Pandak_II    = L.marker([-7.91834, 110.28417]).bindPopup('Puskesmas Pandak II');

        var Puskesmas = L.layerGroup([
          P_Banguntapan_I,
          P_Imogiri_I,
          P_Piyungan,
          P_Sedayu_I,
          P_Sedayu_I,
          P_Srandakan,
          P_Pembantu_Tirtohargo,
          P_Kasihan_I,
          P_Sewon_1,
          P_Pembantu_Pendowoharjo_Pkm_Sewon_I,
          P_Pembantu_Gowasari_1,
          
          P_Pembantu_Bantul,
          P_Pembantu_Ringinharjo,
          P_Jetis_I,
          P_Pajangan,
          P_Pandak_1,
          P_Bantul_1,
          P_Sumbermulyo,
          P_Bambangliouro_I,
          P_Pembantu_Canden,
          P_Jetis_2,

          P_Caturharjo,
          P_Bambanglipuro_II,
          P_Pandak_II
        ]);
        var overlaysObj = {
            "Puskesmas Layer" : Puskesmas, 
            "Puskesmas Banguntapan 1" : P_Banguntapan_I,
            "Puskesmas Imogiri I" : P_Imogiri_I,
            "Puskesmas Piyungan" : P_Piyungan,
            "Puskesmas Sedayu I" : P_Sedayu_I,
            "Puskesmas Srandakan" : P_Srandakan,
            "Puskesmas Pembantu Tirtohargo" : P_Pembantu_Tirtohargo,
            "Puskesmas Kasihan I" : P_Kasihan_I,
            "Puskesmas Sewon 1" : P_Sewon_1,
            "Puskesmas Pembantu Pendowoharjo Pkm Sewon I" : P_Pembantu_Pendowoharjo_Pkm_Sewon_I,
            "Puskesmas Pembantu Gowasari 1" : P_Pembantu_Gowasari_1,

            "Puskesmas Pembantu Bantul" : P_Pembantu_Bantul,
            "Puskesmas Pembantu Ringinharjo" : P_Pembantu_Ringinharjo,
            "Puskesmas Jetis I" : P_Jetis_I,
            "Puskesmas Pajangan" : P_Pajangan,
            "Puskesmas Pandak 1" : P_Pandak_1,
            "Puskesmas Bantul 1" : P_Bantul_1,
            "Puskesmas Sumbermulyo" : P_Sumbermulyo,
            "Puskesmas Bambangliouro" : P_Bambangliouro_I,
            "Puskesmas Pembantu Canden" : P_Pembantu_Canden,
            "Puskesmas Jetis 2" : P_Jetis_2,

            "Puskesmas Caturharjo" : P_Caturharjo,
            "Puskesmas Bambanglipuro II" : P_Bambanglipuro_II,
            "Puskesmas Pandak II" : P_Pandak_II
        };

        // Create an empty LayerGroup that will be used to emulate adding / removing all categories.
        /*var allPointsLG = L.layerGroup();
        overlaysObj["All Points"] = allPointsLG;*/

        var control = L.control
          .layers(baseLayers, overlaysObj, {
            collapsed: true,
          })
          .addTo(map);

        
    </script>
  </body>
</html>
