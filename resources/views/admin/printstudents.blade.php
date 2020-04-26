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
	th {
		border: none;
	}
	td{
		border: 1px solid black;
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
		<table style="width: 100%; border-collapse: collapse; border: 1px solid black; table-layout: auto;">
			<caption style="font-weight: bolder; text-transform: uppercase;">Personal Information</caption>
			<thead>
				<tr>
					<th>Full Name</th>
					<th>Gender</th>
					<th>Age</th>
					<th>Civil Status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $students->lastname }}, {{ $students->firstname}} {{ $students->middlename}}</td>
					<td>{{ $students->gender }}</td>
					<td>{{ $students->age }}</td>
					<td>{{ $students->civil_status }}</td>
				</tr>
			</tbody>
		</table>

		<table style="width: 100%; border-collapse: collapse; border: 1px solid black; table-layout: auto; margin-top: -1px;">
			<thead>
				<tr>
					<th>City</th>
					<th>Municipality</th>
					<th>Barangay</th>
					<th>Region</th>
					<th>Zip Code</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $students->city}}</td>
					<td>{{ $students->municipality }}</td>
					<td>{{ $students->barangay }}</td>
					<td>{{ $students->region }}</td>
					<td>{{ $students->zipcode}}</td>
				</tr>
			</tbody>
		</table>

		<table style="width: 100%; border-collapse: collapse; border: 1px solid black; table-layout: auto; margin-top: -1px;">
			<thead>
				<tr>
					<th>Address</th>
					<th>Nationality</th>
					<th>Email</th>
					<th>Place of Birth</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $students->address}}</td>
					<td>{{ $students->nationality }}</td>
					<td>{{ $students->emailAddress }}</td>
					<td>{{ $students->placeofbirth }}</td>
				</tr>
			</tbody>
		</table>

		<table style="width: 100%; border-collapse: collapse; border: 1px solid black; table-layout: auto;">
			<caption style="font-weight: bolder; text-transform: uppercase;">Family Information</caption>
			<thead>
				<tr>
					<th>Mother Name:</th>
					<th>Occupation:</th>
					<th>Contact Number:</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $students->parent->mother_lname }}, {{ $students->parent->mother_fname}} {{ $students->parent->mother_mname}}</td>
					<td>{{ $students->parent->mother_occ }}</td>
					<td>{{ $students->parent->mother_cntact }}</td>
				</tr>
			</tbody>
		</table>

		<table style="width: 100%; border-collapse: collapse; border: 1px solid black; table-layout: auto;">
			<thead>
				<tr>
					<th>Father Name:</th>
					<th>Occupation:</th>
					<th>Contact Number:</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $students->parent->father_lname }}, {{ $students->parent->father_fname}} {{ $students->parent->father_mname}}</td>
					<td>{{ $students->parent->father_occ }}</td>
					<td>{{ $students->parent->father_cntact }}</td>
				</tr>
			</tbody>
		</table>

		<table style="width: 100%; border-collapse: collapse; border: 1px solid black; table-layout: auto;">
			<thead>
				<tr>
					<th>Guardian Name:</th>
					<th>Relation:</th>
					<th>Contact:</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $students->guardian->guardian_lname }}, {{ $students->guardian->guardian_fname}} {{ $students->guardian->guardian_mname}}</td>
					<td>{{ $students->guardian->relation }}</td>
					<td>{{ $students->guardian->contact }}</td>
				</tr>
			</tbody>
		</table>

		<table style="width: 100%; border-collapse: collapse; border: 1px solid black; table-layout: auto;">
			<caption style="font-weight: bolder; text-transform: uppercase;">Educational Background</caption>
			<thead>
				<tr>
					<th>Elementary School Name:</th>
					<th>Year Graduated:</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $students->elementarySchName}}</td>
					<td>{{ $students->elemGradYr }}</td>
				</tr>
			</tbody>
		</table>

		<table style="width: 100%; border-collapse: collapse; border: 1px solid black; table-layout: auto;">
			<thead>
				<tr>
					<th>High School Name:</th>
					<th>Year Graduated:</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $students->secondarySchName }}</td>
					<td>{{ $students->secYrGrad }}</td>
				</tr>
			</tbody>
		</table>

		<footer>
		<div style="margin-top: -120px;">
			<label style="float: left; border-top: 1px solid"><b>Signature over Printed Name</b> <br>Student</label>
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