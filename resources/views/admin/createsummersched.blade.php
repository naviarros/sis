@extends('masterpages.adminlayout')

@section('content')
<div class="section-list">
	<form action="" method="post" id="sectsubs2">
        <div class="row mt-2 ml-5">
            <div class="form-group">
                <div class="col-md-12">
                    <label for="">Select Strand:</label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <select name="strand1" class="form-control" id="strand2">
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
        			<select class="form-control" id="gradeslvl1" name="gradeslvl" style="margin-left: 10px;">
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
        			<select class="form-control" id="sctionstud1" name="sctionstud">
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
                    <select class="form-control" name="mngesectsem" id="sectsummnge">
                        <option></option>
                        <option value="Summer Semester">Summer Semester</option>
                    </select>
                </div>
            </div>
        </div>
    </form>

	<div class="row mt-2 ml-2">
		<button class="btn btn-primary" data-toggle="modal" data-target="#subjects"><span class="fa fa-plus"></span> ADD SUBJECT</button>
	</div>

	<div class="mt-2 ml-2">
    	<table class="table table-bordered table-striped bg-light">
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
    		<tbody id="managesummersect">
               	@foreach($summer as $subjects)
                    <tr id="subjects{{ $subjects->section_subj_id }}">
                        <td>{{ $subjects->subject->subject_code}}</td>
                        <td>{{ $subjects->subject->subject_description}}</td>
                        <td>{{ $subjects->instructor['lastname'] }}, {{ $subjects->instructor['firstname'] }}</td>
                        <td>{{ $subjects->start }} - {{ $subjects->end}} / {{ $subjects->start1}} - {{ $subjects->end1}} / {{ $subjects->start2}} - {{ $subjects->end2 }}</td>
                        <td>{{ $subjects->subject->credited_units}}</td>
                        <td>{{ $subjects->room }} / {{ $subjects->room1 }} / {{ $subjects->room2 }} </td>
                        <td>
                            <button class="btn btn-primary sched-modal" data-id="{{ $subjects->section_subj_id}}"><span class="fa fa-pencil"></span></button>
                            <button class="btn btn-danger delete-sectionsub-modal" data-id="{{ $subjects->section_subj_id}}"><span class="fa fa-trash"></span></button>
                        </td>
                    </tr>
               @endforeach
		    </tbody>  
    	</table>
    </div>

    <div class="modal fade" role="dialog" id="subjects">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Subject Maintenance</h4>
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form method="post" action="{{ route('summer.new') }}" id="subjs">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Strand:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="strlists" style="margin-left: 32px; width: 180px;">
                                        <option disabled selected>Choose Strand</option>
                                        @foreach($strands as $strand)
                                        <option value="{{ $strand->strand_id }}">{{ $strand->description }}</option>
                                        @endforeach
                                    </select>   
                                </div>
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
                                    <select class="form-control" name="grlvl">
                                        <option></option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
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
                                    <select class="form-control" name="semester">
                                        <option></option>
                                        <option value="Summer Semester">Summer Semester</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- <div class="form-group">
                                <div class="col-md-12">
                                    <label>Search Subject:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="subssrch" id="subssrch" class="form-control">
                                </div>
                            </div> -->

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Select Section:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="form-control" name="sections" style="margin-left: -15px;">
                                        <option></option>
                                        @foreach($sections as $section)
                                            <option value="{{ $section->section_mid }}">{{ $section->section_description }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <table class="table table-bordered table-striped bg-light">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>SUBJECT DESCRIPTION</th>
                                    <th>SUBJECT CODE</th>
                                    <th>SUBJECT TYPE</th>
                                </tr>
                            </thead>

                            <tbody id="listcur">
                            	@foreach($subjs as $subs)
                            	<tr>
                            		<td><input type="checkbox" name="sbujs[]" value="{{ $subs->subject_id }}"></td>
                            		<td>{{ $subs->subject_description }}</td>
                            		<td>{{ $subs->subject_code }}</td>
                            		<td>{{ $subs->subject_type }}</td>
                            	</tr>
                            	@endforeach
                            </tbody>
                        </table>

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

     <div class="modal fade" role="dialog" id="schedule">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Schedule Maintenance</h4>
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form method="post" action="{{ route('sched.upd') }}" id="schmnt2">
                        {{  csrf_field() }}
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Subject Code:</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" id="cde" name="cde" class="form-control" disabled>
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
                                            $time = mktime(7, 0, 0, 0, 0);
                                            for ($i = 0; $i < 43200; $i += 1800) {  // 1800 = half hour, 86400 = one day
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
                                            $time = mktime(7, 0, 0, 0, 0);
                                            for ($i = 0; $i < 43200; $i += 1800) {  // 1800 = half hour, 86400 = one day
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
                                            $time = mktime(7, 0, 0, 0, 0);
                                            for ($i = 0; $i < 43200; $i += 1800) {  // 1800 = half hour, 86400 = one day
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
                                            $time = mktime(7, 0, 0, 0, 0);
                                            for ($i = 0; $i < 43200; $i += 1800) {  // 1800 = half hour, 86400 = one day
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
                                            $time = mktime(7, 0, 0, 0, 0);
                                            for ($i = 0; $i < 43200; $i += 1800) {  // 1800 = half hour, 86400 = one day
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
                                            $time = mktime(7, 0, 0, 0, 0);
                                            for ($i = 0; $i < 43200; $i += 1800) {  // 1800 = half hour, 86400 = one day
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
</div>
@endsection