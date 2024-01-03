<!-- Main Content -->

@extends('admin.admin_header')

@section('admin_header_style')
				.admin__history {
				font-family: 'Courier New', Courier, monospace;
@endsection

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
																												<h5>Role - admin</h5>
																								</div>

																								<div class="col-md-2 offset-2">
																												<span><button class="btn btn-outline-success admin__history mt-2">Active</button></span>
																												<span><button class="btn btn-outline-danger admin__history mt-2">History</button></span>
																								</div>
																				</div>
																</div>
								</section>
								<!-- first section end -->

								<!-- second section start -->
								<section class="container-fluid container">
												<div class="container mt-3">
																<div class="jumbo mt-4 rounded p-4 text-white">

																				<h3 class="admin__history">History Record</h3>
																				<div class="table-responsive py-4 text-center">
																								<table class="table-bordered admin__history table" style="border: 1px solid #0755bb;">
																												<thead style="background-color: royalblue;">
																																<tr>
																																				<th>Date</th>
																																				<th>Action</th>
																																				<th>Particular</th>
																																				<th>User phone</th>
																																				<th>User address</th>
																																				<th>Block id</th>

																																</tr>
																												</thead>

																												<tbody>
																																<tr>
																																				<td>27-12-2023</td>
																																				<td>Edit</td>
																																				<td>hr.resume@gmail.com</td>
																																				<td>097-709-66017</td>
																																				<td>New York</td>
																																				<td>Female</td>

																																</tr>
																												</tbody>

																												<tbody>
																																<tr>
																																				<td>27-12-2023</td>
																																				<td>Add</td>
																																				<td>hr.resume@gmail.com</td>
																																				<td>097-709-66017</td>
																																				<td>New York</td>
																																				<td>Female</td>

																																</tr>
																												</tbody>

																												<tbody>
																																<tr>
																																				<td>27-12-2023</td>
																																				<td>Del</td>
																																				<td>hr.resume@gmail.com</td>
																																				<td>097-709-66017</td>
																																				<td>New York</td>
																																				<td>Female</td>
																																</tr>
																												</tbody>

																								</table>
																				</div>
																</div>
												</div>
								</section>
								<!-- second section end -->

								<!-- dev_phyoe end -->

								{{-- <h6 class="text-muted offset-10 mt-4" style="font-family:Harrington;"> dev_phyoewai &copy; </h6> --}}

				</div>
@endsection
