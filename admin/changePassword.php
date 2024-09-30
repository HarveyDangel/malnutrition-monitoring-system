<?php
include 'header.php';
$admin_id = $_GET['id'];
$admin = $function->GetAdminInfo($admin_id);
?>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-10 col-lg-10 col-xxl-10">

                        <div class="card my-5">
                            <div class="card-body">
                                <?php
                                if ($admin) {
                                    $admin_id = $admin->admin_id;
                                    $email = $admin->email;
                                    $username = $admin->username;
                                ?>
                                    <div class="row mb-1">
                                        <div class="col-lg-1 col-md-1">
                                            <a href="rhu.php" class="btn btn-danger rounded-2"><i class="ti ti-arrow-left"></i>
                                            </a>
                                        </div>
                                        <div class="col-lg-11 col-md-11">
                                            <h3 class="fw-semibold mt-1">Change Password</h3>
                                        </div>
                                    </div>
                                    <?php
                                    $msg = Session::get("msg");
                                    if (isset($msg)) {
                                        echo '<div id="flash-message">' . $msg . '</div>';
                                        Session::set("msg", NULL);
                                    }
                                    ?>
                                    <form action="navigate.php?admin_id=<?= $admin_id; ?>" method="post">


                                        <br>
                                        <h5 class="fw-semibold">Account Information</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="email" class="form-label fw-normal">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" aria-describedby="textHelp" required value="<?= ($email) ? $email : ''; ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label fw-normal">New Password</label>
                                                <input type="password" name="password" class="form-control" id="password" aria-describedby="textHelp" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="rptpassword" class="form-label fw-normal">Confirm Password</label>
                                                <input type="password" name="rptpassword" class="form-control" id="rptpassword" aria-describedby="textHelp" required>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <div class="text-center p-2">
                                                <button type="submit" name="btn-edit-admin" class="btn btn-primary rounded-2 w-25">Save</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                <?php
                                }
                ?>

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