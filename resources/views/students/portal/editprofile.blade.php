@extends('masterpages.studentlayout')

@section('content')
	<div class="profile">
		<ul class="nav nav-tabs mt-4 ml-5">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="tab" href="#home">Personal Information</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#menu1">Family Background</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#menu2">Education Background</a>
			  </li>
		</ul>

		<div class="tab-content">
		  <div class="tab-pane container active ml-5 mt-3" id="home">
		  		<form method="post" action="{{ route('student.profileedit')}}">
		  			{{ csrf_field() }}
		  			<fieldset class="scheduler-border">
			  			<legend class="scheduler-border">Personal Information</legend>
			  			<div class="row mt-2 ml-5">
			  				<div class="form-group">
			  					<div class="col-md-12">
			  						@foreach($studentinfo as $student)
			  						<label>Last Name:</label>
			  						<input type="text" name=""  value="{{$student->student->lastname}}"class="form-control" disabled>
			  					</div>
			  				</div>
			  				

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>First Name:</label>
			  						<input type="text" name="" value="{{ $student->student->firstname}}" class="form-control" disabled>
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Middle Name:</label>
			  						<input type="text" name="" value="{{ $student->student->middlename }}" class="form-control" disabled>
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Gender:</label>
			  					</div>

			  					<div class="col-md-12">
			  						<label class="radio-inline"><input type="radio" name="optradio" checked> Male</label>
									<label class="radio-inline"><input type="radio" name="optradio">Female</label>
			  					</div>
			  				</div>
			  			</div>

			  			<div class="row mt-2 ml-5">
			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Age:</label>
			  						<input type="text" name="" id="age" disabled class="form-control">
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Nationality:</label>
			  						<select class="form-control" disabled>
			  							<option>--- Select nationality ---</option>
			  							<option value="{{ $student->student->nationality}}" selected>{{ $student->student->nationality }}</option>
			  							<option>Filipino</option>
			  							<option>American</option>
			  							<option>Others</option>
			  						</select>
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Religion:</label>
			  						<select class="form-control" name="religion">
			  							<option>--- Religion ---</option>
			  							<option value="{{ $student->student->religion }}" selected>{{ $student->student->religion }}</option>
			  							<option>Roman Catholic</option>
			  							<option>Iglesia ni Cristo</option>
			  							<option>Christian</option>
			  							<option>Islam</option>
			  							<option>Others</option>
			  						</select>
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Date of Birth:</label>
			  						<input type="date" name="" id="dob" value="{{ $student->student->dateofbirth }}" class="form-control" disabled>
			  					</div>
			  				</div>
			  			</div>

			  			<div class="row mt-2 ml-5">
			  				<div class="form-group">
			  					<div class="col-md-12">
				  					<label>Place of Birth:</label>
				  					<select class="form-control" disabled>
				  						<option>----</option>
				  						<option value="{{ $student->student->placeofbirth}}" selected>{{ $student->student->placeofbirth}}</option>
				  						<option>Manila</option>
				  						<option>Pasig</option>
				  						<option>Quezon City</option>
				  						<option>Pasay</option>
				  						<option>Marikina</option>
				  						<option>Makati</option>
				  					</select>
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Civil Status:</label>
			  						<select class="form-control" disabled>
			  							<option value="{{ $student->student->civil_status}}" selected>{{ $student->student->civil_status }}</option>
			  							<option>Single</option>
			  							<option>Married</option>
			  							<option>Widow</option>
			  						</select>
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Barangay:</label>
			  						<select class="form-control" name="brgy" id="bgy">
			  							<option>------------</option>
			  							<option value="{{ $student->student->barangay}}" selected>{{ $student->student->barangay }}</option>
			  						</select>
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>City:</label>
			  						<select class="form-control" id="city" name="cty">
			  							<option value="{{ $student->student->city}}" selected>{{ $student->student->city }}</option>
			  						</select>
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>District:</label>
			  						<select class="form-control" id="muns" name="muns">
			  							<option></option>
			  						</select>
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Zip Code:</label>
			  						<input type="text" name="zipc" class="form-control" value="{{ $student->student->zipcode }}">
			  					</div>
			  				</div>
			  			</div>

			  			<div class="row mt-2 ml-5 pl-3">
	  						<label>Address:</label>
	  						<input type="text" name="address" value="{{ $student->student->address }}" class="form-control">
			  			</div>

			  			<div class="row mt-2 ml-5">
			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Region:</label>
			  						<select class="form-control" id="region" name="region">
			  							<option>-----</option>
			  							<option value="{{ $student->student->region }}" selected>{{ $student->student->region }}</option>
			  							<option>National Capital Region</option>
			  							<option>ARMM</option>
			  							<option>Cordillera Administrative Region</option>
			  							<option>Region I - Ilocos Region</option>
			  							<option>Region II - Cagayan Valley</option>
			  							<option>Region III - Central Luzon</option>
			  							<option>Region IV-A - CALABARZON </option>
			  							<option>Region IV-B - MIMAROPA</option>
			  							<option>Region V - Bicol Region</option>
			  							<option>Region VI - Western Visayas</option>
			  							<option>Region VII - Central Visayas</option>
			  							<option>Region VIII - Eastern Visayas</option>
			  							<option>Region IX - Zamboanga Peninsula</option>
			  							<option>Region X - Northern Mindanao</option>
			  							<option>Region XI - Davao Region</option>
			  							<option>Region XII - SOCCSKSARGEN</option>
			  							<option>Region XIII - CARAGA Region</option>
			  						</select>
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Email Address:</label>
			  						<input type="text" name="email" value="{{ $student->student->std_login->emailAddress }}" class="form-control">
			  					</div>
			  				</div>
			  			</div>
			  		</fieldset>
			  </div>

			  <div class="tab-pane container fade ml-5 mt-3" id="menu1">
			  		<fieldset class="scheduler-border">
			  			<legend class="scheduler-border">Family Background/Information</legend>
			  			<h6 class="mt-2 ml-5"><b>Mother Information:</b></h6>
			  			<div class="row mt-2 ml-5">
			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Mother's Last Name:</label>
			  						<input type="text" name="mlname" value="{{ $student->student->parent->mother_lname }}" class="form-control">
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Mother's First Name:</label>
			  						<input type="text" name="mfname" value="{{ $student->student->parent->mother_fname }}" class="form-control">
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Mother's Middle Name: (skip if dont have)</label>
			  						<input type="text" name="mmname" value="{{ $student->student->parent->mother_mname }}" class="form-control">
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Occupation:</label>
			  						<input type="text" name="mocc" value="{{ $student->student->parent->mother_occ}}" class="form-control">
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Contact Number:</label>
			  						<input type="text" name="contact" value="{{ $student->student->parent->mother_cntact}}" class="form-control">
			  					</div>
			  				</div>
			  			</div>

			  			<h6 class="mt-2 ml-5"><b>Father Information:</b></h6>

			  			<div class="row mt-2 ml-5">
			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Father's Last Name:</label>
			  						<input type="text" name="flname" value="{{ $student->student->parent->father_lname}}" class="form-control">
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Father's First Name:</label>
			  						<input type="text" name="ffname" value="{{ $student->student->parent->father_fname}}" class="form-control">	
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Father's Middle Name: (skip if dont have)</label>
			  						<input type="text" name="fmname" value="{{ $student->student->parent->father_mname }}" class="form-control">
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Occupation:</label>
			  						<input type="text" name="focc" value="{{ $student->student->parent->father_occ }}" class="form-control">
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Contact Number:</label>
			  						<input type="text" name="fcntact" value="father_cntact" class="form-control">
			  					</div>
			  				</div>
			  			</div>
			  		</fieldset>
			  </div>

			  <div class="tab-pane container fade ml-5 mt-3" id="menu2">
			  		<fieldset class="scheduler-border">
			  			<legend class="scheduler-border">Education Background</legend>
			  			<h6 class="mt-2 ml-5"><b>Elementary School:</b></h6>
			  			<div class="row mt-2 ml-5">
			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Elementary School:</label>
			  						<input type="text" name="elemSchName" value="{{ $student->student->elementarySchName}}" class="form-control">
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>School Address:</label>
			  						<input type="text" name="elemAdd" value="{{ $student->student->elemAddress }}" class="form-control">
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Year Graduated:</label>
			  						<input type="text" name="elemYr" class="form-control" maxlength="4" value="{{ $student->student->elemGradYr }}">
			  					</div>
			  				</div>
			  			</div>

			  			<h6 class="mt-2 ml-5"><b>Secondary School:</b></h6>

			  			<div class="row mt-2 ml-5">
			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Secondary School:</label>
			  						<input type="text" name="secSchName" value="{{ $student->student->secondarySchName }}" class="form-control">
			  					</div>
			  				</div>

			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>School Address:</label>
			  						<input type="text" name="secAdd" value="{{ $student->student->secAddress }}" class="form-control">
			  					</div>
			  				</div>
			  				
			  				<div class="form-group">
			  					<div class="col-md-12">
			  						<label>Year Graduated:</label>
			  						<input type="text" name="secYr" class="form-control" value="{{ $student->student->secYrGrad }}">
			  					</div>
			  				</div>
			  			</div>
			  		</fieldset>

			  		<input type="submit" name="" class="btn btn-primary" value="Update Profile">
			  		@endforeach
		  		</form>
		  </div>
		</div>
	</div>
@endsection