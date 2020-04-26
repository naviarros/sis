<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="{{asset('/css/w3.css')}}">

	<title></title>
	<style>

.container{
	height: 660px;
	background-color: white;
	width: 400px;
	padding: 0px 30px;
}
.img{
	margin-top: 110px;
	margin-left: 70px;
}	
.input{
	border-bottom:solid 1px;
}
label{
	font-size: 20px;
}

.rightdiv{
	background: url('/images/sample.png');	
	width: 1000px;
	height: 655px;
	margin-top: -660px;
	margin-left: 400px;

}


.img2{
	margin-top: 200px;
	margin-left: 40px;
	height: 300px;

}
.sis{

	margin-top: -250px;
	margin-left: 350px;
}
.sis label{
	font-size: 30px;
	color:white;
	font-family: Times New roman;
}
button {
 background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
button:hover {
  	background-color: #B8D326;
 
  color: white;
}
</style>
</head>

<body>

<div class="main">
<div class="container">

<img src="{{asset('/images/eclarologo.png')}}" width="200px" class="img" height="160px">  
<br>	<br>	
<form method="post" action="/login/teacher">
<label> Employee NO: </label><br>
@csrf
  <input class="w3-input" type="text"  name="username" 	style="outline:none; "> <br>
<label> Password: </label><br>
  <input class="w3-input" type="password"  name="password"style="outline:none; "><br>
  <a href="/login/teacherforgot" style="color: blue;">Forgot Password?</a><br>
<button type="submit">Sign in</button></p>
</form>
</div>
<div class="rightdiv" id="jacob">
	
<img src="{{ asset('/images/eclarologo.png')}}" class="img2"> 
<div class="sis">
	<center><label> <b> ECLARO ACADEMY  </label>
	<HR width="500px"> </HR>
	<label> Student Information System </label>
</div>
</div>
</div>

</body>
</html>

<script type="text/javascript" src="{{ asset('/js/sweetalert.min.js') }}"></script>
  @include('sweet::alert')

