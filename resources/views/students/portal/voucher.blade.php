@extends('masterpages.studentlayout')

@section('content')
	<div class="content">
		<div class="mt-3 text-center">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>LRN No</th>
						<th>Student Name</th>
						<th>Grade & Section/Strand</th>
						<th>Semester</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>2017-001</td>
						<td>John Sovereign U. Constantino</td>
						<td>12 - ABM</td>
						<td>1st Semester</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="mt-3 text-center">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Subject Description</th>
						<th>Units</th>
						<th>Schedule</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox" name=""></td>
						<td>Understanding Culture Society & Politics</td>
						<td>4</td>
						<td>
							<select>
								<option>M/W/F 01:00PM-01:30PM/01:30PM-02:00PM/01:00PM-02:00PM</option>
							</select>
						</td>
					</tr>

					<tr>
						<td><input type="checkbox" name=""></td>
						<td>Business Finance</td>
						<td>4</td>
						<td>
							<select>
								<option>M/W/F 01:00PM-01:30PM/01:30PM-02:00PM/01:00PM-02:00PM</option>
							</select>
						</td>
					</tr>

					<tr>
						<td><input type="checkbox" name=""></td>
						<td>Business Ethics</td>
						<td>4</td>
						<td>
							<select>
								<option>M/W/F 01:00PM-01:30PM/01:30PM-02:00PM/01:00PM-02:00PM</option>
							</select>
						</td>
					</tr>

					<tr>
						<td><input type="checkbox" name=""></td>
						<td>Inquiries and Investigation</td>
						<td>4</td>
						<td>
							<select>
								<option>M/W/F 01:00PM-01:30PM/01:30PM-02:00PM/01:00PM-02:00PM</option>
							</select>
						</td>
					</tr>

					<tr>
						<td><input type="checkbox" name=""></td>
						<td>Physical Education 4</td>
						<td>4</td>
						<td>
							<select>
								<option>M/W/F 01:00PM-01:30PM/01:30PM-02:00PM/01:00PM-02:00PM</option>
							</select>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	
			<div class="hide ml-2">
				<p><b>Miscellaneous Fees:</b></p>
				<div class="row ml-5 pl-1">
					<p>Registration Fee:</p>
					<div class="col-md-3">
						<p>1,000</p>
					</div>

					<div class="row col-md-3">
						<p><b>Total Fees:</b></p>
						<div class="col-md-1">
							<p>4,000</p>
						</div>
					</div>
				</div>

				<div class="row ml-5 pl-1">
					<p>ID and ID Lace:</p>
					<div class="col-md-3">
						<p>150.00</p>
					</div>
				</div>

				<div class="row ml-5 pl-1">
					<p>Guidance Fee:</p>
					<div class="col-md-3">
						<p>200.00</p>
					</div>
				</div>

				<div class="row ml-5 pl-1">
					<p>Athletic Fee:</p>
					<div class="col-md-3">
						<p>100.00</p>
					</div>
				</div>

				<div class="row ml-5 pl-1">
					<p>Medical/Dental Fee:</p>
					<div class="col-md-2">
						<p>300.00</p>
					</div>
				</div>

				<div class="row ml-5 pl-1">
					<p>Breakage Fee:</p>
					<div class="col-md-2">
						<p>200.00</p>
					</div>
				</div>

				<div class="row ml-5 pl-1">
					<p>Developmental Fee:</p>
					<div class="col-md-2">
						<p>300.00</p>
					</div>
				</div>

				<div class="row ml-5 pl-1">
					<p>Energy Fee:</p>
					<div class="col-md-2">
						<p>100.00</p>
					</div>
				</div>

				<div class="row ml-5 pl-1">
					<p>Insurance Fee:</p>
					<div class="col-md-2">
						<p>300.00</p>
					</div>
				</div>

				<div class="row ml-5 pl-1">
					<p>Laboratory Fee:</p>
					<div class="col-md-2">
						<p>400.00</p>
					</div>
				</div>

				<div class="row ml-5 pl-1">
					<p>NSTP Fee:</p>
					<div class="col-md-2">
						<p>200.00</p>
					</div>
				</div>
			</div>

			<div class="row ml-2 pb-2">
				<div class="col-md-6">
					<button class="btn btn-info">Assess</button>
					<button class="btn btn-info">Cancel</button>
				</div>
			</div>
	</div>
@endsection