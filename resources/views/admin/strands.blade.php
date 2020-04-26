@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<div class="mt-2 ml-5">
			<h3><b>STRANDS</b></h3>
		</div>
		<div class="row mt-2 float-right">
			<button class="btn btn-primary" data-toggle="modal" data-target="#addstr"><span class="fa fa-plus"></span> New Strand/Track</button>
			<button class="btn btn-primary ml-1" data-toggle="modal" data-target="#addtrackcode"><span class="fa fa-plus"></span> Add Track Code</button>
			<button class="btn btn-primary ml-1" data-toggle="modal" data-target="#edittrackcode"><span class="fa fa-pencil"></span> Edit Track Code</button>
		</div>

		<div class="mt-2">
			<table class="table table-bordered table-striped bg-light" id="str">
				<thead>
					<tr>
						<th>Strand Code</th>
						<th>Description</th>
						<th>Action</th> 
					</tr>
				</thead>
				<tbody id="editss">
					@foreach($strands as $str => $strand)
					<tr>
						<td>{{ $strand->strand_code }}</td>
						<td>{{ $strand->description }}</td>
						<td>
							<button class="btn btn-primary edit-strand" data-id="{{ $strand->strand_id }}"><span class="fa fa-pencil"></span></button>
							<button class="btn btn-danger delete-modal" data-id="{{ $strand->strand_id }}"><span class="fa fa-trash"></span></button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="modal fade" id="addtrackcode" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-uppercase font-weight-bolder">Track Maintenance</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						<form method="post" action="{{ route('track.registration')}}">
							{{ csrf_field() }}
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Track Code:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="codes" id="codes" class="form-control">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<input type="submit" name="" class="btn btn-primary" value="Submit">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="edittrackcode" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-uppercase font-weight-bolder">Modify Track Code</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						<table class="table table-bordered table-striped bg-light">
							<thead>
								<tr>
									<th>TRACK CODE</th>
									<th>ACTION</th>
								</tr>
							</thead>
							<tbody id="trckedit">
								@foreach($track as $tracks)
								<tr>
									<td>{{ $tracks->track_description }}</td>
									<td>
										<button class="btn btn-primary edit-track" data-id="{{ $tracks->track_id }}" ><span class="fa fa-pencil"></span></button>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="edittrack" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-uppercase font-weight-bolder">Edit Track Code</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						<form method="post" action="{{ route('update.track') }}" id="edittrackform">
							<input type="hidden" name="_method" value="PUT">
    						{{csrf_field()}}
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Track Code:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="tckde" id="tckde" class="form-control">
									</div>
								</div>
							</div>

							<input type="hidden" name="id" id="id">
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

		<div class="modal fade" id="addstr" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-uppercase font-weight-bolder">Strands Maintenance</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						<form method="post" action="{{ route('strand.new') }}">
							<div class="row ml-3">
								<div class="form-group">
									<div class="col-md-9">
										<label>Track Code:</label>
									</div>

									<div class="col-md-12">
										<select class="form-control" name="strcode" id="strcode">
											<option></option>
											@foreach($track as $trac)
											<option value="{{ $trac->track_id }}">{{ $trac->track_description }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>

							<div class="row ml-3">
								<div class="form-group">
									<div class="col-md-12">
										<label>Strand Code:</label>
										<input type="text" name="scdes" id="scdes" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<label>Strand Description:</label>
										<input type="text" name="descr" id="descr" class="form-control">
									</div>
								</div>
							</div>

							<div class="row ml-3">
								<div class="form-group">
									<div class="col-md-3">
										<input type="submit" name="" value="Save" class="btn btn-primary">
									</div>
								</div>
							</div>
							{{ csrf_field() }}
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modtrack" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-uppercase font-weight-bolder">Edit Strand</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						<form method="post" action="{{ route('update.strand') }}" id="modtracks">
							<input type="hidden" name="_method" value="PUT">
    						{{csrf_field()}}
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Track Code:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<select class="form-control" name="trackcode" id="trackcode">
											<option></option>
											@foreach($track as $tra)
											<option value="{{ $tra->track_id}}">{{ $tra->track_description}}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Strand Code:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="strandcode" id="strandcode" class="form-control">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Strand Description:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="stranddescr" id="stranddescr" class="form-control">
									</div>
								</div>
							</div>

							<input type="hidden" name="id" id="sid">

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