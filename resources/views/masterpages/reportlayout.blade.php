  <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}">
<style type="text/css">
.header{
	margin-left:20%;


}
.info{
margin-top: -12%;
margin-left: 22%;
/*background-color:#13355F;
color:white;*/
width: 50%;
height: 20%;
}
.image{

}
label{
	font-weight: bold;
}
</style>

	<div class="header">
		<div class="image">
		<img src="images/eclarologo.png"  width="200px">
		</div>
		<div class="info">
	<LABEL style=" font-size: 170%;">Eclaro  Academy</LABEL>
	<br>
		 <label  style=" font-size: 120%;">Zuzuarregui St, Matandang Balara, Quezon City, Metro Manila</label>
		 <br>
		<label  style=" font-size: 120%;">Tel. No. 441-0501</label>
	 <br>
		<label  style=" font-size: 120%;">eclaroacademy/official@yahoo.com</label>
		
	</div>

	</div>

<div class="maincontent">
   @yield('content')
  
  </div>
  