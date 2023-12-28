<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login page</title>
	<link rel="stylesheet" href="{{URL::to('public/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('public/css/my-login.css')}}">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">

					<div class="cardx fat mt-5">
						@if(Session::has('success'))<!-- flash message  -->
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
						@endif
						<div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">
							@if(Session::has('error'))
							<div class="alert alert-danger p-3 text-green-700 bg-green-300 rounded">
								{{Session::get('error')}}
							</div>
							@endif <!-- end flash message -->
							<div class="card-body">
								<h4 class="card-title">Login</h4>
								<form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('admin.login') }}">
									@csrf
									<div class="form-group">
										<label for="email">E-Mail Address</label>
										<input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Enter email">
										<span class="text-danger">@error('email'){{ $message }}@enderror</span>
									</div>

									<div class="form-group">
										<label for="password">Password
											<!-- <a href="{{route('password.request')}}" class="float-right">
											Forgot Password?
										</a> -->
										</label>
										<input id="password" type="password" class="form-control" name="password" required data-eye placeholder="Enter password">
										<span class="text-danger">@error('password'){{ $message }}@enderror</span>
									</div>

									<!-- <div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remeber Me</label>
									</div>
								</div> -->

									<div class="form-group m-0">
										<button type="submit" class="btn btn-primary btn-block">
											Login
										</button>
									</div>
									<!-- <div class="mt-4 text-center">
									Don't have an account? <a href="{{route('register')}}">Create One</a>
								</div> -->
								</form>
							</div>
						</div>

					</div>
				</div>
			</div>
	</section>


	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/my-login.js"></script>

	<!-- for disapera flash message  -->
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$(".alert").delay(5000).slideUp(300);
		});
	</script>
</body>

</html>