@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<h1><b>STUDENT DATA ARCHIVES</b></h1>
		<div class="mt-4">
			<table class="table table-bordered table-striped bg-light">
				<thead>
					<tr>
						<th>STUDENT NUMBER</th>
						<th>COMPLETE NAME</th>
						<th>STRAND TAKEN</th>
						<th>SECTION</th>
						<th>GRADE LEVEL</th>
						<th>ACTION</th>
					</tr>
				</thead>

				<tbody id="starch">
					@foreach($studentarch as $arch)
						<tr>
							<td>{{ $arch->student_no }}</td>
							<td>{{ $arch->lastname}}, {{ $arch->firstname}} {{ $arch->middlename}}</td>
							<td>{{ $arch->strands->description}}</td>
							<td>{{ $arch->section->section_description }}</td>
							<td>{{ $arch->grade_level}}</td>
							<td>
								<button class="btn btn-success student-restore" data-id="{{ $arch->student_id }}">RESTORE</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection