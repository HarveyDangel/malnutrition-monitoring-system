<?php
include 'header.php';

$active = 1;

// $children = $function->GetAllChildrenByMunicipality($_SESSION['municipality']);

// $childCountByBarangay = $function->ChildCountByMunicipality($_SESSION['municipality']);

// $barangay = $function->getBarangayByMunicipality($_SESSION['municipality']);

?>
<main>
  <?php
  $msg = Session::get("msg");
  if (isset($msg)) {
    echo '<div id="flash-message">' . $msg . '</div>';
    Session::set("msg", NULL);
  }
  ?>
  <!--  Row 1 -->
  <container class="row">
    <!-- Municipality Card -->
    <div class="col-lg-4 col-md-6">
      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-building bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h4 class="card-title fw-semibold " style="font-size: 22px;">
                  Municipality</h4>
              </div>
              <div>
                <h3 class="fw-normal"><?= $_SESSION['municipality']; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End Municipality Card -->

    <!--Barangay card-->
    <div class="col-lg-4 col-md-6">
      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-home bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h4 class="card-title fw-semibold " style="font-size: 22px;">
                  Barangay</h4>
              </div>
              <div>
                <h3 class="fw-normal"><?= $function->totalCountWithCondition("address", "municipality", $_SESSION['municipality']); ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Barangay card-->
    <div class="col-lg-4">
      <!-- Population Card -->
      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-users bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h4 class="card-title fw-semibold " style="font-size: 22px;">
                  Recorded Data</h4>
              </div>
              <div>
                <h3 class="fw-normal"><?= $function->ChildCountByMunicipality($_SESSION['municipality']); ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Population  -->
  </container>


  <!-- Yearly total number of cases Chart-->
  <!-- <div class="card">
    <div class="card-body">
      <div class="row alig n-items-start">
        <div class="col-8">
          <h4 class="mb-9 fw-semibold">Trends</h4>
          <h5 class="fw-normal mb-3">Total Popn.: 2222 </h5>
          <div class="d-flex align-items-center pb-1">
            <span class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
              <i class="ti ti-arrow-down-right text-danger"></i>
            </span>
            <p class="text-dark me-1 fs-3 mb-0">-3%</p>
            <p class="fs-3 mb-0">from last year </p>
          </div>
        </div>
        <div class="col-4">
          <div class="d-flex justify-content-end">
            <div class="text-white bg-primary rounded-circle p-6 d-flex align-items-center justify-content-center">
              <i class="ti ti-bed fs-6"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="malnourish"></div>
  </div> -->
  <!-- End Yearly total number of cases Chart -->

  <!-- Bar graph -->
  <!-- <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100 rounded-2 shadow">
        <div class="card-body rounded-2">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-2 mb-sm-0">
              <h1>Total</h1>
            </div>
          </div>
          <div id="municipalChart"></div>
        </div>
      </div>
    </div> -->
  <div class="row">
    <div class="d-flex align-items-strech col-lg-6">
      <div class="card w-100 rounded-2 shadow">
        <div class="card-body rounded-2">
          <div class="d-sm-flex d-block align-items-center">
            <div class="">
              <h3 class="fw-semibold">Malnutrition Comparison</h3>
            </div>
          </div>
          <hr>
          <div id="malnuBreakup"></div>
          <!--  style="max-width:max-content; min-width: 400px;" -->
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="d-flex align-items-strech col-lg-6">
      <div class="card w-100 rounded-2 shadow">
        <div class="card-body rounded-2">
          <div>
            <h3 class="fw-semibold">Malnutrition Ranking</h3>
          </div>
          <hr>
          <canvas id="rankingChart" min-width="400" height="200"></canvas>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <script src="..\assets\libs\apexcharts\dist\apexcharts.min.js"></script>
  <script>
    var breakup = {
      series: [
        <?= $function->CountChildByNutriStatusByMunicipality("nutritional_status_WFA", "Underweight", $_SESSION['municipality']); ?>,
        <?= $function->CountChildByNutriStatusByMunicipality("nutritional_status_WFA", "Severely Underweight", $_SESSION['municipality']); ?>,
        <?= $function->CountChildByNutriStatusByMunicipality("nutritional_status_HFA", "Stunted", $_SESSION['municipality']); ?>,
        <?= $function->CountChildByNutriStatusByMunicipality("nutritional_status_HFA", "Severely Stunted", $_SESSION['municipality']); ?>,
        <?= $function->CountChildByNutriStatusByMunicipality("nutritional_status_WFH", "Wasted", $_SESSION['municipality']); ?>,
        <?= $function->CountChildByNutriStatusByMunicipality("nutritional_status_WFH", "Severely Wasted", $_SESSION['municipality']); ?>
      ], // Replace with your actual data

      labels: ["Underweight", "Severely Underweight", "Stunted", "Severely Stunted", "Wasted", "Severely Wasted"],
      chart: {
        width: 400,
        type: 'donut',
        fontFamily: "'Plus Jakarta Sans', sans-serif",
        foreColor: "#1a1a00",
        toolbar: {
          show: true
        },
      },
      plotOptions: {
        pie: {
          startAngle: 0,
          endAngle: 360,
          donut: {
            size: '50%',
          },
        },
      },
      stroke: {
        show: true,
      },
      dataLabels: {
        enabled: true,
      },
      legend: {
        show: true,
      },
      colors: [/*"#40bf80", "#339966", */"#e6b800", "#cca300","#e69e30","#e67e22", "#ff6347", "#ff4d2e"],
      responsive: [{
        breakpoint: 100,
        options: {
          chart: {
            width: 150,
          },
        },
      }, ],
      tooltip: {
        theme: "dark",
        fillSeriesColor: true,
      },
    };

    var chart = new ApexCharts(document.querySelector("#malnuBreakup"), breakup);
    chart.render();
  </script>



  <script>
    const brgyCountData = <?= json_encode($function->RankChildCountByBarangay($_SESSION['municipality'])); ?>;
    // Fetch barangay data from PHP

    const brgyData = <?= json_encode($function->RankChildCountByBarangay($_SESSION['municipality'])); ?>;
    //console.log (brgyData);

    const rankings = brgyData.map(item => item.child_count);
    const barangays = brgyData.map(item => item.barangay);

    const data = {
      labels: barangays, // Use barangay names as labels
      datasets: [{
        label: 'Rankings',
        data: rankings, // Ranking values corresponding to barangays
        backgroundColor: '#339966', // Bar color
        borderColor: '#339966',
        borderWidth: 1,
        borderRadius: 10, // Soften the edges with rounded corners
        fontFamily: "Plus Jakarta Sans', sans-serif",
      }]
    };

    // Configuration for the chart
    const config = {
      type: 'bar',
      data: data,
      options: {
        indexAxis: 'y', // Makes it a horizontal bar chart
        scales: {
          x: {
            beginAtZero: true,
            max: 100, // Set the maximum value to 100
            // ticks: {
            //   // Add "%" suffix to each tick label
            //   callback: function(value) {
            //     return value + '%';
            //   }
            // }
          }
        },
        plugins: {
          tooltip: {
            callbacks: {
              label: function(tooltipItem) {
                return tooltipItem.raw; //+ '%'; // Adds "%" to tooltip values
              }
            }
          }
        }
      }
    };

    // Render the chart
    const rankingChart = new Chart(
      document.getElementById('rankingChart'),
      config
    );
  </script>

</main>


<?php
include 'footer.php';
?>