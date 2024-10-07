<?php
include 'header.php';

$children = $function->GetAllChildrenByMunicipality($_SESSION['municipality']);

header('Content-Type: application/json');

echo json_encode($children);


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
    