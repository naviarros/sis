@extends('masterpages.adminlayout')

@section('content')
	<div class="container">
		<div id="smartwizard">
			<ul id="wizard-list">
			    <li><a href="#step-1">Step 1<br /><small>Search Student</small></a></li>
			    <li><a href="#step-2">Step 2<br /><small>Tagging of Subject and Assessment</small></a></li>
			</ul>

			<div class="mt-3">
				<div id="step-1">
					<form method="post" action="{{ route('insert.retake') }}" id="insertretake">
						<fieldset class="scheduler-border">
							<legend class="scheduler-border">Find Student</legend>
							<div class="row mt-2 ml-5">
								<div class="form-group">
									<div class="col-md-12">
										<label>Search:</label>
									</div>
								</div>
								<input type="text" name="studentfind" class="search-text" id="studentfind" placeholder="Student Number">
							</div>

							<div class="mt-2">
								<table class="table table-bordered table-striped bg-light text-center">
									<thead>
										<tr>
											<th>#</th>
											<th>STUDENT NUMBER</th>
											<th>FULL NAME</th>
											<th>STRAND</th>
											<th>SECTION</th>
											<th>SUBJECT</th>
											<th>GRADE</th>
											<th>REMARKS</th>
											<th>SEMESTER</th>
										</tr>
									</thead>
									<tbody id="informationstud">
										@foreach($grades as $gr)
											<tr id="grades">
												<td class="small font-weight-bolder"><input type="checkbox" name="studgrad[]" id="studgrad" value="{{ $gr->student_id}}"></td>
												<td class="small font-weight-bolder">
													{{ $gr->students->student_no }}</td>
												<td class="small font-weight-bolder">
													{{ $gr->students->lastname}}, {{ $gr->students->firstname}} {{ $gr->students->middlename }}</td>
												<td class="small font-weight-bolder">{{ $gr->students->strands->description }}</td>
												<td class="small font-weight-bolder">{{ $gr->students->section->section_description }}</td>
												<td class="small font-weight-bolder">{{ $gr->subjects->subject_description }} ({{ $gr->subjects->subject_code}})</td>
												<td class="small font-weight-bolder"></td>
												<td class="small font-weight-bolder">{{ $gr->grade_status}}</td>
												<td class="small font-weight-bolder">{{ $gr->students->semester }}</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</fieldset>
					</div>

					<div id="step-2">
						<fieldset class="scheduler-border">
							<legend class="scheduler-border">Tagging of Subjects and Assessment</legend>
							<div class="row mt-2 ml-5">
								<div class="form-group">
									<div class="col-md-12">
										<label>Grade Level:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<select class="form-control" name="grlevel" id="lvlgr">
											<option></option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<label>Section:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<select class="form-control" name="sumsect">
											<option></option>
											@foreach($section as $sec)
												<option value="{{ $sec->section_mid}}">{{ $sec->section_description }}</option>
											@endforeach
										</select>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<label>Semester:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<select class="form-control" name="sumsem" id="sumsem">
											<option></option>
											<option value="Summer Semester">Summer Semester</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row mt-2 ml-5">
								<div class="form-group">
									<div class="col-md-12">
										<label>Payment Type:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<select class="form-control" name="pymtype">
											<option></option>
											<option value="Full Payment">Full Payment</option>
											<option value="Two Payment">Two Payment</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<label>Payment Method:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<select class="form-control" name="pymmet">
											<option></option>
											<option value="DepEd Voucher">DepEd Voucher</option>
											<option value="Cash">Cash</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row mt-2 ml-5">
								<div class="form-group">
									<div class="col-md-12">
										<label>Subject/s to be retake:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<select class="form-control" name="subsum" id="subsum">
											<option></option>
											@foreach($subj as $subject)
											<option value="{{ $subject->subject_id }}">{{ $subject->subject_description }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>

							<!-- <div class="row mt-2 ml-5">
								<div class="form-group">
									<div class="col-md-12">
										<label>Search Subject:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="retakesearchsub" id="retakesearchsub" class="form-control">
									</div>
								</div>
							</div> -->

							<h6 class="font-weight-bolder">Available Section having selected Subject:</h6>

							<table class="table table-bordered table-striped bg-light text-center">
								<thead>
									<tr>
										<th>#</th>
										<th>SUBJECT DESCRIPTION</th>
										<th>SCHEDULE</th>
										<th>ROOM</th>
										<th>TEACHER</th>
									</tr>
								</thead>
								<tbody id="subjdesc">
									@foreach($summer as $sumsub)
									<tr>
										<td><input type="checkbox" class="checkbox_check" name="suco[]" id="sectsubid" value="{{ $sumsub->section_subj_id }}"></td>
										<td>{{ $sumsub->subject->subject_description }}</td>
										<td>{{ $sumsub->start}}-{{ $sumsub->end}} / {{ $sumsub->start1}}-{{ $sumsub->end1}} / {{$sumsub->start2}}-{{$sumsub->end2}}</td>
										<td>{{ $sumsub->room}} / {{$sumsub->room1}} / {{ $sumsub->room2}}</td>
										<td>
											<label class="small"><input type="checkbox" name="instructor[]"  id="instructorsect" class="hidechk" value="{{ $sumsub->instructor_id }}"> {{ $sumsub->instructor->lastname}}. {{ $sumsub->instructor->firstname}}</label>
		                                </td>
									</tr>
									@endforeach
								</tbody>
							</table>

							<input type="hidden" class="text-center" name="ornumber" value="000{{ $payment + 1}}" readonly>
							<input type="hidden" name="amnt" value="1500" readonly>

							<div class="mt-2">
								<input type="submit" name="" class="btn btn-primary" value="Assess Now">
							</div>
						</fieldset>
					</div>
				</div>
				{{ csrf_field() }}
			</form>
		</div>
	</div>
@endsection