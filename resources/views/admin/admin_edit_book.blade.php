<div>
				<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
<!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<title>Order Status</title>
								<!-- Bootstrap CSS -->
								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
												integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
												crossorigin="anonymous" referrerpolicy="no-referrer" />
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
												.invs {
																font-family: 'Courier New', Courier, monospace;
												}

												table {
																font-family: 'Courier New', Courier, monospace;
																border-collapse: collapse;
																border: 1px solid #0755bb;
												}

												td,
												th {
																border: 1px solid #0755bb;
																text-align: center;
												}

												tr:nth-child(even) {
																background-color: royalblue;
												}

												/* dev_phyoe */
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
																<div class="col-md-9 mt-4 py-4">

																				<!-- dev_phyoe start -->
																				<!-- section 1 -->
																				<section class="container">
																								<h2 class="invs">Orders Status</h2>
																								<div class="container-fluid mt-4 py-3">
																												<form action="">
																																<input type="text" placeholder="Enter ID Or Name..." name="search"
																																				class="btn btn-outline-warning">
																																<button class="btn btn-outline-warning" type="submit"><i
																																								class="fa fa-search"></i></button>
																												</form>
																								</div>
																				</section>
																				<!-- section 1 end -->
																				<!-- section 2 -->
																				<section class="container mt-4 py-3">
																								<div class="table-responsive text-center">
																												<table class="table-bordered table" style="border: 1px solid #0755bb;">
																																<thead style="background-color: royalblue;">
																																				<tr>
																																								<th>User id</th>
																																								<th>User name</th>
																																								<th>User email</th>
																																								<th>User phone</th>
																																								<th>User address</th>
																																								<th>Block id</th>
																																								<th>Block name</th>
																																								<th>Unit</th>
																																								<th>Book price</th>
																																								<th>Total price</th>
																																								<th>Date</th>
																																				</tr>
																																</thead>

																																<tbody>
																																				<tr>
																																								<td>ATS001</td>
																																								<td>Nagazaren</td>
																																								<td>hr.resume@gmail.com</td>
																																								<td>097-709-66017</td>
																																								<td>New York</td>
																																								<td>Female</td>
																																								<td>Yes</td>
																																								<td>ATS001</td>
																																								<td>$10</td>
																																								<td>$25</td>
																																								<td>26.12.2023</td>
																																				</tr>
																																</tbody>

																																<tbody>
																																				<tr>
																																								<td>ATS001</td>
																																								<td>Nagazaren</td>
																																								<td>hr.resume@gmail.com</td>
																																								<td>097-709-66017</td>
																																								<td>New York</td>
																																								<td>Female</td>
																																								<td>Yes</td>
																																								<td>ATS001</td>
																																								<td>$10</td>
																																								<td>$25</td>
																																								<td>26.12.2023</td>
																																				</tr>
																																</tbody>

																																<tbody>
																																				<tr>
																																								<td>ATS001</td>
																																								<td>Nagazaren</td>
																																								<td>hr.resume@gmail.com</td>
																																								<td>097-709-66017</td>
																																								<td>New York</td>
																																								<td>Female</td>
																																								<td>Yes</td>
																																								<td>ATS001</td>
																																								<td>$10</td>
																																								<td>$25</td>
																																								<td>26.12.2023</td>
																																				</tr>
																																</tbody>

																																<tbody>
																																				<tr>
																																								<td>ATS001</td>
																																								<td>Nagazaren</td>
																																								<td>hr.resume@gmail.com</td>
																																								<td>097-709-66017</td>
																																								<td>New York</td>
																																								<td>Female</td>
																																								<td>Yes</td>
																																								<td>ATS001</td>
																																								<td>$10</td>
																																								<td>$25</td>
																																								<td>26.12.2023</td>
																																				</tr>
																																</tbody>

																																<tbody>
																																				<tr>
																																								<td>ATS001</td>
																																								<td>Nagazaren</td>
																																								<td>hr.resume@gmail.com</td>
																																								<td>097-709-66017</td>
																																								<td>New York</td>
																																								<td>Female</td>
																																								<td>Yes</td>
																																								<td>ATS001</td>
																																								<td>$10</td>
																																								<td>$25</td>
																																								<td>26.12.2023</td>
																																				</tr>
																																</tbody>

																																<tbody>
																																				<tr>
																																								<td>ATS001</td>
																																								<td>Nagazaren</td>
																																								<td>hr.resume@gmail.com</td>
																																								<td>097-709-66017</td>
																																								<td>New York</td>
																																								<td>Female</td>
																																								<td>Yes</td>
																																								<td>ATS001</td>
																																								<td>$10</td>
																																								<td>$25</td>
																																								<td>26.12.2023</td>
																																				</tr>
																																</tbody>

																												</table>
																								</div>

																								<!-- custom -->
																								{{-- <div class="row">
																												<span class="col-md-1 offset-8 text-center"><svg class="mt-4"
																																				xmlns="http://www.w3.org/2000/svg" height="16" width="20"
																																				viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
																																				<path
																																								d="M64 96c0-35.3 28.7-64 64-64H512c35.3 0 64 28.7 64 64V352H512V96H128V352H64V96zM0 403.2C0 392.6 8.6 384 19.2 384H620.8c10.6 0 19.2 8.6 19.2 19.2c0 42.4-34.4 76.8-76.8 76.8H76.8C34.4 480 0 445.6 0 403.2zM281 209l-31 31 31 31c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-48-48c-9.4-9.4-9.4-24.6 0-33.9l48-48c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM393 175l48 48c9.4 9.4 9.4 24.6 0 33.9l-48 48c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l31-31-31-31c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z" />
																																</svg></span>
																												{{-- <h6 class="col-md-2 text-muted mt-4" style="font-family:Harrington;">dev_phyoewai</h6> --}}
																</div> --}}
																<!-- custom -->

												</div>
												</section>
												<!-- section 2 end -->
												<!-- dev_phyoe end -->

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
