<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.border {
		border: 2px solid black;
		width: 100%;
	}
	.img {
		width: 20%;
		margin: -10px 400px;
		padding: 0;
	}
	.head {
		width: 1000px;
		font-size: 24px;
		text-transform: uppercase;
		margin: 10px 310px;
	}

	.head1 {
		font-size: 18px !important;
		margin-left: 400px;
		text-transform: none !important;
		font-weight: bolder;
	}
	.border-bot {
		width: 97%;
		margin-left: 20px;
		border-top: none;
		border-left: none;
		border-right: none;
		border-bottom: 5px double;
	}
	.nameofstudent {
		margin-left: 20px;
		padding-top: 15px;
	}
	.sem {
		margin-left: 250px;
		padding-top: -35px;
	}
	.strand {
		margin-left: 450px;
		padding-top: -35px;
	}
	.lvl {
		margin-left: 800px;
		padding-top: -35px;
	}
	.st {
		padding-top: -10px !important;
	}
	.note {
		padding-top: -5px !important;
	}
	#stud {
		margin-left: 225px;
	}
	#stud1 {
		margin-top: -35px;
		margin-left: 520px;
	}
	#stud2 {
		margin-top: -35px;
		margin-left: 850px;
	}
	.bot {
		border-bottom: 2px solid black;
		width: 83.5%;
		margin-left: 160px;
		margin-top: -20px;
	}
	.charges {
		position: absolute;
		width: 25%;
		height: 40%;
		border: 2px solid black;
		margin-left: 745px;
		top: 282px;
	}
	.charge-text {
		font-weight: bold;
		margin-top: 5px;
	}
	span.inline {
		display: inline; /* the default for span */
		width: 100px;
		height: 100px;
		padding: -10px auto;
		font-size: 14px;
		font-weight: bold;
	}
	table {
		width: 100%;
		margin-top: 0;
		border-collapse:collapse;
		border-spacing:0;
	}
	thead {
		
	}
	td,th{
		padding:0
	}

	.text-center {
		text-align: center;
	}

	.table-bordered td,.table-bordered th{
		border:1px solid black !important;
	}
	.border-t {
		border-bottom: 2px solid black;
		width: 20%;
		margin-left: 20px;
		margin-top: 40px;
	}
	.reg {
		margin-left: 540px !important;
		margin-top: -40px !important;
	}
	.registrar {
		margin-left: 280px !important;
		margin-top: -40px !important;
	}
	.cashier {
		margin-left: 20px;
	}
	.foot {
		margin-left: 280px;
	}
	.foot1 {
		margin-left: 540px;
	}
</style>
<body>
	<div class="border">
		<img src="images/eclogo.png" class="img">
		<div style="margin-top: -100px;">
				<div class="border-bot"></div>
				<div class="dept">
					<p class="head">SENIOR HIGH SCHOOL DEPARTMENT</p>
					<p class="head head1">Certificate of Matriculation</p>
				</div>
				<div class="border-bot"></div>
				<p class="nameofstudent"><b>Name of the Student: {{ $regi->lastname}},  {{ $regi->firstname}}   {{ $regi->middlename}}</b></p>
				<p class="nameofstudent st"><b>Curriculum Year:</b> {{ $regi->start_schyr}} - {{ $regi->end_schyr}}</p>
				<p class="sem"><b>Semester:</b> {{ $regi->semester }}</p>
				<p class="strand"><b>Strand:</b> {{ $regi->strands->description }}</p>
				<p class="lvl"><b>Grade Level:</b> {{ $regi->grade_level }}</p>
				<p class="nameofstudent note"><b>NOTE: ALL SUBJECTS TAKEN WITHOUT PREREQUISITES WILL NOT BE CREDITED</b></p>
				<table class="table-bordered">
					<thead>
						<tr class="text-center">
							<th>SUBJECTS</th>
							<th>DAY/TIME</th>
							<th>ROOM</th>
							<th>UNITS</th>
							<th>TEACHER</th>
						</tr>
					</thead>
					<tbody>
						@foreach($sectsub as $reg)
						<tr>
							<td>{{ $reg->subject->subject_description}}</td>
							<td>{{ $reg->start}} {{ $reg->end}} {{ $reg->start1}} {{ $reg->end1}} {{ $reg->start2}} {{ $reg->end2}}</td>
							<td>{{ $reg->room}} / {{ $reg->room1 }} / {{ $reg->room2}}</td>
							<td>{{ $reg->subject->credited_units}}</td>
							<td>{{ $reg->instructor->lastname }}, {{ $reg->instructor->firstname}} {{ $reg->instructor->middlename}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<p class="nameofstudent note"><b>KINDLY READ ALL INSTRUCTIONS WRITTEN ON THE REVERSE SIDE</b></p>
				<div class="border-t"></div>
				<p class="cashier">Cashier</p>
				<div class="border-t registrar"></div>
				<p class="foot">Registrar</p>
				<div class="border-t reg"></div>
				<p class="foot1">Principal</p>
		</div>
	</div>
</body>
</html>