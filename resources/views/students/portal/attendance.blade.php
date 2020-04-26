@extends('masterpages.studentlayout')

@section('content')
		<div class="attendance">
			<div class="container">
				<h6 class="mt-4 ml-5"><B>ATTENDANCE LOG</B></h6>
				<div class="mt-3 ml-5 pl-5">
					<div class="row">
						<div class="col-md-2">
							<label>Select Day:</label>
						</div>

						<div class="col-md-4">
							<form id="attendancesearch">
								<input type="text" name="daysearch" id="datepicker" class="form-control daysearch">
							</form>
						</div>
					</div>
				</div>

				<div class="mt-2">
					<table class="table">
						<thead>
							<tr>
								<th class="text-uppercase">student no</th>
								<th class="text-uppercase">date</th>
								<th class="text-uppercase">time</th>
								<th class="text-uppercase">status</th>
							</tr>
						</thead>
						<tbody id="stattendance">
							<!-- @foreach($attendance as $attend)
							<tr>
								<td>{{ $attend->student->students->student_no}}</td>
								<td>{{ $attend->date}}</td>
								<td>{{ $attend->time_in }}</td>
							@endforeach -->
						</tbody>
					</table>
				</div>
			</div>
		</div>
@endsection