@extends('masterpages.studentlayout')

@section('content')
<style type="text/css">
	.content {
		margin-left: 0 !important;
	}
</style>
	<div class="panel-main-content">
		<div class="content">
			<div class="mt-4 ml-3">
				<h3>ANNOUNCEMENTS:</h3>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>TITLE</th>
							<th>MESSAGE</th>
							<th>DATE ANNOUNCED</th>
						</tr>
					</thead>
					<tbody>
						@foreach($announcementstudent as $announce)
						<tr>
							<td>{{ $announce->title }}</td>
							<td>{{ $announce->description }}</td>
							<td>{{ $announce->created_at }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection