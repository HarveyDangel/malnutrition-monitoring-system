<?php
include 'header.php';
$child_id = $_GET['child_id'];
$child = $function->GetChildInfo($child_id);
$municipalities = $function->GetAllMunicipality();

$active = 4;
?>

<main class="">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-1 col-md-1">
                    <a href="children.php" class="btn btn-primary rounded-2"><i class="ti ti-arrow-left"></i>
                    </a>
                </div>
                <div class="col-lg-11 col-md-11">
                    <h3 class="fw-semibold mt-1">Edit Child</h3>
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
            <?php
            if ($child) {
                $child_id = $child->child_id;
                $purok = $child->purok;
                $name_of_caregiver = $child->name_of_caregiver;
                $name_of_child = $child->name_of_child;
                $belong_to_ip = $child->belong_to_ip;
                $sex = $child->sex;
                $date_of_birth = $child->date_of_birth;
                $age_by_months = $child->age_by_months;
                $date_last_measured = $child->date_last_measured;
                $weight = $child->weight;
                $height = $child->height;
                $nutritional_status_WFA = $child->nutritional_status_WFA;
                $nutritional_status_HFA = $child->nutritional_status_HFA;
                $nutritional_status_WFH = $child->nutritional_status_WFH;
                $barangay = $child->barangay;
                $municipality = $child->municipality;
                $province = $child->province;
                $region = $child->region;
                $latitude = $child->latitude;
                $longitude = $child->longitude;
                $year = $child->year;
            ?>
                <form action="navigate.php?child_id=<?= $child_id; ?>" method="post">
                    <div class="row">

                        <div class="mb-3">
                            <h5 class="form-label fw-semibold bg-dark-light p-1 rounded-2 text-white">Operation Timbang</h5>
                            <label for="year" class="form-label">Year <span style="color:red">*</span></label>
                            <input type="number" class="form-control" name="year" value="<?= ($year) ? $year : ''; ?>" aria-describedby="textHelp">
                        </div>
                    </div>
                    <hr>
                    <h5 class="fw-semibold bg-dark-light p-1 rounded-2 text-white">Personal Information</h5>
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Fullname <span class="fw-normal">(Surname, First name) <span style="color:red">*</span></span></label>
                            <input type="text" class="form-control" name="name_of_child" aria-describedby="textHelp" value="<?= ($name_of_child) ? $name_of_child : ''; ?>" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Belong to Indigenous People? <span style="color:red">*</span></label>
                            <select class="form-select" aria-label="Default select example" name="belong_to_ip" required>
                                <option value="" disabled>Y/N</option>
                                <option value="N" <?= ($belong_to_ip) == 'N' ? 'selected' : ''; ?>>No</option>
                                <option value="Y" <?= ($belong_to_ip) == 'Y' ? 'selected' : ''; ?>>Yes</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Sex <span style="color:red">*</span></label>
                            <select class="form-select" aria-label="Default select example" name="sex" required>
                                <option value="" disabled>Choose Sex</option>
                                <option value="M" <?= ($sex) == 'M' ? 'selected' : ''; ?>>Male</option>
                                <option value="F" <?= ($sex) == 'F' ? 'selected' : ''; ?>>Female</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Date Of Birth <span style="color:red">*</span></label>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" aria-describedby="textHelp" value="<?= ($date_of_birth) ? $date_of_birth : ''; ?>" oninput="calculateAgeInMonths()" required>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Date Measured <span style="color:red">*</span></label>
                            <input type="date" class="form-control" id="date_last_measured" name="date_last_measured" aria-describedby="textHelp" oninput="calculateAgeInMonths()" value="<?= ($date_last_measured) ? $date_last_measured : ''; ?>" required>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Age by Months</label>
                            <input type="number" class="form-control bg-light-primary" id="age_by_months" name="age_by_months" aria-describedby="textHelp" value="${}" readonly>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Weight (kg.) <span style="color:red">*</span></label>
                            <input type="number" class="form-control" name="weight" step="0.01" aria-describedby="textHelp" value="<?= ($weight) ? $weight : ''; ?>" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Height (cm.) <span style="color:red">*</span></label>
                            <input type="number" class="form-control" step="0.01" name="height" aria-describedby="textHelp" value="<?= ($height) ? $height : ''; ?>" required>
                        </div>
                    </div>
                    <hr>
                    <h5 class="fw-semibold bg-dark-light p-1 rounded-2 text-white">Address</h5>
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Region <span style="color:red">*</span></label>
                            <select name="region" class="form-control form-control-md" id="region" disabled></select>
                            <input type="hidden" class="form-control form-control-md" name="region_text" id="region-text" required>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Province <span style="color:red">*</span></label>
                            <select name="province" class="form-control form-control-md" id="province" disabled></select>
                            <input type="hidden" class="form-control form-control-md" name="province_text" id="province-text" required>
                        </div>

                        <div class="col-md-4">
                            <!-- <label for="muni" class="form-label">City/Municipality <span style="color:red">*</span></label>
                            <select id="muni" name="muni" class="form-select">
                                <option value="<?= ($municipality) ? $municipality : ''; ?>" selected><?= ($municipality) ? $municipality : ''; ?></option>

                                <?php foreach ($municipalities as $municipality): ?>

                                    <option value="<?= $municipality['municipality']; ?>">
                                        <?= $municipality['municipality']; ?></option>
                                <?php endforeach; ?>
                            </select> -->
                            <label for="muni" class="form-label"> Municipality <span style="color:red">*</span></label>
                            <select class="form-select" name="muni" id="muni" aria-label="Default select example" required>
                                <option disabled>Choose Municipality</option>
                                <option value="Almeria" <?= ($municipality) == 'Almeria' ? 'selected' : ''; ?>>Almeria</option>
                                <option value="Biliran" <?= ($municipality) == 'Biliran' ? 'selected' : ''; ?>>Biliran</option>
                                <option value="Cabucgayan" <?= ($municipality) == 'Cabucgayan' ? 'selected' : ''; ?>>Cabucgayan</option>
                                <option value="Caibiran" <?= ($municipality) == 'Caibiran' ? 'selected' : ''; ?>>Caibiran</option>
                                <option value="Culaba" <?= ($municipality) == 'Culaba' ? 'selected' : ''; ?>>Culaba</option>
                                <option value="Kawayan" <?= ($municipality) == 'Kawayan' ? 'selected' : ''; ?>>Kawayan</option>
                                <option value="Maripipi" <?= ($municipality) == 'Maripipi' ? 'selected' : ''; ?>>Maripipi</option>
                                <option value="Naval" <?= ($municipality) == 'Naval' ? 'selected' : ''; ?>>Naval</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="brgy" class="form-label">Barangay <span style="color:red">*</span></label>
                            <select id="brgy" name="brgy" class="form-select">
                                <option value="<?= ($barangay) ? $barangay : ''; ?>" selected><?= ($barangay) ? $barangay : ''; ?></option>

                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Purok <span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="purok" aria-describedby="textHelp" value="<?= ($purok) ? $purok : ''; ?>" required>
                        </div>
                    </div>
                    <hr>
                    <h5 class="fw-semibold bg-dark-light p-1 rounded-2 text-white">Mother/Caregiver Information</h5>
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Fullname <span class="fw-normal">(Surname, First name) <span style="color:red">*</span></span></label>
                            <input type="text" class="form-control" name="name_of_caregiver" aria-describedby="textHelp" value="<?= ($name_of_caregiver) ? $name_of_caregiver : ''; ?>" required>
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
                                <input type="text" id="latitude" class="form-control bg-primary-subtle" name="latitude" aria-describedby="textHelp" value="<?= ($latitude) ? $latitude : ''; ?>" required readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Longitude <span style="color:red">*</span></label>
                                <input type="text" id="longitude" class="form-control bg-primary-subtle" name="longitude" aria-describedby="textHelp" value="<?= ($longitude) ? $longitude : ''; ?>" required readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row" hidden>
                        <input type="text" class="form-control" name="rhu_id" aria-describedby="textHelp" required readonly
                            value="<?= $_SESSION['rhu_id']; ?>">
                    </div>
                    <div class="row">
                        <div class="text-center p-2">
                            <button type="submit" name="btn-edit-child" class="btn btn-primary rounded-2 w-25">
                                Save</button>
                        </div>
                    </div>
                </form>
        </div>
    <?php
            }
    ?>
    </div>
