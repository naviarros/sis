@extends('masterpages.studentlayout')

@section('content')
	
	<?php error_reporting(0); ?>
	<div class="content">
		@foreach($section_sub as $section)
			@if($section->status == 'Enable')
			<form method="post" action="{{ route('stud.enroll') }}">
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
								<td>{{ session()->get('studentno')}}</td>
								<td>{{ session()->get('studentname')}}</td>
								<td>{{ session()->get('grade_level')}}</td>
								<td>{{ session()->get('semester')}}</td>
							</tr>
						</tbody>
					</table>
				</div>
		   
				<div class="mt-3">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th></th>
								<th>Subject Description</th>
								<th>Units</th>
								<th>Schedule</th>
							</tr>
						</thead>
						<tbody>
							@foreach($subjects as $sub)
								@if($sub->section->grade_level == session()->get('grade_level') && session()->get('grade_level') == '11' && $sub->section->semester == 'Second Semester' && $sub->semester == 'Second Semester')
								<input type="hidden" name="glv[]" value="11">
								<input type="hidden" name="sem[]" value="Second Semester">
								<input type="hidden" name="teacher[]" value="{{ $sub->instructor_id }}">
								<tr id="sub{{ $sub->subject_id }}">
									<td><input type="hidden" name="subjects[]" value="{{ $sub->subject_id }}" checked></td>
									<td>{{ $sub->subject->subject_description }}</td>
									<td>{{ $sub->subject->credited_units }}</td>
									<td>{{ $sub->start }} - {{ $sub->end}} / {{ $sub->start1}} - {{ $sub->end1}} / {{ $sub->start2}} - {{ $sub->end2}}</td>
								</tr>

								@elseif($sub->section->grade_level == '12' && $sub->grade_level == '12' && $sub->section->semester == 'First Semester' && $sub->semester == 'First Semester')

								<input type="hidden" name="glv[]" value="12">
								<input type="hidden" name="sem[]" value="First Semester">
								<input type="hidden" name="teacher[]" value="{{ $sub->instructor_id }}">
								<tr id="sub{{ $sub->subject_id }}">
									<td><input type="hidden" name="subjects[]" value="{{ $sub->subject_id }}" checked></td>
									<td>{{ $sub->subject->subject_description }}</td>
									<td>{{ $sub->subject->credited_units }}</td>
									<td>{{ $sub->start }} - {{ $sub->end}} / {{ $sub->start1}} - {{ $sub->end1}} / {{ $sub->start2}} - {{ $sub->end2}}</td>
								</tr>
								
								<input type="checkbox" style="display: none;"  name="core[]" value="1st" checked>
								<input type="checkbox" style="display: none;" name="core[]" value="2nd" checked>
								<input type="checkbox" style="display: none;" name="core[]" value="3rd" checked>
								<input type="checkbox" style="display: none;" name="core[]" value="4th" checked>
								@endif

								@if($sub->section->grade_level == '12' && $sub->grade_level == '12' && $sub->section->semester == 'Second Semester' && $sub->semester == 'Second Semester')
								<input type="hidden" name="glv[]" value="12">
								<input type="hidden" name="sem[]" value="Second Semester">
								<input type="hidden" name="teacher[]" value="{{ $sub->instructor_id }}">
								<tr id="sub{{ $sub->subject_id }}">
									<td><input type="hidden" name="subjects[]" value="{{ $sub->subject_id }}"></td>
									<td>{{ $sub->subject->subject_description }}</td>
									<td>{{ $sub->subject->credited_units }}</td>
									<td>{{ $sub->start }} - {{ $sub->end}} / {{ $sub->start1}} - {{ $sub->end1}} / {{ $sub->start2}} - {{ $sub->end2}}</td>
								</tr>
								@endif
							@endforeach
						</tbody>
					</table>
				</div>

				@if($sub->section->grade_level == session()->get('grade_level') && session()->get('grade_level') == '11' && $sub->section->semester == 'Second Semester' && $sub->semester == 'Second Semester' && $sub->section->grade_level == session()->get('grade_level') && session()->get('grade_level') == '12' && $sub->section->semester == 'Second Semester' && $sub->semester == 'Second Semester' && $sub->section->grade_level == session()->get('grade_level') && session()->get('grade_level') == '12' && $sub->section->semester == 'First Semester' && $sub->semester == 'First Semester')
				<div class="row ml-5 mt-2">
					<p>Payment Method:</p>
					<div class="ml-2">
						<select>
							<option></option>
							<option value="DepEd Voucher">DepEd Voucher</option>
							<option value="Cash">Cash</option>
						</select>
					</div>
				</div>
				@endif

				<div class="row pb-2" style="margin-left: 83%;">
					<div style="margin-right: 5px;">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
					<button class="btn btn-danger">Cancel</button>
				</div>
				{{ csrf_field() }}
			</form>
			@elseif($section->status == 'Disable')
				<h1>REGISTRATION IS NOT YET OPEN</h1>
			@endif
		@endforeach
	</div>
@endsection