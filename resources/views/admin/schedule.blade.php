@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<div class="row mt-2 ml-3">
		 	<label>Strand/Track:</label>
		 	<div class="col-md-2">
		 		<select class="form-control">
		 			<option>----</option>
		 			<option>ABM</option>
		 			<option>STEM</option>
		 		</select>
		 	</div>
		 	<label>Section:</label>
		 	<div class="col-md-2">
		 		<select class="form-control" id="sections" onchange="sch();">
		 			<option>------</option>
					<option>ABM 11-1</option>
					<option>ABM 11-2</option>
					<option>ABM 11-3</option>
		 		</select>
		 	</div>

		 	<div class="col-md-2">
		 		<button class="btn btn-primary" data-toggle="modal" data-target="#addstud"><span class="fa fa-plus"></span> Add Student</button>
		 	</div>
		 </div>

		<div class="mt-3 ml-5" id="sch">
			<p>Advisery Class: Champagne Sabornido</p>
			<table class="table table-bordered" id="sched">
				<thead>
					<tr>
						<th>SUBJECTS</th>
						<th>SCHEDULE</th>
						<th>ROOM</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Physical Science</td>
						<td>W 07:00AM-10:00AM</td>
						<td>Lecture 1</td>
					</tr>
					<tr>
						<td>Research 2</td>
						<td>M 07:00AM-08:00AM</td>
						<td>Lecture 2</td>
					</tr>
				</tbody>
			</table>

			<ul class="pagination">
			  <li class="page-item"><a class="page-link" href="#"><<</a></li>
			  <li class="page-item"><a class="page-link" href="#">1</a></li>
			  <li class="page-item"><a class="page-link" href="#">>></a></li>
			</ul>
		</div>

		 <div class="modal fade" role="dialog" id="addstud">
		 	<div class="modal-dialog">
		 		<div class="modal-content">
		 			<div class="modal-header">
		 				<h4 class="modal-title">Add Student</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>

		 			<div class="modal-body">
		 				<form method="post" action="">
		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-3">
		 								<label>Strand/Track:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<select class="form-control">
		 									<option>-----</option>
		 									<option>ABM</option>
		 									<option>STEM</option>
		 									<option>GAS</option>
		 									<option>HUMSS</option>
		 									<option>ICT</option>
		 								</select>
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>Student Name:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<select class="form-control">
		 									<option>---</option>
		 									<option>Ivan Christian Sorra</option>
		 								</select>
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>Section Name:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<select class="form-control">
		 									<option>-----</option>
		 									<option>ABM 11-1</option>
		 								</select>
		 							</div>
		 						</div>
		 					</div>

		 					<div class="row">
		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<label>Subject Name:</label>
		 							</div>
		 						</div>

		 						<div class="form-group">
		 							<div class="col-md-12">
		 								<select class="form-control">
		 									<option>-------------------------</option>
		 									<option>Applied Economics</option>
		 									<option>General Chemistry</option>
		 									<option>General Physics</option>
		 									<option>Research 2</option>
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
		 				</form>
		 			</div>
		 		</div>
		 	</div>
	</div>
@endsection