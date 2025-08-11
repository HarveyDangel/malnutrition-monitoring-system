<?php
include 'header.php';
?>

<body class="bg-light-gray">
  <?php
  $msg = Session::get("msg");
  if (isset($msg)) {
    echo '<div id="flash-message">' . $msg . '</div>';
    Session::set("msg", NULL);
  }
  ?>
  <!--  Row 1 -->
  <container class="row mt-3">
    <div class="col-lg-3 col-md-6">
      <!-- Municipality Card -->
      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-building-community bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 22px;">
                  Region</h3>
              </div>
              <div>
                <h3 class="fw-normal"><?= $_SESSION['region']; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Municipality Card -->

    <div class="col-lg-3 col-md-6">
      <!-- Barangay Card -->
      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-home bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 22px;">
                  Province</h3>
              </div>
              <div>
                <h3 class="fw-normal"><?= $_SESSION['province']; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Barangay card-->

    <div class="col-lg-3 col-md-6">
      <!-- Estimated Population Card -->
      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-users bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 22px;">
                  Barangays</h3>
              </div>
              <div>
                <h3 class="fw-normal"><?= $function->GetNumOfBarangay(); ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Barangay card-->

    <div class="col-lg-3 col-md-6">
      <!--Staff card-->
      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-user bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 22px;">
                  Recorded Data</h3>
              </div>
              <div>
                <h3 class="fw-normal"><?= $function->totalChildCount();?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Staff card -->
  </container>
  <!-- End of Row 1 -->
  <div class="row">
    <div class="d-flex align-items-strech col-md-6">
      <div class="card w-100 rounded-2 shadow">
        <div class="card-body rounded-2">
          <div class="d-sm-flex d-block align-items-center">
            <div class="">
              <h3 class="fw-semibold">Malnutrition Comparison</h3>
            </div>
          </div>
          <hr>
          <div id="malnuBreakup"></div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="d-flex align-items-strech col-md-6">
      <div class="card w-100 rounded-2 shadow">
        <div class="card-body rounded-2">
          <div>
            <h3 class="fw-semibold">Ranking</h3>
          </div>
          <hr>
          <canvas id="rankingChart" min-width="400" height="200"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- Row 2 -->

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script>
        var breakup = {
            //series: [6, 20, 25, 10, 10, 10], // Replace with your actual data
            series: [<?= $function->CountChildByNutriStatus("nutritional_status_WFA","Underweight");?>,
            <?= $function->CountChildByNutriStatus("nutritional_status_WFA","Severely Underweight");?>,
            <?= $function->CountChildByNutriStatus("nutritional_status_HFA","Stunted");?>,
            <?= $function->CountChildByNutriStatus("nutritional_status_HFA","Severely Stunted");?>,
            <?= $function->CountChildByNutriStatus("nutritional_status_WFH","Wasted");?>,
            <?= $function->CountChildByNutriStatus("nutritional_status_WFH","Severely Wasted");?>], // Replace with your actual data
            labels: ["Underweight", "Severely Underweight", "Stunted", "Severely Stunted", "Wasted", "Severely Wasted"],
            chart: {
                width: 400,
                type: 'donut',
                fontFamily: "'Plus Jakarta Sans', sans-serif",
                foreColor: "#1a1a00"
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
            responsive: [
                {
                    breakpoint: 100,
                    options: {
                        chart: {
                            width: 150,
                        },
                    },
                },
            ],
            tooltip: {
                theme: "dark",
                fillSeriesColor: true,
            },
        };

        var chart = new ApexCharts(document.querySelector("#malnuBreakup"), breakup);
        chart.render();
    </script> 
  <!-- <div class="row">
   <div class="col-lg-8 d-flex align-items-strech">
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    // Fetch barangay data from PHP
    const municipalCountData = <?= json_encode($function->RankChildCountByMunicipality()); ?>; // Fetch data
    console.log(municipalCountData);

    // Extract barangay names from the data structure
    const rankings = municipalCountData.map(item => item.child_count);
    const municipals = municipalCountData.map(b => b.municipality); // Access the 'barangay' property
    // console.log(municipals); // Debugging: Check the extracted barangay names

    const data = {
      labels: municipals, // Use barangay names as labels
      datasets: [{
        label: 'Rankings',
        data: rankings, // Ranking values corresponding to barangays
        backgroundColor: '#339966', // Bar color
        borderColor: '#339966',
        borderWidth: 1,
        borderRadius: 10 // Soften the edges with rounded corners
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
            ticks: {
              // Add "%" suffix to each tick label
              callback: function(value) {
                return value;
              }
            }
          }
        },
        plugins: {
          tooltip: {
            callbacks: {
              label: function(tooltipItem) {
                return tooltipItem.raw; // Adds "%" to tooltip values
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
  </div>
</body>


<?php
include 'footer.php';
?>