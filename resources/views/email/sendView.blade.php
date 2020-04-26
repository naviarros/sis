<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/admin.css')}}">
</head>
<style type="text/css">
	.img-logo {
		width: 10%;
		height: 100px;
		position: absolute;
		bottom: -20px;
	}
</style>
<body>
	<div class="mt-5 ml-5">
		<p>Your username: {{ $username }}</p>
		<p>Your password: {{ $password }}</p>

		To login your account, please continue to this link <a href="{{ route('teacher.logins')}}">CLICK HERE!</a>
	</div>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/admin.js') }}"></script>
</body>
</html>