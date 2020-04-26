@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		 <div class="row mt-2 ml-3">
		 	<button class="btn btn-primary" data-toggle="modal" data-target="#sectionmodal"><span class="fa fa-plus"></span> Create Section</button>
		 	<a href="{{ action('Auth\admin\admincontroller@generatesectionlist')}}" class="btn btn-success ml-1"><span class="fa fa-print"></span> Print all Sections</a>
		 </div>

		 <div class="mt-4 ml-2 pl-2">
		 	<table class="table table-striped table-bordered bg-light">
		 		<thead>
		 			<tr class="text-center">
		 				<th>SCHOOL YEAR</th>
		 				<th>SECTION NAME</th>
		 				<th>STRAND</th>
		 				<th>ACTION</th>
		 			</tr>
		 		</thead>
		 		<tbody class="text-center">
		 			@foreach($sects as $sect)
		 				<tr id="sects{{ $sect->section_id }}">
		 					<td>{{ $sect->start_schyr}} - {{ $sect->end_schyr }}</td>
		 					<td>{{ $sect->section_description }}</td>
		 					<td>{{ $sect->strand->description }}</td>
		 					<td>
		 						<button class="btn btn-primary section-edit" data-id="{{ $sect->section_mid }}">Edit</button>
		 						<a href="{{ action('Auth\admin\admincontroller@generatesectionstudents', $sect->section_mid )}}" class="btn btn-success">Print</a>
		 						<button class="btn btn-primary section-delete" data-id="{{ $sect->section_mid }}">Delete</button>
		 					</td>
		 				</tr>
		 			@endforeach
		 		</tbody>
		 	</table>
		 </div>

		 <div class="modal fade" role="dialog" id="sectionmodal">
		 	<div class="modal-dialog modal-lg">
		 		<div class="modal-content">
		 			<div class="modal-header">
		 				<h4 class="modal-title">Create Section</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>

		 			<div class="modal-body">
		 				<form method="post" action="{{ route('section.new') }}">
		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-3">
		 								<label>Strand/Track:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<select class="form-control" name="strdescr" style="margin-left: 8px;">
		 									@foreach($stran as $strand)
		 										<option value="{{ $strand->strand_id }}">{{ $strand->description }}</option>
		 									@endforeach
		 								</select>
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>School Year:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<select class="form-control" style="margin-left: 17px;">
		 									<option><?php echo date('Y') ?> - <?php echo date('Y') + 1 ?></option>
		 								</select>
		 							</div>
		 						</div>

								 <input type="hidden" name="startyr" value="<?php echo date('Y') ?>">
								 <input type="hidden" name="endyr" value="<?php echo date('Y') + 1 ?>">
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>Section Name:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<input type="text" style="margin-left: 5px;" name="sect_descr" class="form-control">
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
		 								<select class="form-control" name="grlevel" style="margin-left: 19px;">
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
		 								<label>Assign Adviser:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<select class="form-control" name="adviser">
		 									<option></option>
		 									@foreach($teacher as $teach)
		 										<option value="{{ $teach->instructor_id }}">{{ $teach->lastname }}, {{ $teach->firstname }}</option>
		 									@endforeach
		 								</select>
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<button class="btn btn-success"><span class="fa fa-plus"></span> Add</button>
		 							</div>
		 						</div>
		 					</div>
		 					{{ csrf_field() }}
		 				</form>
		 			</div>
		 		</div>
		 	</div>
		 </div>

		 <div class="modal fade" role="dialog" id="editsectionmodal">
		 	<div class="modal-dialog modal-lg">
		 		<div class="modal-content">
		 			<div class="modal-header">
		 				<h4 class="modal-title">Edit Section</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
		 			</div>

		 			<div class="modal-body">
		 				<form method="post" action="{{ route('update.sect')}}" id="editsect">
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
		 								<select class="form-control" id="stnd" name="stnd" style="margin-left: 45px;">
		 									<option></option>
		 									@foreach($stran as $str)
		 									<option value="{{ $str->strand_id }}">{{ $str->description }}</option>
		 									@endforeach
		 								</select>
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>SECTION DESCRIPTION:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<input type="text" name="sctn" id="sctn" class="form-control">
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>Teacher Name:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<select class="form-control" name="tchname" id="insname" style="margin-left: 65px;">
											<option></option>
											@foreach($teacher as $teach)
												<option value="{{ $teach->instructor_id}}">{{ $teach->lastname}}, {{ $teach->firstname}}, {{ $teach->middlename }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>

		 					<input type="hidden" name="id" id="id">

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<input type="submit" name="" class="btn btn-primary" id="save" value="Save">
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