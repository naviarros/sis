@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<h1><b>TEACHER DATA ARCHIVES</b></h1>
		<div class="mt-4">
			<table class="table table-bordered table-striped bg-light">
				<thead>
					<tr>
						<th>EMPLOYEE NUMBER</th>
						<th>COMPLETE NAME</th>
						<th>ADDRESS</th>
						<th>AGE</th>
						<th>GENDER</th>
						<th>MORE</th>
					</tr>
				</thead>

				<tbody id="teacharch">
					@foreach($teacherarch as $tarch)
						<tr>
							<td>{{ $tarch->instructor_id }}</td>
							<td>{{ $tarch->lastname}}, {{ $tarch->firstname}} {{ $tarch->middlename}}</td>
							<td>{{ $tarch->address}}</td>
							<td>{{ $tarch->age}}</td>
							<td>{{ $tarch->gender}}</td>
							<td>
								<button class="btn btn-success teacher-restore" data-id="{{ $tarch->instructor_id }}">RESTORE</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection