<?php
include 'header.php';
$doh_id = $_GET['doh_id'];
$doh = $function->GetDOHInfo($doh_id);
?>

<body class="bg-light-gray">
    <?php
    $msg = Session::get("msg");
    if (isset($msg)) {
        echo '<div id="flash-message">' . $msg . '</div>';
        Session::set("msg", NULL);
    }
    ?>
    <div class="container-fluid">
        <div class="container mt-3">
            <?php
            if ($doh) {
                $id = $doh->doh_id;
                $fname = $doh->fname;
                $mname = $doh->mname;
                $lname = $doh->lname;
                $suffix = $doh->suffix;
                $sex = $doh->sex;
                $province = $doh->province;
                $region = $doh->region;
                $email = $doh->email;
                $username = $doh->username;
            ?>
                <div class="row">
                    <div>
                        <form method="post" action="navigate.php" class="mb-4">
                            <a href="doh.php?id=<?= $_SESSION['admin_id']; ?>" class="badge btn btn-primary rounded-3 fw-semibold">
                                <span>
                                    <i class="ti ti-arrow-left"></i>
                                </span>
                                <span class="hide-menu">Back</span>
                            </a> &nbsp;

                            <a class=" badge btn btn-primary rounded-3 fw-semibold" href="doh-edit.php?doh_id=<?= $doh_id; ?>"><i class="fa fa-edit"></i> Edit</a> &nbsp;

                            <input type="hidden" name="doh_id" value="<?= $doh_id; ?>">
                            <button class="badge btn btn-primary rounded-3 fw-semibold float-end" type="submit" name="btn-delete-doh"><i class="fa fa-trash"></i> Deactivate</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="fw-semibold"><?= $lname; ?>, <?= $fname; ?> <?= $mname; ?> <?= $suffix; ?></h3>
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
                                    <li class="list-group-item"><strong>Sex:</strong> <?= $sex; ?></li>
                                    <li class="list-group-item"><strong>Province:</strong> <?= $province; ?></li>
                                    <li class="list-group-item"><strong>Region:</strong> <?= $region; ?></li>
                                    <li class="list-group-item"><strong>Email:</strong> <?= $email; ?></li>

                                </ul>
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