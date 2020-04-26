@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<div class="mt-1 ml-2">
			<form method="post" action="{{ route('create.announcement')}}">
				{{ csrf_field() }}
				<h3><b>MAKE AN ANNOUNCEMENT</b></h3>
				<div class="row mt-2">
					<div class="form-group">
						<div class="col-md-12">
							<label>To:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<select class="form-control" name="sender" style="margin-left: 30px; width: 185px;">
								<option></option>
								<option value="Student">Students</option>
								<option value="Teachers">Teachers</option>
								<option value="All">All</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row mt-2">
					<div class="form-group">
						<div class="col-md-12">
							<label>Subject:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<input type="text" name="subj" class="form-control">
						</div>
					</div>
				</div>
				<label>Message:</label>
				<textarea class="form-control" name="bodyofmsg" cols="10" rows="10"></textarea>
				<div class="col-md-2 mt-3">
					<button class="btn btn-primary" type="submit"><span class="fa fa-plus"></span> Create</button>
				</div>
			</form>
		</div>
	</div>
@endsection