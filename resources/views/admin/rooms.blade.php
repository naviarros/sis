@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<div class="row mt-2 ml-3">
			<div class="col-md-4">
				<button class="btn btn-primary" data-toggle="modal" data-target="#rooms"><span class="fa fa-plus"></span> Create Room</button>
			</div>
		 </div>

		 <div class="modal fade" role="dialog" id="rooms">
		 	<div class="modal-dialog modal-lg">
		 		<div class="modal-content">
		 			<div class="modal-header">
		 				<h4 class="modal-title">Create Room</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>

		 			<div class="modal-body">
		 				<form method="post" action="{{ route('room.new') }}">
		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>Room Name:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<input type="text" name="roomname" class="form-control">
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>Capacity:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<input type="number" name="cpcty" class="form-control">
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>Status:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<select class="form-control" name="tpe" style="margin-left: 40px; width: 180px">
		 									<option></option>
		 									<option value="Available">Available</option>
		 									<option value="Unavailable">Unavailable</option>
		 								</select>
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<button class="btn btn-success" type="submit"><span class="fa fa-plus"></span> Add</button>
		 							</div>
		 						</div>
		 					</div>
		 					{{ csrf_field() }}
		 				</form>
		 			</div>
		 		</div>
		 	</div>
		 </div>
		 <div class="mt-4 ml-3">
		 	<table class="table table-bordered">
		 		<thead>
		 			<tr>
		 				<th>ROOM NAME</th>
		 				<th>CAPACITY</th>
		 				<th>STATUS</th>
		 				<th>ACTION</th>
		 			</tr>
		 		</thead>
		 		<tbody>
		 			@foreach($room as $key => $rooms)
		 			<tr>
		 				<td>{{ $rooms->room_name }}</td>
		 				<td>{{ $rooms->capacity }}</td>
		 				<td>{{ $rooms->status }}</td>
		 				<td>
		 					<button class="btn btn-primary room_edit" data-id="{{ $rooms->room_id }}"><span class="fa fa-pencil"></span></button>
		 					<button class="btn btn-danger room_delete" data-id="{{ $rooms->room_id }}"><span class="fa fa-trash"></span></button>
		 				</td>
		 			</tr>
		 			@endforeach
		 		</tbody>
		 	</table>
		 </div>

		 <div class="modal fade" role="dialog" id="room">
		 	<div class="modal-dialog modal-lg">
		 		<div class="modal-content">
		 			<div class="modal-header">
		 				<h4 class="modal-title">Edit Room</h4>
		 				<button class="close" type="button" data-dismiss="modal">&times;</button>
		 			</div>

		 			<div class="modal-body">
		 				<form method="post" action="{{ route('update.room') }}" id="updroom">
		 					{{csrf_field()}}
		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>Room Name:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<input type="text" name="roomname" id="roomname" class="form-control">
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>Status:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<select class="form-control" name="sts" id="sts" style="margin-left: 40px; width: 180px">
		 									<option></option>
		 									<option value="Available">Available</option>
		 									<option value="Unavailable">Unavailable</option>
		 								</select>
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>Capacity:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<input type="text" name="cpctys" id="cpctys" style="margin-left: 25px; width: 180px" class="form-control">
		 							</div>
		 						</div>
		 					</div>
		 					<input type="hidden" name="id" id="id" value="">
		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<input type="submit" id="save" name="" class="btn btn-primary" value="Save">
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