<?php
include 'header.php';
?>

<?php

$municipalities = $function->GetAllMunicipality();
$children = $function->GetAllChildren();
?>

<?php
$filteredData = $children;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $municipality = $_POST['municipality'] ?? '';
    $weightForAge = $_POST['nutritional_status_WFA'] ?? '';
    $heightForAge = $_POST['nutritional_status_HFA'] ?? '';
    $weightForHeight = $_POST['nutritional_status_WFH'] ?? '';
    $sex = $_POST['sex'] ?? '';
    $ageGroup = $_POST['age_group'] ?? '';
    $barangay = $_POST['barangay'] ?? '';
    $indigenous = $_POST['belong_to_ip'] ?? '';

    $filteredData = array_filter($children, function ($row) use ($municipality, $weightForAge, $heightForAge, $weightForHeight, $sex, $ageGroup, $barangay, $indigenous) {
        return ($municipality == '' || $row['municipality'] == $municipality) &&
            ($weightForAge == '' || $row['nutritional_status_WFA'] == $weightForAge) &&
            ($heightForAge == '' || $row['nutritional_status_HFA'] == $heightForAge) &&
            ($weightForHeight == '' || $row['nutritional_status_WFH'] == $weightForHeight) &&
            ($sex == '' || $row['sex'] == $sex) &&
            ($ageGroup == '' || ($ageGroup == '0-2' && $row['age_by_months'] <= 35) || ($ageGroup == '3-5' && $row['age_by_months'] > 35)) &&
            ($barangay == '' || $row['barangay'] == $barangay) &&
            ($indigenous == '' || $row['belong_to_ip'] == $indigenous);
    });
}
?>

<main class="">
    <div class="">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Biliran Province Child Health Report</h5>
                <div class="flex d-flex flex-row justify-content-between w-100">
                    <form method="POST" class="w-100">
                        <div class="row mb-2">
                            <div class="col-md-3"> <label for="municipality" class="form-label">Municipality:</label> <select id="municipality" name="municipality" class="form-select">
                                    <option value="">All</option> <?php foreach ($municipalities as $municipality): ?> <option value="<?= $municipality['municipality']; ?>"><?= $municipality['municipality']; ?></option> <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-3"> <label for="barangay" class="form-label">Barangay:</label> <select id="barangay" name="barangay" class="form-select">
                                    <option value="">All</option>
                                    <!-- Barangays will be populated based on selected municipality -->
                                </select>
                            </div>
                            <div class="col-md-2"> <label for="sex" class="form-label">Sex:</label> <select name="sex" class="form-select">
                                    <option value="" <?php echo isset($_POST['sex']) && $_POST['sex'] == '' ? 'selected' : ''; ?>>All</option>
                                    <option value="M" <?php echo isset($_POST['sex']) && $_POST['sex'] == 'M' ? 'selected' : ''; ?>>Male</option>
                                    <option value="F" <?php echo isset($_POST['sex']) && $_POST['sex'] == 'F' ? 'selected' : ''; ?>>Female</option>
                                </select> </div>
                            <div class="col-md-2"> <label for="age_group" class="form-label">Age Group:</label> <select name="age_group" class="form-select">
                                    <option value="" <?php echo isset($_POST['age_group']) && $_POST['age_group'] == '' ? 'selected' : ''; ?>>All</option>
                                    <option value="0-2" <?php echo isset($_POST['age_group']) && $_POST['age_group'] == '0-2' ? 'selected' : ''; ?>>0-2 Years</option>
                                    <option value="3-5" <?php echo isset($_POST['age_group']) && $_POST['age_group'] == '3-5' ? 'selected' : ''; ?>>3-5 Years</option>
                                </select> </div>
                            <div class="col-md-2"> <label for="Indigenous People" class="form-label">Indigenous People:</label> <select name="belong_to_ip" class="form-select">
                                    <option value="" <?php echo isset($_POST['belong_to_ip']) && $_POST['belong_to_ip'] == '' ? 'selected' : ''; ?>>All</option>
                                    <option value="Y" <?php echo isset($_POST['belong_to_ip']) && $_POST['belong_to_ip'] == 'Y' ? 'selected' : ''; ?>>Yes</option>
                                    <option value="N"  <?php echo isset($_POST['belong_to_ip']) && $_POST['belong_to_ip'] == 'N' ? 'selected' : ''; ?>>No</option>
                                </select> </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4"> <label for="weight_for_age" class="form-label">Weight for Age:</label> <select name="nutritional_status_WFA" class="form-select">
                                    <option value="" <?php echo isset($_POST['nutritional_status_WFA']) && $_POST['nutritional_status_WFA'] == '' ? 'selected' : ''; ?>>All</option>
                                    <option value="Normal" <?php echo isset($_POST['nutritional_status_WFA']) && $_POST['nutritional_status_WFA'] == 'Normal' ? 'selected' : ''; ?>>Normal</option>
                                    <option value="Underweight" <?php echo isset($_POST['nutritional_status_WFA']) && $_POST['nutritional_status_WFA'] == 'Underweight' ? 'selected' : ''; ?>>Underweight</option>
                                    <option value="Severely Underweight" <?php echo isset($_POST['nutritional_status_WFA']) && $_POST['nutritional_status_WFA'] == 'Severely Underweight' ? 'selected' : ''; ?>>Severely Underweight</option>
                                    <option value="Overweight" <?php echo isset($_POST['nutritional_status_WFA']) && $_POST['nutritional_status_WFA'] == 'Overweight' ? 'selected' : ''; ?>>Overweight</option>
                                </select> </div>
                            <div class="col-md-4"> 
                                <label for="height_for_age" class="form-label">Height for Age:</label> 
                                <select name="nutritional_status_HFA" class="form-select">
                                    <option value="" <?php echo isset($_POST['nutritional_status_HFA']) && $_POST['nutritional_status_HFA'] == '' ? 'selected' : ''; ?>>All</option>
                                    <option value="Normal" <?php echo isset($_POST['nutritional_status_HFA']) && $_POST['nutritional_status_HFA'] == 'Normal' ? 'selected' : ''; ?>>Normal</option>
                                    <option value="Stunted" <?php echo isset($_POST['nutritional_status_HFA']) && $_POST['nutritional_status_HFA'] == 'Stunted' ? 'selected' : ''; ?>>Stunted</option>
                                    <option value="Severely Stunted" <?php echo isset($_POST['nutritional_status_HFA']) && $_POST['nutritional_status_HFA'] == 'Severely Stunted' ? 'selected' : ''; ?>>Severely Stunted</option>
                                    <option value="Tall" <?php echo isset($_POST['nutritional_status_HFA']) && $_POST['nutritional_status_HFA'] == 'Tall' ? 'selected' : ''; ?>>Tall</option>
                                </select> 
                            </div>
                            <div class="col-md-4"> <label for="weight_for_height" class="form-label">Weight for Height:</label> <select name="nutritional_status_WFH" class="form-select">
                                    <option value="" <?php echo isset($_POST['nutritional_status_WFH']) && $_POST['nutritional_status_WFH'] == '' ? 'selected' : ''; ?>>All</option>
                                    <option value="Normal" <?php echo isset($_POST['nutritional_status_WFH']) && $_POST['nutritional_status_WFH'] == 'Normal' ? 'selected' : ''; ?>>Normal</option>
                                    <option value="Obese" <?php echo isset($_POST['nutritional_status_WFH']) && $_POST['nutritional_status_WFH'] == 'Obese' ? 'selected' : ''; ?>>Obese</option>
                                    <option value="Overweight" <?php echo isset($_POST['nutritional_status_WFH']) && $_POST['nutritional_status_WFH'] == 'Overweight' ? 'selected' : ''; ?>>Overweight</option>
                                    <option value="Wasted" <?php echo isset($_POST['nutritional_status_WFH']) && $_POST['nutritional_status_WFH'] == 'Wasted' ? 'selected' : ''; ?>>Wasted</option>
                                    <option value="Severely Wasted" <?php echo isset($_POST['nutritional_status_WFH']) && $_POST['nutritional_status_WFH'] == 'Severely Wasted' ? 'selected' : ''; ?>>Severely Wasted</option>
                                </select>
                            </div>
                        </div>
                        <div class="row flex d-flex align-content-between">
                            <div class="col-md-6 align-content-center my-2 ">
                                <button type="submit" class="badge btn btn-primary p-2 fw-semibold"> <i class="fa fa-filter"></i> Filter</button>
                            </div>
                            <div class="col-md-6 my-2">
                                <form action="reportPrint.php" method="post">
                                    <!-- I addded isset() to check if each variable is not empty -->
                                    <a href="reportPrint.php?nutritional_status_WFA=<?= (isset($_POST['nutritional_status_WFA'])) ? $_POST['nutritional_status_WFA'] : '' ?>&nutritional_status_HFA=<?= (isset($_POST['nutritional_status_HFA'])) ? $_POST['nutritional_status_HFA'] : '' ?>&nutritional_status_WFH=<?= (isset($_POST['nutritional_status_WFH'])) ? $_POST['nutritional_status_WFH'] : '' ?>&sex=<?= (isset($_POST['sex'])) ? $_POST['sex'] : '' ?>&age_group=<?= (isset($_POST['age_group'])) ? $_POST['age_group'] : '' ?>&barangay=<?= (isset($_POST['barangay'])) ? $_POST['barangay'] : '' ?>&municipality=<?= (isset($_POST['municipality'])) ? $_POST['municipality'] : '' ?>&belong_to_ip=<?= (isset($_POST['belong_to_ip'])) ? $_POST['belong_to_ip'] : '' ?>" class="badge btn btn-primary rounded-1 fw-semibold p-2 float-end" name="btn-download-children-list"><i class="fa fa-download"></i> Download PDF</a>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h1 class="bg-dark p-1"> </h1>
    <div class="col-lg-12 d-flex align-items-stretch pt-0 mt-0">
        <div class="card w-100">
            <div class="card-body">
                <?php
                $msg = Session::get("msg");
                if (isset($msg)) {
                    echo '<div id="flash-message">' . $msg . '</div>';
                    Session::set("msg", NULL);
                }
                ?>
                <div class="table-responsive">
                    <div>
                        <table id="myTable" class="table text-nowrap align-middle">
                            <thead class="text-dark">
                                <tr>
                                    <th class="border-bottom border-primary-subtle">
                                        <h6 class="fw-semibold mb-0">Child Seq.</h6>
                                    </th>
                                    <th class="border-bottom border-primary-subtle">
                                        <h6 class="fw-semibold mb-0">Purok</h6>
                                    </th>
                                    <th class="border-bottom border-primary-subtle">
                                        <h6 class="fw-semibold mb-0">Name Of Mother<br>/Caregiver</h6>
                                    </th>
                                    <th class="border-bottom border-primary-subtle">
                                        <h6 class="fw-semibold mb-0">Name of Child</h6>
                                    </th>
                                    <th class="border-bottom border-primary-subtle">
                                        <h6 class="fw-semibold mb-0">Sex</h6>
                                    </th>
                                    <th class="border-bottom border-primary-subtle">
                                        <h6 class="fw-semibold mb-0">Age in <br>months</h6>
                                    </th>
                                    <th class="border-bottom border-primary-subtle">
                                        <h6 class="fw-semibold mb-0">Municipality</h6>
                                    </th>
                                    <th class="border-bottom border-primary-subtle">
                                        <h6 class="fw-semibold mb-0">Barangay</h6>
                                    </th>
                                    <th class="border-bottom border-primary-subtle">
                                        <h6 class="fw-semibold mb-0">Nutritional<br> Status WFA</h6>
                                    </th>
                                    <th class="border-bottom border-primary-subtle">
                                        <h6 class="fw-semibold mb-0">Nutritional<br> Status HFA</h6>
                                    </th>
                                    <th class="border-bottom border-primary-subtle">
                                        <h6 class="fw-semibold mb-0">Nutritional<br> Status WFL/H</h6>
                                    </th>
                                    <th class="border-bottom border-primary-subtle">
                                        <h6 class="fw-semibold mb-0">Belong to<br> Indigenous <br>People (Y/N)</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($filteredData as $row):
                                    // Determine the class for nutritional status WFA
                                    $wfaClass = '';
                                    switch ($row['nutritional_status_WFA']) {
                                        case 'Overweight':
                                            $wfaClass = 'text-purple';
                                            break;
                                        case 'Normal':
                                            $wfaClass = 'text-primary';
                                            break;
                                        case 'Underweight':
                                            $wfaClass = 'text-warning';
                                            break;
                                        case 'Severely Underweight':
                                            $wfaClass = 'text-red';
                                            break;
                                        default:
                                            $wfaClass = 'text-default';
                                    }

                                    // Determine the class for nutritional status HFA
                                    $hfaClass = '';
                                    switch ($row['nutritional_status_HFA']) {
                                        case 'Tall':
                                        case 'Normal':
                                            $hfaClass = 'text-primary';
                                            break;
                                        case 'Stunted':
                                            $hfaClass = 'text-warning';
                                            break;
                                        case 'Severely Stunted':
                                            $hfaClass = 'text-red';
                                            break;
                                        default:
                                            $hfaClass = 'text-default';
                                    }

                                    // Determine the class for nutritional status WFH
                                    $wfhClass = '';
                                    switch ($row['nutritional_status_WFH']) {
                                        case 'Obese':
                                        case 'Overweight':
                                            $wfhClass = 'text-purple';
                                            break;
                                        case 'Normal':
                                            $wfhClass = 'text-primary';
                                            break;
                                        case 'Wasted':
                                            $wfhClass = 'text-warning';
                                            break;
                                        case 'Severely Wasted':
                                            $wfhClass = 'text-red';
                                            break;
                                        default:
                                            $wfhClass = 'text-default';
                                    }
                                ?>
                                    <tr>
                                        <td class="border-bottom border-primary-subtle">
                                            <h6 class="fw-semibold mb-0"><?= $row['child_id']; ?></h6>
                                        </td>
                                        <td class="border-bottom border-primary-subtle"><span class="fw-normal"><?= $row['purok']; ?></span></td>
                                        <td class="border-bottom border-primary-subtle">
                                            <p class="mb-0 fw-normal"><?= $row['name_of_caregiver']; ?></p>
                                        </td>
                                        <td class="border-bottom border-primary-subtle">
                                            <p class="mb-0 fw-normal"><?= $row['name_of_child']; ?></p>
                                        </td>
                                        <td class="border-bottom border-primary-subtle">
                                            <p class="mb-0 fw-normal"><?= $row['sex']; ?></p>
                                        </td>
                                        <td class="border-bottom border-primary-subtle">
                                            <p class="mb-0 fw-normal"><?= $row['age_by_months']; ?></p>
                                        </td>
                                        <td class="border-bottom border-primary-subtle">
                                            <p class="mb-0 fw-normal"><?= $row['municipality']; ?></p>
                                        </td>
                                        <td class="border-bottom border-primary-subtle">
                                            <p class="mb-0 fw-normal"><?= $row['barangay']; ?></p>
                                        </td>
                                        <td class="border-bottom border-primary-subtle">
                                            <p class="mb-0 fw-normal <?= $wfaClass; ?>" id="wfa"><?= $row['nutritional_status_WFA']; ?></p>
                                        </td>
                                        <td class="border-bottom border-primary-subtle">
                                            <p class="mb-0 fw-normal <?= $hfaClass; ?>" id="hfa"><?= $row['nutritional_status_HFA']; ?></p>
                                        </td>
                                        <td class="border-bottom border-primary-subtle">
                                            <p class="mb-0 fw-normal <?= $wfhClass; ?>" id="wfh"><?= $row['nutritional_status_WFH']; ?></p>
                                        </td>
                                        <td class="border-bottom border-primary-subtle">
                                            <p class="mb-0 fw-normal"><?= $row['belong_to_ip']; ?></p>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<!-- JavaScript for dynamically updating Barangay dropdown based on selected Municipality -->
<script>
    const barangayData = <?= json_encode($function->GetAllBarangayAndMunicipality()); ?>;
    document.getElementById('municipality').addEventListener('change', function() {
        const selectedMunicipality = this.value;
        const barangaySelect = document.getElementById('barangay');
        // Clear previous options 
        barangaySelect.innerHTML = '<option value="">All</option>';
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