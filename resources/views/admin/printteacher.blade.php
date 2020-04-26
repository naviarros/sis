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
	th {
		border: none;
	}
	td{
		border: 1px solid black;
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
					<td>{{ $teacher->lastname }}, {{ $teacher->firstname}} {{ $teacher->middlename}}</td>
					<td>{{ $teacher->gender }}</td>
					<td>{{ $teacher->age }}</td>
					<td>{{ $teacher->civil_status }}</td>
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
					<td>{{ $teacher->city}}</td>
					<td>{{ $teacher->municipality }}</td>
					<td>{{ $teacher->barangay }}</td>
					<td>{{ $teacher->region }}</td>
					<td>{{ $teacher->zipcode}}</td>
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
					<td>{{ $teacher->address}}</td>
					<td>{{ $teacher->nationality }}</td>
					<td>{{ $teacher->email }}</td>
					<td>{{ $teacher->placeofbirth }}</td>
				</tr>
			</tbody>
		</table>

		<table style="width: 100%; border-collapse: collapse; border: 1px solid black; table-layout: auto;">
			<caption style="font-weight: bolder; text-transform: uppercase;">Spouse Information</caption>
			<thead>
				<tr>
					<th>Full Name</th>
					<th>No. of Children</th>
					<th>Occupation</th>
					<th>Spouse Birthday</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $teacher->spouse_lname }}, {{ $teacher->spouse_fname}} {{ $teacher->spouse_mname}}</td>
					<td>{{ $teacher->no_of_child }}</td>
					<td>{{ $teacher->spouse_occupation }}</td>
					<td>{{ $teacher->spouse_bday }}</td>
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
					<td>{{ $teacher->mlname }}, {{ $teacher->mfname}} {{ $teacher->mmiddle}}</td>
					<td>{{ $teacher->mocc }}</td>
					<td>{{ $teacher->mcontact }}</td>
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
					<td>{{ $teacher->flname }}, {{ $teacher->ffname}} {{ $teacher->fmiddle}} {{ $teacher->sfx_name }}</td>
					<td>{{ $teacher->f_occ }}</td>
					<td>{{ $teacher->fcontact }}</td>
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
					<td>{{ $teacher->elem_schname}}</td>
					<td>{{ $teacher->elem_gradyr }}</td>
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
					<td>{{ $teacher->hs_schname }}</td>
					<td>{{ $teacher->hs_gradyr }}</td>
				</tr>
			</tbody>
		</table>

		<table style="width: 100%; border-collapse: collapse; border: 1px solid black; table-layout: auto;">
			<thead>
				<tr>
					<th>College School Name:</th>
					<th>Course Taken:</th>
					<th>Year Graduated:</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $teacher->clg_schname }}</td>
					<td>{{ $teacher->clg_crse }}</td>
					<td>{{ $teacher->clg_gradyr }}</td>
				</tr>
			</tbody>
		</table>

		<table style="width: 100%; border-collapse: collapse; border: 1px solid black; table-layout: auto;">
			<thead>
				<tr>
					<th>Masters School Name:</th>
					<th>Course Taken:</th>
					<th>Year Graduated:</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $teacher->mstrs_schname }}</td>
					<td>{{ $teacher->mstrs_taken }}</td>
					<td>{{ $teacher->mstrs_gradyr }}</td>
				</tr>
			</tbody>
		</table>

		<table style="width: 100%; border-collapse: collapse; border: 1px solid black; table-layout: auto;">
			<thead>
				<tr>
					<th>Doctorate School Name:</th>
					<th>Course Taken:</th>
					<th>Year Graduated:</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $teacher->dctr_schname }}</td>
					<td>{{ $teacher->dctr_crse }}</td>
					<td>{{ $teacher->dctr_gradyr }}</td>
				</tr>
			</tbody>
		</table>

		<footer>
			<div style="margin-top: -120px;">
				<label style="float: left; border-top: 1px solid"><b>Signature over Printed Name</b> <br>Teacher</label>
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