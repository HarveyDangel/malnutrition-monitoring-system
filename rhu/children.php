<?php
include 'header.php';
$active = 2;
?>

<main class="">
	<div class="card">
		<div class="card-body mb-0 pb-0">
			<h5 class="card-title fw-semibold mb-4"><?= $_SESSION['municipality']; ?> Children List</h5>
			<div class="flex d-flex flex-row justify-content-between">
				<div class="flex d-flex flex-row">
					<div class="me-2">
						<a href="child-add?id=<?= $_SESSION['rhu_id']; ?>" aria-expanded="false">
							<button class="btn btn-primary rounded-2 fw-semibold p-2">
								<span>
									<i class="fa fa-plus"></i>
								</span>
								<span class="hide-menu">Add</span>
							</button>
						</a>
					</div>
					<div class="">
						<a href="children-upload-file" aria-expanded="false">
							<button class="btn btn-primary rounded-2 fw-semibold p-2">
								<span>
									<i class="fa fa-upload"></i>
								</span>
								<span class="hide-menu">Upload File</span>
							</button>
						</a>
					</div>
				</div>
			</div>
			<hr>
		</div>
		<div class="col-lg-12 d-flex align-items-stretch pt-0">
			<div class="card w-100">
				<div class="card-body">
					<?php
					$msg = Session::get("msg");
					if (isset($msg)) {
						echo '<div id="flash-message">' . $msg . '</div>';
						Session::set("msg", NULL);
					}
					?>
					<div class="table-responsive">
						<table id="myTable" class="table text-nowrap align-middle">
							<thead class="text-dark">
								<tr>
									<th class="border-bottom border-primary-subtle">
										<h6 class="fw-semibold mb-0">Child Seq.</h6>
									</th>
									<th class="border-bottom border-primary-subtle">
										<h6 class="fw-semibold mb-0">Purok</h6>
									</th>
									<th class="border-bottom border-primary-subtle">
										<h6 class="fw-semibold mb-0">Name Of Mother/Caregiver</h6>
									</th>
									<th class="border-bottom border-primary-subtle">
										<h6 class="fw-semibold mb-0">Name of Child</h6>
									</th>
									<th class="border-bottom border-primary-subtle">
										<h6 class="fw-semibold mb-0">Barangay</h6>
									</th>
									<th class="border-bottom border-primary-subtle">
										<h6 class="fw-semibold mb-0">Action</h6>
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 0;
								$children = $function->GetAllChildrenByMunicipality($_SESSION['municipality']);
								if ($children) {
									foreach ($children as $child) :
										$child_id = $child['child_id'];
										$purok = $child['purok'];
										$name_of_caregiver = $child['name_of_caregiver'];
										$name_of_child = $child['name_of_child'];
										$belong_to_ip = $child['belong_to_ip'];
										$sex = $child['sex'];
										$date_of_birth = $child['date_of_birth'];
										$date_last_measured = $child['date_last_measured'];
										$age_by_months = $child['age_by_months'];
										$barangay = $child['barangay'];
										$municipality = $child['municipality'];
										$province = $child['province'];
										$region = $child['region'];
										$year = $child['year'];
										$i++;
								?>
										<tr>
											<td class="border-bottom border-primary-subtle">
												<h6 class="fw-semibold mb-0"><?= $child_id; ?></h6>
											</td>
											<td class="border-bottom border-primary-subtle">
												<span class="fw-normal text-black"><?= $purok; ?></span>
											</td>
											<td class="border-bottom border-primary-subtle">
												<p class="mb-0 fw-normal text-black"><?= $name_of_caregiver; ?></p>
											</td>
											<td class="border-bottom border-primary-subtle">
												<p class="mb-0 fw-normal text-dark"><?= $name_of_child; ?></p>
											</td>
											<td class="border-bottom border-primary-subtle">
												<p class="mb-0 fw-normal text-dark"><?= $barangay; ?></p>
											</td>

											<td class="border-bottom border-primary-subtle">

												<form method="post" action="navigate.php">
													<a href="child-view.php?child_id=<?= $child_id; ?>" class="badge btn btn-primary rounded-3 fw-semibold">
														<span>
															<i class="fa fa-eye"></i>
														</span>
														<span class="hide-menu">View</span>
													</a> &nbsp;

													<a class=" badge btn btn-primary rounded-3 fw-semibold" href="child-edit.php?child_id=<?= $child_id; ?>"><i class="fa fa-edit"></i> Edit</a> &nbsp;

													<input type="hidden" name="child_id" value="<?= $child_id; ?>">
													<button class="badge btn btn-primary rounded-3 fw-semibold" type="submit" name="btn-delete-child"><i class="fa fa-trash "></i> Delete</button>
												</form>
											</td>
										</tr>
								<?php

									endforeach;
								}

								?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>




<?php
include 'footer.php';
?>