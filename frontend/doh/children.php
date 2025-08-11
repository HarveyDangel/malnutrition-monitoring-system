<?php
include 'header.php';
?>

<main class="">
	<div class="card">
		<div class="card-body mb-0 pb-0">
			<h5 class="card-title fw-semibold mb-4">Children Master List</h5>

			<hr>
		</div>
		<?php
		$msg = Session::get("msg");
		if (isset($msg)) {
			echo '<div id="flash-message">' . $msg . '</div>';
			Session::set("msg", NULL);
		}
		?>
		<div class="col-lg-12 d-flex align-items-stretch pt-0">
			<div class="w-100">
				<div class="card-body">
					<div class="table-responsive">
						<table id="myTable" class="table text-nowrap align-middle">
							<thead class="text-dark">
								<tr>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Child Seq.</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Purok</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Name Of Mother<br>/Caregiver</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Name of Child</h6>
									</th>
									<!-- <th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Belong to<br>Indigeous People</h6>
									</th> -->
									<!-- <th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Sex</h6>
									</th> -->
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Date of Birth</h6>
									</th>
									<!-- <th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Date Measured</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Age in Months</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Height</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Weight</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Weight for Age</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Height for Age</h6>
									</th>
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Weight for Length/Height</h6>
									</th> -->
									<th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Address</h6>
									</th>
									<!-- <th class="border-bottom-0">
										<h6 class="fw-semibold mb-0">Municipality</h6>
									</th> -->
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
										$name_of_child = $child['name_of_child'];
										$belong_to_ip = $child['belong_to_ip'];
										$sex = $child['sex'];
										$date_of_birth = $child['date_of_birth'];
										$date_last_measured = $child['date_last_measured'];
										$age_by_months = $child['age_by_months'];
										$weight = $child['weight'];
										$height = $child['height'];
										$wfa = $child['nutritional_status_WFA'];
										$hfa = $child['nutritional_status_HFA'];
										$wfh = $child['nutritional_status_WFH'];
										$barangay = $child['barangay'];
										$municipality = $child['municipality'];
										$province = $child['province'];
										$region = $child['region'];
										$year = $child['year'];
										$i++;
								?>
										<tr>
											<td class="border-bottom-0">
												<h6 class="fw-semibold mb-0"><?= $child_id; ?></h6>
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
											<!-- <td class="border-bottom-0">
												<p class="mb-0 fw-normal"><?= $belong_to_ip; ?></p>
											</td> -->
											<!-- <td class="border-bottom-0">
												<p class="mb-0 fw-normal"><?= $sex; ?></p>
											</td> -->
											<td class="border-bottom-0">
												<p class="mb-0 fw-normal"><?= $date_of_birth; ?></p>
											</td>
											<!-- <td class="border-bottom-0">
												<p class="mb-0 fw-normal"><?= $date_last_measured; ?></p>
											</td>
											<td class="border-bottom-0">
												<p class="mb-0 fw-normal"><?= $age_by_months; ?></p>
											</td>
											<td class="border-bottom-0">
												<p class="mb-0 fw-normal"><?= $weight; ?></p>
											</td>
											<td class="border-bottom-0">
												<p class="mb-0 fw-normal"><?= $height; ?></p>
											</td>
											<td class="border-bottom-0">
												<p class="mb-0 fw-normal"><?= $wfa; ?></p>
											</td>
											<td class="border-bottom-0">
												<p class="mb-0 fw-normal"><?= $hfa; ?></p>
											</td>
											<td class="border-bottom-0">
												<p class="mb-0 fw-normal"><?= $wfh; ?></p>
											</td> -->
											<td class="border-bottom-0">
												<p class="mb-0 fw-normal"> <?= $municipality; ?>, <?= $barangay; ?></p>
											</td>
											<!-- <td class="border-bottom-0">
												<p class="mb-0 fw-normal"><?= $municipality; ?></p>
											</td> -->

											<td class="border-bottom-0">

												<form method="post" action="navigate.php">
													<a href="child-view.php?child_id=<?= $child_id; ?>" class="badge btn btn-primary rounded-3 fw-semibold">
														<span>
															<i class="fa fa-eye"></i>
														</span>
														<span class="hide-menu">View</span>
													</a> &nbsp;

													<!-- <a class=" badge btn btn-primary rounded-3 fw-semibold" href="child-edit.php?child_id=<?= $child_id; ?>">Edit</a> &nbsp;

													<input type="hidden" name="child_id" value="<?= $child_id; ?>">
													<button class="badge btn btn-primary rounded-3 fw-semibold" type="submit" name="btn-delete-child">Delete</button> -->
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