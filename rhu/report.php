<?php
include 'header.php';
?>

<?php

$children = $function->GetAllChildrenByMunicipality($_SESSION['municipality']);
// if ($children) {
//     foreach ($children as $child) :
//         $child_id = $child['child_id'];
//         $purok = $child['purok'];
//         $name_of_caregiver = $child['name_of_caregiver'];
//         $name_of_child = $child['name_of_child'];
//         $belong_to_ip = $child['belong_to_ip'];
//         $sex = $child['sex'];
//         $date_of_birth = $child['date_of_birth'];
//         $date_last_measured = $child['date_last_measured'];
//         $age_by_months = $child['age_by_months'];
//         $wfa = $child['nutritional_status_WFA'];
//         $hfa = $child['nutritional_status_HFA'];
//         $wfh = $child['nutritional_status_WFH'];
//         $barangay = $child['barangay'];
//         $municipality = $child['municipality'];
//         $province = $child['province'];
//         $region = $child['region'];
//         $year = $child['year'];
//     endforeach;
// }
?>

<?php

$filteredData = $children;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weightForAge = $_POST['nutritional_status_WFA'] ?? '';
    $heightForAge = $_POST['nutritional_status_HFA'] ?? '';
    $weightForHeight = $_POST['nutritional_status_WFH'] ?? '';
    $sex = $_POST['sex'] ?? '';
    $ageGroup = $_POST['age_group'] ?? '';
    $barangay = $_POST['barangay'] ?? '';
    $indigenous = $_POST['belong_to_ip'] ?? '';

    $filteredData = array_filter($children, function ($row) use ($weightForAge, $heightForAge, $weightForHeight, $sex, $ageGroup, $barangay, $indigenous) {
        return ($weightForAge == '' || $row['nutritional_status_WFA'] == $weightForAge) &&
            ($heightForAge == '' || $row['nutritional_status_HFA'] == $heightForAge) &&
            ($weightForHeight == '' || $row['nutritional_status_WFH'] == $weightForHeight) &&
            ($sex == '' || $row['sex'] == $sex) &&
            ($ageGroup == '' || ($ageGroup == '0-2' && $row['age_by_months'] <= 24) || ($ageGroup == '3-5' && $row['age_by_months'] > 24)) &&
            ($barangay == '' || $row['barangay'] == $barangay) &&
            ($indigenous == '' || $row['belong_to_ip'] == $indigenous);
    });
}
?>

