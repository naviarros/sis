@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<div class="row mt-2 ml-2">
			<div class="form-group">
				<div class="col-md-12">
					<label>Strand/Track:</label>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<select class="form-control" name="stlists" id="stlists">
						<option></option>
						@foreach($strands as $strand)
							<option value="{{ $strand->strand_id }}">{{ $strand->description }}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<label>Grade Level:</label>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<select class="form-control" name="levelgr" id="levelgr">
						<option></option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row ml-2">
			<div class="form-group">
				<div class="col-md-12">
					<label>Semester:</label>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<select class="form-control" name="sems" id="sems">
						<option></option>
						<option value="First Semester">First Semester</option>
						<option value="Second Semester">Second Semester</option>
						<option value="Summer Semester">Summer Semester</option>
					</select>
				</div>
			</div>
		</div>

		<div class="mt-1">
			<table class="table table-bordered" id="enrl">
				<thead>
					<tr>
						<th>STRAND/TRACK</th>
						<th>SECTION</th>
						<th>GRADE LEVEL</th>
						<th>SEMESTER</th>
						<th>STATUS</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody id="enrll">
					
				</tbody>
			</table>
		</div>

		 <div class="modal fade" role="dialog" id="stenroll">
		 	<div class="modal-dialog modal-md">
		 		<div class="modal-content">
		 			<div class="modal-header">
		 				<h4 class="modal-title">Enable/Disable Status of Enrollment</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>

		 			<div class="modal-body">
		 				<form method="post" action="{{ route('update.enrollment') }}" id="enrlform">
		 					<input type="hidden" name="_method" value="PUT">
    						{{csrf_field()}}
		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>STRAND/TRACK:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<input type="text" name="sttrc" id="sttrc" class="form-control" value="" disabled>
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>SECTION:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<input type="text" name="scton" id="scton" class="form-control" disabled>
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>GRADE LEVEL:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<select name="lgr" id="lgr" class="form-control">
		 									<option></option>
		 									<option value="11">11</option>
		 									<option value="12">12</option>
		 								</select>
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>SEMESTER:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<select class="form-control" name="semester" id="semsr">
		 									<option></option>
		 									<option value="First Semester">First Semester</option>
		 									<option value="Second Semester">Second Semester</option>
		 								</select>
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>STATUS:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<select class="form-control" name="statusenrl" id="statusenrl">
		 									<option></option>
		 									<option value="Enable">Enabled</option>
		 									<option value="Disable">Disabled</option>
		 								</select>
		 							</div>
		 						</div>
		 					</div>

		 					<input type="hidden" name="id" id="id" value="">

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<input type="submit" class="btn btn-primary" name="" id="save" value="Save">
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