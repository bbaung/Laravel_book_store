<div>
				<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>

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
												.edit {
																background: silver;
												}

												.edit_book {
																font-family: 'Courier New', Courier, monospace;
												}

												.jum {
																background: slategrey;
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
																				<h3 class="edit_book mt-4">Add Book</h3>
																				<!-- first section start -->
																				<section class="container-fluid">
																								<div class="row container-fluid container">

																												<div class="col-md-2 edit_book mt-4">
																																<h6 class="mt-4">Book ID</h5>
																																				<h6 class="mt-4">Book Name</h5>
																																								<h6 class="mt-4">Auther</h5>
																																												<h6 class="mt-4">Categories</h5>
																																																<h6 class="mt-4">Release Date</h5>
																																																				<h6 class="mt-4">Price</h5>
																																																								<h6 class="mt-4">Quantity</h5>
																												</div>
																												<div class="col-md-3 edit_book mt-4">
																																<input type="text" class="form-control form-control-sm mt-3 border"
																																				placeholder="input">
																																<input type="text" class="form-control form-control-sm mt-2" placeholder="input">
																																<input type="text" class="form-control form-control-sm mt-3" placeholder="input">
																																<input type="text" class="form-control form-control-sm mt-3" placeholder="input">
																																<input type="text" class="form-control form-control-sm mt-3" placeholder="input">
																																<input type="text" class="form-control form-control-sm mt-2" placeholder="input">
																																<input type="text" class="form-control form-control-sm mt-2" placeholder="input">
																												</div>

																												<div class="col-md-6">
																																<h4 class="edit_book" style="color: coral;">Add Book Cover</h4>
																																<div class="card" style="width:500px ; height:500px;">
																																				<img class="edit_book" src="" alt="Book Cover">
																																</div>
																																<button class="btn btn-outline-muted edit_book mt-2 border">Choose File</button>
																												</div>
																								</div>
																				</section>
																				<!-- first section end -->

																				<!-- second section start -->
																				<section class="container-fluid container">
																								<div class="jum mt-4 rounded p-2 text-white">
																												<div class="row">
																																<div class="col-md-2 offset-4">
																																				<button class="btn btn-success edit_book">Save</button>
																																</div>
																																<!--div class="col-md-2 offset-1">
																								<button class="btn btn-info edit_book">Exit</button>
																				</div-->
																																<div class="col-md-2 offset-1">
																																				<button class="btn btn-danger edit_book">Delete</button>
																																</div>
																												</div>
																								</div>
																				</section>
																				<!-- second section end -->

																				<!-- third section start -->

																				<!-- third section end -->

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
