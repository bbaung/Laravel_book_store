<!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<title>Admin History || Admin Dashboard || admin_history01</title>
								<!-- Bootstrap CSS -->
								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" />
								<!-- Font Awesome -->
								<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
								<style>
												/* Adjust styles as needed */
												.navbar-brand-text {
																margin-right: 20px;
												}

												.notification {
																margin-right: 20px;
												}

												.sidebar {
																background-color: #f8f9fa;
																height: 100vh;
																display: flex;
																flex-direction: column;
																justify-content: center;
																align-items: center;
												}

												.sidebar-btn {
																width: 100%;
																max-width: 100%;
																/* Adjust maximum width as needed */
																padding: 10px;
																border: none;
																text-align: left;
																background-color: transparent;
																transition: background-color 0.3s ease;
																margin-bottom: 10px;
																/* Adjust button margin as needed */
												}

												.sidebar-btn:hover {
																background-color: #e9ecef;
																/* Adjust hover background color */
												}

												.sidebar-btn i {
																float: right;
												}

												.footer {
																background-color: aliceblue;
												}

												/* dev_phyoe */
												.jumbo {
																background: silver;
												}

												@yield("admin_header_style")
								</style>
				</head>

				<body>
								<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
												<div class="container">
																<!-- Book Shop - Brand -->
																<a class="navbar-brand navbar-brand-text" href="{{ route('admin_home_page') }}">Book Shop</a>

																<!-- Admin Dashboard -->
																<span class="navbar-text text-white">Admin Dashboard</span>

																<!-- Notification -->
																<span class="notification">
																				<!-- Replace the placeholder with your notification icon from Font Awesome -->
																				<i class="fas fa-bell me-3 text-white"></i>
																				<i class="fas fa-bell me-3 text-white"></i>
																				<i class="fas fa-bell me-3 text-white"></i>
																				<!-- You can add a badge or indicator for notifications -->
																				<!-- Example: <span class="badge badge-danger">3</span> -->
																</span>

																<!-- My Account and Settings Icon -->
																<ul class="navbar-nav ml-auto">
																				<li class="nav-item me-3">
																								<a class="nav-link" href="#">
																												<!-- Replace the placeholder with your account icon from Font Awesome -->
																												<i class="fas fa-user"></i> My Account
																								</a>
																				</li>
																				<li class="nav-item">
																								<a class="nav-link" href="#">
																												<!-- Replace the placeholder with your settings icon from Font Awesome -->
																												<i class="fas fa-cog"></i>
																								</a>
																				</li>
																</ul>
												</div>
								</nav>
								<div class="container-fluid">
												<div class="row">
																<!-- Sidebar -->
																<div class="col-md-3 sidebar">
																				<a class="sidebar-btn" href="{{ route('admin_home_page') }}"><button class="sidebar-btn">Profile <i
																																class="fas fa-chevron-right"></i></button></a>
																				<a class="sidebar-btn" href="{{ route('admin_add_book') }}"><button class="sidebar-btn">Add Book <i
																																class="fas fa-chevron-right"></i></button></a>
																				<a class="sidebar-btn" href="{{ route('admin_inventory_status') }}"><button
																												class="sidebar-btn">Inventory Status <i class="fas fa-chevron-right"></i></button></a>
																				<a class="sidebar-btn" href="{{ route('admin_order_status') }}"><button class="sidebar-btn">Orders
																												<i class="fas fa-chevron-right"></i></button></a>
																</div>

																<!-- Main Content -->

																@yield('admin_header')

												</div>
								</div>

								<footer class="footer bg-light mt-auto py-3">
												<div class="container text-center">
																<span class="text-muted">Book Shop &copy; 2023</span>
												</div>
								</footer>
								<!-- Bootstrap JS -->
								<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
												integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
												crossorigin="anonymous" referrerpolicy="no-referrer"></script>
				</body>

</html>
