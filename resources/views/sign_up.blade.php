<head>
				<meta charset="UTF-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Sign-up | Ludiflex</title>

				<link rel="stylesheet" href="{{ asset('assets/css/sign_up.css') }}">
</head>

<body>
				{{-- Show error for duplicate email --}}
				<?php if ($errors->any()) {
				    foreach ($errors->all() as $err) {
				        echo $err;
				    }
				}
				
				?>

				<form action="{{ url('sign_up') }}" method="post">

								<div class="login-box">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<div class="login-header">
																<header>Sign-up Account</header>
												</div>
												<div class="input-box">
																<input type="text" class="input-field" placeholder="Name" name="username" autocomplete="off"
																				required>
												</div>
												<div class="input-box">
																<input type="email" class="input-field" placeholder="Email" name="email" autocomplete="off"
																				required>
												</div>
												<div class="input-box">
																<input type="text" class="input-field" placeholder="Phone Number" name="phone_number"
																				autocomplete="off" required>
												</div>
												<div class="input-box">
																<input type="password" class="input-field" placeholder="Password" name="password" autocomplete="off"
																				required>
												</div>
												<div class="input-box">
																<input type="password" class="input-field" placeholder="Confirm Password" name="confirmPassword"
																				autocomplete="off" required>
												</div>
												{{-- implement AMM --}}
												<div class="input-box">
																<input type="text" class="input-field" placeholder="Address" name="address" autocomplete="off"
																				required>
												</div>
												{{-- implement AMM end --}}
												<div class="input-submit">
																<button class="submit-btn" id="submit"></button>
																<label for="submit">Sign-up</label>
												</div>

				</form>

				<br>
				{{-- <p>Do you have already account? <a href="/Login_in">Login </a></p> --}}

				<p>Do you have already account? <a href="{{ route('Login') }}">Login</a></p>
				</div>
