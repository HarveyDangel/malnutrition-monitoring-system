<?php
include 'header.php';
?>

<main>
  
            <div class="card">
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
                  <div class="row">
                    <div class="mb-2">
                      <label class="form-label">Year</label>
                      <input type="number" class="form-control" name="year" aria-describedby="textHelp" required>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="mb-3 col-lg-4 col-md-6">
                      <label  class="form-label">Region</label>
                      <input type="number" class="form-control" name="region" aria-describedby="textHelp" value="8" readonly>
                    </div>
                    <div class="mb-3 col-lg-4 col-md-6">
                      <label  class="form-label">Province</label>
                      <input type="text" class="form-control" name="province" aria-describedby="textHelp" value="Biliran" readonly>
                    </div>
                    <div class="mb-3 col-lg-4 col-md-6">
                      <label  class="form-label">Municipality</label>
                      <select class="form-select" aria-label="Default select example" name="municipality" required>
                        <option value="Almeria">Almeria</option>
                        <option value="Biliran">Biliran</option>
                        <option value="Cabucgayan">Cabucgayan</option>
                        <option value="Caibiran">Caibiran</option>
                        <option value="Culaba">Culaba</option>
                        <option value="Kawayan">Kawayan</option>
                        <option value="Maripipi">Maripipi</option>
                        <option value="Naval">Naval</option>
                      </select>
                    </div>
                    <div class="mb-3 col-lg-6 col-md-6">
                      <label  class="form-label">Barangay</label>
                      <input type="text" class="form-control" name="barangay" aria-describedby="textHelp" required>
                    </div>
                    <div class="mb-3 col-lg-6 col-md-6">
                      <label  class="form-label">Barangay PSGC</label>
                      <input type="number" class="form-control" name="psgc" aria-describedby="textHelp" required>
                    </div>
                    
                  </div>
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
          

</main>

<?php
include 'footer.php';
?>