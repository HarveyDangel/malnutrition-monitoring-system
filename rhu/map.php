<?php

include 'header.php';

$children = $function->GetAllChildrenByMunicipality($_SESSION['municipality']);
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

        // Step 3: Define custom icons
        var normalIcon = L.icon({
            iconUrl: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png', // Blue for normal
            iconSize: [32, 32],
            iconAnchor: [16, 32],
            popupAnchor: [0, -32]
        });

        var alertIcon = L.icon({
            iconUrl: 'https://maps.google.com/mapfiles/ms/icons/orange-dot.png', // Orange for not normal
            iconSize: [32, 32],
            iconAnchor: [16, 32],
            popupAnchor: [0, -32]
        });

        // Step 4: Data fetched from PHP
        var data = <?= json_encode($children); ?>;

        // Step 5: Loop through data and add markers
        data.forEach(function(item) {
            // Check if the nutritional status WFA is 'Normal'
            var markerIcon = (item.nutritional_status_WFA === 'Normal') ? normalIcon : alertIcon;

            // Create marker with the appropriate icon
            var marker = L.marker([item.latitude, item.longitude], {
                icon: markerIcon
            }).addTo(map);

            // Bind popup with the barangay info
            marker.bindPopup(`
                Barangay: ${item.barangay} <br>
                Child Seq.: ${item.child_id} <br>
                Nutritional Status WFA: ${item.nutritional_status_WFA} <br>
                Nutritional Status HFA: ${item.nutritional_status_HFA} <br>
                Nutritional Status WFL/H: ${item.nutritional_status_WFH} <br>
            `);
        });
    </script>
</main>


<?php
include 'footer.php'
?>