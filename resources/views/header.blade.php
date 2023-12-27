<!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<title>Use with CDN Link</title>
								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
								<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
												integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

								@yield('style')

								{{-- <link rel="stylesheet" href="{{ asset('assets/js/css/home_page.css') }}"> --}}
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
																												<!--<button type="button" class="btn btn-outline-secondary" href="/Login_in">-->
																												<a href="{{ route('Login') }}"> <button type="submit" class="btn btn-outline-secondary">
																																				<i class="fas fa-user-circle me-1"></i> login here
																																</button>
																												</a>
																								</div>
																								<div class="nav-item mx-auto me-5">
																												<a href="{{ route('cart') }}"><button type="button" class="btn btn-outline-secondary">
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

								</div>

								@yield('header_footer')

								<footer class="footer bg-info-subtle mt-auto">
												<div class="container text-center">
																<span class="text-muted">&copy; 2023 Bookshop.com. All Rights Reserved.</span>
												</div>
								</footer>
				</body>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
								integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
				</script>

				@yield('script')

</html>

<div>
				<!-- When there is no desire, all things are at peace. - Laozi -->
</div>
