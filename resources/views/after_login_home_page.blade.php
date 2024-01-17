<h1>
				Home page
</h1>

@extends('after_login_header')

@section('style')
				<link rel="stylesheet"
								href="{{ asset('assets/js/css/home_page.css') }}
@endsection

@section('header_footer')
{{-- <div class="container-fluid
								align-self-center w-75 bg-body-tertiary main-body">

				<div class="row mt-5">
								<h3 class="d-inline col-6"></h3>
								<a class="d-inline-block fs-5 col-6 text-end" href=""></a>
				</div>
				<div class="row mt-5">
								<h3 class="d-inline col-6"></h3>
								<a class="d-inline-block fs-5 col-6 text-end" href=""></a>
				</div>
				<div class="row mt-5">
								<h3 class="d-inline col-6">Best Selling Books in 2023</h3>
								<a class="d-inline-block fs-5 col-6 text-end" href="{{ route('view_all') }}">View All</a>
				</div>
				<div class="row my-5">
								<div class="col-2">
												<div class="card" style="width: 7rem;">
																<a href="{{ route('book_review') }}">
																				<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																								class="card-img-top" alt="...">
																</a>

												</div>
								</div>
								<div class="col-2">
												<div class="card" style="width: 7rem;">
																<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg" class="card-img-top"
																				alt="...">
												</div>
								</div>
								<div class="col-2">
												<div class="card" style="width: 7rem;">
																<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg" class="card-img-top"
																				alt="...">
												</div>
								</div>
								<div class="col-2">
												<div class="card" style="width: 7rem;">
																<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg" class="card-img-top"
																				alt="...">
												</div>
								</div>
								<div class="col-2">
												<div class="card" style="width: 7rem;">
																<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg" class="card-img-top"
																				alt="...">
												</div>
								</div>
								<div class="col-2">
												<div class="card" style="width: 7rem;">
																<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg" class="card-img-top"
																				alt="...">
												</div>
								</div>
								<div class="row mt-5">
												<h3 class="d-inline col-6">Best Reviewed Books </h3>
												<a class="d-inline-block fs-5 col-6 text-end" href="{{ route('view_all') }}">View All</a>
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
				</div> --}}

                <!-- --dev_phyoewai start-- -->
				<!-- first section start -->
				<section class="container-fluid
								container">
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
												<div class="row mt-5">
																<h3 class="d-inline col-6">Best Selling Books in 2023</h3>
																<a class="d-inline-block fs-5 col-6 text-end" href="{{ route('after_login_view_all') }}">View All</a>
												</div>

												<div class="row pb-1">

																<div class="col-md-3 dev-left">

																				<div class="card" style="background: #eff2f6">
																								<a href="{{ route('after_login_book_review') }}">
																												<div class="card-header text-center"
																																style="background:
                          rgb(49, 65, 70); border-radius: 5px">
																																<img src="{{ asset('assets/view/image/vap-r.png') }}" alt="" class="img-fluid">
																												</div>
																								</a>
																								<div class="card-block py-3 pb-2" style="background: #eff2f6">
																												<h3 class="bigtitle animate__animated animate__rubberBand text-center text-black"
																																style="animation-delay: 0ms">Book Name
																																<hr class="col-md-8 offset-2">
																												</h3>

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
												<div class="row mt-5">
																<h3 class="d-inline col-6">Best Reviewed Books </h3>
																<a class="d-inline-block fs-5 col-6 text-end" href="{{ route('after_login_view_all') }}">View All</a>
												</div>
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

																								</div>
																				</div>
																</div>
												</div>
								</div>
				</section>
				<!-- third section end -->

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
