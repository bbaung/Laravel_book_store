<!-- Main Content -->
@extends('admin.admin_header')

@section('admin_header')
				<div class="col-md-9">

								<!-- dev_phyoe start -->

								<!-- first section start -->
								<section class="container-fluid container">

												<div class="container mt-3">

																<div class="jumbo mt-4 rounded p-5 text-white">

																				<div class="row container">

																								<div class="col-md-2">
																												<div class="card" style="width:100px ; height:100px;">
																												</div>

																								</div>

																								<div class="col-md-6 admin__history mt-2">
																												<h5>Admin User</h5>
																												<h5>Email - hr.admin@gmail.com</h5>
																												<h5>Role - Editor</h5>
																								</div>

																								<div class="col-md-2 offset-2">
																												<span><button class="btn btn-outline-success admin__history mt-2">Active</button></span>
																												<a href="{{ route('admin_history') }}"><span><button
																																								class="btn btn-outline-danger admin__history mt-2">History</button></span></a>
																								</div>
																				</div>
																</div>
								</section>
								<!-- first section end -->

								<!-- second section start -->
								<section class="container-fluid container">

												<div class="container mt-3">

																<div class="jumbo mt-4 rounded p-5 text-white">

																				<div class="row container">

																								<div class="col-md-2">
																												<div class="card" style="width:100px ; height:100px;">
																												</div>

																								</div>

																								<div class="col-md-6 admin__history mt-2">
																												<h5>Admin User</h5>
																												<h5>Email - hr.admin@gmail.com</h5>
																												<h5>Role - Editor</h5>
																								</div>

																								<div class="col-md-2 offset-2">
																												<span><button class="btn btn-outline-success admin__history mt-2">Active</button></span>
																								</div>
																				</div>
																</div>
								</section>
								<!-- second section end -->

								<!-- third section start -->
								<section class="container-fluid container">

												<div class="container mt-3">

																<div class="jumbo mt-4 rounded p-5 text-white">

																				<div class="row container">

																								<div class="col-md-2">
																												<div class="card" style="width:100px ; height:100px;">
																												</div>

																								</div>

																								<div class="col-md-6 admin__history mt-2">
																												<h5>Admin User</h5>
																												<h5>Email - hr.admin@gmail.com</h5>
																												<h5>Role - Editor</h5>
																								</div>

																								<div class="col-md-2 offset-2">
																												<span><button class="btn btn-outline-muted admin__history mt-2 border">Sleep</button></span>

																								</div>
																				</div>
																</div>
								</section>
								<!-- third section end -->

								<!-- dev_phyoe end -->

								{{-- <h6 class="text-muted offset-10 mt-4" style="font-family:Harrington;"> dev_phyoewai &copy; </h6> --}}

				</div>
@endsection
