<?php
include 'header.php';
$pho_id = $_GET['pho_id'];
$pho = $function->GetPHOInfo($pho_id);
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
                                if ($pho) {
                                    $pho_id = $pho->pho_id;
                                    $fname = $pho->fname;
                                    $mname = $pho->mname;
                                    $lname = $pho->lname;
                                    $suffix = $pho->suffix;
                                    $birthdate = $pho->birthdate;
                                    $sex = $pho->sex;
                                    $province = $pho->province;
                                    $municipality = $pho->municipality;
                                    $email = $pho->email;
                                    $username = $pho->username;
                                ?>
                                    <div class="row mb-1">
                                        <div class="col-lg-1 col-md-1">
                                            <a href="rhu.php" class="btn btn-primary rounded-2"><i class="ti ti-arrow-left"></i>
                                            </a>
                                        </div>
                                        <div class="col-lg-11 col-md-11">
                                            <h3 class="fw-semibold mt-1">Edit PHO Account</h3>
                                        </div>
                                    </div>
                                    <?php
                                    $msg = Session::get("msg");
                                    if (isset($msg)) {
                                        echo '<div id="flash-message">' . $msg . '</div>';
                                        Session::set("msg", NULL);
                                    }
                                    ?>
                                    <form action="navigate.php?pho_id=<?= $pho_id; ?>" method="post">
                                        <hr>
                                        <h5 class="fw-semibold bg-dark-light p-1 rounded-2 text-white">Personal Information</h5>

                                        <div class="row">
                                            <div class="mb-3 col-4">
                                                <label for="fname" class="form-label">Firstname <span style="color:red">*</span></label>
                                                <input type="text" name="fname" id="fname" class="form-control" aria-describedby="textHelp" required value="<?= ($fname) ? $fname : ''; ?>">
                                            </div>
                                            <div class="mb-3 col-4">
                                                <label for="mname" class="form-label">Middlename</label>
                                                <input type="text" name="mname" id="mname" class="form-control" aria-describedby="textHelp" value="<?= ($mname) ? $mname : ''; ?>">
                                            </div>
                                            <div class="mb-3 col-4">
                                                <label for="lname" class="form-label">Lastname <span style="color:red">*</span></label>
                                                <input type="text" name="lname" id="lname" class="form-control" aria-describedby="textHelp" required value="<?= ($lname) ? $lname : ''; ?>">
                                            </div>
                                            <div class="mb-3 col-4">
                                                <label for="suffix" class="form-label">Suffix</label>
                                                <input type="text" name="suffix" id="suffix" class="form-control" aria-describedby="textHelp" value="<?= ($suffix) ? $suffix : ''; ?>">
                                            </div>
                                            <div class="mb-3 col-4">
                                                <label for="birthdate" class="form-label">Birthdate <span style="color:red">*</span></label>
                                                <input type="date" name="birthdate" class="form-control" id="birthdate" aria-describedby="textHelp" required value="<?= ($birthdate) ? $birthdate : ''; ?>">
                                            </div>
                                            <div class="mb-3 col-lg-4 col-md-4">
                                                <label for="sex" class="form-label">Sex <span style="color:red">*</span></label>
                                                <select class="form-select" name="sex" aria-label="Default select example" required>
                                                    <option value="<?= ($sex) ? $sex : ''; ?>"><?= ($sex) ? $sex : ''; ?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <hr>
                                        <h5 class="fw-semibold bg-dark-light p-1 rounded-2 text-white">Address</h5>

                                        <div class="row">
                                            <div class="mb-3 col-6">
                                                <label for="province" class="form-label">Province <span style="color:red">*</span></label>
                                                <input type="text" name="province" class="form-control bg-light-primary" placeholder="Biliran" value="Biliran" readonly>
                                            </div>

                                            <div class="mb-3 col-6">
                                                <label for="municipality" class="form-label">Municipality <span style="color:red">*</span></label>
                                                <select class="form-select" name="municipality" aria-label="Default select example" required>
                                                    <option value="<?= ($municipality) ? $municipality : ''; ?>"><?= ($municipality) ? $municipality : ''; ?></option>
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
                                        </div>

                                        <hr>
                                        <h5 class="fw-semibold bg-dark-light p-1 rounded-2 text-white">Account Information</h5>

                                        <div class="row">
                                            <div class="mb-3 col-lg-6 col-md-6">
                                                <label for="email" class="form-label">Email <span style="color:red">*</span></label>
                                                <input type="email" name="email" class="form-control" id="email" aria-describedby="textHelp" required value="<?= ($email) ? $email : ''; ?>">
                                            </div>
                                            <div class="mb-3 col-lg-6 col-md-6">
                                                <label for="username" class="form-label">Username <span style="color:red">*</span></label>
                                                <input type="text" name="username" class="form-control" id="username" aria-describedby="textHelp" required value="<?= ($username) ? $username : ''; ?>">
                                            </div>
                                            <div class="mb-3 col-lg-6 col-md-6">
                                                <label for="password" class="form-label">Password <span style="color:red">*</span></label>
                                                <input type="password" name="password" class="form-control password" id="myInput" aria-describedby="textHelp" required>
                                            </div>
                                            <div class="mb-3 col-lg-6 col-md-6">
                                                <label for="rptpassword" class="form-label">Confirm Password <span style="color:red">*</span></label>
                                                <input type="password" name="rptpassword" class="form-control password" id="rptpassword" aria-describedby="textHelp" required>
                                            </div>
                                            <div class="mb-3 col-lg-6 col-md-6">
                                                <input type="checkbox" id="showPassword" onclick="togglePassword()"> Show Password
                                            </div>

                                            <script>
                                                function togglePassword() {
                                                    var x = document.getElementById("myInput");
                                                    var y = document.getElementById("rptpassword");
                                                    if (x.type === "password") {
                                                        x.type = "text";
                                                        y.type = "text";
                                                    } else {
                                                        x.type = "password";
                                                        y.type = "password";
                                                    }
                                                }
                                            </script>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="text-center p-2">
                                                <button type="submit" name="btn-edit-pho" class="btn btn-primary rounded-2 w-25">Save</button>
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