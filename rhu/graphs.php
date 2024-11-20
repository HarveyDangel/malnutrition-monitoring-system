<?php
include 'header.php';
$children = $function->GetAllChildrenByMunicipality($_SESSION['municipality']);
$barangay = $function->getBarangayByMunicipality($_SESSION['municipality']);
?>

<body class="bg-light-gray">
  <!-- Bar graph -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="..\assets\libs\apexcharts\dist\apexcharts.min.js"></script>
  
  <div class="d-flex align-items-strech col-lg-6">
  <div class="card w-100 rounded-2 shadow">
    <div class="card-body rounded-2">
      <div class="d-sm-flex d-block align-items-center">
        <div class="">
          <h3 class="fw-semibold">Malnutrition Comparison</h3>
        </div>
      </div>
      <hr>
      <div>
        <label for="filter">Filter by:</label>
        <select id="filter" name="filter" onchange="updateChart()">
          <option value="WFA">Weight for Age</option>
          <option value="HFA">Height for Age</option>
          <option value="WFH">Weight for Length/Height</option>
        </select>
      </div>
      <div id="malnuBreakup" style="max-width:max-content; min-width: 400px;"></div>
    </div>
  </div>
</div>
<script>
  const filter = document.getElementById('filter');

  const dataMap = {
    WFA: {
      labels: ["Underweight", "Severely Underweight"],
      data: [
        <?= $function->CountChildByNutriStatusByMunicipality("nutritional_status_WFA", "Underweight", $_SESSION['municipality']); ?>,
        <?= $function->CountChildByNutriStatusByMunicipality("nutritional_status_WFA", "Severely Underweight", $_SESSION['municipality']); ?>
      ]
    },
    HFA: {
      labels: ["Stunted", "Severely Stunted"],
      data: [
        <?= $function->CountChildByNutriStatusByMunicipality("nutritional_status_HFA", "Stunted", $_SESSION['municipality']); ?>,
        <?= $function->CountChildByNutriStatusByMunicipality("nutritional_status_HFA", "Severely Stunted", $_SESSION['municipality']); ?>
      ]
    },
    WFH: {
      labels: ["Wasted", "Severely Wasted"],
      data: [
        <?= $function->CountChildByNutriStatusByMunicipality("nutritional_status_WFH", "Wasted", $_SESSION['municipality']); ?>,
        <?= $function->CountChildByNutriStatusByMunicipality("nutritional_status_WFH", "Severely Wasted", $_SESSION['municipality']); ?>
      ]
    }
  };

  function updateChart() {
    const selectedFilter = filter.value;
    const data = dataMap[selectedFilter].data;
    const labels = dataMap[selectedFilter].labels;

    chart.data.labels = labels;
    chart.data.datasets[0].data = data;
    chart.update();
  }

  const ctx = document.getElementById('malnuBreakup').getContext('2d');
  const chart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: dataMap.WFA.labels,
      datasets: [{
        label: 'Malnutrition Count',
        data: dataMap.WFA.data,
        backgroundColor: [
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(255, 99, 132, 0.2)',
        ],
        borderColor: [
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 99, 132, 1)',
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'top',
        },
        title: {
          display: true,
          text: 'Malnutrition Comparison'
        }
      }
    }
  });

  window.onload = updateChart;
</script>

<?php
include 'footer.php';
?>