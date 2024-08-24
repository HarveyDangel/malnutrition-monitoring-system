<?php
include_once 'header.php';
?>

<body>
    <div id="map"></div>

    <script>
       
        var statesData = {
            type: "FeatureCollection",
            features: [{
                type: "Feature",
                id: "01",
                properties: {
                    name: "Almeria",
                    density: 94.65
                },
                geometry: {
                    type: "Polygon",
                    coordinates: [
                        [
                            [11.648622, 124.464626],
                            [11.67098, 124.44497],
                            [11.66224, 124.381199],
                            [11.649713, 124.361629],
                            [11.649767, 124.361252],
                            [11.649603, 124.361239],
                            [11.649469, 124.361204],
                            [11.649007, 124.361013],
                            [11.648665, 124.360887],
                            [11.648332, 124.3607],
                            [11.648332, 124.3607],
                            [11.648083, 124.360407],
                            [11.648069, 124.360258],
                            [11.648006, 124.359898],
                            [11.647958, 124.35971],
                            [11.647829, 124.359452],
                            [11.647367, 124.358766],
                            [11.647232, 124.358594],
                            [11.647056, 124.358418],
                            [11.646554, 124.357982],
                            [11.646449, 124.357871],
                            [11.646191, 124.357418],
                            [11.646001, 124.357206],
                            [11.645709, 124.357107],
                            [11.645422, 124.356695],
                            [11.645295, 124.356641],
                            [11.645163, 124.356621],
                            [11.645021, 124.356662],
                            [11.644761, 124.356836],
                            [11.644683, 124.356836],
                            [11.644615, 124.356808],
                            [11.644458, 124.356601],
                            [11.644374, 124.356556],
                            [11.644174, 124.356523],
                            [11.644024, 124.356537],
                            [11.643714, 124.356702],
                            [11.643714, 124.356702],
                            [11.643458, 124.356794],
                            [11.643458, 124.356794],
                            [11.643245, 124.357021],
                            [11.643069, 124.357604],
                            [11.64295, 124.357811],
                            [11.642487, 124.358097],
                            [11.64238, 124.358196],
                            [11.642262, 124.358398],
                            [11.642107, 124.35853],
                            [11.641675, 124.35868],
                            [11.641554, 124.35882],
                            [11.641244, 124.359339],
                            [11.641145, 124.359445],
                            [11.641053, 124.359521],
                            [11.640914, 124.359578],
                            [11.640565, 124.359595],
                            [11.640404, 124.359554],
                            [11.640291, 124.359488],
                            [11.640078, 124.359235],
                            [11.639883, 124.359066],
                            [11.639774, 124.359051],
                            [11.639687, 124.359067],
                            [11.639582, 124.359143],
                            [11.639525, 124.359315],
                            [11.639533, 124.359529],
                            [11.639563, 124.359684],
                            [11.63958, 124.359879],
                            [11.639555, 124.360046],
                            [11.639443, 124.360416],
                            [11.639392, 124.360717],
                            [11.63934, 124.360819],
                            [11.639143, 124.361035],
                            [11.637054, 124.361768],
                            [11.636674, 124.361583],
                            [11.63654, 124.361575],
                            [11.636406, 124.361613],
                            [11.636182, 124.361956],
                            [11.636148, 124.36238],
                            [11.636679, 124.363125],
                            [11.637139, 124.364112],
                            [11.637179, 124.364456],
                            [11.636954, 124.364903],
                            [11.636899, 124.365344],
                            [11.636678, 124.365937],
                            [11.635351, 124.367297],
                            [11.635178, 124.367686],
                            [11.635175, 124.367882],
                            [11.635054, 124.368459],
                            [11.635007, 124.368976],
                            [11.634521, 124.370047],
                            [11.634198, 124.370288],
                            [11.633785, 124.370859],
                            [11.633318, 124.371345],
                            [11.633165, 124.371726],
                            [11.63291, 124.372219],
                            [11.632593, 124.372536],
                            [11.632117, 124.372785],
                            [11.63151, 124.373203],
                            [11.630399, 124.37337],
                            [11.62959, 124.373992],
                            [11.628554, 124.375495],
                            [11.627856, 124.376164],
                            [11.628026, 124.37682],
                            [11.627862, 124.377134],
                            [11.626709, 124.377482],
                            [11.626384, 124.377913],
                            [11.622313, 124.379129],
                            [11.621659, 124.378719],
                            [11.619877, 124.378514],
                            [11.618501, 124.378807],
                            [11.615529, 124.378692],
                            [11.611875, 124.379405],
                            [11.609495, 124.379501],
                            [11.606772, 124.380071],
                            [11.60594, 124.380784],
                            [11.604405, 124.385467],
                            [11.601789, 124.387278],
                            [11.601489, 124.389702],
                            [11.599758, 124.392643],
                            [11.596201, 124.394733],
                            [11.596067, 124.395001],
                            [11.595104, 124.395295],
                            [11.595237, 124.395615],
                            [11.648622, 124.464626],
                        ],
                    ],
                },
            }, ],
        };
        var map = L.map('map').setView([11.63, 124.4974], 11);
        
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        L.geoJson(statesData).addTo(map);

        function getColor(d) {
            return d > 1000 ? '#800026' :
                d > 500 ? '#BD0026' :
                d > 200 ? '#E31A1C' :
                d > 100 ? '#FC4E2A' :
                d > 50 ? '#FD8D3C' :
                d > 20 ? '#FEB24C' :
                d > 10 ? '#FED976' :
                '#FFEDA0';
        }

        function style(feature) {
            return {
                fillColor: getColor(feature.properties.density),
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }

        L.geoJson(statesData, {
            style: style
        }).addTo(map);

        function highlightFeature(e) {
            var layer = e.target;

            layer.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer.bringToFront();
        }

        function resetHighlight(e) {
            geojson.resetStyle(e.target);
        }
        // var geojson;
        // // ... our listeners
        // geojson = L.geoJson(...);

        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }

        geojson = L.geoJson(statesData, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(map);

        // var marker = L.marker([51.5, -0.09]).addTo(map);

        // var circle = L.circle([51.508, -0.11], {
        //     color: 'red',
        //     fillColor: '#f03',
        //     fillOpacity: 0.5,
        //     radius: 500
        // }).addTo(map);



        // function getColor(d) {
        //     return d > 1000 ? '#800026' :
        //         d > 500 ? '#BD0026' :
        //         d > 200 ? '#E31A1C' :
        //         d > 100 ? '#FC4E2A' :
        //         d > 50 ? '#FD8D3C' :
        //         d > 20 ? '#FEB24C' :
        //         d > 10 ? '#FED976' :
        //         '#FFEDA0';
        // }

        // function style(feature) {
        //     return {
        //         fillColor: getColor(feature.properties.density),
        //         weight: 2,
        //         opacity: 1,
        //         color: 'white',
        //         dashArray: '3',
        //         fillOpacity: 0.7
        //     };
        // }
    </script>
</body>

<?php
include 'footer.php';
?>