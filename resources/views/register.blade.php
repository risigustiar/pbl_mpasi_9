<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register | BebyBit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form class="login100-form validate-form" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
					<span class="login100-form-title p-b-43">
						Sign in
					</span>
                    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
            @endif
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="name" id="name" value="{{ old('name') }}">
						<span class="focus-input100"></span>
						<span class="label-input100">Name</span>
					</div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email"  id="email" value="{{ old('email') }}">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password"  id="password" value="{{ old('password') }}">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
                    @error('confirm_password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="confirm_password"  id="confirm_password" >
						<span class="focus-input100"></span>
						<span class="label-input100">confirm password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

                    <div class="login10-form validate-form">
						<span class="login100-form-title p-b-43">
							<a href="{{ route('login') }}" class="blogin100-form-btn">
							Klik Untuk Login
							</a>
						</span>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
