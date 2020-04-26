@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<div class="row">
			<input type="text" name="" class="search-text" placeholder="Search" autocomplete="false">
			<button class="btn-search" type="button">Search</button>
		</div>

		<div class="mt-3 ml-3">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link active text-dark" data-toggle="tab" href="#home">Personal Information</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-dark" data-toggle="tab" href="#menu1">Family Background</a>
			  </li>	
			  <li class="nav-item">
			    <a class="nav-link text-dark" data-toggle="tab" href="#menu2">Education Background</a>
			  </li>
			</ul>

			<div class="tab-content mt-3">
				 <div class="tab-pane container active" id="home">
				 	<form method="post">
	        			<fieldset class="scheduler-border">
	        				<legend class="scheduler-border">Personal Information</legend>
	        				<div class="row mt-2 ml-5">
	        					<div class="form-group">
	        						<div class="col-md-12">
	        							<label>Family Name:</label>
	        							<input type="text" name="" class="form-control">
	        						</div>
	        					</div>

		        				<div class="form-group">
		        					<div class="col-md-12">
		        						<label>Given Name:</label>
		        						<input type="text" name="" class="form-control">
		        					</div>
		        				</div>

		        				<div class="form-group">
		        					<div class="col-md-12">
		        						<label>Middle Name:</label>
		        						<input type="text" name="" class="form-control">
		        					</div>
		        				</div>
	        				</div>

	        				<div class="row mt-2 ml-5">
        						<div class="form-group">
        							<div class="col-md-12">
        								<label>Address:</label>
        								<input type="text" name="" class="form-control">
        							</div>
        						</div>

        						<div class="form-group">
        							<div class="col-md-12">
        								<label>Age:</label>
        								<select class="form-control">
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
			        					<label>Gender/Sex:</label>
			        					<select class="form-control">
			        						<option>--- Gender ---</option>
			        						<option>Male</option>
			        						<option>Female</option>
			        					</select>
			        				</div>
			        			</div>

			        			<div class="form-group">
			        				<div class="col-md-12">
			        					<label>Birthday:</label>
			        					<input type="date" name="" class="form-control">
			        				</div>
			        			</div>
			        		</div>
			        		<div class="row mt-2 ml-5">
			        			<div class="form-group">
			        				<div class="col-md-12">
			        					<label>City:</label>
			        					<select class="form-control" id="cty">
			        						<option selected="true">--- City ---</option>
			                                <option>Manila</option>
			        					</select>
			        				</div>
			        			</div>

			                    <div class="form-group">
			                        <div class="col-md-12">
			                            <label>Municipality:</label>
			                            <select class="form-control" id="mun" onchange="zip();">
			                                <option>-----</option>
			                                <option>Sta. Mesa</option>
			                            </select>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <div class="col-md-12">
			                            <label>Zip Code:</label>
			                            <select class="form-control" id="zipcode">
			                                <option>----</option>
			                            </select>
			                        </div>
			                    </div>

			        			<div class="form-group">
			        				<div class="col-md-12">
			        					<label>State/Region:</label>
			        					<select class="form-control">
				  							<option>-----</option>
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
			        					<input type="email" name="" class="form-control">
			        				</div>
			        			</div>

			        			<div class="form-group">
			        				<div class="col-md-12">
			        					<label>Civil Status:</label>
			        					<select class="form-control text-center">
			        						<option>Single</option>
			        						<option>Married</option>
			        					</select>
			        				</div>
			        			</div>
			        		</div>


	        			</fieldset>
				</div>

				<div class="tab-pane container fade" id="menu1">
					<fieldset class="scheduler-border">
        				<legend class="scheduler-border">Family Background</legend>
        				<div class="row mt-2 ml-5">
        					<div class="form-group">
		        				<div class="col-md-12">
		        					<label>Mother's Name:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<input type="text" name="" class="form-control">
		        				</div>
		        			</div>

		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>Mother's Occupation:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<input type="text" name="" class="form-control">
		        				</div>
		        			</div>
		        		</div>

		        		<div class="row ml-5">
		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>Father's Name:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<input type="text" name="" class="form-control">
		        				</div>
		        			</div>
		        			
		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>Father's Occupation:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<input type="text" name="" class="form-control">
		        				</div>
		        			</div>
        				</div>
        			</fieldset>
				</div>

				<div class="tab-pane container fade" id="menu2">
					<fieldset class="scheduler-border">
        				<legend class="scheduler-border">Educational Attainment</legend>
        				<h6 class="mt-2 ml-5"><b>Primary Education (Elementary):</b></h6>
		        		<div class="row mt-2 ml-5">
		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>School Name:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<input type="text" name="" class="form-control">
		        				</div>
		        			</div>

		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>Year Graduated:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<select class="form-control">
		                                <option>---</option>
		                                <?php
		                                    $i = 2100;
		                                    for($j = 1990; $j <= $i; $j++)
		                                    {
		                                        echo "<option value='". $j ."'>". $j . "</option>";
		                                    }
		                                ?>
		                            </select>
		        				</div>
		        			</div>

		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>Graduated with honors:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<label class="radio-inline"><input type="radio" name="optradio"> Yes </label>
									<label class="radio-inline"><input type="radio" name="optradio"> No </label>
		        				</div>
		        			</div>
		        		</div>

		        		<h6 class="mt-2 ml-5"><b>Secondary Education (High School):</b></h6>
		        		<div class="row mt-2 ml-5">
		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>School Name:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<input type="text" name="" class="form-control">
		        				</div>
		        			</div>

		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>Year Graduated:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<select class="form-control">
		                                <option>---</option>
		                                <?php
		                                    $i = 2100;
		                                    for($j = 1990; $j <= $i; $j++)
		                                    {
		                                        echo "<option value='". $j ."'>". $j . "</option>";
		                                    }
		                                ?>
		                            </select>
		        				</div>
		        			</div>

		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>Graduated with honors:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<label class="radio-inline"><input type="radio" name="optradio" checked> Yes </label>
									<label class="radio-inline"><input type="radio" name="optradio"> No </label>
		        				</div>
		        			</div>
		        		</div>

		        		<h6 class="mt-2 ml-5"><b>Tertiary Education (College):</b></h6>
		        		<div class="row mt-2 ml-5">
		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>School Name:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<input type="text" name="" class="form-control">
		        				</div>
		        			</div>

		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>Year Graduated:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<select class="form-control">
		                                <option>---</option>
		                                <?php
		                                    $i = 2100;
		                                    for($j = 1990; $j <= $i; $j++)
		                                    {
		                                        echo "<option value='". $j ."'>". $j . "</option>";
		                                    }
		                                ?>
		                            </select>
		        				</div>
		        			</div>

		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>Course Taken:</label>
		        				</div>
		        				<div class="col-md-12">
		        					<select class="form-control">
		        						<option>Bachelor of Science in Education</option>
		        					</select>
		        				</div>
		        			</div>
		        		</div>

		        		<div class="row mt-2 ml-5">
		        			<div class="form-group">
		        				<div class="col-md-12">
		        					<label>w/ Latin honors (if granted):</label>
		        				</div>
		        				<div class="col-md-12">
		        					<select class="form-control">
		        						<option>Magna Cum Laude</option>
		        						<option>Summa Cum Laude</option>
		        						<option>Cum Laude</option>
		        						<option selected="true">None</option>
		        					</select>
		        				</div>
		        			</div>
		        		</div>

		        		<h6 class="mt-2 ml-5"><b>Masters Education (Masters Degree):</b></h6>
		                <div class="row mt-2 ml-5">
		                    <div class="form-group">
		                        <div class="col-md-12">
		                            <label>School Name:</label>
		                        </div>
		                        <div class="col-md-12">
		                            <input type="text" name="" class="form-control">
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <div class="col-md-12">
		                            <label>Year Graduated:</label>
		                        </div>
		                        <div class="col-md-12">
		                            <select class="form-control">
		                                <option>---</option>
		                                <?php
		                                    $i = 2100;
		                                    for($j = 1990; $j <= $i; $j++)
		                                    {
		                                        echo "<option value='". $j ."'>". $j . "</option>";
		                                    }
		                                ?>
		                            </select>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <div class="col-md-12">
		                            <label>Course Taken:</label>
		                        </div>
		                        <div class="col-md-12">
		                            <select class="form-control">
		                                <option>Master of Science in Education</option>
		                            </select>
		                        </div>
		                    </div>
		                </div>

		                <div class="row mt-2 ml-5">
		                    <div class="form-group">
		                        <div class="col-md-12">
		                            <label>w/ Latin honors (if granted):</label>
		                        </div>
		                        <div class="col-md-12">
		                            <select class="form-control">
		                                <option>Magna Cum Laude</option>
		                                <option>Summa Cum Laude</option>
		                                <option>Cum Laude</option>
		                                <option selected="true">None</option>
		                            </select>
		                        </div>
		                    </div>
		                </div>
        			</fieldset>
				</div>
			</div>
	</div>
@endsection