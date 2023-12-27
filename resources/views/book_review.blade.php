@extends('header')

@section('style')
				<link rel="stylesheet" href="{{ asset('assets/css/book_review.css') }}">
@endsection

@section('header_footer')
				<div class="container-fluid align-self-center w-75 main-body mt-5">
								<div class="row">
												<h3 class="d-inline col-6">Book Name</h3>
												<a class="d-inline-block fs-5 col-6 text-end" href="{{ route('home_page') }}">Home Menu</a>
								</div>
								<div class="row pt-3">
												<div class="col-3">
																<div class="card" style="width: 17rem;">
																				<img src="https://i.pinimg.com/originals/20/2b/18/202b1875a6513529150b232668ce0a4d.jpg"
																								class="card-img-top" alt="...">
																</div>
												</div>
												<div class="col-9">
																<div class="card w-100 h-100">
																				<div class="card-body">
																								<h4 class="card-title">Card title</h4>
																								<p class="card-text">In YOU CAN, YOU WILL, Joel Osteen shares eight undeniable qualities
																												of
																												winners that can help you to reach your potential and achieve new levels of success
																												in your
																												life. You are created to be a winner. Get these eight principles deep down on the
																												inside and
																												boldly go in the direction of your destiny.</p>
																								<div class="position-absolute d-flex bottom-0">
																												<button type="button" class="btn btn-sm btn-secondary mx-2 my-3" disabled>2000
																																mmk</button>
																												<button type="button" class="btn btn-sm btn-secondary mx-2 my-3" disabled>100
																																stock</button>
																												<button type="button" class="btn btn-sm btn-outline-success mx-2 my-3">Add to
																																cart</button>

																								</div>
																				</div>
																</div>
												</div>
								</div>
				</div>
@endsection
