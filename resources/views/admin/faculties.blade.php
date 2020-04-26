@extends('masterpages.adminlayout')

@section('content')
    <div id="smartwizard">
        <ul class="wizard-lists">
            <li><a href="#step-1">Step 1<br /><small>Personal Information</small></a></li>
            <li><a href="#step-2">Step 2<br /><small>Family Background</small></a></li>
            <li><a href="#step-3">Step 3<br /><small>Valid Credentials</small></a></li>
            <li><a href="#step-4">Step 4<br><small>Government Valid ID</small></a></li>
            <li><a href="#step-5">Final Step <br><small>Final Setup</small></a></li>
        </ul>
  <div class="mt-3">
        <div id="step-1">
        <form method="post" action="{{ route('teacher.store')}}" id="myForm" role="form" data-toggle="validator" novalidate="true" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div id="form-step-0" role="form" data-toggle="validator">
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Personal Information</legend>
                    <div class="row mt-2 ml-5">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Last Name:</label>
                                <input type="text" name="lastname" class="{{ $errors->has('lastname') ? 'border border-danger' : '' }} form-control" onkeydown="return alphaOnly(event);" required>

                                @if($errors->has('lastname'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('lastname') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>First Name:</label>
                                <input type="text" name="firstname" class="{{ $errors->has('firstname') ? 'border border-danger' : '' }} form-control" onkeydown="return alphaOnly(event);" required>

                                @if($errors->has('lastname'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('firstname') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Middle Name:</label>
                                <input type="text" name="middlename" class="{{ $errors->has('middlename') ? 'border border-danger' : '' }} form-control" onkeydown="return alphaOnly(event);">

                                @if($errors->has('middlename'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('middlename') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Suffix Name:</label>
                                <select class="form-control" class="namesuffix">
                                    <option selected="true"></option>
                                    <option value="Jr">Jr.</option>
                                    <option value="Sr">Sr.</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 ml-5">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Birthday:</label>
                                <input type="date" name="bday" id="dob" class="{{ $errors->has('bday') ? 'border border-danger' : '' }} form-control" required>

                                @if($errors->has('bday'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('bday') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Age:</label>
                                <input type="text" class="{{ $errors->has('age') ? 'border border-danger' : '' }}  form-control" id="age" name="age" readonly required>

                                @if($errors->has('age'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('age') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Place of Birth:</label>
                                <input type="text" name="pob" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? 'alert alert-danger' : '' }}">
                            <div class="col-md-12">
                                <label>Gender/Sex:</label>
                                <select class="form-control" name="gender" required>
                                    <option></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

                                @if($errors->has('gender'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('gender') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cstat') ? 'alert alert-danger' : '' }}">
                            <div class="col-md-12">
                                <label>Civil Status:</label>
                                <select class="form-control text-center" name="cstat" required>
                                    <option></option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                </select>

                                @if($errors->has('cstat'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('cstat') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Nationality:</label>
                                <input type="text" name="ntnty" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Email Address:</label>
                                <input type="email" name="email" class="{{ $errors->has('email') ? 'border border-danger' : '' }} form-control" required>
                                <div class="help-block with-errors"></div>
                                @if($errors->has('email'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Contact No.:</label>
                                <input type="text" name="teachercntact" maxlength="11" class="form-control" onkeydown="return numbersOnly(event);" >
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 ml-5">
                        <div class="form-group{{ $errors->has('statereg') ? 'alert alert-danger' : '' }}">
                            <div class="col-md-12">
                                <label>State/Region:</label>
                                <select class="form-control" name="statereg" id="region" required>
                                    <option></option>
                                    <option value="National Capital Region">National Capital Region</option>
                                    <option value="ARMM">ARMM</option>
                                    <option value="Cordillera Administrative Region">Cordillera Administrative Region</option>
                                    <option value="Region I - Ilocos Region">Region I - Ilocos Region</option>
                                    <option value="Region II - Cagayan Valley">Region II - Cagayan Valley</option>
                                    <option value="Region III - Central Luzon">Region III - Central Luzon</option>
                                    <option value="Region IV-A - CALABARZON">Region IV-A - CALABARZON</option>
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

                                @if($errors->has('statereg'))
                                    <span class="help-block with-errors">
                                        {{ $errors->first('statereg') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>City/Municipality:</label>
                                <select class="form-control" name="cty" id="city" required>
                                    <option selected="true"></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>District:</label>
                                <select class="form-control" name="muni" id="muns" onchange="zip();" required>
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Barangay:</label>
                                <select class="form-control text-center" name="brgy" id="bgy" required>
                                    <option selected="true"></option>
                                </select>
                                <div class="help-block with-errors">
                                    
                                </div>
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

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Zip Code:</label>
                                <input type="text" name="zipc" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <p>If married fill this form (Optional):</p>
                    </div>

                    <div class="row mt-2 ml-5">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Spouse Last Name:</label>
                                <input type="text" name="splname" class="form-control" onkeydown="return alphaOnly(event);">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Spouse First Name:</label>
                                <input type="text" name="spfname" class="form-control" onkeydown="return alphaOnly(event);">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Spouse Middle Name:</label>
                                <input type="text" name="spmname" class="form-control" onkeydown="return alphaOnly(event);">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 ml-5">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Age:</label>
                                <input type="text" name="age2" id="age1" readonly class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Birthday:</label>
                                <input type="date" name="birthday" id="dob2" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Occupation:</label>
                                <input type="text" name="occupation" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>No. of Children:</label>
                                <select name="children" class="form-control">
                                    <?php
                                        for($i=1; $i<=100; $i++)
                                        {

                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                    ?>
                                    <option selected="true"></option>
                                </select> 
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div id="step-2" class="">
            <div id="form-step-1" role="form" data-toggle="validator">
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Family Background</legend>
                    <div class="row mt-2 ml-5">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Mother's Last Name:</label>
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="mlname" class="{{ $errors->has('mlname') ? 'border border-danger' : '' }} form-control" onkeydown="return alphaOnly(event);" required>

                            @if($errors->has('mlname'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('mlname') }}
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Mother's First Name:</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="mfname" class="{{ $errors->has('mfname') ? 'border border-danger' : '' }} form-control" onkeydown="return alphaOnly(event);" required>

                            @if($errors->has('mfname'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('mfname') }}
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Mother's Maiden Name:</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="mmname" class="form-control" onkeydown="return alphaOnly(event);">
                            </div>
                        </div>
                    </div>

                    <div class="row ml-5">
                        <div class="form-group{{ $errors->has('mocc') ? 'alert alert-danger' : '' }}">
                            <div class="col-md-12">
                                <label>Mother's Occupation:</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="mocc" class="form-control" required>

                            @if($errors->has('mocc'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('mocc') }}
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mcontact') ? 'alert alert-danger' : '' }}">
                            <div class="col-md-12">
                                <label>Contact Number:</label>
                                <input type="text" name="mcontact" maxlength="11" class="form-control" onkeydown="return numbersOnly(event);">
                            </div>
                        
                            @if($errors->has('mcontact'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('mcontact') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row ml-5">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Father's Last Name:</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="flname" class="{{ $errors->has('flname') ? 'border border-danger' : '' }} form-control" onkeydown="return alphaOnly(event);" required>

                            @if($errors->has('flname'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('flname') }}
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Father's First Name:</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="ffname" class="{{ $errors->has('ffname') ? 'border border-danger' : '' }} form-control" onkeydown="return alphaOnly(event);" required>

                            @if($errors->has('ffname'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('ffname') }}
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Father's Middle Name:</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="fmname" class="form-control" onkeydown="return alphaOnly(event);">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Suffix Name: (skip if none)</label>
                            </div>
                            <div class="col-md-12">
                                <select class="form-control" name="sfx">
                                    <option value="Jr.">Jr.</option>
                                    <option value="Sr">Sr.</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                    <option selected="true">-----</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('focc') ? 'alert alert-danger' : '' }}">
                            <div class="col-md-12">
                                <label>Father's Occupation:</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="focc" class="form-control" required>

                            @if($errors->has('focc'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('focc') }}
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fcontact') ? 'alert alert-danger' : '' }}">
                            <div class="col-md-12">
                                <label>Contact Number:</label>
                                <input type="text" name="fcontact" maxlength="11" class="form-control" onkeydown="return numbersOnly(event);">
                            </div>
                        
                            @if($errors->has('fcontact'))
                                <span class="help-block with-errors">
                                    {{ $errors->first('fcontact') }}
                                </span>
                            @endif
                            </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div id="step-3" class="">
            <ul class="nav nav-tabs bg-primary">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#educ">Educational Attainment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#exp">Upload Resume</a>
                </li>
            </ul>

            <div id="form-step-2" role="form" data-toggle="validator">
                <div class="tab-content mt-3">
                    <div class="tab-pane container active" id="educ">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Educational Attainment</legend>
                            <h6 class="mt-2 ml-5"><b>Primary Education (Elementary):</b></h6>
                            <div class="row mt-2 ml-5">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>School Name:</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="elemsch" class="{{ $errors->has('elemsch') ? 'border border-danger' : '' }} form-control" onkeydown="return alphaOnly(event);" required>

                                    @if($errors->has('elemsch'))
                                        <span class="help-block with-errors">
                                            {{ $errors->first('elemsch') }}
                                        </span>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('elemschgrd') ? 'alert alert-danger' : '' }}">
                                    <div class="col-md-12">
                                        <label>Year Graduated:</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="elemschgrd" maxlength="4" onkeydown="return numbersOnly(event);">
                           

                                    @if($errors->has('elemschgrd'))
                                        <span class="help-block with-errors">
                                            {{ $errors->first('elemschgrd') }}
                                        </span>
                                    @endif
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
                                        <input type="text" name="hssch" class="{{ $errors->has('hssch') ? 'border border-danger' : '' }} form-control" onkeydown="return alphaOnly(event);" required>

                                    @if($errors->has('hssch'))
                                        <span class="help-block with-errors">
                                            {{ $errors->first('hssch') }}
                                        </span>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('hsgrd') ? 'alert alert-danger' : '' }}">
                                    <div class="col-md-12">
                                        <label>Year Graduated:</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="hsgrd" class="form-control" maxlength="4" onkeydown="return numbersOnly(event);">

                                    @if($errors->has('hsgrd'))
                                        <span class="help-block with-errors">
                                            {{ $errors->first('hsgrd') }}
                                        </span>
                                    @endif
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
                                        <input type="text" name="cllgsch" class="{{ $errors->has('cllgsch') ? 'border border-danger' : '' }} form-control" onkeydown="return alphaOnly(event);">

                                    @if($errors->has('cllgsch'))
                                        <span class="help-block with-errors">
                                            {{ $errors->first('cllgsch') }}
                                        </span>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('cllggrd') ? 'alert alert-danger' : '' }}">
                                    <div class="col-md-12">
                                        <label>Year Graduated:</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="cllggrd" maxlength="4" onkeydown="return numbersOnly(event);">
                                     

                                    @if($errors->has('cllggrd'))
                                        <span class="help-block with-errors">
                                            {{ $errors->first('cllggrd') }}
                                        </span>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('crse') ? 'alert alert-danger' : '' }}">
                                    <div class="col-md-12">
                                        <label>Course Taken:</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="crse" onkeydown="return alphaOnly(event);">
                                     

                                    @if($errors->has('crse'))
                                        <span class="help-block with-errors">
                                            {{ $errors->first('crse') }}
                                        </span>
                                    @endif
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
                                        <input type="text" name="mstrssch" class="form-control" onkeydown="return alphaOnly(event);">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Year Graduated:</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="mstrsgrad" maxlength="4" onkeydown="return numbersOnly(event);">
                                      
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Course Taken:</label>
                                    </div>
                                    <div class="col-md-12">
                                         <input type="text" class="form-control" name="mstrscrse" onkeydown="return alphaOnly(event);">
                                      
                                    </div>
                                </div>
                            </div>

                            <h6 class="mt-2 ml-5"><b>Doctorate Education (Doctorate Degree):</b></h6>
                            <div class="row mt-2 ml-5">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>School Name:</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="dctrsch" class="form-control" onkeydown="return alphaOnly(event);">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Year Graduated:</label>
                                    </div>
                                    <div class="col-md-12">
                                         <input type="text" class="form-control" name="dctrsgrad" maxlength="4" onkeydown="return numbersOnly(event);">
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Course Taken:</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="dctrscrse" onkeydown="return alphaOnly(event);">
                                       
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="tab-pane container" id="exp">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Upload Resume</legend>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Upload File:</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="file" name="docu" accept="docx" class="form-control" required>
                                    </div>
                                </div>

                                <span class="help-block">
                                    <p class="text-danger">*Note: .docx, .doc file extension only</p>
                                </span>

                                <div class="help-block with-errors"></div>
                            </div>
                        </fieldset>
                    </div>  
                </div>
            </div>
        </div>
      <div id="step-4" class="">
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Employee Requirements</legend>
                <h6 class="mt-2 ml-5"><b>Fill-up this form if the teacher has the ff:</b></h6>
                <div class="row mt-2 ml-5">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>SSS:</label>
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="sss" class="{{ $errors->has('sss') ? 'border border-danger' : '' }} form-control" required>

                        @if($errors->has('sss'))
                            <span class="help-block with-errors">
                                {{ $errors->first('sss') }}
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label>PhilHealth:</label>
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="philhealth" class="{{ $errors->has('philhealth') ? 'border border-danger' : '' }} form-control" onkeydown="return numbersOnly(event);" required>

                        @if($errors->has('philhealth'))
                            <span class="help-block with-errors">
                                {{ $errors->first('philhealth') }}
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Pag-Ibig:</label>
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="pagibig" class="{{ $errors->has('pagibig') ? 'border border-danger' : '' }} form-control" onkeydown="return numbersOnly(event);" required>

                        @if($errors->has('pagibig'))
                            <span class="help-block with-errors">
                                {{ $errors->first('pagibig') }}
                            </span>
                        @endif
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
            </fieldset>
        </div>

        <div id="step-5">
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Account Setup</legend>
                <h6 class="mt-2 ml-5"><b>Account Information:</b></h6>
                <div class="row mt-2 ml-5">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Username:</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="tchusrname" class="{{ $errors->has('tchusrname') ? 'border border-danger' : '' }} form-control" value="<?php echo date('Y'); ?>-PROF-{{ $teacher + 1}}" readonly>

                        @if($errors->has('tchusrname'))
                            <span class="help-block">
                                {{ $errors->first('tchusrname') }}
                            </span>
                        @endif
                        </div>
                    </div>
                </div>

                <div class="row mt-2 ml-5">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Password:</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="tchpsw" class="{{ $errors->has('tchpsw') ? 'border border-danger' : '' }} form-control" value="<?php
                            function password_generate($chars) 
                            {
                            $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
                            return substr(str_shuffle($data), 0, $chars);
                            }
                            echo password_generate(4)."\n";
                        ?>" readonly>

                        @if($errors->has('tchpsw'))
                            <span class="help-block">
                                {{ $errors->first('tchpsw') }}
                            </span>
                        @endif
                        </div>
                    </div>
                </div>

                <div class="row mt-2 ml-5">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" name="" class="btn btn-primary" value="Add Teacher">
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </form> 
  </div>
</div>
@endsection