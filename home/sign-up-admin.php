<?php
include_once '../session.php';
Session::init();
if (isset($_SESSION['username'])) {
    if ($_SESSION['role'] === 'admin') {
        header("Location: index.php?id=" . $_SESSION['admin_id']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Malnutrition Management System</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/PHO logo.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-sm-8 col-md-6 col-lg-4">
                        <div class="card my-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="text-center">
                                        <img src="../assets/images/logos/PHO logo.png" alt="Biliran PHO logo" width="100">
                                        <br>
                                        <h3 class="fw-semibold mt-1 text-center">Welcome to <br> BPHO-MMS-GSM</h3>
                                    </div>
                                </div>
                                <?php
                                $msg = Session::get("msg");
                                if (isset($msg)) {
                                    echo '<div id="flash-message">' . $msg . '</div>';
                                    Session::set("msg", NULL);
                                }
                                ?>
                                <hr>
                                <form action="navigate.php" method="post">
                                    <!-- <h5 class="fw-semibold">Personal Information</h5>
                                    <hr>
                                    <div class="row">
                                        <div class="mb-3 col-lg-4 col-md-4">
                                            <label for="fname" class="form-label">Firstname <span style="color:red">*</span></label>
                                            <input type="text" name="fname" id="fname" class="form-control" aria-describedby="textHelp" value="<?php echo isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : ''; ?>" required>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-md-4">
                                            <label for="mname" class="form-label">Middlename</label>
                                            <input type="text" name="mname" id="mname" class="form-control" aria-describedby="textHelp" value="<?php echo isset($_POST['mname']) ? htmlspecialchars($_POST['mname']) : ''; ?>">
                                        </div>
                                        <div class="mb-3 col-lg-4 col-md-4">
                                            <label for="lname" class="form-label">Lastname <span style="color:red">*</span></label>
                                            <input type="text" name="lname" id="lname" class="form-control" aria-describedby="textHelp" value="<?php echo isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : ''; ?>" required>
                                        </div>
                                        <div class="mb-3 col-lg-3 col-md-6">
                                            <label for="suffix" class="form-label">Suffix</label>
                                            <select class="form-select" name="suffix" aria-label="Default select example">
                                                <option value="" <?php echo isset($_POST['suffix']) && $_POST['suffix'] == '' ? 'selected' : ''; ?>>None</option>
                                                <option value="Sr." <?php echo isset($_POST['suffix']) && $_POST['suffix'] == 'Sr.' ? 'selected' : ''; ?>>Sr.</option>
                                                <option value="Jr." <?php echo isset($_POST['suffix']) && $_POST['suffix'] == 'Jr.' ? 'selected' : ''; ?>>Jr.</option>
                                                <option value="I." <?php echo isset($_POST['suffix']) && $_POST['suffix'] == 'I' ? 'selected' : ''; ?>>I</option>
                                                <option value="II" <?php echo isset($_POST['suffix']) && $_POST['suffix'] == 'II' ? 'selected' : ''; ?>>II</option>
                                                <option value="III" <?php echo isset($_POST['suffix']) && $_POST['suffix'] == 'III' ? 'selected' : ''; ?>>III</option>
                                                <option value="IV" <?php echo isset($_POST['suffix']) && $_POST['suffix'] == 'IV' ? 'selected' : ''; ?>>IV</option>
                                                <option value="V" <?php echo isset($_POST['suffix']) && $_POST['suffix'] == 'V' ? 'selected' : ''; ?>>V</option>
                                                <option value="VI" <?php echo isset($_POST['suffix']) && $_POST['suffix'] == 'VI' ? 'selected' : ''; ?>>VI</option>
                                                <option value="VII" <?php echo isset($_POST['suffix']) && $_POST['suffix'] == 'VII' ? 'selected' : ''; ?>>VII</option>
                                                <option value="VIII" <?php echo isset($_POST['suffix']) && $_POST['suffix'] == 'VIII' ? 'selected' : ''; ?>>VIII</option>
                                                <option value="IX" <?php echo isset($_POST['suffix']) && $_POST['suffix'] == 'IX' ? 'selected' : ''; ?>>IX</option>
                                                <option value="X" <?php echo isset($_POST['suffix']) && $_POST['suffix'] == 'X' ? 'selected' : ''; ?>>X</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-lg-3 col-md-4">
                                            <label for="sex" class="form-label">Sex <span style="color:red">*</span></label>
                                            <select class="form-select" name="sex" aria-label="Default select example" required>
                                                <option value="" selected disabled>Choose Sex</option>
                                                <option value="Male" <?php echo isset($_POST['sex']) && $_POST['sex'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                                                <option value="Female" <?php echo isset($_POST['sex']) && $_POST['sex'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-lg-3 col-md-4">
                                            <label class="form-label">Province <span style="color:red">*</span></label>
                                            <input type="text" name="province" class="form-control bg-light-primary" aria-describedby="textHelp" value="Biliran" required readonly>
                                        </div>
                                        <div class="mb-3 col-lg-3 col-md-4">
                                            <label class="form-label">Region <span style="color:red">*</span></label>
                                            <input type="text" name="region" class="form-control bg-light-primary" aria-describedby="textHelp" value="8" required readonly>
                                        </div>

                                    </div> -->
                                    <h5 class="fw-semibold">Account Information</h5>
                                    <hr>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <span style="color:red">*</span></label>
                                            <input type="email" name="email" class="form-control" id="email" aria-describedby="textHelp" placeholder="example@mail.com" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username <span style="color:red">*</span></label>
                                            <input type="text" name="username" class="form-control" id="username" aria-describedby="textHelp" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required>
                                        </div>
                                        <div class="mb-3 ">
                                            <label for="password" class="form-label">Password <span style="color:red">*</span></label>
                                            <input type="password" name="password" class="form-control password" id="myInput" aria-describedby="textHelp" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>" required>
                                        </div>
                                        <div class="mb-3 ">
                                            <label for="rptpassword" class="form-label">Confirm Password <span style="color:red">*</span></label>
                                            <input type="password" name="rptpassword" class="form-control password" id="rptpassword" aria-describedby="textHelp" value="<?php echo isset($_POST['rptpassword']) ? htmlspecialchars($_POST['rptpassword']) : ''; ?>" required>
                                        </div>
                                        <div class="mb-3 ">
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
                                        <div class="text-center flex d-flex flex-row justify-content-between mb-3">
                                            <div class="w-50 pe-2">
                                                <button type="submit" name="btn-sign-up" class="btn btn-primary w-100 py-8 fs-4 rounded-5">Sign Up</button>
                                            </div>
                                            <div class="w-50 ps-2">
                                                <a href="index" class="btn btn-outline-primary w-100 py-8 fs-4 rounded-5">Cancel</a>
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
    <script src="../assets/js/main.js"></script>
</body>

</html>