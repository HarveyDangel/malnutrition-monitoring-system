<?php
include 'header.php';
?>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex justify-content-center">
      <div class="d-flex align-items-cente justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-11 col-lg-11 col-xxl-11">
            <div class="card my-5">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-1 col-md-1">
                    <a href="children.php" class="btn btn-danger rounded-2"><i class="ti ti-arrow-left"></i>
                    </a>
                  </div>
                  <div class="col-lg-11 col-md-11">
                    <h3 class="fw-semibold mt-1">Upload File</h3>
                  </div>
                </div>
                <hr>
                <?php
                  $msg = Session::get("msg");
                  if(isset($msg)){
                    echo $msg;
                    Session::set("msg", NULL);
                  }
                ?> 
                <form action="include/children-upload-csv.inc.php" method="post" enctype="multipart/form-data">
                  <h5 class="fw-semibold">Supported File <span class="fw-normal">(.csv, .xlsx)</span></h5>
                  <hr>
                  <div class="row">
                    <div class="mb-3">
                      <input type="file" class="form-control" name="file" aria-describedby="textHelp" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="text-center p-2">
                      <button type="submit" name="btn-upload-children-file" class="btn btn-primary rounded-2 w-25">
                      Save</button>
                    </div>
                  </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php
include 'footer.php';
?>