</main>
<script>
    // Initialize the map 
    const latInput = document.getElementById('latitude').value;
    const lonInput = document.getElementById('longitude').value;
    const map = L.map('inputMap').setView([latInput, lonInput], 11);

    // Default view with input values 
    // Add OpenStreetMap tile layer 
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: "Geo-location Selector Map"
    }).addTo(map);
    // Variable to store the marker 
    let marker;
    // Function to add or update marker on the map 
    function addMarker(lat, lon, popupText) {
        if (marker) {
            map.removeLayer(marker);

        }
        marker = L.marker([lat, lon]).addTo(map)
            .bindPopup(popupText)
            .openPopup();
    }
    // Add marker with initial form values 
    addMarker(latInput, lonInput, 'Current Location');
    // Geolocation button event 
    document.getElementById('getLocation').addEventListener('click', function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;
                    // Set input values 
                    document.getElementById('latitude').value = lat;
                    document.getElementById('longitude').value = lon;
                    // Update map view and marker 
                    map.setView([lat, lon], 13);
                    addMarker(lat, lon, 'You are here!');
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
        addMarker(lat, lon, 'Selected Location');
    });
    // Handle form submission 
    document.getElementById('locationForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // Prevent default form submission 
        // Process the form data here, e.g., send it to a server 
        console.log('Form submitted with latitude:', this.latitude.value);
        console.log('Form submitted with longitude:', this.longitude.value);
        // You could use fetch() or XMLHttpRequest to send data to your server 
    });
</script>
<script>
    const barangayData = <?= json_encode($function->GetAllBarangayAndMunicipality()); ?>;
    document.getElementById('muni').addEventListener('change', function() {
        const selectedMunicipality = this.value;
        const barangaySelect = document.getElementById('brgy');
        // Clear previous options 
        barangaySelect.innerHTML = '<option value="" selected disabled>Choose Barangay</option>';
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
</script>
<?php
include 'footer.php';
?>