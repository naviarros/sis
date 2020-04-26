@extends('masterpages.adminlayout')

@section('content')
<div class="panel-main-content">
		<div class="mt-2 ml-3">
			<fieldset class="scheduler-border">
				<legend class="scheduler-border">Change Password</legend>
				<form method="post" action="{{ route('admin.pass')}}">
					<div class="row mt-2">
						<div class="form-group">
							<div class="col-md-12">
								<label>Old Password:</label>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12">
								<input type="password" name="oldpassword" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label>New Password:</label>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12">
								<input type="password" name="newpassword" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label>Confirm Password:</label>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12">
								<input type="password" name="confirmpassword" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<input type="submit" name="" class="btn btn-primary" value="Update Password">
							</div>
						</div>
					</div>
					{{ csrf_field() }}
				</form>
			</fieldset>
		</div>
	</div>
@endsection