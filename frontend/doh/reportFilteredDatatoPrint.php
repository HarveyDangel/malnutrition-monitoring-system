<?php
include_once '../session.php';
Session::init();
include '../function.php';
$function = new Functions();

// Fetch children data by municipality
$children = $function->GetAllChildren();

// Initialize filtered data with all children
$filteredData = $children;


// exit;  // Stop further script execution to ensure proper redirect

// Filter the children array based on criteria
$filteredData = array_filter($children, function ($row) use ($filterCriteria) {
    return (
        ($filterCriteria['nutritional_status_WFA'] == '' || $row['nutritional_status_WFA'] == $filterCriteria['nutritional_status_WFA']) &&
        ($filterCriteria['nutritional_status_HFA'] == '' || $row['nutritional_status_HFA'] == $filterCriteria['nutritional_status_HFA']) &&
        ($filterCriteria['nutritional_status_WFH'] == '' || $row['nutritional_status_WFH'] == $filterCriteria['nutritional_status_WFH']) &&
        ($filterCriteria['sex'] == '' || $row['sex'] == $filterCriteria['sex']) &&
        ($filterCriteria['age_group'] == '' || ($filterCriteria['age_group'] == '0-2' && $row['age_by_months'] <= 35) || ($filterCriteria['age_group'] == '3-5' && $row['age_by_months'] > 35)) &&
        ($filterCriteria['municipality'] == '' || $row['municipality'] == $filterCriteria['municipality']) &&
        ($filterCriteria['barangay'] == '' || $row['barangay'] == $filterCriteria['barangay']) &&
        ($filterCriteria['belong_to_ip'] == '' || $row['belong_to_ip'] == $filterCriteria['belong_to_ip'])
    );
});

$total = 0;

?>
<style>
    .text-center {
        text-align: center !important
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    span,
    i,
    a,
    button {
        font-family: Arial, Helvetica, sans-serif;
        margin: 2px;
        padding: 2px;
    }
</style>

<div class="col-lg-12 d-flex align-items-stretch pt-0 mt-0">
    <div class="card w-100">
        <div class="card-body">
            <div class="">
                <div>
                    <img src="http://localhost/malnutrition-monitoring-system/assets/images/headers/PHO-header.png" alt="" width="100%">
                </div>
            </div>
            <br>
            <h4>Children List Report</h4>
            <div class="table-responsive">
                <table id="myTable" class="table text-nowrap align-middle">
                    <thead class="text-dark">
                        <tr>
                            <th class="border-bottom border-primary-subtle">
                                <h5 class="fw-semibold mb-0">Child Seq.</h5>
                            </th>
                            <th class="border-bottom border-primary-subtle">
                                <h5 class="fw-semibold mb-0">Purok</h5>
                            </th>
                            <th class="border-bottom border-primary-subtle">
                                <h5 class="fw-semibold mb-0"">Name Of Mother/Caregiver</h6>
                            </th>
                            <th class=" border-bottom border-primary-subtle">
                                    <h5 class="fw-semibold mb-0">Name of Child</h5>
                            </th>
                            <th class="border-bottom border-primary-subtle">
                                <h5 class="fw-semibold mb-0">Sex</h5>
                            </th>
                            <th class="border-bottom border-primary-subtle">
                                <h5 class="fw-semibold mb-0">Age in months</h5>
                            </th>
                            <th class="border-bottom border-primary-subtle">
                                <h5 class="fw-semibold mb-0">Municipality</h5>
                            </th>
                            <th class="border-bottom border-primary-subtle">
                                <h5 class="fw-semibold mb-0">Barangay</h5>
                            </th>
                            <th class="border-bottom border-primary-subtle">
                                <h5 class="fw-semibold mb-0">Nutritional Status WFA</h5>
                            </th>
                            <th class="border-bottom border-primary-subtle">
                                <h5 class="fw-semibold mb-0">Nutritional Status HFA</h5>
                            </th>
                            <th class="border-bottom border-primary-subtle">
                                <h5 class="fw-semibold mb-0">Nutritional Status WFL/H</h5>
                            </th>
                            <th class="border-bottom border-primary-subtle">
                                <h5 class="fw-semibold mb-0">Belong to Indigenous People (Y/N)</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($filteredData as $row):

                            $total++;
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
                                    <h5 class="fw-semibold mb-0"><?= $row['child_id']; ?></h5>
                                </td>
                                <td class="border-bottom border-primary-subtle">
                                    <p class="fw-normal"><?= $row['purok']; ?></p>
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
            <br>
            <p>Total Children : <?= $total;?></p>
            <br>
            <p>PREPARED BY: <?= $_SESSION['fname']; ?> <?= $_SESSION['mname']; ?> <?= $_SESSION['lname']; ?> <?= $_SESSION['suffix']; ?></p>
            <p>Date: <?php echo date("Y/m/d") ?></p>
        </div>
    </div>
</div>
</div>
</main>