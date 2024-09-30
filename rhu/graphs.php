<?php
include 'header.php';
?>

<body class="bg-light-gray">
  <!-- Bar graph -->
  <div class="row">
    <div class="d-flex align-items-strech col-md-6">
      <div class="card w-100 rounded-2 shadow">
        <div class="card-body rounded-2">
          <div class="d-sm-flex d-block align-items-center">
            <div class="">
              <h3 class="fw-semibold">WFA</h3>
            </div>
            <!-- <div class="mb-2 mb-sm-0">
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
            </div> -->
            <!-- <div>
              <select class="form-select">
                <option value="1">January 2023</option>
                <option value="2">April 2023</option>
                <option value="3">July 2023</option>
                <option value="4">October 2023</option>
                <option value="1">January 2024</option>
              </select>
            </div> -->
          </div>
          <hr>
          <div id="breakup"></div>
        </div>
      </div>
    </div>
    <div class="d-flex align-items-strech col-md-6">
      <div class="card w-100 rounded-2 shadow">
        <div class="card-body rounded-2">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-2 mb-sm-0">
              <h3 class="fw-semibold">WFA</h3>
            </div>
            <!-- <div class="mb-2 mb-sm-0">
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
          </div> -->
            <!-- <div>
            <select class="form-select">
              <option value="1">January 2023</option>
              <option value="2">April 2023</option>
              <option value="3">July 2023</option>
              <option value="4">October 2023</option>
              <option value="1">January 2024</option>
            </select>
          </div> -->
          </div>
          <hr>
          <div id="municipalChart"></div>
        </div>
      </div>
    </div>
  </div>
    
      <!-- Ranking per Municipal by the number of cases-->
      <!-- <div class="col-lg-5 d-flex align-items-right">
      <div class="card w-100">
        <div class="card-body">
          <div>
          <h5 class="card-title fw-semibold">Ranking</h5>
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-8">
              <div class="mb-2 mb-sm-0">
              <div>
                <select class="form-select fw-normal">
                  <option value="UW">Underweight</option>
                  <option value="St">Stunted</option>
                  <option value="MW">Wasted</option>
                  <option value="SUW">Severely Underweight</option>
                  <option value="SSt">Severely Stunted</option>
                  <option value="SW">Severely Wasted</option>
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
            <ul class="timeline-widget mb-0 position-relative mb-n5">
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">1</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Barangay 6</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">2</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Barangay 1<a href="javascript:void(0)" class="text-primary d-block fw-normal"></a>
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">3</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Barangay 10</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">4</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Barangay 3<a href="javascript:void(0)" class="text-primary d-block fw-normal"></a>
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">5</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Barangay 8</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->
    <!-- End Ranking per Municipal by the number of cases-->
</body>


<?php
include 'footer.php';
?>