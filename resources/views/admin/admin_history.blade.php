<div>
				<!-- Well begun is half done. - Aristotle -->
</div>
<!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<title>Admin History || Admin Dashboard</title>
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

												.admin__history {
																font-family: 'Courier New', Courier, monospace;
												}
								</style>
				</head>

				<body>
								<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
												<div class="container">
																<!-- Book Shop - Brand -->
																<a class="navbar-brand navbar-brand-text" href="#">Book Shop</a>

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
																				<button class="sidebar-btn">Profile <i class="fas fa-chevron-right"></i></button>
																				<button class="sidebar-btn">Add Book <i class="fas fa-chevron-right"></i></button>
																				<button class="sidebar-btn">Inventory Status <i class="fas fa-chevron-right"></i></button>
																				<button class="sidebar-btn">Orders <i class="fas fa-chevron-right"></i></button>
																</div>

																<!-- Main Content -->
																<div class="col-md-9">

																				<!-- dev_phyoe start -->

																				<!-- first section start -->
																				<section class="container-fluid container">

																								<div class="container mt-3">

																												<div class="jumbo mt-4 rounded p-5 text-white">

																																<div class="row container">

																																				<div class="col-md-2">
																																								<div class="card" style="width:100px ; height:100px;">
																																								</div>

																																				</div>

																																				<div class="col-md-6 admin__history mt-2">
																																								<h5>Admin User</h5>
																																								<h5>Email - hr.admin@gmail.com</h5>
																																								<h5>Role - admin</h5>
																																				</div>

																																				<div class="col-md-2 offset-2">
																																								<span><button
																																																class="btn btn-outline-success admin__history mt-2">Active</button></span>
																																								<span><button
																																																class="btn btn-outline-danger admin__history mt-2">History</button></span>
																																				</div>
																																</div>
																												</div>
																				</section>
																				<!-- first section end -->

																				<!-- second section start -->
																				<section class="container-fluid container">
																								<div class="container mt-3">
																												<div class="jumbo mt-4 rounded p-4 text-white">

																																<h3 class="admin__history">History Record</h3>
																																<div class="table-responsive py-4 text-center">
																																				<table class="table-bordered admin__history table"
																																								style="border: 1px solid #0755bb;">
																																								<thead style="background-color: royalblue;">
																																												<tr>
																																																<th>Date</th>
																																																<th>Action</th>
																																																<th>Particular</th>
																																																<th>User phone</th>
																																																<th>User address</th>
																																																<th>Block id</th>

																																												</tr>
																																								</thead>

																																								<tbody>
																																												<tr>
																																																<td>27-12-2023</td>
																																																<td>Edit</td>
																																																<td>hr.resume@gmail.com</td>
																																																<td>097-709-66017</td>
																																																<td>New York</td>
																																																<td>Female</td>

																																												</tr>
																																								</tbody>

																																								<tbody>
																																												<tr>
																																																<td>27-12-2023</td>
																																																<td>Add</td>
																																																<td>hr.resume@gmail.com</td>
																																																<td>097-709-66017</td>
																																																<td>New York</td>
																																																<td>Female</td>

																																												</tr>
																																								</tbody>

																																								<tbody>
																																												<tr>
																																																<td>27-12-2023</td>
																																																<td>Del</td>
																																																<td>hr.resume@gmail.com</td>
																																																<td>097-709-66017</td>
																																																<td>New York</td>
																																																<td>Female</td>
																																												</tr>
																																								</tbody>

																																				</table>
																																</div>
																												</div>
																								</div>
																				</section>
																				<!-- second section end -->

																				<!-- dev_phyoe end -->

																				{{-- <h6 class="text-muted offset-10 mt-4" style="font-family:Harrington;"> dev_phyoewai &copy; </h6> --}}

																</div>
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
