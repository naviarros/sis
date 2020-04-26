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
		<table width="100%">
		    <tr>
		      <td><label>Name of Student:</label><b> <label>{{ $grades[0]->students->lastname}}, {{ $grades[0]->students->firstname}}</label> </b></td>
		      <td><label>Student Number:</label><b> <label>{{ $grades[0]->students->student_no}}</label> </b></td>
		    </tr>
		    <tr>
		       <td><label>Section:</label> <b> <label>{{ $grades[0]->students->section->section_description}}</label>  </b> </td>
		    </tr>
		</table>
		<p><b>Summative Grades: (Grade 11)</b></p>
		<table id="customers" style="width: 100%;">
			<thead>
				<tr>
					<th>Subjects</th>
					<th>Faculty Name</th>
					<th>1st</th>
					<th>2nd</th>
					<th>1st SEMESTER FINAL GRADES</th>
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
				@foreach($grades as $grade)
					@if($grade->grade_level == '11' && $grade->grading_period == 'First Semester')
					<tr>
						<td>{{ $grade->subjects->subject_description }}</td>
						<td></td>
						<td>{{ $grade->mid_grade }}</td>
						<td>{{ $grade->final_grade}}</td>
						<td>{{ $grade->average_grade}}</td>
						<td>{{ $grade->grade_status }}</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
		<br>
		<table id="customers" style="width: 100%;">
			<thead>
				<tr>
					<th>Subjects</th>
					<th>Faculty Name</th>
					<th>3rd</th>
					<th>4th</th>
					<th>2nd SEMESTER FINAL GRADES</th>
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
				@foreach($grades as $grade)
					@if($grade->grade_level == '11' && $grade->grading_period == 'Second Semester')
					<tr>
						<td>{{ $grade->subjects->subject_description }}</td>
						<td></td>
						<td>{{ $grade->mid_grade }}</td>
						<td>{{ $grade->final_grade}}</td>
						<td>{{ $grade->average_grade}}</td>
						<td>{{ $grade->grade_status }}</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
		<br>
		<table id="customers" style="width: 100%;">
			<thead>
				<tr>
					<th>Subjects</th>
					<th>Faculty Name</th>
					<th>1st</th>
					<th>2nd</th>
					<th>Summer SEMESTER FINAL GRADES</th>
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
				@foreach($grades as $grade)
					@if($grade->grade_level == '11' && $grade->grading_period == 'Summer Semester')
					<tr>
						<td>{{ $grade->subjects->subject_description }}</td>
						<td></td>
						<td>{{ $grade->mid_grade }}</td>
						<td>{{ $grade->final_grade}}</td>
						<td>{{ $grade->average_grade}}</td>
						<td>{{ $grade->grade_status }}</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
		<br>
		<table id="customers" style="width: 100%;">
			<thead>
				<tr>
					<th>Subjects</th>
					<th>Faculty Name</th>
					<th>3rd</th>
					<th>4th</th>
					<th>Summer SEMESTER FINAL GRADES</th>
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
				@foreach($grades as $grade)
					@if($grade->grade_level == '11' && $grade->grading_period == 'Summer Semester')
					<tr>
						<td>{{ $grade->subjects->subject_description }}</td>
						<td></td>
						<td>{{ $grade->mid_grade }}</td>
						<td>{{ $grade->final_grade}}</td>
						<td>{{ $grade->average_grade}}</td>
						<td>{{ $grade->grade_status }}</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
		<br>
		@foreach($corevalues as $corevalue)
  			@if($corevalue->grade_level == '11')
  				<div class="table12">
  					<div id="{{ $corevalue->grading }}" class="grading {{ $corevalue->grading }}">
  						<table id="customers" style="width: 100%;">
  							<thead>
  								<tr>
  									<th>Core Values</th>
  									<th>Behavioral Statements</th>
  									<th width="100px">{{ $corevalue->grading }}</th>
  								</tr>
  							</thead>
  							<tbody>
  								<tr>
  									<td rowspan="2">Maka-Diyos</td>
  									<td>Expressing one's spiritual beliefs while respecting spiritual beliefs of others</td>
  									<td>{{ $corevalue->makadiyos1}}</td>
  								</tr>
  								<tr>
  									<td>Shows adherence to ethical principles by upholding the truth in all understandings</td>
  									<td>{{ $corevalue->makadiyos2}}</td>
  								</tr>
  								<tr>
  									<td rowspan="2">Makatao</td>
  									<td>Is sensitive to individual, social, and cultural differences; resists stereotyping people</td>
  									<td>
  										{{ $corevalue->makatao1}}
  									</td>
  								</tr>
  								<tr>
	              					<td>Demonstrates contribution towards solidarity</td>
	                				<td>{{$corevalue->makatao2}}</td>
	            				</tr>
	            				<tr>
	              					<td>Makakalikasan</td>
	              					<td>Cares for the environment and utilities
	              					resources wisely,judiciously and economically</td>
	                  				<td>{{$corevalue->makakalikasan}}</td>
	            				</tr>
	            				<tr>
	              					<td rowspan="2">Makabansa</td>
	              					<td>Demonstrates pride in being a Filipino;
	                				Exercises the rights and responsibilities of a 
	                				Filipino Citizen</td>
	                  				<td>{{$corevalue->makabansa1}}</td>
	            				</tr>
	            				<tr>
	              					<td>Demonstrates appropriate behavior in
	                				Carrying out activities in the school,
	                				Community and country</td>
	                  				<td>{{$corevalue->makabansa2}}</td>
	            				</tr>
  							</tbody>
  						</table>
  					</div>
  				</div>
  			@endif
  		@endforeach
		<br>
		<p><b>Summative Grades: (Grade 12)</b></p>
		<table id="customers" style="width: 100%;">
			<thead>
				<tr>
					<th>Subjects</th>
					<th>Faculty Name</th>
					<th>1st</th>
					<th>2nd</th>
					<th>1st SEMESTER FINAL GRADES</th>
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
				@foreach($grades as $grade)
					@if($grade->grade_level == '12' && $grade->grading_period == 'First Semester')
					<tr>
						<td>{{ $grade->subjects->subject_description }}</td>
						<td></td>
						<td>{{ $grade->mid_grade }}</td>
						<td>{{ $grade->final_grade}}</td>
						<td>{{ $grade->average_grade}}</td>
						<td>{{ $grade->grade_status }}</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
		<br>
		<table id="customers" style="width: 100%;">
			<thead>
				<tr>
					<th>Subjects</th>
					<th>Faculty Name</th>
					<th>3rd</th>
					<th>4th</th>
					<th>2nd SEMESTER FINAL GRADES</th>
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
				@foreach($grades as $grade)
					@if($grade->grade_level == '12' && $grade->grading_period == 'Second Semester')
					<tr>
						<td>{{ $grade->subjects->subject_description }}</td>
						<td></td>
						<td>{{ $grade->mid_grade }}</td>
						<td>{{ $grade->final_grade}}</td>
						<td>{{ $grade->average_grade}}</td>
						<td>{{ $grade->grade_status }}</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
		<br>
		<table id="customers" style="width: 100%;">
			<thead>
				<tr>
					<th>Subjects</th>
					<th>Faculty Name</th>
					<th>1st</th>
					<th>2nd</th>
					<th>Summer SEMESTER FINAL GRADES</th>
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
				@foreach($grades as $grade)
					@if($grade->grade_level == '12' && $grade->grading_period == 'Summer Semester')
					<tr>
						<td>{{ $grade->subjects->subject_description }}</td>
						<td></td>
						<td>{{ $grade->mid_grade }}</td>
						<td>{{ $grade->final_grade}}</td>
						<td>{{ $grade->average_grade}}</td>
						<td>{{ $grade->grade_status }}</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
		<br>
		<table id="customers" style="width: 100%;">
			<thead>
				<tr>
					<th>Subjects</th>
					<th>Faculty Name</th>
					<th>3rd</th>
					<th>4th</th>
					<th>Summer SEMESTER FINAL GRADES</th>
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
				@foreach($grades as $grade)
					@if($grade->grade_level == '12' && $grade->grading_period == 'Summer Semester')
					<tr>
						<td>{{ $grade->subjects->subject_description }}</td>
						<td></td>
						<td>{{ $grade->mid_grade }}</td>
						<td>{{ $grade->final_grade}}</td>
						<td>{{ $grade->average_grade}}</td>
						<td>{{ $grade->grade_status }}</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
		<br>
		@foreach($corevalues as $corevalue)
  			@if($corevalue->grade_level == '12')
  				<div class="table12">
  					<div id="{{ $corevalue->grading }}" class="grading {{ $corevalue->grading }}">
  						<table id="customers" style="width: 100%;">
  							<thead>
  								<tr>
  									<th>Core Values</th>
  									<th>Behavioral Statements</th>
  									<th width="100px">{{ $corevalue->grading }}</th>
  								</tr>
  							</thead>
  							<tbody>
  								<tr>
  									<td rowspan="2">Maka-Diyos</td>
  									<td>Expressing one's spiritual beliefs while respecting spiritual beliefs of others</td>
  									<td>{{ $corevalue->makadiyos1}}</td>
  								</tr>
  								<tr>
  									<td>Shows adherence to ethical principles by upholding the truth in all understandings</td>
  									<td>{{ $corevalue->makadiyos2}}</td>
  								</tr>
  								<tr>
  									<td rowspan="2">Makatao</td>
  									<td>Is sensitive to individual, social, and cultural differences; resists stereotyping people</td>
  									<td>
  										{{ $corevalue->makatao1}}
  									</td>
  								</tr>
  								<tr>
	              					<td>Demonstrates contribution towards solidarity</td>
	                				<td>{{$corevalue->makatao2}}</td>
	            				</tr>
	            				<tr>
	              					<td>Makakalikasan</td>
	              					<td>Cares for the environment and utilities
	              					resources wisely,judiciously and economically</td>
	                  				<td>{{$corevalue->makakalikasan}}</td>
	            				</tr>
	            				<tr>
	              					<td rowspan="2">Makabansa</td>
	              					<td>Demonstrates pride in being a Filipino;
	                				Exercises the rights and responsibilities of a 
	                				Filipino Citizen</td>
	                  				<td>{{$corevalue->makabansa1}}</td>
	            				</tr>
	            				<tr>
	              					<td>Demonstrates appropriate behavior in
	                				Carrying out activities in the school,
	                				Community and country</td>
	                  				<td>{{$corevalue->makabansa2}}</td>
	            				</tr>
  							</tbody>
  						</table>
  					</div>
  				</div>
  			@endif
  		@endforeach

		<footer>
		<div style="margin-top: -150px;">
			<label style="float: left; border-top: 1px solid"><b>{{ session()->get('studentname')}}</b> <br>Student</label>
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