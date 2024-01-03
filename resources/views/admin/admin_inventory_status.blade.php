<!-- Main Content -->
@extends('admin.admin_header')

@section('admin_header_style')
				/* dev_phyoe */
				.invs {
				font-family: 'Courier New', Courier, monospace;
				}

				table {
				font-family: 'Courier New', Courier, monospace;
				border-collapse: collapse;
				border: 1px solid #0755bb;
				}

				td,
				th {
				border: 1px solid #0755bb;
				text-align: center;
				}

				tr:nth-child(even) {
				background-color: royalblue;
				}
@endsection

@section('admin_header')
				<div class="col-md-9 mt-4 py-4">

								<!-- dev_phyoe start -->
								<!-- section 1 -->
								<section class="container">
												<h2 class="invs">Inventory Status</h2>
												<div class="container-fluid mt-4 py-3">
																<form action="">
																				<input type="text" placeholder="Enter ID Or Name..." name="search" class="btn btn-outline-warning">
																				<button class="btn btn-outline-warning" type="submit"><i class="fa fa-search"></i></button>
																</form>
												</div>
								</section>
								<!-- section 1 end -->
								<!-- section 2 -->
								<section class="container mt-4 py-3">
												<div class="table-responsive text-center">
																<table class="table-bordered table" style="border: 1px solid #0755bb;">
																				<thead style="background-color: royalblue;">
																								<tr>
																												<th>id</th>
																												<th>Name</th>
																												<th>Auther</th>
																												<th>Categories</th>
																												<th>Release Date</th>
																												<th>Price</th>
																												<th>Quantity</th>
																												<th colspan="2">Function</th>
																								</tr>
																				</thead>

																				<tbody>
																								<tr>
																												<td>ATS001</td>
																												<td>Nagazaren</td>
																												<td>Sherlock Holmes</td>
																												<td>New York</td>
																												<td>USA</td>
																												<td>Female</td>
																												<td>Yes</td>
																												<td><button class="btn btn-outline-warning">Edit</button></td>
																												<td><button class="btn btn-outline-danger">Del</button></td>
																								</tr>
																				</tbody>

																				<tbody>
																								<tr>
																												<td>ATS001</td>
																												<td>Nagazaren</td>
																												<td>Sherlock Holmes</td>
																												<td>New York</td>
																												<td>USA</td>
																												<td>Female</td>
																												<td>Yes</td>
																												<td><button class="btn btn-outline-warning">Edit</button></td>
																												<td><button class="btn btn-outline-danger">Del</button></td>
																								</tr>
																				</tbody>

																				<tbody>
																								<tr>
																												<td>ATS001</td>
																												<td>Nagazaren</td>
																												<td>Sherlock Holmes</td>
																												<td>New York</td>
																												<td>USA</td>
																												<td>Female</td>
																												<td>Yes</td>
																												<td><button class="btn btn-outline-warning">Edit</button></td>
																												<td><button class="btn btn-outline-danger">Del</button></td>
																								</tr>
																				</tbody>

																				<tbody>
																								<tr>
																												<td>ATS001</td>
																												<td>Nagazaren</td>
																												<td>Sherlock Holmes</td>
																												<td>New York</td>
																												<td>USA</td>
																												<td>Female</td>
																												<td>Yes</td>
																												<td><button class="btn btn-outline-warning">Edit</button></td>
																												<td><button class="btn btn-outline-danger">Del</button></td>
																								</tr>
																				</tbody>

																				<tbody>
																								<tr>
																												<td>ATS001</td>
																												<td>Nagazaren</td>
																												<td>Sherlock Holmes</td>
																												<td>New York</td>
																												<td>USA</td>
																												<td>Female</td>
																												<td>Yes</td>
																												<td><button class="btn btn-outline-warning">Edit</button></td>
																												<td><button class="btn btn-outline-danger">Del</button></td>
																								</tr>
																				</tbody>

																				<tbody>
																								<tr>
																												<td>ATS001</td>
																												<td>Nagazaren</td>
																												<td>Sherlock Holmes</td>
																												<td>New York</td>
																												<td>USA</td>
																												<td>Female</td>
																												<td>Yes</td>
																												<td><button class="btn btn-outline-warning">Edit</button></td>
																												<td><button class="btn btn-outline-danger">Del</button></td>
																								</tr>
																				</tbody>
																</table>
												</div>

												<!-- custom -->
												{{-- <div class="row">
																												<span class="col-md-1 offset-8 text-center"><svg class="mt-4"
																																				xmlns="http://www.w3.org/2000/svg" height="16" width="20"
																																				viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
																																				<path
																																								d="M64 96c0-35.3 28.7-64 64-64H512c35.3 0 64 28.7 64 64V352H512V96H128V352H64V96zM0 403.2C0 392.6 8.6 384 19.2 384H620.8c10.6 0 19.2 8.6 19.2 19.2c0 42.4-34.4 76.8-76.8 76.8H76.8C34.4 480 0 445.6 0 403.2zM281 209l-31 31 31 31c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-48-48c-9.4-9.4-9.4-24.6 0-33.9l48-48c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM393 175l48 48c9.4 9.4 9.4 24.6 0 33.9l-48 48c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l31-31-31-31c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z" />
																																</svg></span>
																												<h6 class="col-md-2 text-muted mt-4" style="font-family:Harrington;">dev_phyoewai</h6>
																								</div> --}}
												<!-- custom -->

				</div>
				</section>
				<!-- section 2 end -->
				<!-- dev_phyoe end -->

				</div>
@endsection