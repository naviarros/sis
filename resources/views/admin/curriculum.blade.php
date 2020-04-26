@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
	 	<div class="row mt-2 ml-3">
	 		<h3><b>CURRICULUM MANAGEMENT</b></h3>
		</div>

		<form method="post" action="{{ route('add.curriculum') }}">
	 		<div class="row ml-1">
	 			<div class="form-group">
	 				<div class="col-md-6">
	 					<label>Strand/Track:</label>
	 				</div>
	 			</div>

	 			<div class="form-group">
	 				<div class="col-md-12">
	 					<select class="form-control" name="strand">
	 						<option></option>
	 						@foreach($strands1 as $strand)
	 							<option value="{{ $strand->strand_id }}"> {{ $strand->description }}</option>
	 						@endforeach
	 					</select>
	 				</div>
	 			</div>

	 			<div class="form-group">
	 				<div class="col-md-6">
	 					<label>Semester:</label>
	 				</div>
	 			</div>

	 			<div class="form-group">
	 				<div class="col-md-12">
	 					<select class="form-control" name="semster">
	 						<option value="First Semester">First Semester</option>
	 						<option value="Second Semester">Second Semester</option>
	 						<option value="Summer Semester">Summer Semester</option>
	 					</select>
	 				</div>
	 			</div>
	 		</div>

	 		<div class="row ml-1">

	 			<div class="form-group">
	 				<div class="col-md-12">
	 					<label>Grade Level:</label>
	 				</div>
	 			</div>

	 			<div class="form-group">
	 				<div class="col-md-12">
	 					<select class="form-control" name="grlvl" style="margin-left: 5px;">
	 						<option value="11">11</option>
	 						<option value="12">12</option>
	 					</select>
	 				</div>
	 			</div>

	 			<div class="form-group">
	 				<div class="col-md-12">
	 					<label>Curriculum Year: </label>
	 				</div>
	 			</div>

	 			<div class="form-group">
	 				<div class="col-md-12">
	 					<select class="form-control" name="cryr">
	 						<option></option>
  							<option value="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></option>
	 					</select>
	 				</div>
	 			</div>

	 			<div class="row ml-1">
	 				<div class="form-group">
		 				<div class="col-md-12">
		 					<label>Subject Category:</label>
		 				</div>
		 			</div>

		 			<div class="form-group">
		 				<div class="col-md-12">
		 					<select class="form-control" name="search" id="search" style="margin-left: 10px;">
		 						<option></option>
		 						<option value="Core Subject">Core Subject</option>
		 						<option value="Applied Subject">Applied Subject</option>
		 						<option value="Specialized Subject">Specialized Subject</option>
		 					</select>
		 				</div>
		 			</div>
	 			</div>
	 		</div>

	 		<div class="ml-1">
	 			<table class="table table-bordered table-striped bg-light">
	 				<thead>
	 					<tr class="text-center">
	 						<th>#</th>
	 						<th>SUBJECT CODE</th>
	 						<th>SUBJECT DESCRIPTION</th>
	 						<th>SUBJECT TYPE</th>
	 					</tr>
	 				</thead>

	 				<tbody class="text-center">
	 			
	 				</tbody>
	 			</table>
	 		</div>

	 		<div class="row ml-1">
	 			<div class="form-group">
	 				<div class="col-md-12">
	 					<input type="submit" name="" class="btn btn-primary" value="Create">
	 				</div>
	 			</div>
	 		</div>
	 		{{ csrf_field() }}
	 	</form>
	</div>
@endsection