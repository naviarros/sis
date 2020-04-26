<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Your username: {{ $username }}</p>
	<p>Your password: {{ $password }}</p>

	To login your account, please continue with this link <a href="{{ route('admin.logins')}}">/login/admin</a>
</body>
</html>