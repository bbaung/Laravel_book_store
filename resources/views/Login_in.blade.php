<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta http-equiv="X-UA-Compatible" content="IE=edge">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<title>Login | ATS Book Store</title>

								<style>
												@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
								</style>

								<link rel="stylesheet" href="{{ asset('assets/css/Login_in.css') }}">
				</head>

				<body>

								<div class="login-box">
												<?php if ($errors->any()) {
												    foreach ($errors->all() as $err) {
												        echo $err;
												    }
												}
												
												?>
												<form method='post' action="{{ url('Login') }}">
																<input type="hidden" name="_token" value="{{ csrf_token() }}">
																<div class="login-header">
																				<header>Login</header>
																</div>
																<div class="input-box">
																				<input type="text" name="email" class="input-field" placeholder="Email" autocomplete="off"
																								required>
																</div>
																<div class="input-box">
																				<input type="password" name="password" class="input-field" placeholder="Password" autocomplete="off"
																								required>
																</div>
																<div class="forgot">
																				<section>
																								<input type="checkbox" id="check">
																								<label for="check">Remember me</label>
																				</section>
																				<section>
																								<a href="#">Forgot password</a>
																				</section>
																</div>
																<div class="input-submit">
																				<button class="submit-btn" id="submit"></button>
																				<label for="submit">Login
																				</label>

																</div>
																<div class="sign-up-link">
																				<p>Don't have account? <a href="/sign_up">Sign Up</a></p>
																</div>
												</form>
								</div>
								{{-- @error('password')
												<div class="error-message">{{ $message }}</div>
								@enderror --}}

								@if (Session::has('error_messages'))
												@foreach (Session::get('error_messages') as $key => $message)
																<div class="error-message">{{ $message }}</div>
												@endforeach
												@php
																Session::forget('error_messages'); // Clear errors after display
												@endphp
								@endif
				</body>
