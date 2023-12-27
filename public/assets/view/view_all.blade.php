<!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta http-equiv="X-UA-Compatible" content="IE=edge">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">

								<!-------- title ----------->
								<title>ATS-OJT || Online Books Shop</title>

								<!-------- customer style link ----------->
								<link rel="stylesheet" href="./css/style.css">

								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">

								<!-------- font awesome cdn link --------->
								<link rel="stylesheet" href="./fontawesome-free-6.4.2-web/css/all.min.css" />

								<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

								<!------- swipper cdn link ------------>
								<link rel="stylesheet" href="./css/swiper-bundle.min.css" />

								<script src="./js/tailwing/tailwing.js"></script>

				</head>

				<body>
								<!-------- categories section start  ----------->

								<div class="container-fluid">
												<!-------- arrivals section start  ----------->
												<section class="arrivals" id="arrivals">

																<div class="heading mt-4"></div>
																<div class="row">

																				<div class="col-md-12">

																								<div class="mt-5">

																								</div>

																								<!---- Filter buttons -->

																								<div id="myBtnContainer" class="col-md-12">
																												<!-- button class="btn active" onclick="filterSelection('all')" style="margin-right: 40px;">All Books</button>

																												<button class="btn" onclick="filterSelection('fantasy') " style="margin-right: 5px;"> Fantasy</button>
																												<button class="btn" onclick="filterSelection('romance')" style="margin-right:5px;"> Romance</button>
																												<button class="btn" onclick="filterSelection('Science')" style="margin-right: 5px;"> Science</button>
																												<button class="btn" onclick="filterSelection('crimeDrama')" style="margin-right: 500px;"> Crime-Drama</button -->

																								</div>

																				</div>

																</div>

																<!--------- arrival start ---------- -->
																<div class="heading mt-4"></div>
																<div class="btn" style="width:40px;height: 33px;margin-bottom: 14px;">
																				<a href="#"> <i class='bx bx-home mt-2' style="font-size: 17px;"></i></a>
																</div>
																<input class="ml" type="radio" name="group" id="all-btn" value="all"
																				onclick="history.go(0)" checked="checked">
																<label class="ml" for="all-btn"> All</label>
																<input class="" type="radio" name="group" id="bds-btn" value="bds">
																<label for="bds-btn">Science</label>
																<input class="" type="radio" name="group" id="nov-btn" value="nov">
																<label for="nov-btn">Romance</label>
																<input class="" type="radio" name="group" id="adv-btn" value="adv">
																<label for="adv-btn">Advanture</label>

																<div class="swiper arrivals-slider">

																				<div id="paginationList" class="swiper-wrapper">

																								<a href="" class="swiper-slide box nov">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Novel</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv nov">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box adv">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box nov">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>
																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv nov">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																				</div>
																</div>

																<div class="swiper arrivals-slider">

																				<div class="swiper-wrapper">

																								<a href="" class="swiper-slide box adv">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box adv">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box adv">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box adv">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>
																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv bds">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																				</div>
																</div>

																<!-- --------- arrival start ---------- -->
																<!--<div class="swiper arrivals-slider">

												<div class="gallery swiper-wrapper">

																<a href="" class="swiper-slide box bds">
																				<div class="image">
																								<img src="./image/book-1.png" alt="">
																				</div>
																				<div class="content">
																								<h3>Book Name</h3>
																								<div class="price">2500ks <span> 4500ks</span></div>
																								<div class="stars">
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star-half-alt"></i>
																								</div>

																								<div class="btn">
																												<button>Buy Now</button>
																								</div>
																				</div>
																</a>

																<a href="" class="swiper-slide box filterDiv bds">
																				<div class="image">
																								<img src="./image/book-1.png" alt="">
																				</div>
																				<div class="content">
																								<h3>Bed Time Story</h3>
																								<div class="price">2500ks <span> 4500ks</span></div>
																								<div class="stars">
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star-half-alt"></i>
																								</div>

																								<div class="btn">
																												<button>Buy Now</button>
																								</div>
																				</div>
																</a>

																<a href="" class="swiper-slide box filterDiv autoBiograpghy">
																				<div class="image">
																								<img src="./image/book-1.png" alt="">
																				</div>
																				<div class="content">
																								<h3>Book Name</h3>
																								<div class="price">2500ks <span> 4500ks</span></div>
																								<div class="stars">
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star-half-alt"></i>
																								</div>

																								<div class="btn">
																												<button>Buy Now</button>
																								</div>
																				</div>
																</a>

																<a href="" class="swiper-slide box filterDiv crimeDrama">
																				<div class="image">
																								<img src="./image/book-1.png" alt="">
																				</div>
																				<div class="content">
																								<h3>Book Name</h3>
																								<div class="price">2500ks <span> 4500ks</span></div>
																								<div class="stars">
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star-half-alt"></i>
																								</div>
																								<div class="btn">
																												<button>Buy Now</button>
																								</div>
																				</div>
																</a>

																<a href="" class="swiper-slide box filterDiv crimeDrama romance">
																				<div class="image">
																								<img src="./image/book-1.png" alt="">
																				</div>
																				<div class="content">
																								<h3>Book Name</h3>
																								<div class="price">2500ks <span> 4500ks</span></div>
																								<div class="stars">
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star"></i>
																												<i class="fas fa-star-half-alt"></i>
																								</div>

																								<div class="btn">
																												<button>Buy Now</button>
																								</div>
																				</div>
																</a>

												</div>
								</div>-->

																<div class="swiper arrivals-slider">

																				<div class="swiper-wrapper">

																								<a href="" class="swiper-slide box romance">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv fantasy">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv autoBiograpghy">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv crimeDrama">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>
																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv crimeDrama romance">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																				</div>
																</div>

																<!--------         -------->

																<div class="swiper arrivals-slider">

																				<div class="swiper-wrapper">

																								<a href="" class="swiper-slide box romance">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv fantasy">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv autoBiograpghy">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv crimeDrama">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>
																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv crimeDrama romance">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																				</div>
																</div>
																<!-------------------->

																<div class="swiper arrivals-slider">

																				<div class="swiper-wrapper">

																								<a href="" class="swiper-slide box romance">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv fantasy">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv autoBiograpghy">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv crimeDrama">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>
																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																								<a href="" class="swiper-slide box filterDiv crimeDrama romance">
																												<div class="image">
																																<img src="./image/book-1.png" alt="">
																												</div>
																												<div class="content">
																																<h3>Book Name</h3>
																																<div class="price">2500ks <span> 4500ks</span></div>
																																<div class="stars">
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star"></i>
																																				<i class="fas fa-star-half-alt"></i>
																																</div>

																																<div class="btn">
																																				<button>Buy Now</button>
																																</div>
																												</div>
																								</a>

																				</div>
																</div>

												</section>
												<!-- Pagination bar -->
												<div class="container">
																<div class="row justify-content-center mt-5">
																				<ul class="pagination pagination-lg">
																								<button class="control" id="prev" title="Previous page">
																												< Prev </button>
																																<div class="pageNumbers">
																																				<!--Page Numbers-->
																																</div>
																																<button class="control" id="next" title="Next page">
																																				Next >
																																</button>
																				</ul>
																</div>
												</div>

								</div>

								<!-------- arrivals section ends  ----------->
								<script src="./js/Pagination.js"></script>

								<!-------- categories section ends  ----------->
								<!-------- footer section start  ----------->

								<section class="footer">

												<div class="box-container"></div>

								</section>

								<!-------- footer section ends  ----------->

								<!---- swiper cdn link ---------->
								<script src="./js/swiper-bundle.min.js"></script>
								<!------- customer script link --------->
								<script src="./js/script.js"></script>

				</body>

</html>
