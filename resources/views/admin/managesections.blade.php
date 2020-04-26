@extends('masterpages.adminlayout')

@section('content')
<div class="section-list">
    <form action="" method="post" id="sectsubs1">
        <div class="row mt-2 ml-5">
            <div class="form-group">
                <div class="col-md-12">
                    <label for="">Select Strand:</label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <select name="strand1" class="form-control" id="strand1">
                        <option></option>
                        @foreach($strands as $stran)
                            <option value="{{ $stran->strand_id }}">{{ $stran->description }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row mt-2 ml-5">
        	<div class="form-group">
        		<div class="col-md-12">
        			<label>Grade Level:</label>
        		</div>
        	</div>

        	<div class="form-group">
        		<div class="col-md-12">
        			<select class="form-control" id="gradeslvl" name="gradeslvl">
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
        			<select class="form-control" id="sctionstud" name="sctionstud">
                        <option></option>
                        @foreach($sections as $sect1)
                            <option value="{{ $sect1->section_mid }}">{{ $sect1->section_description }}</option>
                        @endforeach
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
                    <select class="form-control" name="mngesectsem" id="mngesectsem">
                        <option></option>
                        <option value="First Semester">First Semester</option>
                        <option value="Second Semester">Second Semester</option>
                    </select>
                </div>
            </div>
        </div>
    </form>

    <div class="row mt-2 ml-2">
    	<div class="col-md-12">
	    	<button class="btn btn-primary" data-toggle="modal" data-target="#subjects"><span class="fa fa-plus"></span> ADD SUBJECT</button>
            <button class="btn btn-success" data-toggle="modal" data-target="#sectionsubjectlist"><span class="fa fa-print"></span>View Section Subjects</button>
    	</div>
    </div>

    <div class="mt-2 ml-2">
    	<table class="table table-bordered table-striped bg-light" id="managesectiontable">
    		<thead>
    			<tr class="text-center">
    				<th>SUBJECT CODE</th>
    				<th>SUBJECT DESCRIPTION</th>
                    <th>TEACHER</th>
                    <th>SCHEDULE</th>
    				<th>UNITS</th>
                    <th>ROOMS</th>
    				<th>ACTION</th>
    			</tr>
    		</thead>
    		<tbody id="managesect">
               
		    </tbody>  
    	</table>
    </div>

    <div class="modal fade" role="dialog" id="sectionsubjectlist">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Search Section</h4>
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="modal-body">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Search Section:</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <form id="sectsearch">
                                            <select class="form-control" id="sectsubjsearch" name="sectsubjsearch">
                                                <option></option>
                                                @foreach($sections as $section)
                                                <option value="{{ $section->section_mid}}">{{ $section->section_description }}</option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <table class="table table-bordered table-striped bg-light text-center">
                                    <thead>
                                        <tr>
                                            <th>SECTION NAME</th>
                                            <th>STRAND</th>
                                            <th>GRADE LEVEL</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="subjsectlists">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" id="schedule">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Schedule Maintenance</h4>
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form method="post" action="{{ route('sched.upd') }}" id="schmnt">
                        {{  csrf_field() }}
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Subject Code:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" id="cde" name="cde" style="margin-left: 20px; width: 175px;" class="form-control" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Instructor Name:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="instruct">
                                        @foreach($teacher as $te)
                                            <option value="{{ $te->instructor_id }}">{{ $te->lastname }}, {{ $te->firstname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Day:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="day" id="day">
                                        <option></option>
                                        <option value="M">M</option>
                                        <option value="T">T</option>
                                        <option value="W">W</option>
                                        <option value="Th">Th</option>
                                        <option value="F">F</option>
                                        <option value="S">S</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="day1" id="day1">
                                        <option></option>
                                        <option value="M">M</option>
                                        <option value="T">T</option>
                                        <option value="W">W</option>
                                        <option value="Th">Th</option>
                                        <option value="F">F</option>
                                        <option value="S">S</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="day2" id="day2">
                                        <option></option>
                                        <option value="M">M</option>
                                        <option value="T">T</option>
                                        <option value="W">W</option>
                                        <option value="Th">Th</option>
                                        <option value="F">F</option>
                                        <option value="S">S</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="sched1">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Start:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="strt">
                                        <option></option>
                                        <?php
                                            $time = mktime(6, 0, 0, 0, 0);
                                            for ($i = 0; $i < 53200; $i += 1800) {  // 1800 = half hour, 86400 = one day
                                                printf('<option value="%2$s">%2$s</option>',
                                                       date('g:i', $time + $i), date('g:i a', $time + $i + 1800));
                                            }
                                        ?>
                                    </select>   
                                </div>
                            </div>

                            <div class="form-group">
                                <label>End:</label>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="ends">
                                        <option></option>
                                        <?php
                                            $time = mktime(6, 0, 0, 0, 0);
                                            for ($i = 0; $i < 53200; $i += 1800) {  // 1800 = half hour, 86400 = one day
                                                printf('<option value="%2$s">%2$s</option>',
                                                       date('g:i', $time + $i), date('g:i a', $time + $i + 1800));
                                            }
                                        ?>
                                    </select>   
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Room:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="room">
                                        <option></option>
                                        @foreach($rooms as $room)
                                            <option value="{{ $room->room_name }}">{{ $room->room_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="sched2">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Start:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="strt1">
                                        <option></option>
                                        <?php
                                            $time = mktime(6, 0, 0, 0, 0);
                                            for ($i = 0; $i < 53200; $i += 1800) {  // 1800 = half hour, 86400 = one day
                                                printf('<option value="%2$s">%2$s</option>',
                                                       date('g:i', $time + $i), date('g:i a', $time + $i + 1800));
                                            }
                                        ?>
                                    </select>   
                                </div>
                            </div>

                            <div class="form-group">
                                <label>End:</label>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="ends1">
                                        <option></option>
                                        <?php
                                            $time = mktime(6, 0, 0, 0, 0);
                                            for ($i = 0; $i < 53200; $i += 1800) {  // 1800 = half hour, 86400 = one day
                                                printf('<option value="%2$s">%2$s</option>',
                                                       date('g:i', $time + $i), date('g:i a', $time + $i + 1800));
                                            }
                                        ?>
                                    </select>   
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Room:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="room1">
                                        <option></option>
                                        @foreach($rooms as $room)
                                            <option value="{{ $room->room_name }}">{{ $room->room_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="sched3">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Start:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="strt2">
                                        <option></option>
                                        <?php
                                            $time = mktime(6, 0, 0, 0, 0);
                                            for ($i = 0; $i < 53200; $i += 1800) {  // 1800 = half hour, 86400 = one day
                                                printf('<option value="%2$s">%2$s</option>',
                                                       date('g:i', $time + $i), date('g:i a', $time + $i + 1800));
                                            }
                                        ?>
                                    </select>   
                                </div>
                            </div>

                            <div class="form-group">
                                <label>End:</label>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="ends2">
                                        <option></option>
                                        <?php
                                            $time = mktime(6, 0, 0, 0, 0);
                                            for ($i = 0; $i < 53200; $i += 1800) {  // 1800 = half hour, 86400 = one day
                                                printf('<option value="%2$s">%2$s</option>',
                                                       date('g:i', $time + $i), date('g:i a', $time + $i + 1800));
                                            }
                                        ?>
                                    </select>   
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Room:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="room2">
                                        <option></option>
                                        @foreach($rooms as $room)
                                            <option value="{{ $room->room_name }}">{{ $room->room_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" id="id" value="">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="submit" name="" id="save" class="btn btn-primary" value="Create">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" id="subjects">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Subject Maintenance</h4>
                        <button class="close" type="button" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form method="post" action="{{ route('subj.new') }}" id="subjs">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Strand:</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select class="form-control" name="strlists">
                                            <option disabled selected>Choose Strand</option>
                                            @foreach($strands as $strand)
                                            <option value="{{ $strand->strand_id }}">{{ $strand->description }}</option>
                                            @endforeach
                                        </select>   
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Grade Level:</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select class="form-control" name="grlvl">
                                            <option></option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Semester:</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select class="form-control" name="semester" style="margin-left: -15px; width: 180px;">
                                            <option></option>
                                            <option value="First Semester">First Semester</option>
                                            <option value="Second Semester">Second Semester</option>
                                        </select>
                                    </div>
                                </div>

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
                                <p>__</p>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select class="form-control" name="scyr1">
                                            <option value="<?php echo date('Y', strtotime('+1 year')); ?>">
                                              <?php echo date('Y', strtotime('+1 year')); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Curriculum Year:</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select class="form-control" id="searchyr" name="schyr" style=" width: 125px;">
                                            <option></option>
                                            <?php
                                                for($j = 2000; $j <= 2050; $j++)
                                                {
                                                    echo "<option value='". $j ."'>". $j . "</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label style="margin-left: 0; width: 180px;">Select Section:</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select class="form-control" name="sections" style="margin-left: -102px; width: 212px;">
                                            <option></option>
                                            @foreach($sections as $section)
                                                <option value="{{ $section->section_mid }}">{{ $section->section_description }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped bg-light">
                                            <thead>
                                                <tr>
                                                    <th class="hidechk"></th>
                                                    <th>STRAND/TRACK</th>
                                                    <th>SUBJECT DESCRIPTION</th>
                                                    <th>PREREQUISITE</th>
                                                    <th>GRADE LEVEL</th>
                                                    <th>SEMESTER</th>
                                                    <th>CURRICULUM YEAR</th>
                                                </tr>
                                            </thead>

                                            <tbody id="listcur">
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="submit" name="" class="btn btn-primary" value="Add">
                                    </div>
                                </div>
                            </div>
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
         </div>
</div>
@endsection