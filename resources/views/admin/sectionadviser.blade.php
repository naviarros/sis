@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<div class="mt-2 ml-4 pb-1">
			<h3><b>CHANGE/REMOVE SECTION ADVISER</b></h3>
		</div>

		<div class="row mt-2 ml-3">
			<div class="form-group">
				<div class="col-md-12">
					<label>Strand:</label>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<select class="form-control" name="sects" id="sects">
						<option></option>
						@foreach($sects as $st)
							<option value="{{ $st->strand_id }}">{{ $st->strand->description }}</option>
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
					<select class="form-control" name="grl" id="grl">
						<option></option>
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
					<select class="form-control" name="sct" id="sct">
						
					</select>
				</div>
			</div>
		</div>

		<div class="mt-2 ml-3">
			<table class="table table-bordered table-striped bg-light text-center">
				<thead>
					<tr>
						<th>STRAND</th>
						<th>SECTION</th>
						<th>GRADE LEVEL</th>
						<th>ADVISER</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>

		<div class="modal fade" role="dialog" id="sectadvedit">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Change Adviser</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						<form method="post" action="{{ route('update.adviser') }}" id="chnadv">
							{{csrf_field()}}
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Strand:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="strnd" id="strnd" class="form-control" disabled>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Section:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="sction" class="form-control" id="sction" disabled>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Grade Level:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="glvl" id="glvl" class="form-control" disabled>
									</div>
								</div>
							</div>
							<input type="hidden" name="id" id="id" value="">
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<input type="submit" name="" id="save" class="btn btn-primary" value="Save">
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