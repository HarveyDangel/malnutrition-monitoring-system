<?php
include 'header.php';
$child_id = $_GET['child_id'];
$child = $function->GetChildInfo($child_id);
$child = $function->GetChildRecords($child_id);
?>

<body class="bg-light-gray">
    <?php
    $msg = Session::get("msg");
    if (isset($msg)) {
        echo $msg;
        Session::set("msg", NULL);
    }
    ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <?php
                if ($child) {
                    $child_id = $child->child_id;
                    $purok = $child->purok;
                    $name_of_caregiver = $child->name_of_caregiver;
                    $name_of_child = $child->name_of_child;
                    $belong_to_ip = $child->belong_to_ip;
                    $sex = $child->sex;
                    $date_of_birth = $child->date_of_birth;
                    $date_last_measured = $child->date_last_measured;
                    $age_in_months = $child->age_by_months;
                    $barangay = $child->barangay;
                    $municipality = $child->municipality;
                    $province = $child->province;
                    $region = $child->region;
                    $year = $child->year;
                
                    
                ?>
                    <h1><?= $name_of_child; ?></h1>
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="table-responsive w-100">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Id</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Height</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">BMI</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Age by months</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Nutritional Status</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Date Measured</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Parent/Guardian</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Address</h6>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0"><?= $child_id; ?></h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="fw-normal"><?= $beneficiary_height; ?> cm </span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal"><?= $beneficiary_bmi; ?></p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal"><?= $beneficiary_age_by_months; ?></p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal"><?= $beneficiary_nutritional_status; ?></p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal"><?= $beneficiary_date_measured; ?></p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal"><?= $beneficiary_p_firstname; ?> <?= $beneficiary_p_lastname; ?></p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal"><?= $beneficiary_municipality; ?>, <?= $beneficiary_barangay; ?></p>
                                        </td>
                                    </tr>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row alig n-items-start">
                                                <div class="col-8">
                                                    <h5 class="card-title mb-9 fw-semibold"> Weight </h5>
                                                    <h4 class="fw-semibold mb-3"> <?= $beneficiary_weight; ?> kg.</h4>
                                                    <!--<div class="d-flex align-items-center pb-1">
                                                    <span class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-arrow-up-right text-danger"></i>
                                                    </span>
                                                    <p class="text-dark me-1 fs-3 mb-0">+3%</p>
                                                    <p class="fs-3 mb-0">last 3 months</p>
                                                </div>-->
                                                </div>
                                                <div class="col-4">
                                                    <div class="d-flex justify-content-end">
                                                        <div class="text-white rounded-circle p-6 d-flex       align-items-center justify-content-center mx-2" style="background-color: #5DFF6B;">
                                                            <i class="ti ti-ruler-measure fs-6"></i>
                                                        </div>
                                                        <div class="text-white bg-primary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-scale fs-6"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="healthInfo"></div>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            <form method="post" action="navigate.php" class="p-4">
                <a href="beneficiary.php" class="badge btn bg-primary rounded-3 fw-semibold">
                    <span>
                        <i class="ti ti-arrow-left"></i>
                    </span>
                    <span class="hide-menu">Back</span>
                </a> &nbsp;

                <a class=" badge btn btn-primary rounded-3 fw-semibold" href="edit-beneficiary.php?beneficiary_id=<?= $child_id; ?>">Edit</a> &nbsp;

                <input type="hidden" name="beneficiary_id" value="<?= $child_id; ?>">
                <button class="badge btn btn-danger rounded-3 fw-semibold float-end" type="submit" name="btn-delete-user">Delete</button>
                </form>
        </div>
    <?php
                }
    ?>
    </div>
</body>




<?php
include 'footer.php';
?>