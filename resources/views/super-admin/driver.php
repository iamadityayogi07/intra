<?php include('header.php') ?>

				<div class="container">
					<div class="row mb-8">
						<div class="col-md-12">
							<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
								<div>
									<h2>Drivers</h2>
									<!-- breacrumb -->
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb mb-0">
											<li class="breadcrumb-item"><a href="index.php" class="text-inherit">Dashboard</a></li>
											<li class="breadcrumb-item active" aria-current="page">Drivers</li>
										</ol>
									</nav>
								</div>
								<div>
									<a href="#!" class="btn btn-primary">Add New Customer</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-12 mb-5">
							<div class="card h-100 card-lg">
								<div class="p-6">
									<div class="row justify-content-between">
										<div class="col-md-4 col-12">
											<form class="d-flex" role="search">
												<input class="form-control" type="search" placeholder="Search Customers" aria-label="Search" />
											</form>
										</div>
									</div>
								</div>
								<div class="card-body p-0">
									<div class="table-responsive">
										<table class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
											<thead class="bg-light">
												<tr>
													<th>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="checkAll" />
															<label class="form-check-label" for="checkAll"></label>
														</div>
													</th>
													<th>Name</th>
													<th>Email</th>
													<th>Created Date</th>
													<th>Phone</th>
													<th>Wallet</th>

													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="customerOne" />
															<label class="form-check-label" for="customerOne"></label>
														</div>
													</td>

													<td>
														<div class="d-flex align-items-center">
															<img src="./assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-xs rounded-circle" />
															<div class="ms-2">
																<a href="#" class="text-inherit">Bonnie Howe</a>
															</div>
														</div>
													</td>
													<td>bonniehowe@gmail.com</td>

													<td>17 May, 2023 at 3:18pm</td>
													<td>-</td>
													<td>$49.00</td>

													<td>
														<div class="dropdown">
															<a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="feather-icon icon-more-vertical fs-5"></i>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-trash me-3"></i>
																		Delete
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#">
																		<i class="bi bi-pencil-square me-3"></i>
																		Edit
																	</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>

									<div class="border-top d-md-flex justify-content-between align-items-center p-6">
										<span>Showing 1 to 8 of 12 entries</span>
										<nav class="mt-2 mt-md-0">
											<ul class="pagination mb-0">
												<li class="page-item disabled"><a class="page-link" href="#!">Previous</a></li>
												<li class="page-item"><a class="page-link active" href="#!">1</a></li>
												<li class="page-item"><a class="page-link" href="#!">2</a></li>
												<li class="page-item"><a class="page-link" href="#!">3</a></li>
												<li class="page-item"><a class="page-link" href="#!">Next</a></li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

<?php include('footer.php') ?>				