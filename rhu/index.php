<?php
include 'header.php';
$address = $function->GetAllBarangay();
$children = $function->GetAllChildrenByMunicipality($_SESSION['municipality']);
$population = count($children);
$barangay = $function->getBarangayByMunicipality($_SESSION['municipality']);
$numBarangay = $function->CountBarangayByMunicipal($_SESSION['municipality']);
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
    <div class="col-md-4">
      <div class="card overflow-hidden">
        <div class="card-body p-3">
        <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-building bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 22px;">
                  Municipality</h3>
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
    <div class="col-md-4">
      <div class="card overflow-hidden">
        <div class="card-body p-3">
        <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-home bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 22px;">
                  Barangay</h3>
              </div>
              <div>
                <h3 class="fw-normal"><?= $numBarangay; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Barangay card-->
    <div class="col-md-4">
      <!-- Population Card -->
      <div class="card overflow-hidden">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-3 ps-2 pt-3 align-items-center justify-content-center me-3">
              <i class="ti ti-users bg-primary text-white rounded-circle p-3" style="font-size: 40px;"></i>
            </div>
            <div class="col p-1 ms-2">
              <div>
                <h3 class="card-title fw-semibold " style="font-size: 22px;">
                  Population</h3>
              </div>
              <div>
                <h3 class="fw-normal"><?= $population; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Population  -->
  </container>


  <!-- Yearly total number of cases Chart-->
  <div class="card">
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
  </div>
  <!-- End Yearly total number of cases Chart -->

  <!-- Bar graph -->
  <div class="row">
    <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100 rounded-2 shadow">
        <div class="card-body rounded-2">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-2 mb-sm-0">
              <div>
                <select class="form-select card-title fw-semibold">

                  <option value="Caucab">Caucab</option>
                  <option value="Iyosan">Iyosan</option>
                  <option value="Jamorawon">Jamorawon</option>
                  <option value="Lo-ok">Lo-ok</option>
                  <option value="Matanga">Matanga</option>
                  <option value="Pili">Pili</option>
                  <option value="Poblacion">Poblacion</option>
                  <option value="Pulang Bato">Pulang Bato</option>
                  <option value="Salangi">Salangi</option>
                  <option value="Sampao">Sampao</option>
                  <option value="Tabunan">Tabunan</option>
                  <option value="Talahid">Talahid</option>
                  <option value="Tamarindo">Tamarindo</option>
                </select>
              </div>
            </div>
            <div>
              <select class="form-select">
                <option value="2024">2024</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
              </select>
            </div>
          </div>
          <div id="municipalChart"></div>
        </div>
      </div>
    </div>
    <!-- End Bar graph 
    <div class="col-lg-4">
      <div class="row">
        <div class="col-lg-12">
          <!-- Total Case Donut Chart 
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">Total Case</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="fw-semibold mb-3">1,448</h4>
                  <!--<div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                  <div class="align-items-center">

                    <div class="me-4">
                      <span class="round-8 rounded-circle me-2 d-inline-block" style="background-color:#9FC2A1"></span>
                      <span class="fs-2">Normal</span>
                    </div>

                    <div class="me-4">
                      <span class="round-8 rounded-circle me-2 d-inline-block" style="background-color:#5DFF6B"></span>
                      <span class="fs-2">Underweight</span>
                    </div>

                    <div class="me-4">
                      <span class="round-8 rounded-circle me-2 d-inline-block" style="background-color:#229C2D"></span>
                      <span class="fs-2">Severly Underweight</span>
                    </div>

                    <div class="me-4">
                      <span class="round-8 bg-cyan rounded-circle me-2 d-inline-block" style="background-color:#49F3FF"></span>
                      <span class="fs-2">Stunted</span>
                    </div>

                    <div class="me-4">
                      <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                      <span class="fs-2">Severely Stunted</span>
                    </div>
                  </div>
                  <div class="me-4">
                    <span class="round-8 rounded-circle me-2 d-inline-block" style="background-color:#ECE91D"></span>
                    <span class="fs-2">Wasted</span>
                  </div>
                  <div class="me-4">
                    <span class="round-8 rounded-circle me-2 d-inline-block" style="background-color:#DAA514"></span>
                    <span class="fs-2">Severely Wasted</span>
                  </div>
                  <div class="me-4">
                    <span class="round-8 rounded-circle me-2 d-inline-block" style="background-color:#C43434"></span>
                    <span class="fs-2">Overweight</span>
                  </div>
                  <div class="me-4">
                    <span class="round-8 rounded-circle me-2 d-inline-block" style="background-color:#CA34A1"></span>
                    <span class="fs-2">Obesity</span>
                  </div>
                </div>
                <div class="col-2">
                  <div class="d-flex justify-content-center">
                    <div id="breakup"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <!-- Monthly Earnings
        </div>
      </div>
    </div>
    <!-- Ranking per Municipal by the number of cases-->
  <!--<div class="col-lg-5 d-flex align-items-right">
      <div class="card w-100">
        <div class="card-body">
          <div>
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-8">
              <div class="mb-2 mb-sm-0">
                <h5 class="card-title fw-semibold">Ranking by Case</h5>
              </div>
              <div>
                <select class="form-select">
                  <option value="1">January 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">July 2023</option>
                  <option value="4">October 2023</option>
                  <option value="1">January 2024</option>
                </select>
              </div>
            </div>
            <ul class="timeline-widget mb-0 position-relative mb-n5">
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">1</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Caibiran</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">2</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Cabucgayan<a href="javascript:void(0)" class="text-primary d-block fw-normal"></a>
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">3</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Biliran</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">4</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Naval<a href="javascript:void(0)" class="text-primary d-block fw-normal"></a>
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">5</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Almeria</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- End Ranking per Municipal by the number of cases-->
</main>


<?php
include 'footer.php';
?>