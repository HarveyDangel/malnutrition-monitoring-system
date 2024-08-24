<?php
include 'header.php';
$rhu_id = $_GET['rhu_id'];
$rhu = $function->GetRHUInfo($rhu_id);
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
                            if ($rhu) {
                                $rhu_id = $rhu->rhu_id;
                                $fname = $rhu->fname;
                                $mname = $rhu->mname;
                                $lname = $rhu->lname;
                                $suffix = $rhu->suffix;
                                $birthdate = $rhu->birthdate;
                                $sex = $rhu->sex;
                                $province = $rhu->province;
                                $municipality = $rhu->municipality;
                                $email = $rhu->email;
                                $username = $rhu->username;
                            ?>
                                <h3 class="fw-semibold"><?= $fname;?> <?= $mname;?> <?= $lname;?> <?= $suffix;?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body m-3">
                            <h5 class="card-title">Information</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>First Name:</strong> <?= $fname; ?></li>
                                <li class="list-group-item"><strong>Middle Name:</strong> <?= $mname; ?></li>
                                <li class="list-group-item"><strong>Last Name:</strong> <?= $lname; ?></li>
                                <li class="list-group-item"><strong>Suffix:</strong> <?= $suffix; ?></li>
                                <li class="list-group-item"><strong>Birhtdate:</strong> <?= $birthdate; ?></li>
                                <li class="list-group-item"><strong>Sex:</strong> <?= $sex; ?></li>
                                <li class="list-group-item"><strong>Province:</strong> <?= $province; ?></li>
                                <li class="list-group-item"><strong>Municipality:</strong> <?= $municipality; ?></li>
                                <li class="list-group-item"><strong>Username:</strong> <?= $username; ?></li>
                                <li class="list-group-item"><strong>Email:</strong> <?= $email; ?></li>

                            </ul>
                            <div>
                                <form method="post" action="navigate.php" class="p-4">
                                    <a href="rhu.php" class="badge btn bg-primary rounded-3 fw-semibold">
                                        <span>
                                            <i class="ti ti-arrow-left"></i>
                                        </span>
                                        <span class="hide-menu">Back</span>
                                    </a> &nbsp;

                                    <a class=" badge btn btn-primary rounded-3 fw-semibold" href="rhu-edit.php?rhu_id=<?= $rhu_id; ?>">Edit</a> &nbsp;

                                    <input type="hidden" name="rhu_id" value="<?= $rhu_id; ?>">
                                    <button class="badge btn btn-danger rounded-3 fw-semibold float-end" type="submit" name="btn-delete-rhu">Delete</button>
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