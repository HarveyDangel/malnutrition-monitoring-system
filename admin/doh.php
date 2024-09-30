<?php
include 'header.php';
?>

<body class="bg-light-gray">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h3 class="fw-semibold mb-4">DOH's</h3>
        <hr>
        <a href="doh-add.php?username=<?= $_SESSION['username']; ?>" aria-expanded="false">
          <button class="badge btn btn-primary rounded-1 fw-semibold p-2 mb-3">
            <span>
              <i class="ti ti-plus"></i>
            </span>
            <span class="hide-menu">Add</span>
          </button>
        </a>
        <?php
        $msg = Session::get("msg");
        if (isset($msg)) {
          echo '<div id="flash-message">' . $msg . '</div>';
          Session::set("msg", NULL);
        }
        ?>
        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="card w-100 mt-4">
            <div class="card-body">
              <div class="table-responsive">
                <table id="myTable" class="table text-nowrap mb-0 align-middle display">
                  <thead class="text-dark">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Id</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Fullname</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Email</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Province</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 0;
                    $dohs = $function->GetAllDOH();
                    if ($dohs) {
                      foreach ($dohs as $doh) :
                        $doh_id = $doh['doh_id'];
                        $fname = $doh['fname'];
                        $mname = $doh['mname'];
                        $lname = $doh['lname'];
                        $suffix = $doh['suffix'];
                        $sex = $doh['sex'];
                        $province = $doh['province'];
                        $region = $doh['region'];
                        $email = $doh['email'];
                        $username = $doh['username'];
                        $password = $doh['password'];
                        $i++;
                    ?>
                        <tr>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0"><?= $i; ?></h6>
                          </td>
                          <td class="border-bottom-0">
                            <span class="fw-normal"><?= $fname; ?> <?= $lname; ?></span>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal"><?= $email; ?></p>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal"><?= $province; ?></p>
                          </td>
                          <td class="border-bottom-0">

                            <form method="post" action="navigate.php">
                              <a href="doh-view.php?doh_id=<?= $doh_id; ?>" class="badge btn btn-primary rounded-3 fw-semibold">
                                <span>
                                  <i class="ti ti-eye"></i>
                                </span>
                                <span class="hide-menu">View</span>
                              </a> &nbsp;
                              <a class=" badge btn btn-primary rounded-3 fw-semibold" href="doh-edit.php?doh_id=<?= $doh_id; ?>">Edit</a> &nbsp;
                              <input type="hidden" name="doh_id" value="<?= $doh_id; ?>">
                              <button class="badge btn btn-danger rounded-3 fw-semibold" type="submit" name="btn-delete-doh">Delete</button>
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