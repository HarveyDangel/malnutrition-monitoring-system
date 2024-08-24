<?php
include 'header.php';
?>

<body class="bg-light-gray">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h3 class="fw-semibold mb-4">PHO's</h3>
        <hr>
        <a href="pho-add.php" aria-expanded="false">
          <button class="badge btn bg-primary rounded-1 fw-semibold p-2 mb-3">
            <span>
              <i class="ti ti-plus"></i>
            </span>
            <span class="hide-menu">Add</span>
          </button>
        </a>
  
  
        <?php
        $msg = Session::get("msg");
        if (isset($msg)) {
          echo $msg;
          Session::set("msg", NULL);
        }
        ?>
        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="card w-100 mt-4">
            <div class="card-body">
              <div class="table-responsive">
                <table id="myTable" class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Id</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Fullname</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Address</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Birthdate</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Email</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 0;
                    $phos = $function->GetAllPHO();
                    if ($phos) {
                      foreach ($phos as $pho) :
                        $pho_id = $pho['pho_id'];
                        $fname = $pho['fname'];
                        $mname = $pho['mname'];
                        $lname = $pho['lname'];
                        $suffix = $pho['suffix'];
                        $birthdate = $pho['birthdate'];
                        $province = $pho['province'];
                        $municipality = $pho['municipality'];
                        $email = $pho['email'];
                        $i++;
                    ?>
                        <tr>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0"><?= $i; ?></h6>
                          </td>
                          <td class="border-bottom-0">
                            <span class="fw-normal"> <?= $lname; ?>, <?= $fname; ?> <?= $suffix; ?></span>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal"><?= $municipality; ?>, <?= $province; ?></p>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal"><?= $birthdate; ?></p>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal"><?= $email; ?></p>
                          </td>
                          <td class="border-bottom-0">
  
                            <form method="post" action="navigate.php">
                              <a href="pho-view.php?pho_id=<?= $pho_id; ?>" class="badge btn bg-primary rounded-3 fw-semibold">
                                <span>
                                  <i class="ti ti-eye"></i>
                                </span>
                                <span class="hide-menu">View</span>
                              </a> &nbsp;
                              <a class=" badge btn btn-primary rounded-3 fw-semibold" href="pho-edit.php?pho_id=<?= $pho_id; ?>">Edit</a> &nbsp;
                              <input type="hidden" name="pho_id" value="<?= $pho_id; ?>">
                              <button class="badge btn btn-danger rounded-3 fw-semibold" type="submit" name="btn-delete-pho">Delete</button>
                            </form>
                          </td>
                        </tr>
  
                    <?php
  
                      endforeach;
                    }
  
                    ?>
                  </tbody>
                </table>
                <script>
                  $(document).ready
                </script>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>



<?php
include 'footer.php';
?>