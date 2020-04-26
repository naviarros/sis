@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<div class="row mt-2 ml-5">
			<div class="form-group">
				<div class="col-md-12">
					<label>Encoding of Grades Period:</label>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<select class="form-control">
						<option></option>
						<option>Open</option>
						<option>Close</option>
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
					<select class="form-control">
						<option></option>
						<option>1st Semester</option>
						<option>2nd Semester</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<button class="btn btn-primary">Submit</button>
				</div>
			</div>	
		</div>

		<div class="mt-2 ml-5">
			<h4><b>Subjects:</b></h4>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Section Name</th>
						<th>Professor Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>STEM 11-1</td>
						<td>Karl Angelo Bias</td>
						<td>
							<button class="btn btn-primary"><span class="fa fa-pencil"></span></button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection