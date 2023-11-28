<h1>
				Home page
</h1>

<!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<title>Use with CDN Link</title>
								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
								<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
												integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
								<style>
												.col-2:hover {
																transform: scale(1.05);
																transition: all 0.5s ease;
												}

												.col-2 {
																transition: transform 0.3s ease;
												}

												body {
																height: 100%;
																margin: 0;
																padding: 0;
												}

												.wrapper {
																min-height: 100%;
																margin-bottom: -50px;
																/* Height of the footer */
												}

												.footer {
																height: 75px;
																padding: 15px 0;
																position: relative;
																bottom: 0;
																width: 100%;
												}

												.navbar-brand {
																text-decoration: none;
																transition: text-decoration 0.5s ease;
																color: #000;
																/* Navbar text color */
												}

												.nav-item button {
																padding: 8px 16px;
																/* Adjust button padding */
																border-radius: 5px;
																/* Rounded corners */
																transition: background-color 0.3s ease;
																/* Smooth color transition */
												}

												.nav-item button:hover {
																background-color: #6c757d;
																/* Darker color on hover */
																color: #fff;
																/* Text color on hover */
												}

												.card {
																width: 100%;
																/* Adjust the width of cards to fill the container */
																border: none;
																/* Remove default card borders */
																transition: transform 0.3s ease-in-out;
																/* Add a smooth transition effect */
												}

												.card:hover {
																transform: scale(1.03);
																/* Scale up the card on hover for emphasis */
												}

												.footer {
																height: 100px;
																/* Increase footer height */
																background-color: #343a40;
																/* Darker background color */
																color: #fff;
																/* Text color */
																padding-top: 25px;
																/* Add top padding for content */
												}

												.navbar-brand:hover {
																text-decoration: underline;
												}

												.main-body {
																padding-top: 140px;
												}

												.navbar {
																background-color: #f8f9fa;
																/* Light background color */
																box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
																/* Subtle shadow effect */
												}
								</style>
				</head>

				<body>
								<div class="wrapper d-flex flex-column">
												<div class="w-100 fixed-top mb-5" style="z-index: 1;">
																<nav class="navbar navbar-expand-lg bg-body-tertiary pt-3">
																				<div class="container-fluid">
																								<a class="navbar-brand ms-5" href="#">Book Shop</a>
																								<div class="navbar-collapse collapse" id="navbarSupportedContent">
																												<form class="d-flex w-50 mx-auto" role="search">
																																<input class="form-control me-2" type="" placeholder="Search"
																																				aria-label="Search">
																																<button class="btn btn-outline-secondary" type="submit">Search</button>
																												</form>
																								</div>

																								<div class="nav-item mx-auto me-5">
																												<!--<button type="button" class="btn btn-outline-secondary" href="/Login_in"> -->
																												<a href="Login_in"> <button type="submit" class="btn btn-outline-secondary">
																																				<i class="fas fa-user-circle me-1"></i> login here
																																</button>
																												</a>
																								</div>
																								<div class="nav-item mx-auto me-5">
																												<a href="cart"><button type="button" class="btn btn-outline-secondary">
																																				<i class="fa-sharp fa-solid fa-cart-shopping fa-beat-fade"></i> My Cart</button>
																												</a>
																								</div>
																				</div>
																</nav>

																<div class="navbar navbar-expand-lg navbar-light bg-light">
																				<div class="container-fluid align-self-center w-75">
																								<a class="navbar-brand" href="#">Fiction</a>
																								<a class="navbar-brand" href="#">Science</a>
																								<a class="navbar-brand" href="#">Action</a>
																								<a class="navbar-brand" href="#">Romance</a>
																				</div>
																</div>
												</div>
												<div class="container-fluid align-self-center w-75 bg-body-tertiary main-body">
																<div class="row">
																				<h3 class="d-inline col-6">Best Selling Books in 2023</h3>
																				<a class="d-inline-block fs-5 col-6 text-end" href="/view_all">View All</a>
																</div>
																<div class="row my-5">
																				<div class="col-2">
																								<div class="card" style="width: 7rem;">
																												<a href="/book_review">
																																<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																																				class="card-img-top" alt="...">
																												</a>

																								</div>
																				</div>
																				<div class="col-2">
																								<div class="card" style="width: 7rem;">
																												<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																																class="card-img-top" alt="...">
																								</div>
																				</div>
																				<div class="col-2">
																								<div class="card" style="width: 7rem;">
																												<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																																class="card-img-top" alt="...">
																								</div>
																				</div>
																				<div class="col-2">
																								<div class="card" style="width: 7rem;">
																												<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																																class="card-img-top" alt="...">
																								</div>
																				</div>
																				<div class="col-2">
																								<div class="card" style="width: 7rem;">
																												<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																																class="card-img-top" alt="...">
																								</div>
																				</div>
																				<div class="col-2">
																								<div class="card" style="width: 7rem;">
																												<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																																class="card-img-top" alt="...">
																								</div>
																				</div>
																				<div class="row mt-5">
																								<h3 class="d-inline col-6">Best Reviewed Books </h3>
																								<a class="d-inline-block fs-5 col-6 text-end" href="view_all">View All</a>
																				</div>
																				<div class="row my-5">
																								<div class="col-2">
																												<div class="card" style="width: 7rem;">
																																<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																																				class="card-img-top" alt="...">
																												</div>
																								</div>
																								<div class="col-2">
																												<div class="card" style="width: 7rem;">
																																<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																																				class="card-img-top" alt="...">
																												</div>
																								</div>
																								<div class="col-2">
																												<div class="card" style="width: 7rem;">
																																<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																																				class="card-img-top" alt="...">
																												</div>
																								</div>
																								<div class="col-2">
																												<div class="card" style="width: 7rem;">
																																<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																																				class="card-img-top" alt="...">
																												</div>
																								</div>
																								<div class="col-2">
																												<div class="card" style="width: 7rem;">
																																<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																																				class="card-img-top" alt="...">
																												</div>
																								</div>
																								<div class="col-2">
																												<div class="card" style="width: 7rem;">
																																<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																																				class="card-img-top" alt="...">
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>
								</div>
								<footer class="footer bg-info-subtle mt-auto">
												<div class="container text-center">
																<span class="text-muted">&copy; 2023 Bookshop.com. All Rights Reserved.</span>
												</div>
								</footer>
				</body>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
								integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
				</script>

</html>

<div>
				<!-- When there is no desire, all things are at peace. - Laozi -->
</div>
