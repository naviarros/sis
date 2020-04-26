@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<div class="mt-2">
			<div class="row ml-2">
				<div class="form-group">
					<form id="srchgrade">
						<input type="text" name="grsearch" id="grsearch" class="wrk-com" placeholder="Search">
					</form>
				</div>
			</div>
			
			<table class="table table-bordered table-striped bg-light">
				<thead>
					<tr>
						<th>STUDENT NO</th>
						<th>STUDENT NAME</th>
						<th>STRAND</th>
						<th>GRADE LEVEL</th>
						<th>SECTION</th>
						<th>VIEW GRADES</th>
					</tr>
				</thead>
				<tbody id="gds">
					@foreach($grades as $grade)
					<tr>
						<td>{{ $grade->student_no}}</td>
						<td>{{ $grade->lastname}}, {{ $grade->firstname}} {{ $grade->middlename }}</td>
						<td>{{ $grade->strands->description }}</td>
						<td>{{ $grade->grade_level}}</td>
						<td>{{ $grade->section->section_description }}</td>
						<td class="text-center">
							<a href="{{ action('Auth\admin\admincontroller@viewgrades', $grade->student_id)}}" class="btn btn-info"><span class="fa fa-search"></span></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection