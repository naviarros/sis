@extends('masterpages.adminlayout');

@section('content')
<style type="text/css">
	.side-bar {
		top: -10px;
	}
</style>
<div class="container">
	<div class="content-box">
		<div class="row">
			<div class="search-container">
				<form id="sttch2">
					<input type="text" name="tch13" id="tch13" class="search-text" placeholder="Search" autocomplete="false">
				</form>
			</div>
		</div>
		
		<div class="mt-4 ml-5">
			<button class="btn btn-primary" data-toggle="modal" data-target="#resume"><span class="fa fa-print"></span> View Teacher Resume</button>
		</div>

		<div class="table-margin" id="tabl1">
			<table class="table table-bordered table-striped bg-light text-center">
				<thead>
					<tr>
						<th>Employee Number</th>
						<th>Family Name</th>
						<th>Given Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="edi">
					@foreach($teacher as $teach)
						<tr id="teacher{{ $teach->instructor_id}}">
							<td>{{ $teach->instructor_id }}</td>
							<td>{{ $teach->lastname }}</td>
							<td>{{ $teach->firstname }}</td>
							<td>
								<button class="btn btn-primary edit-teacher" data-id="{{ $teach->instructor_id }}"><span class="fa fa-pencil"></span></button>
								<a href="{{ action('Auth\admin\admincontroller@generateteacher', $teach->instructor_id )}}" class="btn btn-success"><span class="fa fa-print"></span></a>
								<button class="btn btn-danger delete-teacher" data-id="{{ $teach->instructor_id }}"><span class="fa fa-trash"></span></button>
							</td>
						</tr>
					@endforeach
				</tbody>	
			</table>
			{{ $teacher->links() }}
		</div>

		<div class="modal fade" role="dialog" id="resume">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">View Resume</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						<form id="vres">
							<div class="row mt-2">
								<div class="form-group">
									<div class="col-md-12">
										<label>Search Instructor:</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="srchins" id="srchins" class="form-control">
									</div>
								</div>
							</div>
						</form>

						<table class="table table-bordered table-striped bg-light">
							<thead>
								<tr>
									<th>Employee Number</th>
									<th>Complete Name</th>
									<th>Download Resume</th>
								</tr>
							</thead>
							<tbody id="viewresume">
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" role="dialog" id="editteacher">
		 	<div class="modal-dialog modal-xl">
		 		<div class="modal-content">
		 			<div class="modal-header">
		 				<h4 class="modal-title">Edit Teacher</h4>
						<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>

		 			<div class="modal-body">
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

							  	<li class="nav-item">
							    	<a class="nav-link" data-toggle="tab" href="#menu3">Update Resume & Requirements</a>
							  	</li>
						</ul>

						<form method="post" action="{{ route('update.teacher') }}" id="teachered" enctype="multipart/form-data">
							<input type="hidden" name="_method" value="PUT">
    						{{csrf_field()}}
							<div class="tab-content mt-3">
								<div class="tab-pane container active" id="home">
									<fieldset class="scheduler-border">
										<legend class="scheduler-border">Personal Information</legend>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Last Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="lname" id="lnme" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>First Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="fstname" id="fstname" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Middle Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="mdlename" id="mdlename" class="form-control">
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
													<select class="form-control" name="age" id="ag1">
														<option></option>
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
													<label>Birthday:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="date" name="birthday" id="bdays" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Civil Status:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<select class="form-control" name="cvlstat" id="cvlstat"> 
														<option></option>
														<option value="Single">Single</option>
														<option value="Married">Married</option>
														<option value="Widowed">Widowed</option>
														<option value="Divorced">Divorced</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Email Address:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="email" name="emailaddupd" id="emailaddupd" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Address:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="address" id="addd" class="form-control">
												</div>
											</div>
											
											<div class="form-group">
												<div class="col-md-12">
													<label>City:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<select class="form-control" name="city" id="cities">
														<option></option>
														<option value="Manila City">Manila City</option>
														<option value="Quezon City">Quezon City</option>
														<option value="Makati City">Makati City</option>
												</select>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Municipality</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<select class="form-control" name="municipality" id="municipality">
														<option></option>
														<option value="Sta. Mesa">Sta. Mesa</option>
														<option value="Dona Imelda">Araneta Ave.</option>
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
													<select class="form-control" name="brngy" id="brngy">
														<option></option>
														<option value="Dona Imelda">Dona Imelda</option>
														<option value="590">590</option>
														<option value="591">591</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Zip Code:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<select class="form-control" name="zpc" id="zpc">
														<option></option>
														<option value="1016">1016</option>
														<option value="1017">1017</option>
													</select>
												</div>
											</div>
										</div>

										<div id="married">
											<h6>If the person is married. Fill this form:</h6>
											<div class="row">
												<div class="form-group">
													<div class="col-md-12">
														<label>Spouse Last Name:</label>
													</div>
												</div>

												<div class="form-group">
													<div class="col-md-12">
														<input type="text" name="slname" id="slname" class="form-control">
													</div>
												</div>

												<div class="form-group">
													<div class="col-md-12">
														<label>Spouse First Name:</label>
													</div>
												</div>

												<div class="form-group">
													<div class="col-md-12">
														<input type="text" name="sfname" id="sfname" class="form-control">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="form-group">
													<div class="col-md-12">
														<label>Spouse Middle Name:</label>
													</div>
												</div>

												<div class="form-group">
													<div class="col-md-12">
														<input type="text" name="smname" id="smname" class="form-control">
													</div>
												</div>

												<div class="form-group">
													<div class="col-md-12">
														<label>Occupation:</label>
													</div>
												</div>

												<div class="form-group">
													<div class="col-md-12">
														<input type="text" name="occp" id="occp" class="form-control">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="form-group">
													<div class="col-md-12">
														<label>No. of Children:</label>
													</div>
												</div>

												<div class="form-group">
													<div class="col-md-12">
														<select class="form-control" name="chld">
															<option></option>
															<?php
								  								for($j = 1; $j <= 20; $j++)
								  								{
								  									echo "<option value='". $j ."'>". $j . "</option>";
								  								}
								  							?>
														</select>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</div>

								<div class="tab-pane container fade" id="menu1">
									<fieldset class="scheduler-border">
										<legend class="scheduler-border">Family Background</legend>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Mothers Last Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="mothlname" class="form-control" id="mothlname">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Mothers First Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="mothfname" id="mothfname" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Mothers Middle Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="mothmname" id="mothmname" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Occupation:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="ocp" id="ocp" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Fathers Last Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="fathlname" id="fathlname" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Fathers First Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="fathfname" id="fathfname" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Fathers Middle Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="fathmname" id="fathmname" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Occupation:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="occpfath" id="occpfath" class="form-control">
												</div>
											</div>
										</div>
									</fieldset>
								</div>

								<div class="tab-pane container fade" id="menu2">
									<fieldset class="scheduler-border">
										<legend class="scheduler-border">Educational Background</legend>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Elementary School Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="elemname" id="elemname" class="form-control">
												</div>
											</div>


											<div class="form-group">
												<div class="col-md-12">
													<label>Year Graduated:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="grd" id="grd" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>High School Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="hsn" id="hsn" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Year Graduated:</label>
												</div>
											</div>	

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="hsgd" id="hsgd" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>College/University Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="collegename" id="collegename" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Year Graduated:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="collegegrad" id="collegegrad" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Masters University Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="mastersname" id="mastersname" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Year Graduated:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="mastersgrad" id="mastersgrad" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Doctorate University Name:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="doctorsname" id="doctorsname" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Year Graduated:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="doctorsgrad" id="doctorsgrad" class="form-control">
												</div>
											</div>
										</div>
									</fieldset>
								</div>

								<div class="tab-pane container fade" id="menu3">
									<fieldset class="scheduler-border">
										<legend class="scheduler-border">Update Resume</legend>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Resume Filename:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="" id="resfile" disabled>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="file" name="fileres" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>SSS:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="sss" id="sss" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>Pag-Ibig:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="pgibig" id="pgibig" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label>PhilHealth:</label>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<input type="text" name="phealth" id="phealth" class="form-control">
												</div>
											</div>
										</div>

										<div class="row mt-2 ml-5">
						                    <div class="form-group{{ $errors->has('passer') ? 'alert alert-danger' : '' }}">
						                        <div class="col-md-12">
						                            <label>LET Passer:</label>
						                        </div>
						                    </div>
						                    <div class="form-group">
						                        <div class="col-md-12">
						                            <select class="form-control" id="passer">
						                                <option></option>
						                                <option value="Yes">Yes</option>
						                                <option value="No">No</option>
						                            </select>
						                        </div>
						                    </div>
						                </div>

						                <div id="license">
						                    <div class="row mt-2 ml-5">
						                        <div class="form-group">
						                            <div class="col-md-12">
						                                <label>PRC No.:</label>
						                            </div>
						                        </div>

						                        <div class="form-group">
						                            <div class="col-md-12">
						                                <input type="text" name="prcno" class="wrk-com">
						                            </div>
						                        </div>
						                    </div>

						                    <div class="row ml-5">
						                        <div class="form-group">
						                            <div class="col-md-12">
						                                <label>Date Passed:</label>
						                            </div>
						                        </div>

						                        <div class="form-group">
						                            <div class="col-md-12">
						                                <input type="date" name="pssed" class="wrk-com">
						                            </div>
						                        </div>
						                    </div>

						                    <div class="row ml-5">
						                        <div class="form-group">
						                            <div class="col-md-12">
						                                <label>Expiration Date:</label>
						                            </div>
						                        </div>

						                        <div class="form-group">
						                            <div class="col-md-12">
						                                <input type="date" name="expirationdate" id="expirationdate" class="wrk-com">
						                            </div>
						                        </div>
						                    </div>
						                </div>

										<input type="hidden" name="id" id="id">
										<div class="row ml-2">
											<div class="form-group">
												<div class="col-md-12">
													<input type="submit" name="" id="save" class="btn btn-primary" value="Save">
												</div>
											</div>
										</div>
									</fieldset>
								</div>
							</div>
							{{ csrf_field() }}
						</form>
					</div>
				</div>
 			</div>
 		</div>
 	</div>
</div>
@endsection