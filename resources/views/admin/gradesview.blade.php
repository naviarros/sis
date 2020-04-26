<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.info {
		margin-top: -12%;
		margin-left: 24%;
		/*background-color:#13355F;
		color:white;*/
		width: 60%;
		height: 20%;
	}
	.header{
	  	margin-left:1%;
	}
	.img-logo {
		width: 30%;
		height: 300px;
		position: absolute;
		bottom: -20px;
	}

	#customers {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#customers td, #customers th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #4CAF50;
	  color: white;
	}
	h1{font-size:36px}h2{font-size:30px}h3{font-size:24px}h4{font-size:20px}h5{font-size:18px}h6{font-size:16px}.w3-serif{font-family:serif}
	h1,h2,h3,h4,h5,h6{font-family:"Segoe UI",Arial,sans-serif;font-weight:400;margin:10px 0}.w3-wide{letter-spacing:4px}
	.search-text {
		margin: 0px 100px;
		width: 28%;
		height: 40px;
		border-left: none;
		font-family: Tahoma;
		border-radius: 10px 0 0 5px;
		border-right: none;
		border-top: none;
		border-bottom: 2px solid black;
		border-bottom-left-radius: 5px;
		border-bottom-right-radius: 5px; 
		background: transparent;
	}
	.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}
	p.align {
		margin-left: 90px;
		padding-top: -15px;
	}
	label.left {
		margin-left: 0;
		padding: 5px;
	}
</style>
<body>
	<div class="header">
		  <div class="image">
		  		<img src="images/eclarologo.png"  width="170px">
		  </div>
		  <div class="info">
				<LABEL style=" font-size: 130%;">Eclaro  Academy</LABEL>
				<br>
		   		<label  style=" font-size: 90%;">Zuzuarregui St, Matandang Balara, Quezon City, Metro Manila</label>
		   		<br>
		  		<label  style=" font-size: 90%;">Tel. No. 441-0501</label>
		 		<br>
		  		<label  style=" font-size: 90%;">eclaroacademy/official@yahoo.com</label>
			</div>
	</div>
	
	<table cellpadding="2">
		<tr>
			<td>Student Name:</td>
			<td><b>{{ $grs[0]->students->lastname}}, {{ $grs[0]->students->firstname}} {{ $grs[0]->students->middlename}}</b></td>
			<td>Grade Level:</td>
			<td><b>{{ $grs[0]->students->grade_level }}</b></td>
		</tr>
		<tr>
			<td>Strand/Track:</td>
			<td><b>{{ $grs[0]->students->strands->description }}</b></td>
			<td>Section Name:</td>
			<td><b>{{ $grs[0]->students->section->section_description }}</b></td>
		</tr>
	</table>

	@if($grs[0]->grade_level == '11' && $grs[0]->grading_period == 'First Semester')
	<table id="customers" style="margin-top: 20px;">
		<caption style="text-align: left; font-weight: bold">FIRST SEMESTER</caption>
		<thead>
			<tr>
				<th>SUBJECT</th>
				<th>1st</th>
				<th>2nd</th>
				<th>1ST SEMESTER FINAL GRADES</th>
				<th>REMARKS</th>
			</tr>
		</thead>
		<tbody>
			@foreach($grs as $gr)
				<tr>
					<td>{{ $gr->subjects->subject_description }}</td>
					<td>{{ $gr->mid_grade}}</td>
					<td>{{ $gr->final_grade}}</td>
					<td>{{ $gr->average_grade }}</td>
					<td>{{ $gr->grade_status }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	@endif
</body>
</html>