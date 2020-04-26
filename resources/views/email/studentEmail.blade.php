<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Your username: {{ $username }}</p>
	<p>Your password: {{ $password }}</p>

	To login your account, please continue to this link <a href="{{ route('student.logins')}}">/login/student</a>

	<h4 style="text-transform: uppercase;">Student Guardian Credentials</h4><br>
	<p>Your Guardian Username: {{ $student_guardian }}</p>
	<p>Your Guardian Password: {{ $student_guardian_pass }}</p>

	<b>PLEASE GIVE THIS CREDENTIALS TO YOUR GUARDIAN/PARENT</b>, please continue to this link <a href="{{ route('parent.logins')}}">/parent/loginform</a>
</body>
</html>