<?php
include 'header.php';
?>

<body class="bg-light-gray">
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title fw-semibold mb-4">Children Master List</h5>
				<hr>
				<div class="flex d-flex flex-row justify-content-between">
					<div class="">
						<form action="download-children-list.php" method="post">
							<button class="badge btn bg-primary rounded-1 fw-semibold p-2" name="btn-download-children-list">
								<span>
									<i class="ti ti-download"></i>
								</span>
								<span class="hide-menu">Download</span>
							</button>
						</form>
					</div>
				</div>
				<!-- </div> -->
				<!--End of Search bar and Add button-->
			</div>
			<?php
			$msg = Session::get("msg");
			if (isset($msg)) {
				echo $msg;
				Session::set("msg", NULL);
			}
			?>
			<div class="col-lg-12 d-flex align-items-stretch">
				<div class="card w-100">
					<div class="card-body">
						<div class="table-responsive">
							<table id="myTable" class="table text-nowrap mb-0 align-middle display">
								<thead class="text-dark">
									<tr>
										<th class="border-bottom-0">
											<h6 class="fw-semibold mb-0">Child Seq.</h6>
										</th>
										<th class="border-bottom-0">
											<h6 class="fw-semibold mb-0">Purok</h6>
										</th>
										<th class="border-bottom-0">
											<h6 class="fw-semibold mb-0">Name Of Mother/Caregiver</h6>
										</th>
										<th class="border-bottom-0">
											<h6 class="fw-semibold mb-0">Name of Child</h6>
										</th>
										<th class="border-bottom-0">
											<h6 class="fw-semibold mb-0">Belong to IP?</h6>
										</th>
										<th class="border-bottom-0">
											<h6 class="fw-semibold mb-0">Action</h6>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 0;
									$children = $function->GetAllChildren();
									if ($children) {
										foreach ($children as $child) :
											$child_id = $child['child_id'];
											$purok = $child['purok'];
											$name_of_caregiver = $child['name_of_caregiver'];
											$name_of_child = $child['nmae_of_child'];
											$belong_to_ip = $child['belong_to_ip'];
											$sex = $child['sex'];
											$date_of_birth = $child['date_of_birth'];
											$date_last_measured = $child['date_last_measured'];
											$age_in_months = $child['age_in_months'];
											$barangay = $child['barangay'];
											$municipality = $child['municipality'];
											$province = $child['province'];
											$region = $child['region'];
											$year = $child['year'];
											$longitude = $child['longitude'];
											$latitude = $child['latitude'];
											$i++;
									?>

											<tr>
												<td class="border-bottom-0">
													<h6 class="fw-semibold mb-0"><?= $i; ?></h6>
												</td>
												<td class="border-bottom-0">
													<span class="fw-normal"><?= $purok; ?></span>
												</td>
												<td class="border-bottom-0">
													<p class="mb-0 fw-normal"><?= $name_of_caregiver; ?></p>
												</td>
												<td class="border-bottom-0">
													<p class="mb-0 fw-normal"><?= $name_of_child; ?></p>
												</td>
												<td class="border-bottom-0">
													<p class="mb-0 fw-normal"><?= $belong_to_ip; ?></p>
												</td>

												<td class="border-bottom-0">

													<form method="post" action="navigate.php">
														<a href="beneficiary-view.php?beneficiary_id=<?= $beneficiary_id; ?>" class="badge btn bg-primary rounded-3 fw-semibold">
															<span>
																<i class="ti ti-eye"></i>
															</span>
															<span class="hide-menu">View</span>
														</a> &nbsp;

														<a class=" badge btn btn-primary rounded-3 fw-semibold" href="edit-beneficiary.php?beneficiary_id=<?= $beneficiary_id; ?>">Edit</a> &nbsp;

														<input type="hidden" name="beneficiary_id" value="<?= $beneficiary_id; ?>">
														<button class="badge btn btn-danger rounded-3 fw-semibold" type="submit" name="btn-delete-beneficiary">Delete</button>
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
	</div>
</body>




<?php
include 'footer.php';
?>