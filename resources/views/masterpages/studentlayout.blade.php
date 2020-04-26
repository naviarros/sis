<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="shortcut icon" href="{{ asset('images/eclarologo.png')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/students.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/datatable/bootstrap-datepicker.css')}}">
</head>
<body>
	<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
  <!-- Brand -->
  	<a class="navbar-brand"><img src="{{ asset('/images/eclogo.png') }}" class="img-logo"></a>

  <!-- Toggler/collapsibe Button -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item">Welcome, <b>{{ session()->get('studentname') }} ({{ session()->get('studentno')}})</b></li>
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span></a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/logout">Log Out</a></li>
      </ul>
      </li>
    </ul>
  </div> 
</nav>

<div class="side-bar">
    <div class="card bg-green">
      <div class="card-body">
          <img src="{{ asset('/images/user-img.png') }}" class="user-img">
          <p class="user-name">{{ session()->get('studentno') }}</p>
      </div>
    </div>
    <ul class="items">
        <li class="sideitems side"><a href="/students/message"><span class="fa fa-inbox"></span>Inbox</a></li>
        <li class="sideitems side"><a href="/students/schedule"><span class="fa fa-calendar"></span>Schedule</a></li>
        <li class="sideitems side"><a href="/students/grades"><span class="fa fa-address-book"></span>Grades</a></li>
        <li class="sideitems side"><a href="/students/profile"><span class="fa fa-user"></span>My Profile</a></li>
        <li class="sideitems side"><a href="/students/registration"><span class="fa fa-calendar"></span>Enrollment</a></li>
        <li class="sideitems side"><a href="/students/changepassword"><span class="fa fa-key"></span>Change Password</a></li>
        <li class="sideitems side"><a href="/students/attendance"><span class="fa fa-calendar"></span>Attendance Log</a></li>
    </ul>
  </div>
<!-- <div class="second-navbar-container">
	<nav class="navbar-second">
		<div class="second-items">
			<ul class="nav-classes">
		     	<li class="nav-classes-item active"><a href="" title="Dashboard"><span class="fa fa-dashboard"></span></a></li>
		     	<li class="nav-classes-item"><a href="" title="Inbox"><span class="fa fa-inbox"></span></a></li>
		     	<li class="nav-classes-item"><a href="/students/schedule" title="Schedule"><span class="fa fa-calendar"></span></a></li>
		     	<li class="nav-classes-item"><a href="/students/grades" title="Grades"><span class="fa fa-bar-chart"></span></a></li>
		     	<li class="nav-classes-item"><a href="/students/registration" title="Registration"><span class="fa fa-check"></span></a></li>
		     	<li class="nav-classes-item"><a href="/students/profile" title="Edit Profile "><span class="fa fa-sign-in"></span></a></li>
		     	<li class="nav-classes-item"><a href="/students/changepassword" title="Change Password"><span class="fa fa-users"></span></a></li>
		     	<li class="nav-classes-item"><a href="/students/attendance" title="Attendance"><span class="fa fa-clock-o"></span></a></li>
		    </ul>
		</div>
	</nav>
</div> -->

<script type="text/javascript" src="{{ asset('/js/sweetalert.min.js') }}"></script>
  @include('sweet::alert')
  
<div class="maincontent">
	@yield('content')
</div>

	<script type="text/javascript" src="/js/app.js"></script>
  <script type="text/javascript" src="/datatable/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="/js/bootstrap.js"></script>
  <script type="text/javascript" src="/js/students.js"></script>
  <script text="text/javascript" src="/datatable/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/streets.js')}}"></script>

  <script type="text/javascript">
      $(document).ready(function(){
          $("#datepicker").datepicker();
      });
  </script>

  <script type="text/javascript">
      $(document).ready(function() {
           
        $(function() {
            $('.grading').hide();
                $('#grading').change(function(){
                  $('.grading').hide();
                  $('#' + $(this).val()).show();
              });
            });

        $(function() {
            var Bdate = document.getElementById('dob').value;
            var Bday = +new Date(Bdate);
            var age2 =  ~~ ((Date.now() - Bday) / (31557600000));
            document.getElementById("age").value = age2;
        });
      });
  </script>

  <script type="text/javascript">
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('#datepicker').on('change', function(){
          var form = $('#attendancesearch');
          var url = '{{ URL::to("/searchattendance") }}';
          $.ajax({
              type: "get",
              url: url,
              data: form.serialize(),
              success: function(data){
                  row = '';

                  $.each(data.attend, function(key, value){
                      row += `<tr>
                                <td>${value.student.students.student_no}</td>
                                <td>${value.date}</td>
                                <td>${value.time_in}</td>
                                <td>${value.status}</td>
                              </tr>`;
                  });

                  $('#stattendance').html(row);
              }
          });
      });
  </script>
</body>
</html>