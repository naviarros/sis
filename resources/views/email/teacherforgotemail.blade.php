<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Your username: {{ $username }}</p>
	<p>Your password: {{ $password }}</p>

	To login your account, please continue to this link <a href="{{ route('teacher.logins')}}">/login/teacherform</a>
</body>
</html>