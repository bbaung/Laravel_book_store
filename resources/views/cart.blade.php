<!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<title>Document</title>
								<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
												integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
								<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

								<style>
												body {
																height: 100%;
																margin: 0;
																padding: 0;
												}

												.wrapper {
																min-height: 100%;
																margin-bottom: -100px;
																/* Height of the footer */
												}

												.footer {
																background-color: #f8f9fa;
																padding: 20px 0;
																text-align: center;
																position: absolute;
																bottom: 0;
																width: 100%;
																height: 60px;
												}

												.navbar-brand {
																text-decoration: none;
																transition: text-decoration 0.5s ease;
												}

												.navbar-brand:hover {
																text-decoration: underline;
												}

												.main-body {
																padding-top: 130px;
												}

												.cart-list {
																height: 400px;
												}

												.input-group {
																width: 100px;
												}

												.deleteBtn {
																border-radius: 50%;
												}
								</style>
				</head>

				<body>
								<div class="wrapper d-flex flex-column">
												<div class="w-100 fixed-top bg-body-tertiary" style="z-index: 1;">
																<nav class="navbar navbar-expand-lg pt-3">
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
																												<button type="button" class="btn btn-outline-secondary">Sign In</button>
																								</div>
																								<div class="nav-item mx-auto me-5">
																												<button type="button" class="btn btn-outline-secondary"><i
																																				class="fa-sharp fa-solid fa-cart-shopping fa-beat-fade"></i> My Cart</button>
																								</div>
																				</div>
																</nav>

																<div class="navbar navbar-expand-lg navbar-light">
																				<div class="container-fluid align-self-center w-75">
																								<a class="navbar-brand" href="#">Fiction</a>
																								<a class="navbar-brand" href="#">Science</a>
																								<a class="navbar-brand" href="#">Action</a>
																								<a class="navbar-brand" href="#">Romance</a>
																				</div>
																</div>
												</div>
												<div class="align-self-center w-75 main-body">
																<h3 class="text-decoration-underline pb-3 text-center">Cart List</h3>

																<table class="cart-list table-light m-3 table text-center">
																				<thead>
																								<tr>
																												<th scope="col">Item</th>
																												<th scope="col">Price</th>
																												<th scope="col">Quantity</th>
																												<th scope="col">Total</th>
																												<th scope="col"></th>
																								</tr>
																				</thead>
																				<tbody>
																								<tr>
																												<th scope="row">You Can You Will 1<br> Joel Osten</th>
																												<td class="price">2000</td>
																												<td class="text-center">
																																<div class="input-group d-inline-flex">
																																				<div class="input-group-prepend">
																																								<button class="btn btn-outline-secondary minusBtn" type="button"
																																												id="">-</button>
																																				</div>
																																				<input type="text" class="form-control quantityInput text-center" value="1"
																																								id="">
																																				<div class="input-group-append">
																																								<button class="btn btn-outline-secondary plusBtn" type="button"
																																												id="">+</button>
																																				</div>
																																</div>
																												</td>
																												<td class="totalPrice">2000</td>
																												<td><button type="button" class="btn btn-danger deleteBtn"><i
																																								class="fas fa-times"></i></button></td>
																								</tr>
																								<tr>
																												<th scope="row">You Can You Will 2<br> Joel Osten</th>
																												<td class="price">2000</td>
																												<td class="text-center">
																																<div class="input-group d-inline-flex">
																																				<div class="input-group-prepend">
																																								<button class="btn btn-outline-secondary minusBtn" type="button"
																																												id="">-</button>
																																				</div>
																																				<input type="text" class="form-control quantityInput text-center" value="1"
																																								id="">
																																				<div class="input-group-append">
																																								<button class="btn btn-outline-secondary plusBtn" type="button"
																																												id="">+</button>
																																				</div>
																																</div>
																												</td>
																												<td class="totalPrice">2000</td>
																												<td><button type="button" class="btn btn-danger deleteBtn"><i
																																								class="fas fa-times"></i></button></td>
																								</tr>
																								<tr>
																												<th scope="row">You Can You Will 3<br> Joel Osten</th>
																												<td class="price">2000</td>
																												<td class="text-center">
																																<div class="input-group d-inline-flex">
																																				<div class="input-group-prepend">
																																								<button class="btn btn-outline-secondary minusBtn" type="button"
																																												id="">-</button>
																																				</div>
																																				<input type="text" class="form-control quantityInput text-center"
																																								value="1" id="">
																																				<div class="input-group-append">
																																								<button class="btn btn-outline-secondary plusBtn" type="button"
																																												id="">+</button>
																																				</div>
																																</div>
																												</td>
																												<td class="totalPrice">2000</td>
																												<td><button type="button" class="btn btn-danger deleteBtn"><i
																																								class="fas fa-times"></i></button></td>
																								</tr>
																				</tbody>
																</table>
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
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
				<script>
								$(document).ready(function() {
												// Increment button
												$(".plusBtn").click(function() {
																var $parent = $(this).closest("tr");
																var currentVal = parseInt($parent.find(".quantityInput").val());
																if (!isNaN(currentVal)) {
																				$parent.find(".quantityInput").val(currentVal + 1);
																} else {
																				$parent.find(".quantityInput").val(1);
																}

																var price = parseInt($parent.find(".price").text());
																var quantity = parseInt($parent.find(".quantityInput").val());
																var totalPrice = price * quantity;
																$parent.find(".totalPrice").text(totalPrice);
												});

												// Decrement button
												$(".minusBtn").click(function() {
																var $parent = $(this).closest("tr");
																var currentVal = parseInt($parent.find(".quantityInput").val());
																if (!isNaN(currentVal) && currentVal > 1) {
																				$parent.find(".quantityInput").val(currentVal - 1);

																				var price = parseInt($parent.find(".price").text());
																				var quantity = parseInt($parent.find(".quantityInput").val());
																				var totalPrice = price * quantity;
																				$parent.find(".totalPrice").text(totalPrice);
																} else {
																				$parent.find(".quantityInput").val(1);
																}
												});

												$(document).on("click", ".deleteBtn", function() {
																$(this).closest("tr").remove();
												});
								});
				</script>

</html>
<div>
				<!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>
