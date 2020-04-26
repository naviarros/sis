@extends('masterpages.parentlayout')

@section('content')

<style type="text/css">
 td{
    background-color: #13355F;
    color:white;

}
.center1{
	padding:0px 70px 0px 70px;
}
</style>
<div class="panel-main-content">
	<div class="center1">
		<div class="container-fluid">
			<p><b><center>LEARNER PROGRESS ACHIEVEMENT</center></b></p>
		</div>

		<div class="grades-legend">
			<table cellpadding="4" cellspacing="10" class="table table-bordered mt-4 ">
				<thead>
					<tr>
						<th>Descriptors</th>
						<th>Grading Scale</th>
						<th>Remarks</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><i>Outstanding</i></td>
						<td><i>90-100</i></td>
						<td><i>Passed</i></td>
					</tr>

					<tr>
						<td><i>Very Satisfactory</i></td>
						<td><i>85-89</i></td>
						<td><i>Passed</i></td>
					</tr>

					<tr>
						<td><i>Satisfactory</i></td>
						<td><i>80-84</i></td>
						<td><i>Passed</i></td>
					</tr>

					<tr>
						<td><i>Fairly Satisfactory</i></td>
						<td><i>75-79</i></td>
						<td><i>Passed</i></td>
					</tr>

					<tr>
						<td><i>Did not meet Expectations</i></td>
						<td><i>Below 75</i></td>
						<td><i>Failed</i></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="container-fluid">
			<p><b><center>OBSERVED VALUES </center></b></p>
		</div>

		<div class="grades-legend">
			<table class="table table-bordered mt-4">
				<thead>
					<tr>
						<th>ABBR</th>
						<th>MEANING</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><i>AO</i></td>
						<td><i>Always Observed</i></td>
					</tr>

					<tr>
						<td><i>SO</i></td>
						<td><i>Sometimes Observed</i></td>
					</tr>

					<tr>
						<td><i>RO</i></td>
						<td><i>Rare Observed</i></td>
					</tr>

					<tr>
						<td><i>NO</i></td>
						<td><i>Not Observed</i></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="container-fluid">
		<p class="text-uppercase"><b>Grades:</b></p>

		<div class="row ml-2">
			<div class="form-group">
				<div class="col-md-12">
					<label>Grade Level:</label>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<select class="form-control" id="level" name="level">
						<option></option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
				</div>
			</div>
		</div>

		<div id="grade11">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#home" class="nav-link active text-dark" data-toggle="tab">1st Semester</a>
				</li>
				<li class="nav-item">
					<a href="#menu1" class="nav-link text-dark" data-toggle="tab">2nd Semester</a>
				</li>
				<li class="nav-item">
					<a href="#menu3" class="nav-link text-dark" data-toggle="tab">Summer Semester</a>
				</li>
				<li class="nav-item">
					<a href="#menu2" data-toggle="tab" class="nav-link text-dark text-uppercase">Learner's Observed Values</a>
				</li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane container active" id="home">
					<table class="table table-bordered mt-4 text-center">
						<thead>
							<tr id="grades">
								<th>Subjects</th>
								<th>1st</th>
								<th>2nd</th>
								<th>1st SEMESTER FINAL GRADES</th>
								<th>Remarks</th>
								
							</tr>
							<tr id="grades-second">
								<th colspan="5" class="text-left">Core</th>
							</tr>
						</thead>
						<tbody>
							@foreach($grades as $grade)
								@if($grade->grade_level == '11' && $grade->subjects->subject_type == 'Core Subject' && $grade->grading_period == 'First Semester')
								<tr>
									<td>{{ $grade->subjects->subject_description }}</td>
									<td>{{ $grade->mid_grade }}</td>
									<td>{{ $grade->final_grade }}</td>
									<td>{{ $grade->average_grade }}</td>
									<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
									
								</tr>
								@endif
							@endforeach

							<tr id="grades-second">
								<th colspan="5" class="text-left">Applied & Specialized</th>
							</tr>
							@foreach($grades as $grade)
								@if($grade->grade_level == '11' && $grade->subjects->subject_type == 'Applied Subject' || $grade->subjects->subject_type == 'Specialized Subject' && $grade->grading_period == 'First Semester')
								<tr>
									<td>{{ $grade->subjects->subject_description }}</td>
									<td>{{ $grade->mid_grade }}</td>
									<td>{{ $grade->final_grade }}</td>
									<td>{{ $grade->average_grade }}</td>
									<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>

								</tr>
								@endif
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="tab-pane container fade" id="menu1">
			  		<table class="table table-bordered mt-4 text-center">
						<thead>
							<tr id="grades">
								<th>Subjects</th>
								<th>3rd</th>
								<th>4th</th>
								<th>2nd SEMESTER FINAL GRADES</th>
								<th>Remarks</th>
							</tr>
							<tr id="grades-second">
								<th colspan="5" class="text-left">Core</th>
							</tr>
						</thead>
						<tbody>
							@foreach($grades as $grade)
								@if($grade->grade_level == '11' && $grade->subjects->subject_type == 'Core Subject' && $grade->grading_period == 'Second Semester')
								<tr>
									<td>{{ $grade->subjects->subject_description }}</td>
									<td>{{ $grade->mid_grade }}</td>
									<td>{{ $grade->final_grade }}</td>
									<td>{{ $grade->average_grade }}</td>
									<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
								</tr>
								@endif
							@endforeach
							
							<tr id="grades-second">
								<th colspan="5" class="text-left">Applied</th>
							</tr>

							@foreach($grades as $grade)
								@if($grade->grade_level == '11' && $grade->subjects->subject_type == 'Applied Subject' && $grade->grading_period == 'Second Semester')
								<tr>
									<td>{{ $grade->subjects->subject_description }}</td>
									<td>{{ $grade->mid_grade }}</td>
									<td>{{ $grade->final_grade }}</td>
									<td>{{ $grade->average_grade }}</td>
									<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
								</tr>
								@endif
							@endforeach

							<tr id="grades-second">
								<th colspan="5" class="text-left">Specialized</th>
							</tr>

							@foreach($grades as $grade)
								@if($grade->grade_level == '11' && $grade->subjects->subject_type == 'Specialized Subject' && $grade->grading_period == 'Second Semester')
								<tr>
									<td>{{ $grade->subjects->subject_description }}</td>
									<td>{{ $grade->mid_grade }}</td>
									<td>{{ $grade->final_grade }}</td>
									<td>{{ $grade->average_grade }}</td>
									<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
								</tr>
								@endif
							@endforeach
						</tbody>
					</table>  	
			  	</div>

			  	<div class="tab-pane container fade" id="menu3">
			  		<table class="table table-bordered mt-4 text-center">
						<thead>
							<tr id="grades">
								<th>Subjects</th>
								<th>3rd</th>
								<th>4th</th>
								<th>2nd SEMESTER FINAL GRADES</th>
								<th>Remarks</th>
							</tr>
							<tr id="grades-second">
								<th colspan="5" class="text-left">Core</th>
							</tr>
						</thead>
						<tbody>
							@foreach($grades as $grade)
								@if($grade->grade_level == '11' && $grade->subjects->subject_type == 'Core Subject' && $grade->grading_period == 'Summer Semester')
								<tr>
									<td>{{ $grade->subjects->subject_description }}</td>
									<td>{{ $grade->mid_grade }}</td>
									<td>{{ $grade->final_grade }}</td>
									<td>{{ $grade->average_grade }}</td>
									<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
								</tr>
								@endif
							@endforeach
							
							<tr id="grades-second">
								<th colspan="5" class="text-left">Applied</th>
							</tr>

							@foreach($grades as $grade)
								@if($grade->grade_level == '11' && $grade->subjects->subject_type == 'Applied Subject' && $grade->grading_period == 'Summer Semester')
								<tr>
									<td>{{ $grade->subjects->subject_description }}</td>
									<td>{{ $grade->mid_grade }}</td>
									<td>{{ $grade->final_grade }}</td>
									<td>{{ $grade->average_grade }}</td>
									<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
								</tr>
								@endif
							@endforeach

							<tr id="grades-second">
								<th colspan="5" class="text-left">Specialized</th>
							</tr>

							@foreach($grades as $grade)
								@if($grade->grade_level == '11' && $grade->subjects->subject_type == 'Specialized Subject' && $grade->grading_period == 'Summer Semester')
								<tr>
									<td>{{ $grade->subjects->subject_description }}</td>
									<td>{{ $grade->mid_grade }}</td>
									<td>{{ $grade->final_grade }}</td>
									<td>{{ $grade->average_grade }}</td>
									<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
								</tr>
								@endif
							@endforeach
						</tbody>
					</table>  	
			  	</div>

			  	<div class="tab-pane container fade" id="menu2">
			  		<div class="row mt-4">
			  			<label>Grading:</label>
			  			<div class="col-md-4">
			  				<select class="form-control" name="grading" id="grading">
			  					<option value="0"></option>
			  					<option value="1st">1st</option>
			  					<option value="2nd">2nd</option>
			  					<option value="3rd">3rd</option>
			  					<option value="4th">4th</option>
			  				</select> 
			  			</div>
			  		</div>
			  		@foreach($corevalues as $corevalue)
			  			@if($corevalue->grade_level == '11')
			  				<div class="table12">
			  					<div id="{{ $corevalue->grading }}" class="grading {{ $corevalue->grading }}">
			  						<table class="table table-striped table-bordered">
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
			  	</div>
			</div>
		</div>

		<div id="grade12">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#home1" data-toggle="tab" class="nav-link active text-dark">1st Semester</a>
				</li>
				<li class="nav-item">
					<a href="#menu12" data-toggle="tab" class="nav-link text-dark">2nd Semester</a>
				</li>
				<li class="nav-item">
					<a href="#menu31" data-toggle="tab" class="nav-link text-dark">Summer Semester</a>
				</li>
				<li class="nav-item">
					<a href="#menu21" data-toggle="tab" class="nav-link text-dark text-uppercase">Learner's Observed Values</a>
				</li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane container active" id="home1">
					<table class="table table-bordered mt-4 text-center">
						<thead>
							<tr id="grades">
								<th>Subjects</th>
								<th>1st</th>
								<th>2nd</th>
								<th>1st SEMESTER FINAL GRADES</th>
								<th>Remarks</th>
							</tr>
							<tr id="grades-second">
								<th colspan="5" class="text-left">Core</th>
							</tr>
						</thead>
						<tbody>
							@foreach($grades as $grade)
								@if($grade->grade_level == '12')
									@if($grade->subjects->subject_type == 'Core Subject' && $grade->grading_period == 'First Semester')
									<tr>
										<td>{{ $grade->subjects->subject_description }}</td>
										<td>{{ $grade->mid_grade }}</td>
										<td>{{ $grade->final_grade }}</td>
										<td>{{ $grade->average_grade }}</td>
										<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
									</tr>
									@endif
								@endif
							@endforeach

							<tr id="grades-second">
								<th colspan="5" class="text-left">Applied & Specialized</th>
							</tr>
							@foreach($grades as $grade)
								@if($grade->grade_level == '12')
									@if($grade->subjects->subject_type == 'Applied Subject' && $grade->subjects->subject_type == 'Specialized Subject' && $grade->grading_period == 'First Semester')
									<tr>
										<td>{{ $grade->subjects->subject_description }}</td>
										<td>{{ $grade->mid_grade }}</td>
										<td>{{ $grade->final_grade }}</td>
										<td>{{ $grade->average_grade }}</td>
										<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
									</tr>
									@endif
								@endif
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="tab-pane container fade" id="menu12">
					<table class="table table-bordered mt-4 text-center">
						<thead>
							<tr id="grades">
								<th>Subjects</th>
								<th>3rd</th>
								<th>4th</th>
								<th>2nd SEMESTER FINAL GRADES</th>
								<th>Remarks</th>
							</tr>
							<tr id="grades-second">
								<th colspan="5" class="text-left">Core</th>
							</tr>
						</thead>
						<tbody>
							@foreach($grades as $grade)
								@if($grade->grade_level == '12')
									@if($grade->subjects->subject_type == 'Core Subject' && $grade->grading_period == 'Second Semester')
									<tr>
										<td>{{ $grade->subjects->subject_description }}</td>
										<td>{{ $grade->mid_grade }}</td>
										<td>{{ $grade->final_grade }}</td>
										<td>{{ $grade->average_grade }}</td>
										<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
									</tr>
									@endif
								@endif
							@endforeach
							
							<tr id="grades-second">
								<th colspan="5" class="text-left">Applied</th>
							</tr>

							@foreach($grades as $grade)
								@if($grade->grade_level == '12')
									@if($grade->subjects->subject_type == 'Applied Subject' && $grade->grading_period == 'Second Semester')
									<tr>
										<td>{{ $grade->subjects->subject_description }}</td>
										<td>{{ $grade->mid_grade }}</td>
										<td>{{ $grade->final_grade }}</td>
										<td>{{ $grade->average_grade }}</td>
										<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
									</tr>
									@endif
								@endif
							@endforeach

							<tr id="grades-second">
								<th colspan="5" class="text-left">Specialized</th>
							</tr>

							@foreach($grades as $grade)
								@if($grade->grade_level == '12')
									@if($grade->subjects->subject_type == 'Specialized Subject' && $grade->grading_period == 'Second Semester')
									<tr>
										<td>{{ $grade->subjects->subject_description }}</td>
										<td>{{ $grade->mid_grade }}</td>
										<td>{{ $grade->final_grade }}</td>
										<td>{{ $grade->average_grade }}</td>
										<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
									</tr>
									@endif
								@endif
							@endforeach
						</tbody>
					</table>
				</div>

				<div class="tab-pane container fade" id="menu31">
					<table class="table table-bordered mt-4 text-center">
						<thead>
							<tr id="grades">
								<th>Subjects</th>
								<th>3rd</th>
								<th>4th</th>
								<th>2nd SEMESTER FINAL GRADES</th>
								<th>Remarks</th>
							</tr>
							<tr id="grades-second">
								<th colspan="5" class="text-left">Core</th>
							</tr>
						</thead>
						<tbody>
							@foreach($grades as $grade)
								@if($grade->grade_level == '12')
									@if($grade->subjects->subject_type == 'Core Subject' && $grade->grading_period == 'Summer Semester')
									<tr>
										<td>{{ $grade->subjects->subject_description }}</td>
										<td>{{ $grade->mid_grade }}</td>
										<td>{{ $grade->final_grade }}</td>
										<td>{{ $grade->average_grade }}</td>
										<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
									</tr>
									@endif
								@endif
							@endforeach
							
							<tr id="grades-second">
								<th colspan="5" class="text-left">Applied</th>
							</tr>

							@foreach($grades as $grade)
								@if($grade->grade_level == '12')
									@if($grade->subjects->subject_type == 'Applied Subject' && $grade->grading_period == 'Summer Semester')
									<tr>
										<td>{{ $grade->subjects->subject_description }}</td>
										<td>{{ $grade->mid_grade }}</td>
										<td>{{ $grade->final_grade }}</td>
										<td>{{ $grade->average_grade }}</td>
										<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
									</tr>
									@endif
								@endif
							@endforeach

							<tr id="grades-second">
								<th colspan="5" class="text-left">Specialized</th>
							</tr>

							@foreach($grades as $grade)
								@if($grade->grade_level == '12')
									@if($grade->subjects->subject_type == 'Specialized Subject' && $grade->grading_period == 'Summer Semester')
									<tr>
										<td>{{ $grade->subjects->subject_description }}</td>
										<td>{{ $grade->mid_grade }}</td>
										<td>{{ $grade->final_grade }}</td>
										<td>{{ $grade->average_grade }}</td>
										<td><span class="badge badge-primary">{{ $grade->grade_status}}</span></td>
									</tr>
									@endif
								@endif
							@endforeach
						</tbody>
					</table>
				</div>

				<div class="tab-pane container fade" id="menu21">
					<div class="row mt-4">
						<label>Grading:</label>
						<div class="col-md-4">
							<select class="form-control" name="grading" id="grading">
								<option value="0"></option>
								<option value="1st">1st</option>
								<option value="2nd">2nd</option>
								<option value="3rd">3rd</option>
								<option value="4th">4th</option>
							</select>
						</div>
					</div>
					@foreach($corevalues as $corevalue)
						@if($corevalue->grade_level == '12')
							<div class="table12">
								<div id="{{ $corevalue->grading }}">
									<table class="table table-striped table-bordered">
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
												<td>{{$corevalue->makadiyos1}}</td>
											</tr>
											<tr>
					              			<td>Shows adherence to ethical principles by
					              			upholding the truth in all understandings</td>
					                		<td>{{$corevalue->makadiyos2}}</td>
						            		</tr>
						            		<tr>
						              			<td rowspan="2">Makatao</td>
						              			<td>Is sensitive to individual,social,and cultural
						                		differences; resists streyeotyping people</td>
						                		<td>{{$corevalue->makatao1}}</td>
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
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
       
$(function() {
    $('.grading').hide();
  $('#grading').change(function(){
    $('.grading').hide();
    $('#' + $(this).val()).show();
  });
});

$('#grade11').hide();
	$('#grade12').hide();
	$('#level').on('change', function(){
		if(this.value == '')
		{
			$('#grade11').hide();
			$('#grade12').hide();
		}

		if(this.value == '11')
		{
			$('#grade12').hide();
			$('#grade11').show();
		}

		if(this.value == '12')
		{
			$('#grade12').show();
			$('#grade11').hide();
		}
	});
});
</script>
@endsection