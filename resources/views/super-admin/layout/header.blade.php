<?php

use App\Models\CartItem;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content="Codescandy" name="author">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>Dashboard</title>
	<!-- Favicon icon-->
	
	<link href="{{asset('resources/super-admin-assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet">
	<link href="{{asset('resources/super-admin-assets/libs/feather-webfont/dist/feather-icons.css')}}" rel="stylesheet">
	<link href="{{asset('resources/super-admin-assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">
	<link href="{{asset('resources/super-admin-assets/libs/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet" />
	<link href="{{asset('resources/super-admin-assets/css/toaster.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('resources/super-admin-assets/css/daterange.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('resources/super-admin-assets/css/theme.min.css')}}">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
	<script src="{{asset('resources/super-admin-assets/js/jquery.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	
	<!-- Theme CSS -->
	<style>
		main.main-content-wrapper {
			background: #eee !important;
		}

		.toast {
			--fc-toast-bg: #39b938f2;
		}

		@media (max-width:767px) {
		    nav.navbar.navbar-expand-lg.navbar-glass > .container-fluid {
    padding: 0 !important;
}
.d-flex.align-items-center > span {
    display: block;
    margin-top: 5px;
}
			main.main-content-wrapper {
				padding-left: 0 !important;
				padding-right: 0 !important;
			}
			.d-flex.align-items-center > h3 {
                margin-bottom: 0 !important;
            }
            .card-body.p-0 {
                overflow: auto;
            }

		}
	</style>


</head>

