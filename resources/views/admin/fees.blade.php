@extends('masterpages.adminlayout')

@section('content')
	<div class="container">
		<div class="content-box">
			<div class="mt-4">
				<table class="table table-bordered table-striped bg-light">
					<thead>
						<tr>
							<th>REGISTRATION</th>
							<th>ID</th>
							<th>GUIDANCE</th>
							<th>ATHLETIC</th>
							<th>MEDICAL</th>
							<th>BREAKAGE</th>
						</tr>
					</thead>
					<tbody>
						@foreach($fees as $fee)
						<tr>
							<td>₱{{ $fee->registration_fee}}</td>
							<td>₱{{ $fee->id_fee}}</td>
							<td>₱{{ $fee->guidance_fee}}</td>
							<td>₱{{ $fee->athletic_fee }}</td>
							<td>₱{{ $fee->medical_fee}}</td>
							<td>₱{{ $fee->breakage_fee }}</td>
						</tr>
					</tbody>
				</table>

				<table class="table table-bordered table-striped bg-light">
					<thead>
						<tr>
							<th>DEVELOPMENTAL</th>
							<th>ENERGY</th>
							<th>INSURANCE</th>
							<th>LABORATORY</th>
							<th>NSTP</th>
							<th>TUITION</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>₱{{ $fee->development_fee }}</td>
							<td>₱{{ $fee->energy_fee }}</td>
							<td>₱{{ $fee->insurance_fee}}</td>
							<td>₱{{ $fee->lab_fee}}</td>
							<td>₱{{ $fee->nstp_fee }}</td>
							<td>₱{{ $fee->tuition_fee }}</td>
						</tr>
					</tbody>
					@endforeach
				</table>
			</div>

			<div class="mt-5 ml-4">
				<button class="btn btn-primary" data-toggle="modal" data-target="#fee"><span class="fa fa-plus"></span> Create New Fees</button>
			</div>

			<div class="modal fade" role="dialog" id="fee">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Create School Fees</h4>
							<button class="close" type="button" data-dismiss="modal">&times;</button>
						</div>

						<div class="modal-body">
							<form method="post" action="{{ route('create.fees')}}">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Registration Fee:</label>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<select class="form-control" name="regfee">
												<option></option>
												<?php
					  								$i = 300000;
					  								for($j = 0; $j <= $i; $j+=50)
					  								{
					  									echo "<option value='". $j ."'> ₱". $j . "</option>";
					  								}
					  							?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<label>ID and ID Lace Fee:</label>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<select class="form-control" name="idfee">
												<option></option>
												<?php
					  								$i = 300000;
					  								for($j = 0; $j <= $i; $j+=50)
					  								{
					  									echo "<option value='". $j ."'> ₱". $j . "</option>";
					  								}
					  							?>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Guidance Fee:</label>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<select class="form-control" name="guidancefee">
												<option></option>
												<?php
					  								$i = 300000;
					  								for($j = 0; $j <= $i; $j+=50)
					  								{
					  									echo "<option value='". $j ."'> ₱". $j . "</option>";
					  								}
					  							?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<label>Athletic Fee:</label>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<select class="form-control" name="athleticfee">
												<option></option>
												<?php
					  								$i = 300000;
					  								for($j = 0; $j <= $i; $j+=50)
					  								{
					  									echo "<option value='". $j ."'> ₱". $j . "</option>";
					  								}
					  							?>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Medical Fee:</label>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<select class="form-control" name="medfee">
												<option></option>
												<?php
					  								$i = 300000;
					  								for($j = 0; $j <= $i; $j+=50)
					  								{
					  									echo "<option value='". $j ."'> ₱". $j . "</option>";
					  								}
					  							?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<label>Breakage Fee:</label>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<select class="form-control" name="breakagefee">
												<option></option>
												<?php
					  								$i = 300000;
					  								for($j = 0; $j <= $i; $j+=50)
					  								{
					  									echo "<option value='". $j ."'> ₱". $j . "</option>";
					  								}
					  							?>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Developmental Fee:</label>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<select class="form-control" name="devfee">
												<option></option>
												<?php
					  								$i = 300000;
					  								for($j = 0; $j <= $i; $j+=50)
					  								{
					  									echo "<option value='". $j ."'> ₱". $j . "</option>";
					  								}
					  							?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<label>Energy Fee:</label>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<select class="form-control" name="energyfee">
												<option></option>
												<?php
					  								$i = 300000;
					  								for($j = 0; $j <= $i; $j+=50)
					  								{
					  									echo "<option value='". $j ."'> ₱". $j . "</option>";
					  								}
					  							?>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Insurance Fee:</label>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<select class="form-control" name="insfee">
												<option></option>
												<?php
					  								$i = 300000;
					  								for($j = 0; $j <= $i; $j+=50)
					  								{
					  									echo "<option value='". $j ."'> ₱". $j . "</option>";
					  								}
					  							?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<label>Laboratory Fee:</label>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<select class="form-control" name="labfee">
												<option></option>
												<?php
					  								$i = 300000;
					  								for($j = 0; $j <= $i; $j+=50)
					  								{
					  									echo "<option value='". $j ."'> ₱". $j . "</option>";
					  								}
					  							?>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>NSTP Fee:</label>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<select class="form-control" name="nstpfee">
												<option></option>
												<?php
					  								$i = 300000;
					  								for($j = 0; $j <= $i; $j+=50)
					  								{
					  									echo "<option value='". $j ."'> ₱". $j . "</option>";
					  								}
					  							?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<label>Tuition Fee:</label>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<select class="form-control" name="tuitionfee">
												<option></option>
												<?php
					  								$i = 300000;
					  								for($j = 0; $j <= $i; $j+=50)
					  								{
					  									echo "<option value='". $j ."'> ₱". $j . "</option>";
					  								}
					  							?>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="submit" class="btn btn-primary" name="" value="Create">
										</div>
									</div>
								</div>

								{{ csrf_field() }}
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection	