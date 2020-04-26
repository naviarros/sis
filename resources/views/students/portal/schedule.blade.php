@extends('masterpages.studentlayout')

@section('content')
<style type="text/css">
	td[rowspan='2'] {
	color: white;
	background: #13355F;
}
</style>
	<div class="panel-main-content">
		<div class="mt-3 ml-5">
			<ul class="navbar-nav">
				@foreach($section as $sec)
				@foreach($student as $stud)
				<li>Student Name: <b>{{ $stud->lastname }}, {{ $stud->firstname}} {{ $stud->middlename }}</b></li>
				<li>Strand/Track: <b>{{ $sec->strand->description }}</b></li>
				<li>Grade Level: <b>{{ $stud->grade_level }}</b></li>
				<li>Section: <b>{{ $sec->section_description }}</b></li>
				<li>School Year: <b>{{ $stud->start_schyr }} - {{ $stud->end_schyr}}</b></li>
				<li>Semester: <b>{{ $stud->semester }}</b></li>
				@endforeach
				@endforeach
			</ul>
		</div>

		<div class="mt-3">
			<table class="table table-bordered bg-light text-dark">
				<thead>
					<tr>
						<th>SUBJECT CODE</th>
						<th>SUBJECT DESCRIPTION</th>
						<th>DATE & TIME</th>
						<th>ROOM</th>
						<th>TEACHER</th>
					</tr>
				</thead>
				<tbody>
					@foreach($schedule as $sched)
						<tr>
							<td>{{ $sched->subject->subject_code }}</td>
							<td>{{ $sched->subject->subject_description }}</td>
							<td>{{ $sched->start }} - {{ $sched->end }} / {{ $sched->start1}} - {{ $sched->end1 }} / {{ $sched->start2 }} - {{ $sched->end2 }}</td>
							<td>{{ $sched->rooms['room_name']}} / {{ $sched->room1 }} / {{ $sched->room2 }}</td>
							<td>{{ $sched->instructor['lastname']}}, {{ $sched->instructor['firstname']}} {{ $sched->instructor['middlename']}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection