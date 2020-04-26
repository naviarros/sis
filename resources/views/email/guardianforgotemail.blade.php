<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Your username: {{ $username }}</p>
	<p>Your password: {{ $password }}</p>

	To login your account, please continue with this link <a href="{{ route('parent.logins')}}">/parent/loginform</a>
</body>
</html>