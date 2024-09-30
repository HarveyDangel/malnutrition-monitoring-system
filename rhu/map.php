<?php

include 'header.php';

?>

<main class="">
    <div id="map" class="rounded-3"></div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-ajax"></script>
    <script>
        // Step 1: Initialize the map
        var map = L.map('map').setView([11.6, 124.5], 11); // Set center coordinates and zoom level

        // Step 2: Add a base layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        var marker = L.marker([11.62859563111097, 124.39064025878908]).addTo(map);

        marker.bindPopup("Barangay: Caucab <br>Child Seq. : 2143 <br>Nutritional Status: Severely Stunted");
        
        var marker = L.marker([11.630, 124.391]).addTo(map);

        marker.bindPopup("Barangay: Caucab <br>Child Seg. : 2145 <br>Nutritional Status: Normal");
        // var marker = L.circle([11.62859563111097, 124.39064025878908],{
        //     color: 'red',
        //     fillColor: '#f03',
        //     fillOpacity: 0.5,
        //     radius: 75
        // }).addTo(map);
        // circle.bindPopup("I am a circle.");

        //Almeria
        // var polygon = L.polygon([
        //     [11.671025, 124.444883],
        //     [11.662558, 124.381158],
        //     [11.645078, 124.356083],
        //     [11.635689, 124.362237],
        //     [11.626727, 124.377486],
        //     [11.606506, 124.380057],
        //     [11.595088, 124.395307],
        //     [11.648729, 124.464615],
        //     [11.671025, 124.444883]
        // ]).addTo(map);

        // polygon.bindPopup("Almeria");
        // //Maripipi
        // var polygon = L.polygon([
        //     [11.817212, 124.317629],
        //     [11.799848, 124.295094],
        //     [11.781759, 124.294359],
        //     [11.763557, 124.312252],
        //     [11.760597, 124.325461],
        //     [11.771523, 124.346124],
        //     [11.780609, 124.350161],
        //     [11.808238, 124.348380],
        //     [11.815738, 124.330080],
        //     [11.817212, 124.317629]
        // ]).addTo(map);

        // polygon.bindPopup("Maripipi");

        // //Kawayan
        // var polygon = L.polygon([
        //     [11.671025, 124.444883],
        //     [11.662558, 124.381158],
        //     [11.649831, 124.361262],
        //     [11.664550, 124.355122],
        //     [11.673270, 124.326354],
        //     [11.707043, 124.427042],
        //     [11.705950, 124.466284],
        //     [11.693955, 124.485959],
        //     [11.670636, 124.483755],
        //     [11.648767, 124.464694],
        //     [11.671025, 124.444883]
        // ]).addTo(map);
        // polygon.bindPopup("Kawayan");

        // var polygon = L.polygon([
        //     [11.648729, 124.464615],
        //     [11.693955, 124.485959],
        //     [11.670636, 124.483755],
        //     [11.648729, 124.464615]
        // ]).addTo(map);
        // polygon.bindPopup("Culaba");

        var geojsonFeature = {
            "type": "Feature",
            "properties": {
                "name": "Coors Field",
                "amenity": "Baseball Stadium",
                "popupContent": "This is where the Rockies play!"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [11.671025, 124.444883]
            }
        };

        L.geoJSON(geojsonFeature).addTo(map);

        // Step 3: Define a color scale function
        function getColor(value) {
            return value > 500 ? '#800026' :
                value > 300 ? '#BD0026' :
                value > 200 ? '#E31A1C' :
                value > 100 ? '#FC4E2A' :
                value > 50 ? '#FD8D3C' :
                value > 20 ? '#FEB24C' :
                value > 10 ? '#FED976' :
                '#FFEDA0';
        }

        // Step 4: Style function for GeoJSON features
        function style(feature) {
            return {
                fillColor: getColor(feature.properties.value), // Adjust this to your data property
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }

        // Step 5: Load the GeoJSON file and apply style
        var geojsonLayer = new L.GeoJSON.AJAX("biliran_sample.geojson", {
            style: style
        }).addTo(map);

        // Step 6: Add a legend
        var legend = L.control({
            position: 'bottomright'
        });
        legend.onAdd = function() {
            var div = L.DomUtil.create('div', 'info legend');
            var grades = [0, 10, 20, 50, 100, 200, 300, 500];
            var labels = [];
            var from, to;

            for (var i = 0; i < grades.length; i++) {
                from = grades[i];
                to = grades[i + 1];
                labels.push(
                    '<i style="background:' + getColor(from + 1) + '"></i> ' +
                    (from + 1) + (to ? '&ndash;' + to : '+')
                );
            }
            div.innerHTML = labels.join('<br>');
            return div;
        };
        legend.addTo(map);
    </script>
    <!-- <script>
        var statesData = {
            "type": "FeatureCollection",
            "features": [{
                    "type": "Feature",
                    "id": "01",
                    "properties": {
                        "name": "Ameria",
                        "density": 94.65,
                    },
                    "geometry": {
                        "type": "Polygon",
                        "coordinates": [
                            [
                                [11.671025, 124.444883],
                                [11.662558, 124.381158],
                                [11.645078, 124.356083],
                                [11.635689, 124.362237],
                                [11.626727, 124.377486],
                                [11.606506, 124.380057],
                                [11.595088, 124.395307],
                                [11.648729, 124.464615],                              
                                [11.671025, 124.444883]
                            ]
                        ]
                    }
                },
                {
                    "type": "Feature",
                    "id": "02",
                    "properties": {
                        "name": "Alaska",
                        "density": 80,
                    },
                    "geometry": {
                        "type": "MultiPolygon",
                        "coordinates": [
                            [
                                [
                                    [-131.602021, 55.117982],
                                    [-131.569159, 55.28229],
                                    [-131.355558, 55.183705],
                                    [-131.38842, 55.01392],
                                    [-131.645836, 55.035827],
                                    [-131.602021, 55.117982]
                                ]
                            ],
                            [
                                [
                                    [-131.832052, 55.42469],
                                    [-131.645836, 55.304197],
                                    [-131.749898, 55.128935],
                                    [-131.832052, 55.189182],
                                    [-131.832052, 55.42469]
                                ]
                            ],
                            [
                                [
                                    [-132.976733, 56.437924],
                                    [-132.735747, 56.459832],
                                    [-132.631685, 56.421493],
                                    [-132.664547, 56.273616],
                                    [-132.878148, 56.240754],
                                    [-133.069841, 56.333862],
                                    [-132.976733, 56.437924]
                                ]
                            ],
                            [
                                [
                                    [-176.469116, 51.853725],
                                    [-176.288377, 51.870156],
                                    [-176.288377, 51.744186],
                                    [-176.518409, 51.760617],
                                    [-176.80321, 51.61274],
                                    [-176.912748, 51.80991],
                                    [-176.792256, 51.815386],
                                    [-176.775825, 51.963264],
                                    [-176.627947, 51.968741],
                                    [-176.627947, 51.859202],
                                    [-176.469116, 51.853725]
                                ]
                            ],
                            [
                                [
                                    [-177.153734, 51.946833],
                                    [-177.044195, 51.897541],
                                    [-177.120872, 51.727755],
                                    [-177.274226, 51.678463],
                                    [-177.279703, 51.782525],
                                    [-177.153734, 51.946833]
                                ]
                            ],
                            [
                                [
                                    [-178.123152, 51.919448],
                                    [-177.953367, 51.913971],
                                    [-177.800013, 51.793479],
                                    [-177.964321, 51.651078],
                                    [-178.123152, 51.919448]
                                ]
                            ],
                            [
                                [
                                    [-187.107557, 52.992929],
                                    [-187.293773, 52.927205],
                                    [-187.304726, 52.823143],
                                    [-188.90491, 52.762897],
                                    [-188.642017, 52.927205],
                                    [-188.642017, 53.003883],
                                    [-187.107557, 52.992929]
                                ]
                            ]
                        ]
                    }
                },
                {
                    "type": "Feature",
                    "id": "72",
                    "properties": {
                        "name": "Puerto Rico",
                        "density": 1082
                    },
                    "geometry": {
                        "type": "Polygon",
                        "coordinates": [
                            [
                                [-66.448338, 17.984326],
                                [-66.771478, 18.006234],
                                [-66.924832, 17.929556],
                                [-66.985078, 17.973372],
                                [-67.209633, 17.956941],
                                [-67.154863, 18.19245],
                                [-67.269879, 18.362235],
                                [-67.094617, 18.515589],
                                [-66.957694, 18.488204],
                                [-66.409999, 18.488204],
                                [-65.840398, 18.433435],
                                [-65.632274, 18.367712],
                                [-65.626797, 18.203403],
                                [-65.730859, 18.186973],
                                [-65.834921, 18.017187],
                                [-66.234737, 17.929556],
                                [-66.448338, 17.984326]
                            ]
                        ]
                    }
                }
            ]
        };

        var map = L.map('map').setView([11.63, 124.4974], 11);

        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
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
    </script> -->
</main>


<?php
include 'footer.php'


?>