<body>
	<!-- main -->
	<div>
		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-glass">
			<div class="container-fluid">
				<div class="d-flex justify-content-between align-items-center w-100">
					<div class="d-flex align-items-center">
					    <a class="text-inherit d-block d-xl-none me-4" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
						</a>
						<h3>{{ ucfirst(auth()->user()->name) }}, </h3>&nbsp;<span> {{ auth()->user()->role_name }}</span>
						 


					</div>
					<div>
						<ul class="list-unstyled d-flex align-items-center mb-0 ms-5 ms-lg-0">
							<li class="dropdown-center">
								
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0 border-0">
									<div class="border-bottom p-5 d-flex justify-content-between align-items-center">
										<div>
											<h5 class="mb-1">Notifications</h5>
											<p class="mb-0 small">You have 2 unread messages</p>
										</div>
										<a href="#!" class="text-muted">

										</a>
										<a href="#!" class="text-muted">
											<a href="#" class="btn btn-ghost-secondary btn-icon rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Mark all as read">
												<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check2-all text-white" viewBox="0 0 16 16">
													<path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
													<path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
												</svg>
											</a>
										</a>
									</div>
									<div data-simplebar style="height: 250px">
										<!-- List group -->
										<ul class="list-group list-group-flush notification-list-scroll fs-6">
											<!-- List group item -->
											<li class="list-group-item px-5 py-4 list-group-item-action active">
												<a href="#!" class="text-muted">
													<div class="d-flex">
														<img src="{{asset('public/user-png.png')}}" alt="" class="avatar avatar-md rounded-circle" />
														<div class="ms-4">
															<p class="mb-1">
																<span class="text-dark">Your order is placed</span>
																waiting for shipping
															</p>
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock text-muted" viewBox="0 0 16 16">
																	<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
																	<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
																</svg>
																<small class="ms-2">1 minute ago</small>
															</span>
														</div>
													</div>
												</a>
											</li>
											<li class="list-group-item px-5 py-4 list-group-item-action">
												<a href="#!" class="text-muted">
													<div class="d-flex">
														<img src="./assets/images/avatar/avatar-5.jpg" alt="" class="avatar avatar-md rounded-circle" />
														<div class="ms-4">
															<p class="mb-1">
																<span class="text-dark">Jitu Chauhan</span>
																answered to your pending order list with notes
															</p>
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock text-muted" viewBox="0 0 16 16">
																	<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
																	<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
																</svg>
																<small class="ms-2">2 days ago</small>
															</span>
														</div>
													</div>
												</a>
											</li>
											<li class="list-group-item px-5 py-4 list-group-item-action">
												<a href="#!" class="text-muted">
													<div class="d-flex">
														<img src="./assets/images/avatar/avatar-2.jpg" alt="" class="avatar avatar-md rounded-circle" />
														<div class="ms-4">
															<p class="mb-1">
																<span class="text-dark">You have new messages</span>
																2 unread messages
															</p>
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock text-muted" viewBox="0 0 16 16">
																	<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
																	<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
																</svg>
																<small class="ms-2">3 days ago</small>
															</span>
														</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
									<div class="border-top px-5 py-4 text-center">
										<a href="#!">View All</a>
									</div>
								</div>
							</li>
							<li class="dropdown ms-4">
								<a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="{{asset('public/user-png.png')}}" alt="" class="avatar avatar-md rounded-circle" />
								</a>

								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="lh-1 px-5 py-4 border-bottom">
										<h5 class="mb-1 h6">{{ auth()->user()->name }}</h5>
										<small>{{ auth()->user()->email }}</small>
									</div>

									<ul class="list-unstyled px-2 py-3 d-none">
										<li>
											<a class="dropdown-item" href="#!">Home</a>
										</li>
										<li>
											<a class="dropdown-item" href="#!">Profile</a>
										</li>

										<li>
											<a class="dropdown-item" href="#!">Settings</a>
										</li>
									</ul>
									<div class="border-top px-5 py-3">
										<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
											{{ __('Log Out') }}
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>


		<div class="main-wrapper">
			<!-- navbar vertical -->
			<!-- navbar -->
			<nav class="navbar-vertical-nav d-none d-xl-block">
				<div class="navbar-vertical">
					<div class="px-4 py-3 mb-5 bg-primary">
						<a href="{{url('/home')}}" class="navbar-brand">
							<h4 class="text-light text-center"><b>Nakoda Traders</b></h4>
						</a>
					</div>
					<div class="navbar-vertical-content flex-grow-1" data-simplebar="">
						<ul class="navbar-nav flex-column mb-5" id="sideNavbar">
							<li class="nav-item">
								<a class="nav-link  active " href="{{url('/home')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-house"></i></span>
										<span class="nav-link-text">Dashboard</span>
									</div>
								</a>
							</li>
							<li class="nav-item mt-6 mb-3">
								<span class="nav-label">Store Managements</span>
							</li>
							<!-- //aditya 23-12-23 -->
							@can('role-list')
							<li class="nav-item d-none">
								<a class="nav-link " href="{{url('/roles')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-cart"></i></span>
										<span class="nav-link-text">Roles</span>
									</div>
								</a>
							</li>
							@endcan
							<!-- //aditya 23-12-23 -->
						@can('product-list')
							 <li class="nav-item">
								<a class="nav-link collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navCategoriesOrders" aria-expanded="false" aria-controls="navCategoriesOrders">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-bag"></i></span>
										<span class="nav-link-text">Products Management</span>
									</div>
								</a>
								<div id="navCategoriesOrders" class="collapse " data-bs-parent="#sideNavbar">
									<ul class="nav flex-column">
										<li class="nav-item">
            								<a class="nav-link " href="{{url('products')}}">
            									<div class="d-flex align-items-center">
            										<span class="nav-link-icon"><i class="bi bi-cart"></i></span>
            										<span class="nav-link-text">All Products</span>
            									</div>
            								</a>
            							</li>
            								@can('brand-list')
                							<li class="nav-item">
                								<a class="nav-link " href="{{url('brands')}}">
                									<div class="d-flex align-items-center">
                										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
                										<span class="nav-link-text">Brands</span>
                									</div>
                								</a>
                							</li>
                							@endcan
                							@can('category-list')
                							<li class="nav-item">
                								<a class="nav-link " href="{{url('categories')}}">
                									<div class="d-flex align-items-center">
                										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
                										<span class="nav-link-text">Categories</span>
                									</div>
                								</a>
                							</li>
                							@endcan
                							@can('subcategory-list')
                							<li class="nav-item">
                								<a class="nav-link " href="{{url('subcategories')}}">
                									<div class="d-flex align-items-center">
                										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
                										<span class="nav-link-text">Sub Categories</span>
                									</div>
                								</a>
                							</li>
                							@endcan

									</ul>
								</div>
							</li>
								@endcan
							@can('user-list')
							<li class="nav-item">
								<a class="nav-link " href="{{url('users')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">All Users</span>
									</div>
								</a>
							</li>
							@endcan
							@can('shops-list')
							<li class="nav-item">
								<a class="nav-link " href="{{route('shops.index')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">All Shop</span>
									</div>
								</a>
							</li>
							@endcan
							@if(auth()->user()->role_name =='Admin')
							<li class="nav-item d-none">
								<a class="nav-link " href="{{route('productOrders.index')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">Product order listing</span>
									</div>
								</a>
							</li>
							@endif
							@can('order-list')
							<li class="nav-item">
								<a class="nav-link " href="{{route('order-list')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">All Orders</span>
									</div>
								</a>
							</li>
							@endcan
							@can('purchase-item')
							<li class="nav-item">
								<a class="nav-link " href="{{route('purchase-items')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">All Purchase</span>
									</div>
								</a>
							</li>
							@endcan
							@can('driver-order-list')
							<li class="nav-item">
								<a class="nav-link " href="{{route('driver-order-list')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">All Orders</span>
									</div>
								</a>
							</li>
							@endcan
							@can('setting-edit')
							<li class="nav-item d-none">
								<a class="nav-link " href="{{route('settings.edit', 1)}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">Setting</span>
									</div>
								</a>
							</li>
							@endcan
							<!-- <li class="nav-item">
								<a class="nav-link collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navCategoriesOrders" aria-expanded="false" aria-controls="navCategoriesOrders">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-bag"></i></span>
										<span class="nav-link-text">Orders</span>
									</div>
								</a>
								<div id="navCategoriesOrders" class="collapse " data-bs-parent="#sideNavbar">
									<ul class="nav flex-column">
										<li class="nav-item">
											<a class="nav-link " href="order-list.php">All Order</a>
										</li>

									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="media-upload.php">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-images"></i></span>
										<span class="nav-link-text">Upload Media</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="registration-request.php">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-people"></i></span>
										<span class="nav-link-text">Registration Request <span class="badge bg-primary">New</span></span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="vendor-list.php">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-shop"></i></span>
										<span class="nav-link-text">Shop</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="customers.php">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-people"></i></span>
										<span class="nav-link-text">Agent</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="driver.php">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-people"></i></span>
										<span class="nav-link-text">Driver</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="wallet.php">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-wallet2"></i></span>
										<span class="nav-link-text">Wallet</span>
									</div>
								</a>
							</li> -->

							<!-- <li class="nav-item mt-6 mb-3">
					<span class="nav-label">Site Settings</span>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="#!">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-gear"></i></span>
							<span class="nav-link-text">Store Settings</span>
						</div>
					</a>
				</li> -->


						</ul>
					</div>
				</div>
			</nav>

			 <nav class="navbar-vertical-nav offcanvas offcanvas-start navbar-offcanvac" tabindex="-1" id="offcanvasExample">
				<div class="navbar-vertical">
					<div class="px-4 py-3 mb-5 bg-primary">
						<a href="{{url('/home')}}" class="navbar-brand">
							<h4 class="text-light text-center"><b>Nakoda Traders</b></h4>
						</a>
					</div>
					<div class="navbar-vertical-content flex-grow-1" data-simplebar="">
						<ul class="navbar-nav flex-column mb-5" id="sideNavbar">
							<li class="nav-item">
								<a class="nav-link  active " href="{{url('/home')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-house"></i></span>
										<span class="nav-link-text">Dashboard</span>
									</div>
								</a>
							</li>
							<li class="nav-item mt-6 mb-3">
								<span class="nav-label">Store Managements</span>
							</li>
							<!-- //aditya 23-12-23 -->
							@can('role-list')
							<li class="nav-item d-none">
								<a class="nav-link " href="{{url('/roles')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-cart"></i></span>
										<span class="nav-link-text">Roles</span>
									</div>
								</a>
							</li>
							@endcan
							<!-- //aditya 23-12-23 -->
						
							@can('product-list')
							 <li class="nav-item">
								<a class="nav-link collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navCategoriesOrders" aria-expanded="false" aria-controls="navCategoriesOrders">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-bag"></i></span>
										<span class="nav-link-text">Products Management</span>
									</div>
								</a>
								<div id="navCategoriesOrders" class="collapse " data-bs-parent="#sideNavbar">
									<ul class="nav flex-column">
										<li class="nav-item">
            								<a class="nav-link " href="{{url('products')}}">
            									<div class="d-flex align-items-center">
            										<span class="nav-link-icon"><i class="bi bi-cart"></i></span>
            										<span class="nav-link-text">Products</span>
            									</div>
            								</a>
            							</li>
            								@can('brand-list')
                							<li class="nav-item">
                								<a class="nav-link " href="{{url('brands')}}">
                									<div class="d-flex align-items-center">
                										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
                										<span class="nav-link-text">Brands</span>
                									</div>
                								</a>
                							</li>
                							@endcan
                							@can('category-list')
                							<li class="nav-item">
                								<a class="nav-link " href="{{url('categories')}}">
                									<div class="d-flex align-items-center">
                										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
                										<span class="nav-link-text">Categories</span>
                									</div>
                								</a>
                							</li>
                							@endcan
                							@can('subcategory-list')
                							<li class="nav-item">
                								<a class="nav-link " href="{{url('subcategories')}}">
                									<div class="d-flex align-items-center">
                										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
                										<span class="nav-link-text">Sub Categories</span>
                									</div>
                								</a>
                							</li>
                							@endcan

									</ul>
								</div>
							</li>
							
							@endcan
							@can('user-list')
							<li class="nav-item">
								<a class="nav-link " href="{{url('users')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">All Users</span>
									</div>
								</a>
							</li>
							@endcan
							@can('shops-list')
							<li class="nav-item">
								<a class="nav-link " href="{{route('shops.index')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">All Shop</span>
									</div>
								</a>
							</li>
							@endcan
							@if(auth()->user()->role_name =='Admin')
							<li class="nav-item d-none">
								<a class="nav-link " href="{{route('productOrders.index')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">Product order listing</span>
									</div>
								</a>
							</li>
							@endif
							@can('order-list')
							<li class="nav-item">
								<a class="nav-link " href="{{route('order-list')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">All Orders</span>
									</div>
								</a>
							</li>
							@endcan
							@can('purchase-item')
							<li class="nav-item">
								<a class="nav-link " href="{{route('purchase-items')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">All Purchase</span>
									</div>
								</a>
							</li>
							@endcan
							@can('driver-order-list')
							<li class="nav-item">
								<a class="nav-link " href="{{route('driver-order-list')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">Orders</span>
									</div>
								</a>
							</li>
							@endcan
							@can('setting-edit')
							<li class="nav-item d-none">
								<a class="nav-link " href="{{route('settings.edit', 1)}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">Setting</span>
									</div>
								</a>
							</li>
							@endcan
							<!-- <li class="nav-item">
								<a class="nav-link collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navCategoriesOrders" aria-expanded="false" aria-controls="navCategoriesOrders">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-bag"></i></span>
										<span class="nav-link-text">Orders</span>
									</div>
								</a>
								<div id="navCategoriesOrders" class="collapse " data-bs-parent="#sideNavbar">
									<ul class="nav flex-column">
										<li class="nav-item">
											<a class="nav-link " href="order-list.php">All Order</a>
										</li>

									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="media-upload.php">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-images"></i></span>
										<span class="nav-link-text">Upload Media</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="registration-request.php">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-people"></i></span>
										<span class="nav-link-text">Registration Request <span class="badge bg-primary">New</span></span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="vendor-list.php">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-shop"></i></span>
										<span class="nav-link-text">Shop</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="customers.php">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-people"></i></span>
										<span class="nav-link-text">Agent</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="driver.php">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-people"></i></span>
										<span class="nav-link-text">Driver</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="wallet.php">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-wallet2"></i></span>
										<span class="nav-link-text">Wallet</span>
									</div>
								</a>
							</li> -->

							<!-- <li class="nav-item mt-6 mb-3">
					<span class="nav-label">Site Settings</span>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="#!">
						<div class="d-flex align-items-center">
							<span class="nav-link-icon"><i class="bi bi-gear"></i></span>
							<span class="nav-link-text">Store Settings</span>
						</div>
					</a>
				</li> -->


						</ul>
					</div>
				</div>
			</nav> 

			<!-- main wrapper -->
			<main class="main-content-wrapper">