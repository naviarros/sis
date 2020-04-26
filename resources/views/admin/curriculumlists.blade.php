@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<div class="mt-2 ml-4 pb-1">
			<h3><b>CURRICULUM LISTS</b></h3>
		</div>

		<div class="mt-2 ml-4">
			<form id="curcsrch">
				<div class="row">
					<div class="form-group">
						<div class="col-md-12">
							<label class="text-uppercase">Strand:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<select class="form-control" name="strandcursearch" id="strandcursearch">
								<option></option>
								@foreach($stands as $strand)
								<option value="{{ $strand->strand_id }}">{{ $strand->description }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<label class="text-uppercase">Grade Level:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<select class="form-control" name="strandcurlvl" id="strandcurlvl">
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
							<label class="text-uppercase">semester:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<select class="form-control" name="strandcursem" id="strandcursem">
								<option></option>
								<option value="First Semester">First Semester</option>
								<option value="Second Semester">Second Semester</option>
							</select>
						</div>
					</div>
				</div>
			</form>

			<table class="table table-bordered table-striped bg-light text-center">
				<thead>
					<tr>
						<th>STRAND</th>
						<th>CURRICULUM YEAR</th>
						<th>GRADE LEVEL</th>
						<th>SEMESTER</th>
						<th>SUBJECT DESCRIPTION</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody id="curriculumlists">
					@foreach($curriculum as $curri)
						<tr id="curriculum{{ $curri->curriculum_id }}">
							<td>{{ $curri->strands->description }}</td>
							<td>{{ $curri->sch_yr }}</td>
							<td>{{ $curri->grade_level }}</td>
							<td>{{ $curri->semester }}</td>
							<td>{{ $curri->subject->subject_description }}</td>
							<td>
								<button class="btn btn-danger delete-curriculum" data-id="{{ $curri->curriculum_id }}">Delete</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $curriculum->links() }}
		</div>
	</div>
@endsection