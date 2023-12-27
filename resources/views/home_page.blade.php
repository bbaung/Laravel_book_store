<h1>
				Home page
</h1>

@extends('header')

@section('style')
				<link rel="stylesheet"
								href="{{ asset('assets/js/css/home_page.css') }}
@endsection

@section('header_footer')
<div class="container-fluid
								align-self-center w-75 bg-body-tertiary main-body">
				<div class="row">
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
				</div>
@endsection