<main class="">
    <div class="card">
        <div class="card-body pb-0">
            <h5 class="card-title fw-semibold mb-4"><?= $_SESSION['municipality']; ?> Child Health Report</h5>
            <div class=" float-end mb-2">
                <form action="download-children-list.php" method="post">
                    <button class="badge btn btn-primary rounded-1 fw-semibold p-2" name="btn-download-children-list">
                        <span>
                            <i class="ti ti-download"></i>
                        </span>
                        <span class="hide-menu">Download</span>
                    </button>
                </form>
            </div>
            <div class="flex d-flex flex-row justify-content-between w-100">
                <form method="POST" class="w-100">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="weight_for_age" class="form-label">Weight for Age:</label>
                            <select name="nutritional_status_WFA" class="form-select">
                                <option value="">All</option>
                                <option value="Normal">Normal</option>
                                <option value="Underweight">Underweight</option>
                                <option value="Overweight">Overweight</option>
                                <option value="Severely Underweight">Severely Underweight</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="height_for_age" class="form-label">Height for Age:</label>
                            <select name="nutritional_status_HFA" class="form-select">
                                <option value="">All</option>
                                <option value="Normal">Normal</option>
                                <option value="Stunted">Stunted</option>
                                <option value="Severely Stunted">Severely Stunted</option>
                                <option value="Tall">Tall</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="weight_for_height" class="form-label">Weight for Height:</label>
                            <select name="nutritional_status_WFH" class="form-select">
                                <option value="">All</option>
                                <option value="Normal">Normal</option>
                                <option value="Obese">Obese</option>
                                <option value="Overweight">Overweight</option>
                                <option value="Moderately Wasted">Moderately Wasted</option>
                                <option value="Severely Wasted">Severely Wasted</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="sex" class="form-label">Sex:</label>
                            <select name="sex" class="form-select">
                                <option value="">All</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="age_group" class="form-label">Age Group:</label>
                            <select name="age_group" class="form-select">
                                <option value="">All</option>
                                <option value="0-2">0-2 Years</option>
                                <option value="3-5">3-5 Years</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="barangay" class="form-label">Barangay:</label>
                            <select name="barangay" class="form-select">
                                <option value="">All</option>
                                <?php
                                $brgys = $function->getBarangayByMunicipality($_SESSION['municipality']);
                                if ($brgys) {
                                    foreach ($brgys as $brgy):
                                        $addr = $brgy['barangay'];
                                ?>
                                        <option value="<?= $addr; ?>"><?= $addr; ?></option>
                                <?php endforeach;
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="Indigenous People" class="form-label">Indigenous People:</label>
                            <select name="belong_to_ip" class="form-select">
                                <option value="">All</option>
                                <option value="Y">Yes</option>
                                <option value="N">No</option>
                            </select>
                        </div>
                        <div class="col-md-2 text-center align-content-center ">
                            <button type="submit" class="badge btn btn-primary mt-4 p-2 fw-semibold">Filter</button>

                        </div>

                    </div>
                </form>
            </div>
        </div>
        <h5 class="fw-semibold bg-dark-light p-1 text-white px-4 mt-3">Table</h5>
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
                                            <h6 class="fw-semibold mb-0">Name Of Mother/Caregiver</h6>
                                        </th>
                                        <th class="border-bottom border-primary-subtle">
                                            <h6 class="fw-semibold mb-0">Name of Child</h6>
                                        </th>
                                        <th class="border-bottom border-primary-subtle">
                                            <h6 class="fw-semibold mb-0">Sex</h6>
                                        </th>
                                        <th class="border-bottom border-primary-subtle">
                                            <h6 class="fw-semibold mb-0">Age in months</h6>
                                        </th>
                                        <th class="border-bottom border-primary-subtle">
                                            <h6 class="fw-semibold mb-0">Barangay</h6>
                                        </th>
                                        <th class="border-bottom border-primary-subtle">
                                            <h6 class="fw-semibold mb-0">Nutritional Status WFA</h6>
                                        </th>
                                        <th class="border-bottom border-primary-subtle">
                                            <h6 class="fw-semibold mb-0">Nutritional Status HFA</h6>
                                        </th>
                                        <th class="border-bottom border-primary-subtle">
                                            <h6 class="fw-semibold mb-0">Nutritional Status WFL/H</h6>
                                        </th>
                                        <th class="border-bottom border-primary-subtle">
                                            <h6 class="fw-semibold mb-0">Belong to Indigenous People (Y/N)</h6>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($filteredData as $row):
                                    ?>
                                        <tr>
                                            <td class="border-bottom border-primary-subtle">
                                                <h6 class="fw-semibold mb-0"><?= $row['child_id']; ?></h6>
                                            </td>
                                            <td class="border-bottom border-primary-subtle">
                                                <span class="fw-normal"><?= $row['purok']; ?></span>
                                            </td>
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
                                                <p class="mb-0 fw-normal"><?= $row['barangay']; ?></p>
                                            </td>
                                            <td class="border-bottom border-primary-subtle">
                                                <p class="mb-0 fw-normal"><?= $row['nutritional_status_WFA']; ?></p>
                                            </td>
                                            <td class="border-bottom border-primary-subtle">
                                                <p class="mb-0 fw-normal"><?= $row['nutritional_status_HFA']; ?></p>
                                            </td>
                                            <td class="border-bottom border-primary-subtle">
                                                <p class="mb-0 fw-normal"><?= $row['nutritional_status_WFH']; ?></p>
                                            </td>
                                            <td class="border-bottom border-primary-subtle">
                                                <p class="mb-0 fw-normal"><?= $row['belong_to_ip']; ?></p>
                                            </td>
                                        </tr>
                                    <?php
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>




<?php
include 'footer.php';
?>