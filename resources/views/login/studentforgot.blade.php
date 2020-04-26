<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css')}}">
</head>
<body style="background: none;">
	<img src="{{ asset('/images/eclogo.png') }}" style="position: absolute; top: -60px; left: 550px;">
	<div class="forgot-border">
		<div class="text-center">
			<h1 style="margin: 70px 0;">Did You Forgot Your Password?</h1><br>
			<p style="margin-top: -90px; text-align: center;">Enter your email address you're using for your account below <br> and we will send you a link</p>
		</div>
		<div class="text-center">
			<form method="post" action="{{ route('student.forgotpass')}}">
				{{ csrf_field() }}
				<div class="form-group">
					<h4 class="font-weight-bold" style="margin-left: -350px;">Email Address:</h4>
					<input type="email" name="forgotstudent" class="form-control" style="width: 40%; margin-left: 350px;">
					<input type="submit" name="" class="btn btn-primary mt-2" style="width: 40%; margin-left: -20px;" value="Password Reset Link">
				</div>
			</form>

			<a href="/login/student" style="color: blue; text-decoration: underline; padding: 10px 10px;">Back to Login</a>
		</div>
	</div>
<script type="text/javascript" src="{{ asset('/js/sweetalert.min.js') }}"></script>
  @include('sweet::alert')
</body>
</html>