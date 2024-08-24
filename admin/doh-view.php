<?php
include 'header.php';
$doh_id = $_GET['doh_id'];
$doh = $function->GetDOHInfo($doh_id);
?>

<body class="bg-light-gray">
    <?php
    $msg = Session::get("msg");
    if (isset($msg)) {
        echo $msg;
        Session::set("msg", NULL);
    }
    ?>
    <div class="container-fluid">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="../assets/images/profile/user-1.jpg" class="card-img-top" alt="Profile Picture">
                        <div class="card-body">
                            <?php
                            if ($doh) {
                                $id = $doh->doh_id;
                                $fname = $doh->doh_fname;
                                $lname = $doh->doh_lname;
                                $email = $doh->doh_email;
                                $username = $doh->doh_username;
                            ?>
                                <h3 class="fw-semibold"><?= $fname; ?> <?= $lname; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body m-3">
                            <h5 class="card-title">Information</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>First Name:</strong> <?= $fname; ?></li>
                                <li class="list-group-item"><strong>Last Name:</strong> <?= $lname; ?></li>
                                <li class="list-group-item"><strong>Username:</strong> <?= $username; ?></li>
                                <li class="list-group-item"><strong>Email:</strong> <?= $email; ?></li>

                            </ul>
                            <div>
                                <form method="post" action="navigate.php" class="p-4">
                                    <a href="doh.php?username=<?= $_SESSION['username'];?>" class="badge btn bg-primary rounded-3 fw-semibold">
                                        <span>
                                            <i class="ti ti-arrow-left"></i>
                                        </span>
                                        <span class="hide-menu">Back</span>
                                    </a> &nbsp;

                                    <a class=" badge btn btn-primary rounded-3 fw-semibold" href="doh-edit.php?doh_id=<?= $doh_id; ?>">Edit</a> &nbsp;

                                    <input type="hidden" name="doh_id" value="<?= $doh_id; ?>">
                                    <button class="badge btn btn-danger rounded-3 fw-semibold float-end" type="submit" name="btn-delete-doh">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                            }
            ?>
            </div>
        </div>
    </div>
</body>


<?php
include 'footer.php';
?>