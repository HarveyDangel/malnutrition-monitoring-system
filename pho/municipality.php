<?php
include 'header.php';
?>

<main class="">
<?php
    $msg = Session::get("msg");
    if (isset($msg)) {
        echo '<div id="flash-message">' . $msg . '</div>';
        Session::set("msg", NULL);
    }
    ?>
    <div class="card">
        <div class="card-body">
            <h2 class="card-title fw-semibold">Municipalities</h2>
            <div class="flex d-flex flex-row justify-content-between">
				<div class="flex d-flex flex-row">
					<div class="me-2">
						<a href="municipality-add.php?id=<?=$_SESSION['pho_id'];?>" aria-expanded="false">
							<button class="badge btn btn-primary rounded-1 fw-semibold p-2">
								<span>
									<i class="ti ti-plus"></i>
								</span>
								<span class="hide-menu">Add</span>
							</button>
						</a>
					</div>
                    <div class="">
						<a href="municipality-import.php" aria-expanded="false">
							<button class="badge btn btn-primary rounded-1 fw-semibold p-2">
								<span>
									<i class="ti ti-upload"></i>
								</span>
								<span class="hide-menu">Upload File</span>
							</button>
						</a>
					</div>
                </div>
            </div>    
            <hr>
            <?php
            $municipality = $function->GetAllMunicipality();
            if ($municipality){
                foreach($municipality as $municipal):
                    $mun = $municipal['municipality'];
            ?>
            <div class="card">
                <div class="card-body">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><h2 class="card-title"><?= $mun;?>
                    <i class="ti ti-chevron-down"></i></h2>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <hr>
                        <table id="myTable" class="table text-nowrap align-middle">
                            <thead class="text-dark">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">PSGC</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Barangay</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Population</h6>
                                    </th>
                                    <!-- <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"></h6>
                                    </th> -->
                                    <!-- <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"></h6>
                                    </th> -->
                                    <!-- <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Action</h6>
                                    </th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                $address = $function->GetAllBarangay();
                                
                                if ($address){
                                    foreach ($address as $addr) :
                                        $muni = $addr['municipality'];
                                        if ($mun === $muni){
                                        $brgy = $addr['barangay'];
                                        $estmPopnOfChildren = $addr['est_popn_of_children'];
                                        $psgc = $addr['brgy_psgc'];      
                                ?>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0"><?= $psgc; ?></h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <span class="fw-normal"><?= $brgy; ?></span>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal"><?= $estmPopnOfChildren; ?></p>
                                            </td>
                                            <!-- <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">Coverage</p>
                                            </td> -->
                                            <!-- <td class="border-bottom-0">
            
                                                <form method="post" action="navigate.php">
                                                    <a href="child-view.php?child_id=<?= $child_id; ?>" class="badge btn btn-primary rounded-3 fw-semibold">
                                                        <span>
                                                            <i class="ti ti-eye"></i>
                                                        </span>
                                                        <span class="hide-menu">View</span>
                                                    </a> &nbsp;
            
                                                    <a class=" badge btn btn-primary rounded-3 fw-semibold" href="child-edit.php?child_id=<?= $child_id; ?>">Edit</a> &nbsp;
            
                                                    <input type="hidden" name="child_id" value="<?= $child_id; ?>">
                                                    <button class="badge btn btn-danger rounded-3 fw-semibold" type="submit" name="btn-delete-child">Delete</button>
                                                </form>
                                            </td> -->
                                        </tr>
                                <?php
                                        }
            
                                    endforeach;
                                }
            
                                ?>
            
                            </tbody>
                        </table>
                    </div>
        
                </div>
            </div>
            <?php

            endforeach;
        }
        ?>
        </div>
    </div>
</main>




<?php
include 'footer.php';
?>