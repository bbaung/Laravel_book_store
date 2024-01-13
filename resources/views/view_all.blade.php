{{-- <!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<title>View All || </title>

								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
								<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

								<!-- Google Font -->
								<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />

								<!-- animate.css cdn link -->
								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

								<!-- viewall.css -->
								<link rel="stylesheet" href="{{ asset('assets/css/viewall.css') }}" />

								<style>
												.english {
																font-family: Cambria, Arial, SansSerif;
												}

												.bigtitle {
																font-family: 'Courier New', Courier, monospace;
												}

												.myQuote {
																font-family: SansSerif;
																font-style: italic;
												}

												/* ----------------------- */
												/* Define styles for the card */
												.card {
																background: #9bc9f7;
																/* Other styles for the card */
												}

												/* Styles for the card header */
												.card-header {
																background: rgb(121, 234, 238);
																border-radius: 5px;
																/* Other styles for the card header */
												}

												/* Styles for the card block */
												.card-block {
																background: #9bc9f7;
																/* Other styles for the card block */
												}

												/* Additional hover effect for the card */
												.card:hover {
																transform: scale(1.05);
																/* Example: Increase size on hover */
																box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
																/* Example: Add a shadow on hover */
																/* Add any other style changes for the hover effect */
												}

												/* Example hover effect for the button inside the card */
												.card:hover .btn {
																background-color: orange;
																/* Change button color on hover */
																/* Add other style changes for the button on hover */
												}

												.card {
																/* ... */
																transition: transform 0.3s, box-shadow 0.3s;
																/* Add transition for smooth effect */
												}

												/* ------------------------ */
												/* pagination css start  */
												.pagination {
																font-family: Arial, sans-serif;
												}

												.pagination ul {
																list-style: none;
																padding: 0;
																margin: 0;
																display: flex;
												}

												.pagination li {
																margin: 5px;
												}

												.pagination a {
																padding: 8px 12px;
																text-decoration: none;
																border: 1px solid #ddd;
																color: #333;
																transition: background-color 0.3s ease;
												}

												.pagination a:hover {
																background-color: #2ebede;
												}

												.pagination .active a {
																background-color: #efdc5f;
																color: #fff;
												}

												/* pagination css end */
												/* pagination custom s */
												.pagination {
																font-family: Arial, sans-serif;
												}

												.pagination ul {
																list-style: none;
																padding: 0;
																margin: 0;
																display: flex;
												}

												.pagination li {
																margin: 5px;
												}

												.pagination a {
																padding: 8px 12px;
																text-decoration: none;
																border: 1px solid #ddd;
																color: #333;
																transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
																border-radius: 4px;
												}

												.pagination a:hover {
																background-color: #f5f5f5;
																border-color: #aaa;
																color: #000;
																transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
												}

												.pagination .active a {
																background-color: #eee52e;
																color: #fff;
																border-color: #f5e83f;
												}

												/* pagination custom e */
								</style>

				</head>

				<body>

<section class="container-fluid container">
				<div class="wrapper d-flex flex-column">

								<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top w-100 mb-5 pt-4" style="z-index: 1;">
												<div class="container-fluid">
																<a class="navbar-brand ms-5" href="#">Book Shop</a>
																<div class="navbar-collapse collapse" id="navbarSupportedContent">
																				<form class="d-flex w-50 mx-auto" role="search">
																								<input class="form-control me-2" type="" placeholder="Search" aria-label="Search">
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
</section> --}}
@extends('header')
@section('header_footer')
				<!-- --dev_phyoewai start-- -->
				<!-- first section start -->
				<section class="container-fluid container">
								<div class="wrapper my-2 py-2">

												<div class="container-fluid row mt-3 py-1">

																<div class="col-md-7">

																				<div id="buttons" class="my-4">
																								<button class="button-value" onclick="filterProduct('all')">All</button>
																								<button class="button-value" onclick="filterProduct('Topwear')">
																												Science
																								</button>
																								<button class="button-value" onclick="filterProduct('Bottomwear')">
																												Romance
																								</button>
																								<button class="button-value" onclick="filterProduct('Jacket')">
																												Advanture
																								</button>
																								<button class="button-value" onclick="filterProduct('Watch')">
																												Horror
																								</button>
																				</div>

																</div>

																<div class="col-md-5">
																				<div id="search-container" class="">
																								<div class="row">

																												<div class="col-md-8 my-1">
																																<input type="search" id="search-input" placeholder="Search book name here.." />
																												</div>

																												<div class="col-md-4 col-ms-6">
																																<button id="search">Search</button>
																												</div>

																								</div>
																				</div>
																</div>

												</div>

												<!--div id="products" class="my-4"></div-->

								</div>

				</section>
				<!-- first section end -->
				<!-- --dev_phyoewai end-- -->

				<!-- second section start -->
				<section class="section-data pb-1">
								<div class="container-fluid container py-1 pb-1">

												<div class="row pb-1">

																<div class="col-md-3 dev-left">

																				<div class="card" style="background: #eff2f6">
																								<div class="card-header text-center"
																												style="background:
                          rgb(49, 65, 70); border-radius: 5px">
																												<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																								</div>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black"
																																style="animation-delay: 0ms">Book Name
																																<hr class="col-md-8 offset-2">
																												</h3>
																												{{-- <p class="text-warning text-center">
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star-half-stroke"></span>
																												</p> --}}
																												<p class="bigtitle text-center text-black" style="font-size: larger;">
																																<!--     not work      -->
																																<i class="fa-solid fa-money-check-dollar" style="color: rgb(235, 197, 29);"></i>
																																2500ks <span
																																				style="text-decoration: line-through;font-family: Cambria,Arial,SansSerif;">4500ks</span>
																												</p>
																												<!-- Button -->
																												<div class="col-md-6 offset-md-4">
																																<button type="button" class="btn btn-warning ms- animate__animated animate__tada"
																																				style="font-family:Harrington; animation-delay: 1000ms;">Add to cart
																																				<!--<i
																																																																								class="fa-solid fa-bag-shopping" style="color: rgb(39, 59, 61);">--></i></button>
																												</div>
																								</div>
																				</div>
																</div>

																<div class="col-md-3 dev-center">

																				<div class="card" style="background: #eff2f6">
																								<div class="card-header text-center" style="background: rgb(49, 65, 70); border-radius: 5px">
																												<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																								</div>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black">Book
																																Name
																																<hr style="background: blue" class="col-md-8 offset-2">
																												</h3>
																												{{-- <p class="text-warning text-center">
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star-half-stroke"></span>
																												</p> --}}
																												<p class="bigtitle text-center text-black" style="font-size: larger;">
																																<!--     not work      -->
																																<i class="fa-solid fa-money-check-dollar" style="color: rgb(235, 197, 29);"></i>
																																2500ks <span
																																				style="text-decoration: line-through;font-family: Cambria,Arial,SansSerif;">4500ks</span>
																												</p>
																												<!-- Button -->
																												<div class="col-md-6 offset-md-4">
																																<button type="button" class="btn btn-warning ms- animate__animated animate__tada"
																																				style="font-family:Harrington; animation-delay: 1000ms;">Add to cart
																																				<!--<i
																																																																				class="fa-solid fa-bag-shopping" style="color:rgb(39, 59, 61);"></i>--></button>
																												</div>
																								</div>
																				</div>
																</div>

																<div class="col-md-3 dev-center">

																				<div class="card" style="background: #eff2f6">
																								<div class="card-header text-center" style="background: rgb(49, 65, 70); border-radius: 5px">
																												<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																								</div>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black">Book
																																Name
																																<hr style="background: blue" class="col-md-8 offset-2">
																												</h3>
																												{{-- <p class="text-warning text-center">
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star-half-stroke"></span>
																												</p> --}}
																												<p class="bigtitle text-center text-black" style="font-size: larger;">
																																<!--     not work      -->
																																<i class="fa-solid fa-money-check-dollar" style="color: rgb(235, 197, 29);"></i>
																																2500ks <span
																																				style="text-decoration: line-through;font-family: Cambria,Arial,SansSerif;">4500ks</span>
																												</p>
																												<!-- Button -->
																												<div class="col-md-6 offset-md-4">
																																<button type="button" class="btn btn-warning ms- animate__animated animate__tada"
																																				style="font-family:Harrington; animation-delay: 1000ms;">Add to cart
																																				<!--<i
																																																																class="fa-solid fa-bag-shopping" style="color: rgb(39, 59, 61);"></i>--></button>
																												</div>
																								</div>
																				</div>
																</div>

																<div class="col-md-3 dev-right">

																				<div class="card" style="background: #eff2f6">
																								<div class="card-header text-center" style="background: rgb(49, 65, 70); border-radius: 5px">
																												<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																								</div>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black">Book
																																Name
																																<hr style="background: blue" class="col-md-8 offset-2">
																												</h3>
																												{{-- <p class="text-warning text-center">
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star-half-stroke"></span>
																												</p> --}}
																												<p class="bigtitle text-center text-black" style="font-size: larger;">
																																<!--     not work      -->
																																<i class="fa-solid fa-money-check-dollar" style="color: rgb(235, 197, 29);"></i>
																																2500ks <span
																																				style="text-decoration: line-through;font-family: Cambria,Arial,SansSerif;">4500ks</span>
																												</p>
																												<!-- Button -->
																												<div class="col-md-6 offset-md-4">
																																<button type="button" class="btn btn-warning ms- animate__animated animate__tada"
																																				style="font-family:Harrington; animation-delay: 1000ms;">Add to cart
																																				<!--<i
																																																												class="fa-solid fa-bag-shopping" style="color: rgb(39, 59, 61);"></i>--></button>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>
				</section>
				<!-- second section end -->

				<!-- third section start -->
				<section class="section-data pb-2">
								<div class="container-fluid container py-1 pb-1 pt-1">

												<div class="row">

																<div class="col-md-3 dev-left">

																				<div class="card" style="background: #eff2f6">
																								<div class="card-header text-center"
																												style="background:
                        rgb(49, 65, 70); border-radius: 5px">
																												<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																								</div>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black"
																																style="animation-delay: 0ms">Book Name
																																<hr class="col-md-8 offset-2">
																												</h3>
																												{{-- <p class="text-warning text-center">
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star-half-stroke"></span>
																												</p> --}}
																												<p class="bigtitle text-center text-black" style="font-size: larger;">
																																<!--     not work      -->
																																<i class="fa-solid fa-money-check-dollar" style="color: rgb(235, 197, 29);"></i>
																																2500ks <span
																																				style="text-decoration: line-through;font-family: Cambria,Arial,SansSerif;">4500ks</span>
																												</p>
																												<!-- Button -->
																												<div class="col-md-6 offset-md-4">
																																<button type="button" class="btn btn-warning ms- animate__animated animate__tada"
																																				style="font-family:Harrington; animation-delay: 1000ms;">Add to cart
																																				<!--<i
																																																												class="fa-solid fa-bag-shopping" style="color: rgb(39, 59, 61);"></i>--></button>
																												</div>
																								</div>
																				</div>
																</div>

																<div class="col-md-3 dev-center">

																				<div class="card" style="background: #eff2f6">
																								<div class="card-header text-center" style="background: rgb(49, 65, 70); border-radius: 5px">
																												<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																								</div>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black">Book
																																Name
																																<hr style="background: blue" class="col-md-8 offset-2">
																												</h3>
																												{{-- <p class="text-warning text-center">
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star-half-stroke"></span>
																												</p> --}}
																												<p class="bigtitle text-center text-black" style="font-size: larger;">
																																<!--     not work      -->
																																<i class="fa-solid fa-money-check-dollar" style="color: rgb(235, 197, 29);"></i>
																																2500ks <span
																																				style="text-decoration: line-through;font-family: Cambria,Arial,SansSerif;">4500ks</span>
																												</p>
																												<!-- Button -->
																												<div class="col-md-6 offset-md-4">
																																<button type="button" class="btn btn-warning ms- animate__animated animate__tada"
																																				style="font-family:Harrington; animation-delay: 1000ms;">Add to cart
																																				<!--<i
																																																												class="fa-solid fa-bag-shopping" style="color:rgb(39, 59, 61);"></i>--></button>
																												</div>
																								</div>
																				</div>
																</div>

																<div class="col-md-3 dev-center">

																				<div class="card" style="background: #eff2f6">
																								<div class="card-header text-center" style="background: rgb(49, 65, 70); border-radius: 5px">
																												<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																								</div>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black">Book
																																Name
																																<hr style="background: blue" class="col-md-8 offset-2">
																												</h3>
																												{{-- <p class="text-warning text-center">
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star-half-stroke"></span>
																												</p> --}}
																												<p class="bigtitle text-center text-black" style="font-size: larger;">
																																<!--     not work      -->
																																<i class="fa-solid fa-money-check-dollar" style="color: rgb(235, 197, 29);"></i>
																																2500ks <span
																																				style="text-decoration: line-through;font-family: Cambria,Arial,SansSerif;">4500ks</span>
																												</p>
																												<!-- Button -->
																												<div class="col-md-6 offset-md-4">
																																<button type="button" class="btn btn-warning ms- animate__animated animate__tada"
																																				style="font-family:Harrington; animation-delay: 1000ms;">Add to cart
																																				<!--<i
																																																												class="fa-solid fa-bag-shopping" style="color: rgb(39, 59, 61);"></i>--></button>
																												</div>
																								</div>
																				</div>
																</div>

																<div class="col-md-3 dev-right">

																				<div class="card" style="background: #eff2f6">
																								<div class="card-header text-center" style="background: rgb(49, 65, 70); border-radius: 5px">
																												<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																								</div>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black">Book
																																Name
																																<hr style="background: blue" class="col-md-8 offset-2">
																												</h3>
																												{{-- <p class="text-warning text-center">
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star-half-stroke"></span>
																												</p> --}}
																												<p class="bigtitle text-center text-black" style="font-size: larger;">
																																<!--     not work      -->
																																<i class="fa-solid fa-money-check-dollar" style="color: rgb(235, 197, 29);"></i>
																																2500ks <span
																																				style="text-decoration: line-through;font-family: Cambria,Arial,SansSerif;">4500ks</span>
																												</p>
																												<!-- Button -->
																												<div class="col-md-6 offset-md-4">
																																<button type="button" class="btn btn-warning ms- animate__animated animate__tada"
																																				style="font-family:Harrington; animation-delay: 1000ms;">Add to cart
																																				<!--<i
																																																												class="fa-solid fa-bag-shopping" style="color: rgb(39, 59, 61);"></i>--></button>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>
				</section>
				<!-- third section end -->

				<!-- fourth section start -->
				<section class="section-data pb-2">
								<div class="container-fluid container py-1 pb-1 pt-1">

												<div class="row">

																<div class="col-md-3 dev-left">

																				<div class="card" style="background: #eff2f6">
																								<div class="card-header text-center"
																												style="background:
                          rgb(49, 65, 70); border-radius: 5px">
																												<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																								</div>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black"
																																style="animation-delay: 0ms">Book Name
																																<hr class="col-md-8 offset-2">
																												</h3>
																												{{-- <p class="text-warning text-center">
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star-half-stroke"></span>
																												</p> --}}
																												<p class="bigtitle text-center text-black" style="font-size: larger;">
																																<!--     not work      -->
																																<i class="fa-solid fa-money-check-dollar" style="color: rgb(235, 197, 29);"></i>
																																2500ks <span
																																				style="text-decoration: line-through;font-family: Cambria,Arial,SansSerif;">4500ks</span>
																												</p>
																												<!-- Button -->
																												<div class="col-md-6 offset-md-4">
																																<button type="button" class="btn btn-warning ms- animate__animated animate__tada"
																																				style="font-family:Harrington; animation-delay: 1000ms;">Add to cart
																																				<!--<i
																																																												class="fa-solid fa-bag-shopping" style="color: rgb(39, 59, 61);"></i>--></button>
																												</div>
																								</div>
																				</div>
																</div>

																<div class="col-md-3 dev-center">

																				<div class="card" style="background: #eff2f6">
																								<div class="card-header text-center" style="background: rgb(49, 65, 70); border-radius: 5px">
																												<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																								</div>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black">Book
																																Name
																																<hr style="background: blue" class="col-md-8 offset-2">
																												</h3>
																												{{-- <p class="text-warning text-center">
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star-half-stroke"></span>
																												</p> --}}
																												<p class="bigtitle text-center text-black" style="font-size: larger;">
																																<!--     not work      -->
																																<i class="fa-solid fa-money-check-dollar" style="color: rgb(235, 197, 29);"></i>
																																2500ks <span
																																				style="text-decoration: line-through;font-family: Cambria,Arial,SansSerif;">4500ks</span>
																												</p>
																												<!-- Button -->
																												<div class="col-md-6 offset-md-4">
																																<button type="button" class="btn btn-warning ms- animate__animated animate__tada"
																																				style="font-family:Harrington; animation-delay: 1000ms;">Add to cart
																																				<!--<i
																																																												class="fa-solid fa-bag-shopping" style="color:rgb(39, 59, 61);"></i>--></button>
																												</div>
																								</div>
																				</div>
																</div>

																<div class="col-md-3 dev-center">

																				<div class="card" style="background: #eff2f6">
																								<div class="card-header text-center" style="background: rgb(49, 65, 70); border-radius: 5px">
																												<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																								</div>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black">Book
																																Name
																																<hr style="background: blue" class="col-md-8 offset-2">
																												</h3>
																												{{-- <p class="text-warning text-center">
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star-half-stroke"></span>
																												</p> --}}
																												<p class="bigtitle text-center text-black" style="font-size: larger;">
																																<!--     not work      -->
																																<i class="fa-solid fa-money-check-dollar" style="color: rgb(235, 197, 29);"></i>
																																2500ks <span
																																				style="text-decoration: line-through;font-family: Cambria,Arial,SansSerif;">4500ks</span>
																												</p>
																												<!-- Button -->
																												<div class="col-md-6 offset-md-4">
																																<button type="button" class="btn btn-warning ms- animate__animated animate__tada"
																																				style="font-family:Harrington; animation-delay: 1000ms;">Add to cart
																																				<!--<i
																																																												class="fa-solid fa-bag-shopping" style="color: rgb(39, 59, 61);"></i>--></button>
																												</div>
																								</div>
																				</div>
																</div>

																<div class="col-md-3 dev-right">

																				<div class="card" style="background: #eff2f6">
																								<div class="card-header text-center" style="background: rgb(49, 65, 70); border-radius: 5px">
																												<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																								</div>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black">Book
																																Name
																																<hr style="background: blue" class="col-md-8 offset-2">
																												</h3>
																												{{-- <p class="text-warning text-center">
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star"></span>
																																<span class="fa-solid fa-star-half-stroke"></span>
																												</p> --}}
																												<p class="bigtitle text-center text-black" style="font-size: larger;">
																																<!--     not work      -->
																																<i class="fa-solid fa-money-check-dollar" style="color: rgb(235, 197, 29);"></i>
																																2500ks <span
																																				style="text-decoration: line-through;font-family: Cambria,Arial,SansSerif;">4500ks</span>
																												</p>
																												<!-- Button -->
																												<div class="col-md-6 offset-md-4">
																																<button type="button" class="btn btn-warning ms- animate__animated animate__tada"
																																				style="font-family:Harrington; animation-delay: 1000ms;">Add to cart
																																				<!--<i
																																																												class="fa-solid fa-bag-shopping" style="color: rgb(39, 59, 61);"></i>--></button>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
								</div>
				</section>
				<!-- fourth section end -->

				<!-- pagination section start -->
				{{-- <section class="container mt-4">
								<div class="pagination col-md-4 offset-md-5">
												<ul id="paginationList">
																<!-- Pagination links will be dynamically added here -->
												</ul>
								</div>
				</section> --}}
				<!-- pagination section end -->

				<div class="col-md-2 container mt-4 py-4" style="color: rgb(151, 163, 172);font-style: italic;">
								<h6></h6>
				</div>
