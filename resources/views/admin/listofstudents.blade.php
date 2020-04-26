@extends('masterpages.adminlayout')

@section('content')
	<div class="container">
		<div class="content-box">
			<div class="row">
				<div class="search-container">
					<form id="stsc">
						<label>Search Student:</label><input type="text" name="stsrc" id="stsrc" class="search-text" placeholder="Search" autocomplete="false">
					</form>
				</div>
			</div>
			
			<div class="row mt-4 ml-5">
				<div class="form-group">
					<button class="btn btn-primary" data-toggle="modal" data-target="#generate"><span class="fa fa-print"></span> Generate Registration Card</button>
				</div>

				<div class="form-group">
					<button class="btn btn-primary ml-1" data-toggle="modal" data-target="#printqr"><span class="fa fa-print"></span> Print Student QR</button>
				</div>

				<div class="form-group">
					<a href="{{ route('overall.student')}}" class="btn btn-primary ml-1"><span class="fa fa-print"></span> Generate List of Overall Students</a>
				</div>
			</div>

			<div class="table-margin" id="tabl1">
				<table class="table table-bordered table-striped bg-light text-center">
					<thead>
						<tr>
							<th>LRN Number</th>
							<th>Family Name</th>
							<th>Given Name</th>
							<th>Maiden Name</th>
							<th>Strand/Course</th>
							<th>Grade Level</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="edits">
						@foreach($studs as $stud)
							<tr id="stud{{ $stud->student_id}}">
								<td>{{ $stud->student_no }}</td>
								<td>{{ $stud->lastname }}</td>
								<td>{{ $stud->firstname }}</td>
								<td>{{ $stud->middlename }}</td>
								<td>{{ $stud->strands->description }}</td>
								<td>{{ $stud->grade_level }}</td>
								<td>
									<button class="btn btn-primary student-edit" data-id="{{ $stud->student_id }}"><span class="fa fa-pencil"></span></button>
									<a href="{{ action('Auth\admin\admincontroller@generatestudent', $stud->student_id )}}" class="btn btn-success"><span class="fa fa-print"></span></a>
									<button class="btn btn-danger student-delete" data-id="{{ $stud->student_id }}"><span class="fa fa-trash"></span></button>
								</td>
							</tr>
						@endforeach
					</tbody>	
				</table>
				{{ $studs->links() }}
			</div>

			<div class="modal fade" role="dialog" id="generate">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
		                    <h4 class="modal-title">Find Student for Registration Card</h4>
		                    <button class="close" type="button" data-dismiss="modal">&times;</button>
		                </div>

		                <div class="modal-body">
		                	<div class="row">
		                		<div class="form-group">
		                			<div class="col-md-12">
		                				<label>Search Student:</label>
		                			</div>
		                		</div>

		                		<input type="text" name="studsearch" id="studsearch" class="search-text" placeholder="Student Number">
		                	</div>

		                	<div class="mt-2">
		                		<table class="table table-bordered table-striped bg-light text-center">
		                			<thead>
		                				<tr>
		                					<th>Student Number</th>
		                					<th>Student Name</th>
		                					<th>Action</th>
		                				</tr>
		                			</thead>
		                			<tbody id="regiform">
		                				
		                			</tbody>
		                		</table>
		                	</div>
		                </div>
					</div>
				</div>
			</div>

			<div class="modal fade" role="dialog" id="printqr">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
		                    <h4 class="modal-title">Download Student QR</h4>
		                    <button class="close" type="button" data-dismiss="modal">&times;</button>
		                </div>

		                <div class="modal-body">
		                	<div class="row">
		                		<div class="form-group">
		                			<div class="col-md-12">
		                				<label>Search Student:</label>
		                			</div>
		                		</div>

		                		<input type="text" name="qrsearch" id="qrsearch" class="search-text" placeholder="Student Number">
		                	</div>

		                	<div class="mt-2">
		                		<table class="table table-bordered table-striped bg-light text-center">
		                			<thead>
		                				<tr>
		                					<th>Student Number</th>
		                					<th>Student Name</th>
		                					<th>Action</th>
		                				</tr>
		                			</thead>
		                			<tbody id="searchqr">
		                				
		                			</tbody>
		                		</table>
		                	</div>
		                </div>
					</div>
				</div>
			</div>

			<div class="modal fade" role="dialog" id="genor">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
		                    <h4 class="modal-title">Generate Receipt</h4>
		                    <button class="close" type="button" data-dismiss="modal">&times;</button>
		                </div>

		                <div class="modal-body">
		                	<div class="row">
		                		<div class="form-group">
		                			<div class="col-md-12">
		                				<label>Search Student:</label>
		                			</div>
		                		</div>

		                		<input type="text" name="orsrch" id="orsrch" class="search-text" placeholder="Student Number">
		                	</div>

		                	<div class="mt-2">
		                		<table class="table table-bordered table-striped bg-light text-center">
		                			<thead>
		                				<tr>
		                					<th>Student Number</th>
		                					<th>Student Name</th>
		                					<th>O.R Number</th>
		                					<th>Action</th>
		                				</tr>
		                			</thead>
		                			<tbody id="orform">
		                				
		                			</tbody>
		                		</table>
		                	</div>
		                </div>
					</div>
				</div>
			</div>

			<div class="modal fade" role="dialog" id="editstudents1">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
		                    <h4 class="modal-title">Edit Student</h4>
		                    <button class="close" type="button" data-dismiss="modal">&times;</button>
		                </div>

		                <div class="modal-body">
		                	<ul class="nav nav-pills">
								<li class="nav-item">
									<a class="nav-link active text-secondary" data-toggle="pill" href="#si">Student Information</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link text-secondary" data-toggle="pill" href="#fb">Family Background</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-secondary" data-toggle="pill" href="#edoc">Educational Background</a>
								</li>
								<!-- <li class="nav-item">
									<a href="#payment" data-toggle="pill" class="nav-link text-secondary">Payment Method</a>
								</li>
								<li class="nav-item">
									<a href="#guardians" data-toggle="pill" class="nav-link text-secondary">Guardian Profile</a>
								</li> -->
							</ul>

							<form method="post" action="{{ route('update.student') }}" id="updstud">
								<input type="hidden" name="_method" value="PUT">
    							{{csrf_field()}}
								<div class="tab-content">
									<div class="tab-pane container active" id="si">
										<div class="mt-3">
											<fieldset class="scheduler-border">
												<legend class="scheduler-border">Student Information</legend>

												<div class="mt-3">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Gr. & Section:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" id="sectioneditstud" name="sectioneditstud" class="form-control" disabled>
															</div>
														</div>

														<div class="row">
															<div class="form-group">
																<div class="col-md-12">
																	<label>Grade Level:</label>
																</div>
															</div>

															<div class="form-group">
																<div class="col-md-12">
																	<select class="form-control" name="lvlg">
																		<option></option>
																		<option value="11">11</option>
																		<option value="12">12</option>
																	</select>
																</div>
															</div>

															<div class="form-group">
																<div class="col-md-12">
																	<label>Section:</label>
																</div>
															</div>

															<div class="form-group">
																<div class="col-md-12">
																	<select class="form-control" name="sectname">
																		<option></option>
																		@foreach($sect as $sec)
																		<option value="{{ $sec->section_mid }}">{{ $sec->section_description }}</option>
																		@endforeach
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Last Name:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="last" id="last" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>First Name:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="first" id="first" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Middle Name:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="middle" class="form-control" id="middle">
															</div>
														</div>
													</div>

													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Age:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<select class="form-control" name="age" id="age">
										  							<option>---</option>
										  							<?php
										  								for($j = 1; $j <= 100; $j++)
										  								{
										  									echo "<option value='". $j ."'>". $j . "</option>";
										  								}
										  							?>
										  						</select>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Civil Status:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<select class="form-control" name="sts" id="sts">
																	<option></option>
																	<option value="Single">Single</option>
										  							<option value="Married">Married</option>
										  							<option value="Widowed">Widowed</option>
																</select>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Nationality:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<select class="form-control" name="ntnlity" id="ntnlity">
										  							<option></option>
										  							<option value="Filipino">Filipino</option>
										  							<option value="American">American</option>
										  							<option value="Others">Others</option>
										  						</select>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Birthday:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="date" class="form-control" name="bdy" id="bdy">
															</div>
														</div>
													</div>

													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>City:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<select class="form-control" name="cty" id="city">
										  							<option></option>
										  						</select>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Region:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<select class="form-control" name="reg" id="region">
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
										  							<option value="Region XII - SOCCSKSARGEN">Region XIII - CARAGA Region</option>
										  						</select>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Barangay:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<select class="form-control" id="bgy" name="bgy">
																	<option></option>
																</select>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Zip Code:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="zip" id="zip" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Address:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="add" id="add" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Email Address:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="email" name="addremail" id="addremail" class="form-control">
															</div>
														</div>
													</div>

													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Mobile Number:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="mbno" id="mbno" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Place of Birth:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="pb" id="pb" class="form-control">
															</div>
														</div>
													</div>
												</div>
											</fieldset>
										</div>
									</div>

									<div class="tab-pane container fade" id="fb">
										<div class="mt-3">
											<fieldset class="scheduler-border">
												<legend class="scheduler-border">Family Background</legend>

												<div class="mt-3">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Mother Last Name:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="mlast" id="mlast" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Mother First Name:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="mfirst" id="mfirst" class="form-control">
															</div>
														</div>
													</div>

													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Mother Middle Name:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="mmiddle" id="mmiddle" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Mother Occupation:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="motherocc" id="motherocc" class="form-control">
															</div>
														</div>
													</div>

													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Father Last Name:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="flast" id="flast" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Father First Name:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="ffirst" id="ffirst" class="form-control">
															</div>
														</div>
													</div>

													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Father Middle Name:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="fmiddle" id="fmiddle" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Father Occupation:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="fatherocc" id="fatherocc" class="form-control">
															</div>
														</div>
													</div>
												</div>
											</fieldset>
										</div>
									</div>

									<div class="tab-pane container fade" id="edoc">
										<div class="mt-3">
											<fieldset class="scheduler-border">
												<legend class="scheduler-border">Education Background</legend>

												<div class="mt-3">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Elementary School:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="schelem" id="schelem" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Address:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="schelemadd" id="schelemadd" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Graduated:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="gdelem" id="gdelem" class="form-control" maxlength="4" onkeydown="return numbersOnly(event);">
															</div>
														</div>
													</div>

													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>High School:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="schhs" id="schhs" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Address:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="schhsadd" id="schhsadd" class="form-control">
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<label>Graduated:</label>
															</div>
														</div>

														<div class="form-group">
															<div class="col-md-12">
																<input type="text" name="gdhs" id="gdhs" class="form-control" maxlength="4" onkeydown="return numbersOnly(event);">
															</div>
														</div>
													</div>
												</div>
											</fieldset>
										</div>
									</div>

									<div class="tab-pane container fade" id="payment">
										<div class="mt-3">
											<fieldset class="scheduler-border">
												<legend class="scheduler-border">Payment Method</legend>

												<div class="row mt-2">
													<div class="form-group">
														<div class="col-md-12">
															<label>Payment Method:</label>
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-12">
															<select class="form-control" name="pymthod" id="pymthod">
																<option></option>
																<option value="DepEd Voucher">DepEd Voucher</option>
																<option value="Cash">Cash</option>
															</select>
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-12">
															<label>School Type:</label>
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-12">
															<select class="form-control" name="stor" id="stor">
																<option></option>
																<option value="Public">Public</option>
																<option value="Private">Private</option>
															</select>
														</div>
													</div>
												</div>
											</fieldset>
										</div>
									</div>

									<div class="tab-pane container fade" id="guardians">
										<div class="mt-3">
											<fieldset class="scheduler-border">
												<legend class="scheduler-border">Guardian Profile</legend>

												<div class="row mt-2">
													<div class="form-group">
														<div class="col-md-12">
															<label>Guardian Last Name:</label>
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-12">
															<input type="text" name="grdlastname" id="grdlastname" class="form-control">
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-12">
															<label>Guardian First Name:</label>
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-12">
															<input type="text" name="grdfirstname" id="grdfirstname" class="form-control">
														</div>
													</div>
												</div>

												<div class="row mt-2">
													<div class="form-group">
														<div class="col-md-12">
															<label>Guardian Middle Name:</label>
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-12">
															<input type="text" name="grdmiddlename" id="grdmiddlename" class="form-control">
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-12">
															<label>Address:</label>
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-12">
															<input type="text" name="grdaddress" id="grdaddress" class="form-control">
														</div>
													</div>
												</div>

												<div class="row mt-2">
													<div class="form-group">
														<div class="col-md-12">
															<label>Contact Number:</label>
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-12">
															<input type="text" name="grdcontact" id="grdcontact" class="form-control">
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-12">
															<label>Guardian Email:</label>
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-12">
															<input type="email" name="grdemail" id="grdemail" class="form-control" style="width: 300px;">
														</div>
													</div>
												</div>
											</fieldset>
										</div>
									</div>

									<input type="hidden" name="id" id="id" value="">

									<div class="row ml-2">
										<div class="form-group">
											<div class="col-md-12">
												<input type="submit" name="" id="save" class="btn btn-primary" value="Save">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
	                </div>
				</div>
			</div>
		</div>
	</div>
		<!-- <div class="row">
			<div class="col-md-6">
				<input type="text" name="" class="search-text" placeholder="Search" >
			</div>
			<div class="col-md-6">
				<button class="btn bg-light">Search</button>
			</div>
		</div> -->
@endsection