<?php
include 'header.php';
$active = 3;
?>

<main class="">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-1 col-md-1">
                    <a href="children" class="btn btn-primary rounded-2"><i class="ti ti-arrow-left"></i>
                    </a>
                </div>
                <div class="col-lg-11 col-md-11">
                    <h3 class="fw-semibold mt-1">Add Child</h3>
                </div>
            </div>
            <hr>
            <?php
            $msg = Session::get("msg");
            if (isset($msg)) {
                echo '<div id="flash-message">' . $msg . '</div>';
                Session::set("msg", NULL);
            }
            ?>
            <form action="navigate.php" method="post">
                <div class="row">
                    <div class="mb-3">
                        <h5 class="form-label fw-semibold bg-dark-light p-1 rounded-2 text-white">Operation Timbang</h5>
                        <label for="year" class="form-label">Year <span style="color:red">*</span></label>
                        <input type="number" class="form-control" name="year" aria-describedby="textHelp">
                    </div>
                </div>
                <hr>
                <h5 class="fw-semibold bg-dark-light p-1 rounded-2 text-white">Personal Information</h5>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label">Fullname <span class="fw-normal">(Surname, First name) <span style="color:red">*</span></span></label>
                        <input type="text" class="form-control" name="name_of_child" aria-describedby="textHelp" value="<?php echo isset($_POST['name_of_child']) ? htmlspecialchars($_POST['name_of_child']) : ''; ?>">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Belong to Indigenous People? <span style="color:red">*</span></label>
                        <select class="form-select" aria-label="Default select example" name="belong_to_ip" required>
                            <option selected="true" disabled>Belong to IP?</option>
                            <option value="N" <?php echo isset($_POST['belong_to_ip']) && $_POST['belong_to_ip'] == 'N' ? 'selected' : ''; ?>>No</option>
                            <option value="Y" <?php echo isset($_POST['belong_to_ip']) && $_POST['belong_to_ip'] == 'Y' ? 'selected' : ''; ?>>Yes</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Sex <span style="color:red">*</span></label>
                        <select class="form-select" aria-label="Default select example" name="sex" required>
                            <option selected="true" disabled>Choose Sex</option>
                            <option value="Male" <?php echo isset($_POST['sex']) && $_POST['sex'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                        <option value="Female" <?php echo isset($_POST['sex']) && $_POST['sex'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Date Of Birth <span style="color:red">*</span></label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" aria-describedby="textHelp" onchange="calculateAgeInMonths()" value="<?php echo isset($_POST['date_of_birth']) ? htmlspecialchars($_POST['date_of_birth']) : ''; ?>" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Date Last Measured <span style="color:red">*</span></label>
                        <input type="date" class="form-control" id="date_last_measured" name="date_last_measured" aria-describedby="textHelp" onchange="calculateAgeInMonths()" value="<?php echo isset($_POST['date_last_measured']) ? htmlspecialchars($_POST['date_last_measured']) : ''; ?>" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Age by Months</label>
                        <input type="number" class="form-control bg-light-primary" id="age_by_months" name="age_by_months" aria-describedby="textHelp" value="${}" readonly required>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Weight (kg.) <span style="color:red">*</span></label>
                        <input type="number" class="form-control" step="0.01" name="weight" aria-describedby="textHelp" value="<?php echo isset($_POST['weight']) ? htmlspecialchars($_POST['weight']) : ''; ?>" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Height (cm.) <span style="color:red">*</span></label>
                        <input type="number" class="form-control" name="height" step="0.5" aria-describedby="textHelp" value="<?php echo isset($_POST['height']) ? htmlspecialchars($_POST['height']) : ''; ?>" required>
                    </div>
                </div>
                <hr>
                <h5 class="fw-semibold bg-dark-light p-1 rounded-2 text-white">Address</h5>
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Region <span style="color:red">*</span></label>
                        <select name="region" class="form-control form-control-md" id="region" disabled></select>
                        <input type="hidden" class="form-control form-control-md" name="region_text" id="region-text" value="Region VIII (Eastern Visayas)" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Province <span style="color:red">*</span></label>
                        <select name="province" class="form-control form-control-md" id="province" disabled></select>
                        <input type="hidden" class="form-control form-control-md" name="province_text" id="province-text" value="Biliran" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">City/Municipality <span style="color:red">*</span></label>
                        <select name="municipality" class="form-control form-control-md" id="city"></select>
                        <input type="hidden" class="form-control form-control-md" name="city_text" id="city-text" value="<?php echo isset($_POST['city_text']) ? htmlspecialchars($_POST['city_text']) : ''; ?>" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Barangay <span style="color:red">*</span></label>
                        <select name="barangay" class="form-control form-control-md" id="barangay"></select>
                        <input type="hidden" class="form-control form-control-md" name="barangay_text" id="barangay-text" value="<?php echo isset($_POST['barangay_text']) ? htmlspecialchars($_POST['barangay_text']) : ''; ?>" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Purok <span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="purok" aria-describedby="textHelp" value="<?php echo isset($_POST['purok']) ? htmlspecialchars($_POST['purok']) : ''; ?>" required>
                    </div>
                </div>
                <hr>
                <h5 class="fw-semibold bg-dark-light p-1 rounded-2 text-white">Mother/Caregiver Information</h5>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label">Fullname <span class="fw-normal">(Surname, First name) <span style="color:red">*</span></span></label>
                        <input type="text" class="form-control" name="name_of_caregiver" aria-describedby="textHelp" value="<?php echo isset($_POST['name_of_caregiver']) ? htmlspecialchars($_POST['name_of_caregiver']) : ''; ?>" required>
                    </div>
                </div>
                <hr>
                <h5 class="fw-semibold bg-dark-light p-1 rounded-2 text-white">Coordinates</h5>
                <div class="row">
                    <label for="inputMap" class="form-label fst-italic" style="color:#339966;">Info: <span class="fw-normal">Click the child address in the map</span></label>
                    <div class="col-md-8 text-center p-2">
                        <button type="button" id="getLocation" class="btn btn-primary" hidden>Get Location</button>
                        <div id="inputMap" class="mb-3 rounded-3 m-1"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Latitude <span style="color:red">*</span></label>
                            <input type="text" id="latitude" class="form-control bg-primary-subtle" name="latitude" aria-describedby="textHelp" value="<?php echo isset($_POST['latitude']) ? htmlspecialchars($_POST['latitude']) : ''; ?>" required readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Longitude <span style="color:red">*</span></label>
                            <input type="text" id="longitude" class="form-control bg-primary-subtle" name="longitude" aria-describedby="textHelp" value="<?php echo isset($_POST['longitute']) ? htmlspecialchars($_POST['longitude']) : ''; ?>" required readonly>
                        </div>
                    </div>
                </div>
                <div class="row" hidden>
                    <input type="text" class="form-control" name="rhu_id" aria-describedby="textHelp" required readonly
                        value="<?= $_SESSION['rhu_id']; ?>">
                </div>
                <div class="row">
                    <div class="text-center p-2">
                        <button type="submit" name="btn-add-child" class="btn btn-primary rounded-2 w-25">
                            Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<script>
    // Initialize the map
    const map = L.map('inputMap').setView([11.63, 124.4974], 11); // Default view

    // Add OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: "Geo-location Selector Map"
    }).addTo(map);

    // Variable to store the marker
    let marker;

    // Geolocation button event
    document.getElementById('getLocation').addEventListener('click', function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;

                    // Set input values
                    document.getElementById('latitude').value = lat;
                    document.getElementById('longitude').value = lon;

                    // Update map view
                    map.setView([lat, lon], 13);

                    // Add marker to the map
                    if (marker) {
                        map.removeLayer(marker);
                    }
                    marker = L.marker([lat, lon]).addTo(map)
                        .bindPopup('You are here!')
                        .openPopup();
                },
                function(error) {
                    console.error('Error occurred. Error code: ' + error.code);
                    alert('Unable to retrieve location: ' + error.message);
                }
            );
        } else {
            alert('Geolocation is not supported by this browser.');
        }
    });

    // Handle tap on the map to set coordinates
    map.on('click', function(e) {
        const lat = e.latlng.lat;
        const lon = e.latlng.lng;

        // Set input values
        document.getElementById('latitude').value = lat;
        document.getElementById('longitude').value = lon;

        // Add or update the marker
        if (marker) {
            map.removeLayer(marker);
        }
        marker = L.marker([lat, lon]).addTo(map)
            .bindPopup('Selected Location')
            .openPopup();
    });

    // Handle form submission
    document.getElementById('locationForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        // Process the form data here, e.g., send it to a server
        console.log('Form submitted with latitude:', this.latitude.value);
        console.log('Form submitted with longitude:', this.longitude.value);
        // You could use fetch() or XMLHttpRequest to send data to your server
    });
</script>
<?php
include 'footer.php';
?>