@endsection

{{-- <footer class="footer bg-info-subtle mt-auto">
												<div class="container text-center">
																<span class="text-muted">&copy; 2023 Bookshop.com. All Rights Reserved.</span>
												</div>
								</footer>

								<!--
				@yield('header_footer')
		--> --}}

@section('script')
				<script>
								const card = document.querySelector('.card');

								card.addEventListener('mouseover', function() {
												this.style.transform = 'scale(1.05)'; // Enlarge the card
												this.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.3)'; // Add shadow
												// Add any other style changes you want on hover
								});

								card.addEventListener('mouseout', function() {
												this.style.transform = 'scale(1)'; // Restore original size
												this.style.boxShadow = 'none'; // Remove shadow
												// Restore any other original styles
								});
				</script>

				<!-- pagination s -->
				<script>
								// const itemsPerPage = 10; // Items per page
								// const totalItems = 40; // Total items in your list
								// const totalPages = Math.ceil(totalItems / itemsPerPage);

								// const paginationList = document.getElementById("paginationList");

								function createPagination() {
												for (let i = 1; i <= totalPages; i++) {
																const li = document.createElement("li");
																const link = document.createElement("a");
																link.href = "#";
																link.textContent = i;
																li.appendChild(link);
																paginationList.appendChild(li);

																link.addEventListener("click", function(event) {
																				event.preventDefault();
																				setActivePage(i);
																				displayItems(i);
																});
												}
								}

								function setActivePage(pageNumber) {
												const paginationLinks = document.querySelectorAll(".pagination a");
												paginationLinks.forEach((link, index) => {
																if (index + 1 === pageNumber) {
																				link.parentElement.classList.add("active");
																} else {
																				link.parentElement.classList.remove("active");
																}
												});
								}

								function displayItems(pageNumber) {
												// Logic to display items for the selected page
												// Replace this with your own logic to show items
												console.log(`Displaying items for page ${pageNumber}`);
								}

								// Initialize pagination
								createPagination();
								setActivePage(1); // Set first page as active by default
								displayItems(1); // Display items for the first page by default
				</script>
				<!-- pagination e -->

				<script>
								const itemsPerPage = 10; // Items per page
								const totalItems = 40; // Total items in your list
								const totalPages = Math.ceil(totalItems / itemsPerPage);

								const paginationList = document.getElementById("paginationList");

								function createPagination() {
												for (let i = 1; i <= totalPages; i++) {
																const li = document.createElement("li");
																const link = document.createElement("a");
																link.href = "#";
																link.textContent = i;
																li.appendChild(link);
																paginationList.appendChild(li);

																link.addEventListener("click", function(event) {
																				event.preventDefault();
																				setActivePage(i);
																				displayItems(i);
																});

																link.addEventListener("mouseover", function() {
																				link.style.backgroundColor = "#f5f5f5";
																				link.style.borderColor = "#aaa";
																				link.style.color = "#000";
																});

																link.addEventListener("mouseout", function() {
																				if (!link.parentElement.classList.contains("active")) {
																								link.style.backgroundColor = "";
																								link.style.borderColor = "#ddd";
																								link.style.color = "#333";
																				}
																});
												}
								}

								function setActivePage(pageNumber) {
												const paginationLinks = document.querySelectorAll(".pagination a");
												paginationLinks.forEach((link, index) => {
																if (index + 1 === pageNumber) {
																				link.parentElement.classList.add("active");
																				link.style.backgroundColor = "#007bff";
																				link.style.borderColor = "#007bff";
																				link.style.color = "#fff";
																} else {
																				link.parentElement.classList.remove("active");
																				link.style.backgroundColor = "";
																				link.style.borderColor = "#ddd";
																				link.style.color = "#333";
																}
												});
								}

								function displayItems(pageNumber) {
												// Logic to display items for the selected page
												// Replace this with your own logic to show items
												console.log(`Displaying items for page ${pageNumber}`);
								}

								// Initialize pagination
								createPagination();
								setActivePage(1); // Set first page as active by default
								displayItems(1); // Display items for the first page by default
				</script>

				<script src="https://unpkg.com/scrollreveal"></script>
				<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
{{-- </body>

<!-- @yield('script') -->

</html>

<!--div>
				When there is no desire, all things are at peace. - Laozi
</div--> --}}
