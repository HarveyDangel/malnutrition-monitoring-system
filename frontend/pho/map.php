<?php
include 'header.php';
$children = $function->GetAllChildren();

$municipalities = $function->GetAllMunicipality();
// Get unique barangays for the select options based on the current municipality
$barangays = $function->GetAllBarangayAndMunicipality();
?>

<main class="">
    <!-- Hidden Municipality Input (Preset) -->

    <!-- Barangay and Color Filters -->
    <div class="card">
        <div class="row">
            <div class="col-md-2">
                <div class="mt-3 ms-3">
                    <label for="municipalitySelect" class="form-label">Filter by Municipality:</label>
                    <select id="municipalitySelect" class="form-select mb-4" onchange="applyFilters()">
                        <option value="">All Municipalities</option> 
                        <?php foreach ($municipalities as $municipality): ?> 
                            <option value="<?= $municipality['municipality']; ?>"><?= $municipality['municipality']; ?></option> 
                        <?php endforeach; ?>
                    </select>
                    <!-- <input type="hidden" id="municipalitySelect" value=""> -->
                    <label for="barangaySelect" class="form-label">Filter by Barangay:</label>
                    <!-- <select id="barangaySelect" class="form-select mb-4" onchange="applyFilters()">
                        <option value="">All Barangays</option>
                        <?php foreach ($barangays as $barangay): ?>
                            <option value="<?= $barangay['barangay'] ?>"><?= $barangay['barangay'] ?></option>
                        <?php endforeach; ?>
                    </select> -->
                    <select id="barangaySelect" class="form-select mb-4" onchange="applyFilters()">
                        <option value="">All Barangays</option> <!-- Barangays will be populated based on selected municipality -->
                    </select>

                    <label for="colorSelect" class="form-label">Filter by Nutritional Status:</label>
                    <select id="colorSelect" class="form-select mb-4" onchange="applyFilters()">
                        <option value="">All Categories</option>
                        <option value="normal">Normal</option>
                        <option value="underweight">Underweight/<br>Severely Underweight</option>
                        <option value="stunted">Stunted/<br>Severely Stunted</option>
                        <option value="wasted">Wasted/<br>Severely Wasted</option>
                        <option value="overweight">Overweight/<br>Obese</option>
                    </select>
                </div>
            </div>
            <div id="map" class="rounded-2 col-md-10"></div>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-ajax"></script>

    <script>
        var map = L.map('map').setView([11.622, 124.4], 11);

        // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     maxZoom: 20,
        //     attribution: 'Malnutriion GIS Map'
        // }).addTo(map);

        // var CartoDB_Voyager = 
        L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a> | Malnutrition GIS Map',
            subdomains: 'abcd',
            maxZoom: 20
        }).addTo(map);

        var data = <?= json_encode($children); ?>;
        var allMarkers = [];

        function addMarkers(data) {
            data.forEach(function(item) {
                var color, category;

                if (item.nutritional_status_WFH === 'Wasted' || item.nutritional_status_WFH === 'Severely Wasted') {
                    color = '#cf000f';
                    category = 'wasted';
                } else if (item.nutritional_status_HFA === 'Stunted' || item.nutritional_status_HFA === 'Severely Stunted') {
                    color = '#e67e22';
                    category = 'stunted';
                } else if (item.nutritional_status_WFA === 'Underweight' || item.nutritional_status_WFA === 'Severely Underweight') {
                    color = '#d6c800';
                    category = 'underweight';
                } else if (item.nutritional_status_WFA === 'Overweight' || item.nutritional_status_WFH === 'Overweight' || item.nutritional_status_WFH === 'Obese') {
                    color = 'purple';
                    category = 'overweight';
                } else if (item.nutritional_status_WFA === 'Normal' && item.nutritional_status_HFA === 'Normal' && item.nutritional_status_WFH === 'Normal' || item.nutritional_status_HFA === 'Tall') {
                    color = 'green';
                    category = 'normal';
                }

                var circleMarker = L.circleMarker([item.latitude, item.longitude], {
                    radius: 4,
                    color: color,
                    fillColor: color,
                    fillOpacity: 10,
                });

                circleMarker.bindPopup(`
                    Barangay: ${item.barangay} <br>
                    Child Seq.: ${item.child_id} <br>
                    Nutritional Status WFA: ${item.nutritional_status_WFA} <br>
                    Nutritional Status HFA: ${item.nutritional_status_HFA} <br>
                    Nutritional Status WFL/H: ${item.nutritional_status_WFH} <br>
                `);

                map.addLayer(circleMarker);
                allMarkers.push({
                    marker: circleMarker,
                    municipality: item.municipality,
                    barangay: item.barangay,
                    category: category
                });
            });
        }

        addMarkers(data);

        const barangayData = <?= json_encode($function->GetAllBarangayAndMunicipality()); ?>;
        document.getElementById('municipalitySelect').addEventListener('change', function() {
            const selectedMunicipality = this.value;
            const barangaySelect = document.getElementById('barangaySelect');
            // Clear previous options 
            barangaySelect.innerHTML = '<option value="">All Barangays</option>';
            if (selectedMunicipality) {
                // Filter barangays based on the selected municipality 
                const filteredBarangays = barangayData.filter(barangay => barangay.municipality === selectedMunicipality);
                // Populate the Barangaydropdown 
                filteredBarangays.forEach(barangay => {
                    const option = document.createElement('option');
                    option.value = barangay.barangay;
                    option.text = barangay.barangay;
                    barangaySelect.add(option);
                });
            }
        });


        function applyFilters() {
            var selectedBarangay = document.getElementById('barangaySelect').value;
            var selectedMunicipality = document.getElementById('municipalitySelect').value;
            var selectedCategory = document.getElementById('colorSelect').value;
            filterMarkers(selectedMunicipality, selectedBarangay, selectedCategory);
            updateLegend(selectedMunicipality, selectedBarangay, selectedCategory);
        }

        function filterMarkers(municipality, barangay, category) {
            allMarkers.forEach(item => {
                if (
                    (municipality === '' || item.municipality == municipality) &&
                    (barangay === '' || item.barangay == barangay) &&
                    (category === '' || item.category === category)
                ) {
                    map.addLayer(item.marker);
                } else {
                    map.removeLayer(item.marker);
                }
            });
        }

        function updateLegend(municipality, barangay, category) {
            var categoryCounts = {
                normal: 0,
                underweight: 0,
                stunted: 0,
                wasted: 0,
                overweight: 0
            };
            var totalMarkers = 0;

            allMarkers.forEach(item => {
                if (
                    (municipality === '' || item.municipality == municipality) &&
                    (barangay === '' || item.barangay == barangay) &&
                    (category === '' || item.category === category)
                ) {
                    categoryCounts[item.category]++;
                    totalMarkers++;
                }
            });

            var legendContent = `
                <div class="text-black">
                <p class="mb-1 fw-semibold">Legend</p>

                <i class="rounded-5" style="background:green; width: 12px; height: 12px; display: inline-block; margin-right: 8px;"></i> Normal: <strong>${categoryCounts.normal}</strong><br>

                <i class="rounded-5" style="background:#d6c800; width: 12px; height: 12px; display: inline-block; margin-right: 8px;"></i> Underweight/Severely Underweight: <strong>${categoryCounts.underweight}</strong><br>

                <i class="rounded-5" style="background:#e67e22; width: 12px; height: 12px; display: inline-block; margin-right: 8px;"></i> Stunted/Severely Stunted: <strong>${categoryCounts.stunted}</strong><br>

                <i class="rounded-5" style="background:#cf000f; width: 12px; height: 12px; display: inline-block; margin-right: 8px;"></i> Wasted/Severely Wasted: <strong>${categoryCounts.wasted}</strong><br>

                <i class="rounded-5" style="background:purple; width: 12px; height: 12px; display: inline-block; margin-right: 8px;"></i> Overweight/Obese: <strong>${categoryCounts.overweight}</strong><br>

                <br><strong>Total Children: ${totalMarkers}</strong>
                </div>
            `;
            document.querySelector('.info.legend').innerHTML = legendContent;
        }

        var legend = L.control({
            position: 'bottomleft'
        });
        legend.onAdd = function() {
            var div = L.DomUtil.create('div', 'info legend');
            div.innerHTML = '';
            return div;
        };
        legend.addTo(map);

        updateLegend('', '', '');
    </script>

    <style>
        .info.legend {
            font-family: "Plus Jakarta Sans";
            background: whitesmoke;
            padding: 8px;
            font-size: 13px;
            line-height: 1.6;
            box-shadow: 0 0 10px rgba(0, 0, 0, 1);
            border-radius: 5px;
        }
    </style>
</main>

<?php
include 'footer.php';
?>