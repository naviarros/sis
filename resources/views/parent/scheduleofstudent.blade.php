@extends('masterpages.parentlayout')

@section('content')


<style type="text/css">
	td[rowspan='2'] {
	color: white;
	background: #13355F;
}
</style>
	<div class="panel-main-content">
		<div class="mt-3">
			<ul class="navbar-nav">
				@foreach($studentinformation as $student)
				<li>Student Name: <b>{{$student->lastname}}, {{ $student->firstname}} {{ $student->middlename}}</b></li>
				<li>Strand/Track: <b>{{ $student->strands->description }}</b></li>
				<li>Section: <b>{{ $student->section->section_description }}</b></li>
				<li>School Year: <b>{{ $student->start_schyr }} - {{ $student->end_schyr}}</b></li>
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
					</tr>
				</thead>
				<tbody>
					@foreach($schedule as $sched)
						<tr>
							<td>{{ $sched->subject->subject_code }}</td>
							<td>{{ $sched->subject->subject_description }}</td>
							<td>{{ $sched->start }} - {{ $sched->end }} / {{ $sched->start1}} - {{ $sched->end1 }} / {{ $sched->start2 }} - {{ $sched->end2 }}</td>
							<td>{{ $sched->rooms['room_name']}} / {{ $sched->room1 }} / {{ $sched->room2 }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection