<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	#customers {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}
	#customers td, #customers th {
		border: 1px solid #ddd;
		padding: 8px;
	}
	#customer tr:hover {
		background-color: #ddd; 
	}
	#customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #4caf50;
		color: white;
	}
	.header {
		margin-right: 1%;
	}
	.info {
		margin-top: -12%;
		margin-left: 24%;
		width: 60%;
		height: 20%;
	}
	footer {
		position: fixed;
		bottom: -20px;
		left: 0;
		right: 0;
		height: 50px;
		text-align: right;
	}
	.table-width {
		width: 100%;
	}
	hr {
		width: 40%;
		margin-left: 60%;
	}
	p.head {

	}
</style>
<body>
	<div class="header">
		<div class="image">
			<img src="images/eclarologo.png" width="170px">
		</div>
		<div class="info">
			<label class="label-text">Eclaro Academy</label>
			<br>
			<label class="label">Zuzuarregui St, Matandang Balara, Quezon City, Metro Manila</label>
			<br>
			<label class="label">Tel. No. 441-0501</label><br>
			<label class="label">eclaroacademy/official@yahoo.com</label>
		</div>
	</div>
	<div>
		<p><b>Note:</b> The following are the lists of class list in a section</p>
		<table id="customers" style="width: 100%">
			<thead>
				<tr>
					<th>SECTION NAME</th>
					<th>STRAND</th>
					<th>STUDENT NAME</th>
					<th>ADVISER</th>
				</tr>
			</thead>
			<tbody>
				@foreach($student as $student)
				<tr>
					<td>{{ $student->section->section_description }}</td>
					<td>{{ $student->section->strand->description}}</td>
					<td>{{ $student->lastname}}, {{ $student->firstname }}</td>
					<td>{{ $student->section->instructor->lastname}}, {{ $student->section->instructor->firstname}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>	

		<footer>
			<div style="margin-top: -120px;">
				<label style="float: right; border-top: 1px solid;">Signature over Printed Name <br><b>School Administrator</b></label>

				<div style="text-align: center; margin-top: 100px; border-top: 1px solid black">
					<label>4-F Estolano Bldg. EDSA cor. Aurora Blvd. Cubao, Quezon City</label>
					<br>
					<label>Website:<label style="text-decoration: underline; color: blue"> www.facebook.com/EACAD.PH </label><label>Email:</label><label style="text-decoration: underline; color: blue"> eclaroacademy/official@yahoo.com </label></label><br>
					<label style="font-size: 25px;"><b><i>"LEARN TODAY. LEAD TOMORROW"</i></b></label>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>