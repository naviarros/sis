@extends('masterpages.adminlayout')

@section('content')
<style type="text/css">
	.panel-main-content {
		border: none;
		margin-bottom: 10px;
		background-color: white;
		margin-left: 40px;
	}

	.main-content2 {
		width: 44%;
		background: white;
	}
</style>
<div class="row ml-1">
	<div class="panel-main-content main-content2">
		<h3 class="text-center"><b>NUMBER OF STUDENT(S): <span class="badge badge-primary">{{ $studentnumber }}</span></b></h3>
		<form id="analyticsstrandsearch">
			<!-- <div class="row">
				<div class="form-group">
					<div class="col-md-12">
						<label><b>School Year:</b></label>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-12">
						<select class="form-control" name="startschyr" id="startschyr">
							<option></option>
							<?php 
								for($i = 2000; $i <= date('Y'); $i++)
								{
									echo "<option value='". $i . "'>". $i . "</option>";
								}
							?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-12">
						<select class="form-control" name="endschyr" id="endschyr">
							<option></option>
							<?php 
								for($i = 2000; $i <= date('Y') + 1; $i++)
								{
									echo "<option value='". $i . "'>". $i . "</option>";
								}
							?>
						</select>
					</div>
				</div>
			</div> -->
		</form>
	</div>

	<div class="panel-main-content main-content2">
		<h3 class="text-center"><b>NUMBER OF STRAND(S): <span class="badge badge-primary">{{ $strandtotal }}</span></b></h3>
		<form id="analyticsstrandsearch">
			<!-- <div class="row">
				<div class="form-group">
					<div class="col-md-12">
						<label><b>School Year:</b></label>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-12">
						<select class="form-control" name="startschyr" id="startschyr">
							<option></option>
							<?php 
								for($i = 2000; $i <= date('Y'); $i++)
								{
									echo "<option value='". $i . "'>". $i . "</option>";
								}
							?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-12">
						<select class="form-control" name="endschyr" id="endschyr">
							<option></option>
							<?php 
								for($i = 2000; $i <= date('Y') + 1; $i++)
								{
									echo "<option value='". $i . "'>". $i . "</option>";
								}
							?>
						</select>
					</div>
				</div>
			</div> -->
		</form>
	</div>
</div>

<div class="panel-main-content">
	<div class="wrapper" id="wrapper1">
		{!! $usersChart->container() !!}
	</div>
</div>
<!-- <div class="panel-main-content">
	<form id="analyticsstrandsearchgender">
		<div class="row">
			<div class="form-group">
				<div class="col-md-12">
					<label>Filter by:</label>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<label>Gender:</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<select class="form-control" name="srchgenderstrand1" id="srchgenderstrand1">
						<option></option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
		</div>
	</form>
	<div class="row">

	</div>
</div> -->
<div class="panel-main-content">
	<div class="wrapper" id="wrapper2">
		{!! $chart2->container() !!}
	</div>
</div>
@endsection

@section('scripts')
{{ $usersChart->id}}_api_url
{{ $usersChart->id}}_refresh(url)
{!! $usersChart->script() !!}
{!! $chart2->script() !!}
<script type="text/javascript">
	$('#startschyr').on('change', function(){
        var form = $('#analyticsstrandsearch');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/admin/analytics')}}',
            data: form.serialize(), 
            success: function(data)
            {
            	
            }
        });
    });

    $('#srchgenderstrand1').on('change', function(){
        var form = $('#analyticsstrandsearchgender');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/perstrandanalyticsgendersearch')}}',
            data: form.serialize(),
            dataType: 'json',
            success: function(data)
            {
            	$('#wrapper2').html(data);
            }
        });
    });
</script>
@endsection