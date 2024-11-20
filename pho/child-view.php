<?php
include 'header.php';
$child_id = $_GET['child_id'];
$child = $function->GetChildInfo($child_id);
$childHistory = $function->GetChildHistory($child_id);

$active = 5;
?>

<body class="bg-light-gray">
    <?php
    $msg = Session::get("msg");
    if (isset($msg)) {
        echo '<div id="flash-message">' . $msg . '</div>';
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
                    // $date_last_measured = $child->date_last_measured;
                    // $age_by_months = $child->age_by_months;
                    $currentWeight = $child->weight;
                    $currentHeight = $child->height;
                    $current_wfa = $child->nutritional_status_WFA;
                    $current_hfa = $child->nutritional_status_HFA;
                    $current_wfh = $child->nutritional_status_WFH;
                    $barangay = $child->barangay;
                    $municipality = $child->municipality;
                    $province = $child->province;
                    $region = $child->region;
                    $year = $child->year;


                ?>
                     <div class="row">
                        <form method="post" action="navigate.php" class="mb-5">
                            <a href="children.php?id=<?= $_SESSION['pho_id']; ?>" class=" btn btn-primary rounded-5 fw-semibold">
                            <i class="fa fa-arrow-left"></i> Back</a> &nbsp; &nbsp;
                        </form>
                    </div>
                    <div class="row">
                        <h3>Child Name: <span class="fw-normal"><?= $name_of_child; ?></span></h3>
                        <hr>
                        <h5>Sex: <span class="fw-normal"> <?= $sex; ?></span></h5>
                        <h5>Belong to IP: <span class="fw-normal"> <?= $belong_to_ip; ?></span></h5>
                        <h5>Date of Birth: <span class="fw-normal"> <?= $date_of_birth; ?></span></h5>
                        <h5>Name of Caregiver/Mother: <span class="fw-normal"> <?= $name_of_caregiver; ?></span></h5>
                        <h5>Address: <span class="fw-normal"> <?= $barangay; ?>, <?= $municipality; ?></span></h5>
                        <h5>Child ID: <span class="fw-normal"> <?= $child_id; ?></span></h5>
                    </div>
                    <!-- <hr>
                    <div class="row ">
                        <div class="flex d-flex flex-row justify-content-between">
                            <h5>Weight For Age: <?= $current_wfa; ?></h5>
                            <h5>Height For Age: <?= $current_hfa; ?></h5>
                            <h5>Weight For Lenght/Height: <?= $current_wfh; ?></h5>
                        </div>
                    </div> -->
                    <hr>
                    <div class="row">
                        <div class="pt-4 col-md-6">
                            <div class="card shadow w-100">
                                <div class="card-body">
                                    <div class="row alig n-items-start">
                                        <div class="col-8">
                                            <h5 class="card-title mb-9 fw-semibold"> Weight: <?= $currentWeight; ?> kg.</h5>
                                            <!-- <div class="d-flex align-items-center pb-1">
                                                        <span class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-arrow-up-right text-danger"></i>
                                                        </span>
                                                        <p class="text-dark me-1 fs-3 mb-0">+3%</p>
                                                        <p class="fs-3 mb-0">last 3 months</p>
                                                    </div> -->

                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-end">
                                                <div class="text-white bg-primary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-scale fs-6"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="trackWeight"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 col-md-6">
                            <div class="card shadow w-100">
                                <div class="card-body">
                                    <div class="row alig n-items-start">
                                        <div class="col-8">
                                            <h5 class="card-title mb-9 fw-semibold"> Height: <?= $currentHeight; ?> cm.</h5>
                                            <!-- <div class="d-flex align-items-center pb-1">
                                                        <span class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-arrow-up-right text-danger"></i>
                                                        </span>
                                                        <p class="text-dark me-1 fs-3 mb-0">+3%</p>
                                                        <p class="fs-3 mb-0">last 3 months</p>
                                                    </div> -->

                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-end">
                                                <div class="text-white bg-primary rounded-circle p-6 d-flex align-items-center justify-content-center mx-2">
                                                    <i class="ti ti-ruler-measure fs-6"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="trackHeight"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <h3>Child History</h3>


                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="table-responsive w-100">
                            <table id="myTable" class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Date Measured</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Height</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Weight</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Age by months</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Weight for Age</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Height for Age</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Weight for Lenght/Height</h6>
                                        </th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    if ($childHistory) {
                                        foreach ($childHistory as $history) :
                                            $date_measured = $history['date_measured'];
                                            $age = $history['age_in_months'];
                                            $weight = $history['weight'];
                                            $height = $history['height'];
                                            $wfa = $history['wfa'];
                                            $hfa = $history['hfa'];
                                            $wfh = $history['wfh'];

                                            // Determine the class for nutritional status WFA
                                            $wfaClass = '';
                                            switch ($wfa) {
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
                                            switch ($hfa) {
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
                                            switch ($wfh) {
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
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal"><?= $date_measured; ?></p>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span class="fw-normal"><?= $height; ?> cm </span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal"><?= $weight; ?></p>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal"><?= $age; ?></p>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="fw-normal mb-0 <?= $wfaClass; ?>"><?= $wfa; ?></p>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal <?= $hfaClass; ?>"><?= $hfa; ?></p>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal <?= $wfhClass; ?>"><?= $wfh; ?></p>
                                                </td>
                                            </tr>
                                    <?php
                                        endforeach;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    <?php
                }
    ?>
    </div>
    <script src="..\assets\libs\apexcharts\dist\apexcharts.min.js"></script>
    <script>
        const childData = <?= json_encode($childHistory); ?>
        
        const weights = childData.map(item => item.weight);
        const heights = childData.map(item => item.height);

        var trackWeight = {
            chart: {
                id: "sparkline3",
                type: "area",
                height: 300,
                sparkline: {
                    enabled: true,
                },
                group: "sparklines",
                fontFamily: "Plus Jakarta Sans', sans-serif",
                foreColor: "#adb0bb",
            },
            series: [{
                name: ["Weight kg."],
                color: "#339966",
                data: weights,


            }, ],
            stroke: {
                curve: "smooth",
                width: 2,
            },
            fill: {
                colors: ["#f3feff"], //
                type: "solid",
                opacity: 0.05,
            },

            legend: {
                show: true,
            },

            yaxis: {
                show: true,
                min: 0,
                max: 30,
                tickAmount: 10,
                labels: {
                    style: {
                        cssClass: "grey--text lighten-2--text fill-color",
                    },
                },
            },

            markers: {
                size: 7,
            },
            tooltip: {
                theme: "dark",
                fixed: {
                    enabled: true,
                    position: "right",
                },
                x: {
                    show: false,
                },
            },
        };
        var chart = new ApexCharts(document.querySelector("#trackWeight"), trackWeight);
        chart.render();

        var trackHeight = {
            chart: {
                id: "sparkline3",
                type: "area",
                height: 300,
                sparkline: {
                    enabled: true,
                },
                group: "sparklines",
                fontFamily: "Plus Jakarta Sans', sans-serif",
                foreColor: "#adb0bb",
            },
            series: [{
                name: ["Height cm."],
                color: "#339966",
                data: heights,

            }, ],
            stroke: {
                curve: "smooth",
                width: 2,
            },
            fill: {
                colors: ["#f3feff"], //
                type: "solid",
                opacity: 0.05,
            },

            legend: {
                show: true,
            },

            yaxis: {
                show: true,
                min: 0,
                max: 150,
                tickAmount: 10,
                labels: {
                    style: {
                        cssClass: "grey--text lighten-2--text fill-color",
                    },
                },
            },

            markers: {
                size: 7,
            },
            tooltip: {
                theme: "dark",
                fixed: {
                    enabled: true,
                    position: "right",
                },
                x: {
                    show: false,
                },
            },
        };
        var chart = new ApexCharts(document.querySelector("#trackHeight"), trackHeight);
        chart.render();
    </script>
</body>




<?php
include 'footer.php';
?>