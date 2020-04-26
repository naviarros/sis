@extends('masterpages.adminlayout')

@section('content')
<div class="section-list">
	<div class="mt-2 ml-3">
		<button class="btn btn-primary" data-toggle="modal" data-target="#subjects"><span class="fa fa-plus"></span> Add Subject</button>
		<a href="{{ action('Auth\admin\admincontroller@generatesubject')}}" class="btn btn-primary"><span class="fa fa-print"></span> Print Subjects</a>
	</div>
	<div class="mt-2 ml-2 pl-2">
		<div class="float-right">
			<div class="row">
				<div class="form-group">
					<div class="col-md-6">
						<label>Search:</label>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-12">
						<form id="serchsbj">
							<input type="text" name="serchsbj" id="sbjserch" class="form-control">
						</form>
					</div>
				</div>
			</div>
		</div>
		<table class="table table-striped table-bordered bg-light">
		 	<thead>
		 		<tr>
		 			<th>SUBJECT CODE</th>
		 			<th>SUBJECT DESCRIPTION</th>
		 			<th>SUBJECT TYPE</th>
		 			<th>PRE-REQUISITE</th>
		 			<th>ACTION</th>
		 		</tr>
		 	</thead>
		 	<tbody id="sbjbody">
		 		@foreach($subjects as $subject)
		 			<tr id="subject{{ $subject->subject_id }}">
		 				<td>{{ $subject->subject_code }}</td>
		 				<td>{{ $subject->subject_description }}</td>
		 				<td>{{ $subject->subject_type }}</td>
		 				<td>{{ $subject->prerequisite}}</td>
		 				<td>
		 					<button class="btn btn-primary edit-modal" data-id="{{ $subject->subject_id }}"><span class="fa fa-pencil"></span></button>
		 					<button class="btn btn-danger deletesbj-modal" data-id="{{ $subject->subject_id }}"><span class="fa fa-trash"></span></button>
		 				</td>
		 			</tr>
		 			@endforeach
		 	</tbody>
		</table>
		{{ $subjects->links() }}
	</div>

	<div class="modal fade" role="dialog" id="subjects">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Subject Maintenance</h4>
					<button class="close" type="button" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					<form method="post" action="{{ route('subj.main.new') }}">
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Subject Code:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<input type="text" name="scode" class="form-control" style="margin-left: 40px; width: 180px" autocomplete="off">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Subject Description:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<input type="text" name="descr" class="form-control" autocomplete="off">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Subject Type:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<select class="form-control" name="type" style="margin-left: 40px; width: 180px">
										<option></option>
										<option value="Core Subject">Core Subject</option>
										<option value="Applied Subject">Applied Subject</option>
										<option value="Specialized Subject">Specialized Subject</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Units:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<select class="form-control" name="units">
										<option></option>
			  							<option value="1">1</option>
			  							<option value="2">2</option>
			  							<option value="3">3</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<label>Lect Hrs:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<select class="form-control" name="lecthrs"> 
										<option></option>
			  							<?php
			  								for($j = 0; $j <= 5; $j++)
			  								{
			  									echo "<option value='". $j ."'>". $j . "</option>";
			  								}
			  							?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<label>Lab Hrs:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<select class="form-control" name="labhrs">
										<option></option>
			  							<?php
			  								for($j = 0; $j <= 5; $j++)
			  								{
			  									echo "<option value='". $j ."'>". $j . "</option>";
			  								}
			  							?>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							
						</div>

						<div class="row">
							
						</div>

						<div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary" value="Add">
                                </div>
                            </div>
                        </div>
                        {{ csrf_field() }}
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" role="dialog" id="subjectedit">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit Subject</h4>
					<button class="close" type="button" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					<form method="post" action="{{ route('update.subject') }}" id="editsub">
						<input type="hidden" name="_method" value="PUT">
    					{{csrf_field()}}
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Subject Code:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<input type="text" name="subjectcode" style="margin-left: 40px; width: 180px;" id="subjectc" class="form-control">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Subject Description:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<input type="text" name="sbjdescr" id="sbjdescr" class="form-control">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Subject Type:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<select class="form-control" name="stype" id="stype" style="margin-left: 43px; width: 180px;">
										<option></option>
										<option value="Core Subject">Core Subject</option>
										<option value="Applied Subject">Applied Subject</option>
										<option value="Specialized Subject">Specialized Subject</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Units:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<select class="form-control" id="units" name="units">
										<option></option>
			  							<option value="1">1</option>
			  							<option value="2">2</option>
			  							<option value="3">3</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<label>Lect Hrs:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<select class="form-control" id="lecthrs" name="lecthrs"> 
										<option></option>
			  							<?php
			  								for($j = 0; $j <= 5; $j++)
			  								{
			  									echo "<option value='". $j ."'>". $j . "</option>";
			  								}
			  							?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<label>Lab Hrs:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<select class="form-control" id="labhrs" name="labhrs">
										<option></option>
			  							<?php
			  								for($j = 0; $j <= 5; $j++)
			  								{
			  									echo "<option value='". $j ."'>". $j . "</option>";
			  								}
			  							?>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Pre-requisite:</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<select class="form-control" name="prerequisite" id="prerequisite">
										<option></option>
										@foreach($subj as $subj)
										<option value="{{ $subj->subject_description }}">{{ $subj->subject_description }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						<input type="hidden" name="id" id="id" value="">
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<input type="submit" name="" id="save" value="Save" class="btn btn-primary">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection