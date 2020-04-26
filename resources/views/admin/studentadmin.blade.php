@extends('masterpages.adminlayout')

@section('content')
	<div class="container">
		<div id="smartwizard">
			<ul id="wizard-list">
			    <li><a href="#step-1">Step 1<br /><small>Student Information</small></a></li>
			    <li><a href="#step-2">Step 2<br /><small>Choose Student Strand</small></a></li>
			    <li><a href="#step-3">Step 3<br><small>Mode of Payment</small></a></li>
			    <li><a href="#step-4">Final Step & Submit<br><small>Setup Account</small></a></li>
			</ul>

			<div class="mt-3">
				<div id="step-1" class="">
					<form method="post" action="{{ route('student.register')}}" id="theForm">
					<ul class="nav nav-tabs bg-primary">
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

					<div id="form-step-0" role="form" data-toggle="validator">
						<!-- Tab panes -->
						<div class="tab-content mt-3">
						  <div class="tab-pane container active" id="home">
						  		<fieldset class="scheduler-border">
						  			<legend class="scheduler-border">Personal Infomation</legend>
						  			<div class="row mt-2 ml-5">
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<input type="hidden" name="id" value="{{ $student + 1 }}">
						  						<label>Status:</label>
						  						<select class="{{ $errors->has('stts') ? 'border border-danger' : '' }} ml-2" name="stts">
						  							<option value="New Student">New Student</option>
						  						</select>

						  						@if($errors->has('stts'))
					                                <span class="help-block">
					                                    {{ $errors->first('stts') }}
					                                </span>
					                            @endif
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<input type="hidden" class="form-control" name="studnumber" value="<?php echo date('Y'); ?>-STUD-{{ $student + 1}}">
						  					</div>
						  				</div>
						  			</div>

						  			<div class="row mt-2 ml-5">
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>School Year:</label>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<select class="form-control" name="scyr">
						  							<option value="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></option>
						  						</select>
						  					</div>
						  				</div>
						  				
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<select class="form-control" name="scyr1">
						  							<option value="<?php echo date('Y', strtotime('+1 year')); ?>">
													  <?php echo date('Y', strtotime('+1 year')); ?>
													</option>
						  						</select>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Semester:</label>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<select class="form-control" name="sem" required>
						  							<option></option> 
						  							<option value="First Semester" selected>First Semester</option>
						  						</select>
						  					</div>
						  				</div>
						  			</div>

						  			<div class="row mt-2 ml-5">
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Last Name:</label>
						  						<input type="text" name="lname" class="{{ $errors->has('lname') ? 'border border-danger' : '' }} form-control" id="lname" onkeydown="return alphaOnly(event);" onblur="if (this.value == '') {this.value = 'Letters Only';}"
	    											onfocus="if (this.value == 'Letters Only') {this.value = '';}" required>

						  						@if($errors->has('lname'))
						  							<span class="help-block with-errors">
						  								{{ $errors->first('lname') }}
						  							</span>
						  						@endif
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>First Name:</label>
						  						<input type="text" name="fname" class="form-control" id="fname" onkeydown="return alphaOnly(event);" required>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Middle Name (skip this field if dont have):</label>
						  						<input type="text" name="mname" class="form-control" id="mname" onkeydown="return alphaOnly(event);">
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Date of Birth:</label>
						  						<input type="date" name="dob" id="dob" class="form-control" required>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Age:</label>
						  						<input type="text" name="age" id="age" class="form-control" readonly>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
							  					<label>Place of Birth:</label>
							  					<input type="text" name="pob" onkeydown="return alphaOnly(event);" class="form-control" required>
						  					</div>
						  				</div>

						  				<div class="form-group">
				                            <div class="col-md-12">
				                                <label>Gender/Sex:</label>
				                                <select class="form-control" name="sex" required>
				                                    <option></option>
				                                    <option value="Male">Male</option>
				                                    <option value="Female">Female</option>
				                                </select>
				                            </div>
				                        </div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Nationality:</label>
						  						<input type="text" name="ntnlity" class="form-control" onkeydown="return alphaOnly(event);" required>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Civil Status:</label>
						  						<select class="form-control" name="cstat" required>
						  							<option></option>
						  							<option value="Single">Single</option>
						  							<option value="Married">Married</option>
						  							<option value="Widowed">Widowed</option>
						  						</select>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Religion:</label>
						  						<select class="form-control" name="religion" required>
						  							<option></option>
													<option value="None">None</option>
						  							<option value="Roman Catholic">Roman Catholic</option>
						  							<option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
						  							<option value="Christian">Christian</option>
						  							<option value="Islam">Islam</option>
						  							<option value="Atheist">Atheist</option>
						  						</select>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Mobile No:</label>
						  						<input type="text" name="mobileno" maxlength="11" class="form-control" onkeydown="return numbersOnly(event);" required>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Email Address:</label>
						  						<input type="email" name="email" class="form-control" required>
						  					</div>
						  				</div>
						  			</div>

						  			<div class="row mt-2 ml-5">
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Region:</label>
						  						<select class="form-control" name="region" id="region" required>
						  							<option></option>
						  							<option value="National Capital Region">National Capital Region</option>
						  							<option value="ARMM">ARMM</option>
						  							<option value="Cordillera Administrative Region">Cordillera Administrative Region</option>
						  							<option value="Region I - Ilocos Region">Region I - Ilocos Region</option>
						  							<option value="Region II - Cagayan Valley">Region II - Cagayan Valley</option>
						  							<option value="Region III - Central Luzon">Region III - Central Luzon</option>
						  							<option value="Region IV-A - CALABARZON">Region IV-A - CALABARZON </option>
						  							<option value="Region IV-B - MIMAROPA">Region IV-B - MIMAROPA</option>
						  							<option value="Region V - Bicol Region">Region V - Bicol Region</option>
						  							<option value="Region VI - Western Visayas">Region VI - Western Visayas</option>
						  							<option value="Region VII - Central Visayas">Region VII - Central Visayas</option>
						  							<option value="Region VIII - Eastern Visayas">Region VIII - Eastern Visayas</option>
						  							<option value="Region IX - Zamboanga Peninsula">Region IX - Zamboanga Peninsula</option>
						  							<option value="Region X - Northern Mindanao">Region X - Northern Mindanao</option>
						  							<option value="Region XI - Davao Region">Region XI - Davao Region</option>
						  							<option value="Region XII - SOCCSKSARGEN">Region XII - SOCCSKSARGEN</option>
						  							<option value="Region XIII - CARAGA Region">Region XIII - CARAGA Region</option>
						  						</select>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>City/Municipality:</label>
						  						<select class="form-control" name="city" id="city" required>
						  							<option></option>
						  						</select>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>District:</label>
						  						<select class="form-control" name="muns" id="muns" required>
						  							<option></option>
						  						</select>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Barangay:</label>
						  						<select class="form-control" name="brgy" id="bgy" required>
						  							<option></option>
						  						</select>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Zip Code:</label>
						  						<input type="text" name="zipcode" class="form-control">
						  					</div>
						  				</div>

						  				<div class="form-group">
				                            <div class="col-md-12">
				                                <label>Lot#/Blk#/House#/Unit/Room/Flr/Bldg#/Subd St.:</label>
				                                <input type="text" name="lotno" class="form-control" required>
				                            </div>
				                        </div>

				                        <div class="form-group">
				                            <div class="col-md-12">
				                                <label>Bldg Name/Street Name/Subdivision/Village/Zone:</label>
				                                <input type="text" name="blgname" class="form-control" required>
				                            </div>
				                        </div>
						  			</div>
						  		</fieldset>
						  </div>
						  <div class="tab-pane container fade" id="menu1">
						  		<fieldset class="scheduler-border">
						  			<legend class="scheduler-border">Family Background</legend>
						  			<h6 class="mt-2 ml-5"><b>FAMILY RECORD:</b></h6>
						  			<div class="row mt-2 ml-5">
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Father's Last Name:</label>
						  						<input type="text" name="flastname" id="fatherlastname" class="form-control" onkeydown="return alphaOnly(event);" required>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Father's First Name:</label>
						  						<input type="text" name="ffirstname" id="fatherfirstname" class="form-control" onkeydown="return alphaOnly(event);" required>	
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Father's Middle Name: (skip if dont have)</label>
						  						<input type="text" name="fmiddlename" id="fathermiddlename" class="form-control" onkeydown="return alphaOnly(event);">
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Occupation:</label>
						  						<input type="text" name="fatheroccupation" class="form-control">
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Contact Number:</label>
						  						<input type="text" name="contactno" id="fathercontactno"  maxlength="11" class="form-control" onkeydown="return numbersOnly(event);">
						  					</div>
						  				</div>
						  			</div>

						  			<div class="row mt-2 ml-5">
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Mother's Last Name:</label>
						  						<input type="text" name="mlastname" id="lastnamemother" class="form-control" onkeydown="return alphaOnly(event);" required>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Mother's First Name:</label>
						  						<input type="text" name="mfirstname" id="firstnamemother" class="form-control" onkeydown="return alphaOnly(event);" required>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Mother's Middle Name: (skip if dont have)</label>
						  						<input type="text" name="mmiddlename" id="middlenamemother" class="form-control" onkeydown="return alphaOnly(event);">
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Occupation:</label>
						  						<input type="text" name="motheroccupation" class="form-control" onkeydown="return alphaOnly(event);">
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Contact Number:</label>
						  						<input type="text" name="mothercontactnumber" maxlength="11" id="mothercontactnumber" class="form-control" onkeydown="return numbersOnly(event);">
						  					</div>
						  				</div>
						  			</div>
						  			<h6 class="mt-2 ml-5"><b>GUARDIAN:</b></h6>
						  			<div class="row mt-2 ml-5">
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Last Name:</label>
						  						<input type="text" name="guardianlastname" id="guardianlastname" class="form-control" onkeydown="return alphaOnly(event);">
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>First Name:</label>
						  						<input type="text" name="guardianfirstname" id="guardianfirstname" class="form-control" onkeydown="return alphaOnly(event);">
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Middle Name: (skip if none)</label>
						  						<input type="text" name="guardianmiddlename" id="guardianmiddlename" class="form-control" onkeydown="return alphaOnly(event);">
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Relation:</label>
						  						<select class="form-control" name="relation" id="relation">
						  							<option></option>
						  							<option value="Mother">Mother</option>
						  							<option value="Father">Father</option>
						  							<option value="Brother">Brother</option>
						  							<option value="Sister">Sister</option>
						  						</select>
						  					</div>
						  				</div>
						  			</div>
						  			<div class="mt-2 ml-5">
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Address:</label>
						  						<input type="text" name="add" class="form-control">
						  					</div>
						  				</div>
						  			</div>

						  			<div class="row mt-2 ml-5">
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Contact No:</label>
						  						<input type="text" name="telno" maxlength="11" id="guardiancontact" class="form-control" onkeydown="return numbersOnly(event);">
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Email Address:</label>
						  						<input type="email" name="emailadd" class="form-control">
						  					</div>
						  				</div>
						  			</div>
						  		</fieldset>
						  </div>
						  <div class="tab-pane container fade" id="menu2">
						  		<fieldset class="scheduler-border">
						  			<legend class="scheduler-border">Education Background</legend>
						  			<h6 class="mt-2 ml-5"><b>SCHOLASTIC RECORD:</b></h6>
						  			<div class="row mt-2 ml-5">
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Elementary School:</label>
						  						<input type="text" name="elemsch" class="form-control" onkeydown="return alphaOnly(event);" required>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>School Address:</label>
						  						<input type="text" name="elemschaddr" class="form-control" required>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Year Graduated:</label>
						  						<input type="text" name="elemschgrd" class="form-control" maxlength="4" onkeydown="return numbersOnly(event);" required>
						  					</div>
						  				</div>
						  			</div>

						  			<div class="row mt-2 ml-5">
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Secondary School:</label>
						  						<input type="text" name="secschname" class="form-control" onkeydown="return alphaOnly(event);" required>
						  					</div>
						  				</div>

						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>School Address:</label>
						  						<input type="text" name="secaddr" class="form-control" required>
						  					</div>
						  				</div>
						  				
						  				<div class="form-group">
						  					<div class="col-md-12">
						  						<label>Year Graduated:</label>
						  						<input type="text" name="secyrgrd" maxlength="4" class="form-control" onkeydown="return numbersOnly(event);" required>
						  					</div>
						  				</div>
						  			</div>
						  		</fieldset>
						  	</div>
						</div>
					</div>
				</div>

				<div id="step-2" class="">
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Enroll Student</legend>
						<div class="row mt-2 ml-5">
							<div class="form-group">
								<div class="col-md-12">
									<label>Choose Academic Track:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-9">
									<select class="form-control" name="strands" id="sbjs" onchange="enrollsubj();">
										<option>---------</option>
										@foreach($strand as $str)
											<option value="{{ $str->strand_id }}">{{ $str->description }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<input type="checkbox" class="hidechk" name="core[]" value="1st" checked>
									<input type="checkbox" class="hidechk" name="core[]" value="2nd" checked>
									<input type="checkbox" class="hidechk" name="core[]" value="3rd" checked>
									<input type="checkbox" class="hidechk" name="core[]" value="4th" checked>
								</div>
							</div>
						</div>

						<input type="hidden" name="sects">
						<input type="hidden" name="instructor">

						<div class="subject-list-panel" id="subjectlists">
							<div id="grsec" class="row mt-2 ml-3">
								<div class="form-group">
									<div class="col-md-9">
										<label><b>Grade:</b></label>	
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<select class="form-control" name="glvl" id="glvl">
											<option></option>
											<option value="11">11</option>
										</select>
									</div>	
								</div>

								<div class="form-group">
									<div class="col-md-9">
										<label><b>Section:</b></label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<select class="form-control" name="sectlists" id="sect1">
											<option></option>
											@foreach($section as $sect)
												<option value="{{ $sect->section_mid }}">{{ $sect->section_description }}</option>
											@endforeach
										</select>
									</div>
								</div>	
							</div>
			
							<table class="table table-bordered bg-light text-dark">
								<thead>
									<tr>
										<th></th>
										<th>Subject Code</th>
										<th>Description</th>
										<th>Units</th>
										<th>Lecture Hrs</th>
										<th>Lab Hrs</th>
										<th>Curriculum Year</th>
										<th>Assigned Teacher</th>
									</tr>
								</thead>
								<tbody id="sectionsub">
									
								</tbody>
							</table>
						</div>
					</fieldset>
				</div>

				<div id="step-3" class="">
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Mode of Payment</legend>
						<div class="row mt-2 ml-5">
							<div class="form-group">
								<div class="col-md-12">
									<label>Payment Method:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<input type="hidden" name="ornumber" value="000{{ $payment + 1}}">
									<select class="form-control" name="paymentmethod" id="method">
										<option>------</option>
										<option value="DepEd Voucher">DepEd Voucher</option>
										<option value="Cash">Cash</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6">
									<label>Sector:</label>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12">
									<select class="form-control" name="sector" id="sect">
										<option>------</option>
										<option value="Public">Public</option>
										<option value="Private">Private</option>
									</select>
								</div>
							</div>
						</div>

						<div class="mt-2 ml-5" id="chrg2">
							<div class="row">
								<div class="col-md-3">
									<label>Mode of Payment:</label>
								</div>

								<div class="col-md-3">
									<select class="form-control" id="modeofpayment" name="modeofpayment">
										<option></option>
										<option value="Full Payment">Full Payment</option>
										<option value="Two Payment">Two Payment</option>
									</select>
								</div>
							</div>
							<h3><b>CHARGES:</b></h3>
							@foreach($fees as $fee)
							<div class="row">
								<div class="col-md-3">
									<p>Tuition Fee:</p>
								</div>

								<div class="col-md-3">
									<p>₱{{ $fee->tuition_fee }}.00</p>
								</div>
							</div>
							<h3><b>MISCELANEOUS CHARGES:</b></h3>
							<div class="row">
								<div class="col-md-3">
									<p>Registration Fee:</p>
								</div>

								<div class="col-md-3">
									<p>₱{{ $fee->registration_fee}}.00</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<p>ID and ID Lace:</p>
								</div>

								<div class="col-md-3">
									<p>₱{{ $fee->id_fee }}.00</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<p>Guidance Fee:</p>
								</div>

								<div class="col-md-3">
									<p>₱{{ $fee->guidance_fee}}.00</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<p>Athletic Fee:</p>
								</div>

								<div class="col-md-3">
									<p>₱{{ $fee->athletic_fee }}.00</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<p>Medical/Dental:</p>
								</div>

								<div class="col-md-3">
									<p>₱{{ $fee->medical_fee}}.00</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<p>Breakage Fee:</p>
								</div>

								<div class="col-md-3">
									<p>₱{{ $fee->breakage_fee }}.00</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<p>Developmental:</p>
								</div>

								<div class="col-md-3">
									<p>₱{{ $fee->development_fee }}.00</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<p>Energy Fee:</p>
								</div>

								<div class="col-md-3">
									<p>₱{{ $fee->energy_fee }}.00</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<p>Insurance Fee:</p>
								</div>

								<div class="col-md-3">
									<p>₱{{ $fee->insurance_fee }}.00</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<p>Laboratory Fee:</p>
								</div>

								<div class="col-md-3">
									<p>₱{{ $fee->lab_fee }}.00</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3">
									<p>NSTP Fee:</p>
								</div>

								<div class="col-md-3">
									<p>₱{{ $fee->nstp_fee }}.00</p>
								</div>
							</div>
							@endforeach
							<div class="row">
								<h3><b>TOTAL FEES:</b></h3>
								<div class="col-md-6">
									<input type="text" name="totalfee" id="totalfee" value="0.00" readonly>
									<span class="text-danger" id="inf"><span class="fa fa-question-circle pos"></span> werwe</span>
								</div>
							</div>
						</div>
					</fieldset>
				</div>

				<div id="step-4" class="">
					<fieldset class="scheduler-border">
    					<legend class="scheduler-border">Setup Student Account</legend>
    					<h6 class="mt-2 ml-5"><b>Create Student Account:</b></h6>
    					<div class="row mt-2 ml-5">
    						<div class="form-group">
    							<div class="col-md-12">
    								<label>LRN No.</label>
    								<input type="text" name="usrname" id="stno" class="form-control" value="<?php echo date('Y'); ?>-STUD-{{ $student + 1}}" readonly>
    							</div>
    						</div>

    						<div class="form-group">
    							<div class="col-md-12">
    								<label>Password:</label>
    								<input type="password" name="psword" class="form-control" value="<?php
										function password_generate($chars) 
										{
  										$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  										return substr(str_shuffle($data), 0, $chars);
										}
  										echo password_generate(4)."\n";
									?>" readonly>
    							</div>
    						</div>
    					</div>

    					<h6 class="mt-2 ml-5"><b>Create Guardian Account:</b></h6>

    					<div class="row mt-2 ml-5">
    						<div class="form-group">
    							<div class="col-md-12">
    								<label>Guardian No.</label>
    								<input type="text" name="grdusrname" id="grdno" class="form-control" value="<?php echo date('Y'); ?>-GRD-0{{ $guardian + 1}}" readonly>
    							</div>
    						</div>

    						<div class="form-group">
    							<div class="col-md-12">
    								<label>Password:</label>
    								<input type="password" name="grdpsword" class="form-control" value="<?php
										function generate_password($chars) 
										{
  										$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  										return substr(str_shuffle($data), 0, $chars);
										}
  										echo generate_password(4)."\n";
									?>" readonly>
    							</div>
    						</div>

    						<div class="form-group">
    							<div class="col-md-12">
    								<label>QrKey:</label>
    								<input type="text" name="qrkey" class="form-control" value="2019-0{{ $student + 1}}" readonly>
    								<input type="hidden" name="studentstat" value="Active">
    							</div>
    						</div>
    					</div>

    					<div class="row mt-2 ml-5">
    						<div class="form-group">
    							<div class="col-md-12">
    								<input class="btn btn-primary" type="submit" id="studentregbtn" value="Enroll Now">
    							</div>
    						</div>
    					</div>
    				</fieldset>
				</div>
				{{ csrf_field() }}
				</form>
			</div>
		</div>
	</div>
@endsection