<!DOCTYPE html>
<html>
<head>
  <title>Teacher Dashboard</title>

<link rel="shortcut icon" href="{{ asset('/images/eclarologo.png')}}" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/smart_wizard.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/smart_wizard_theme_arrows.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/smart_wizard_theme_circles.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/smart_wizard_theme_dots.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/teacher.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/studentattendance.css')}}">

            <link rel="stylesheet" href="{{asset('/datatable/dataTables.bootstrap4.min.css')}}">

  <link rel="stylesheet" href="{{asset('/datatable/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('/datable/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/datatable/bootstrap-datepicker.css')}}">

  
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/admin.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jacob.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-easing.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('js/teacher.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.smartWizard.min.js') }}"></script>

  <script type="text/javascript" src="{{ URL::asset('js/wizard.js')}}"></script>
  <script  text="text/javascript" src="{{URL::asset('datatable/popper.min.js')}}"></script>
  <script text="text/javascript" src="{{URL::asset('datatable/bootstrap.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/jquery.dataTables.min.js')}}"></script>
    <script  text="text/javascript" src="{{URL::asset('datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script text="text/javascript"  src="{{URL::asset('datatable/dataTables.buttons.min.js')}}"></script>
    <script text="text/javascript"  src="{{URL::asset('datatable/buttons.bootstrap4.min.js')}}"></script>
    <script  text="text/javascript" src="{{URL::asset('datatable/jszip.min.js')}}"></script>
    <script  text="text/javascript" src="{{URL::asset('datatable/pdfmake.min.js')}}"></script>
    <script  text="text/javascript" src="{{URL::asset('datatable/vfs_fonts.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/buttons.html5.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/buttons.print.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/buttons.colVis.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/dataTables.responsive.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/admin.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jacob.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-easing.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('js/teacher.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.smartWizard.min.js') }}"></script>

  <script type="text/javascript" src="{{ URL::asset('js/wizard.js')}}"></script>
  <script  text="text/javascript" src="{{URL::asset('datatable/popper.min.js')}}"></script>
  <script text="text/javascript" src="{{URL::asset('datatable/bootstrap.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/jquery.dataTables.min.js')}}"></script>
    <script  text="text/javascript" src="{{URL::asset('datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script text="text/javascript"  src="{{URL::asset('datatable/dataTables.buttons.min.js')}}"></script>
    <script text="text/javascript"  src="{{URL::asset('datatable/buttons.bootstrap4.min.js')}}"></script>
    <script  text="text/javascript" src="{{URL::asset('datatable/jszip.min.js')}}"></script>
    <script  text="text/javascript" src="{{URL::asset('datatable/pdfmake.min.js')}}"></script>
    <script  text="text/javascript" src="{{URL::asset('datatable/vfs_fonts.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/buttons.html5.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/buttons.print.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/buttons.colVis.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/dataTables.responsive.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/responsive.bootstrap4.min.js')}}"></script>



  


</head>
<body>
  <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
  <!-- Brand -->
  <a class="navbar-brand"><img src="../images/eclogo.png" class="img-logo"></a>

  <!-- Toggler/collapsibe Button -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <!-- Navbar links -->
 <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
     
    </ul>

    <ul class="navbar-nav">
   
     
      <li class="nav-item"><a  class="nav-link">{{session()->get('fullname')}}</a></li>
      <li class="nav-item dropdown"> <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"> <span class="fa fa-user"></span></a>
      <ul class="dropdown-menu">
    
        <li><a class="dropdown-item" href="/login/teacherlogout">Logout</a></li>
      </ul>
      </li>
    </ul>
  </div> 
</nav>
  <div class="side-bar">
    <div class="card bg-green">
      <div class="card-body">
          <img src="../images/user-img.png" class="user-img">
          <p class="user-name">Teacher</p>
      </div>
    </div>
    <ul class="items">
      <li class="sideitems side"><a href="/teacher/announcement"><span class="fa fa-bell"></span>Announcements</li></a>
      <li class="sideitems side "><a href="/teacher/profile" ><span class="fa fa-address-book"></span>My Profile</a>
       
      </li>
      <li class="sideitems side"><a href="/teacher/schedule" ><span class="fa fa-address-book"></span>My Schedule</a>
       
      </li>

          <li class="sideitems side"><a href="/teacher/classadvisory" ><span class="fa fa-address-book"></span>Class Advisory</a>
 
      <li class="sideitems side "><a href="javascript:void(0);" class="dropdown-toggle"><span class="fa fa-user"></span>Students</a>
          <ul class="sidenav-dropdown">
       <li class="dropdown-items"><a href="/teacher/grades"><span class="fa fa-users"></span>Grades</a></li>
       <li class="dropdown-items"><a href="/teacher/classlist"><span class="fa fa-users"></span>Class List</a></li>
            
          </ul>
      </li>
      <li class="sideitems side"><a href="javascript:void(0);" class="dropdown-toggle"><span class="fa fa-users"></span> Attendance</a>
        <ul class="sidenav-dropdown">
          <li class="dropdown-items"><a href="/teacher/studentattendance"><span class="fa fa-bars"></span>Student Attendance</a></li>
          <li class="dropdown-items"><a href="/teacher/listofattendance"><span class="fa fa-list"></span>List of attendance</a></li>
        
        </ul>
  
    </ul>
  </div>

  
   <div class="maincontent">
   @yield('content')
  
  </div>
  
    



</body>

  <script type="text/javascript" src="{{ asset('/js/sweetalert.min.js') }}"></script>
  @include('sweet::alert')
  <script type="text/javascript" src="{{ URL::asset('js/jquery.smartWizard.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/admin.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jacob.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/streets.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-easing.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('js/teacher.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.smartWizard.min.js') }}"></script>

  <script type="text/javascript" src="{{ URL::asset('js/wizard.js')}}"></script>
  <script  text="text/javascript" src="{{URL::asset('datatable/popper.min.js')}}"></script>
  <script text="text/javascript" src="{{URL::asset('datatable/bootstrap.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/jquery.dataTables.min.js')}}"></script>
    <script  text="text/javascript" src="{{URL::asset('datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script text="text/javascript"  src="{{URL::asset('datatable/dataTables.buttons.min.js')}}"></script>
    <script text="text/javascript"  src="{{URL::asset('datatable/buttons.bootstrap4.min.js')}}"></script>
    <script  text="text/javascript" src="{{URL::asset('datatable/jszip.min.js')}}"></script>
    <script  text="text/javascript" src="{{URL::asset('datatable/pdfmake.min.js')}}"></script>
    <script  text="text/javascript" src="{{URL::asset('datatable/vfs_fonts.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/buttons.html5.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/buttons.print.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/buttons.colVis.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/dataTables.responsive.min.js')}}"></script>
    <script text="text/javascript" src="{{URL::asset('datatable/responsive.bootstrap4.min.js')}}"></script>

  <script src="{{URL::asset('datatable/bootstrap-datepicker.js')}}"></script>

<script type="text/javascript">
$(document).ready(function(){

  $(".side").click(function(){
    $(this).toggleClass('tap');
    });

//for student attendance.blade.p
  $('#select_subject').on('change', function(){
    $.ajax({
      type:"post",
      url:"/teacher/getsection",
      data:$("#student_attendance").serialize(),
      dataType:"json",
      success:function(response){
        $('#select_section').html(response);
        // console.log(response[0].section.section_description);
        },
      error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }  
      }); 


}); 

    $('#select_section').on('change',function(){
      $.ajax({
      type:"post",
      url:"/teacher/getsemester",
      data:$("#student_attendance").serialize(),
      success:function(data){
        $("#semester option").remove();
 $("#semester").append('<option></option>');
          $.each(data.semesters, function(key, value){

    $("#semester").append('<option value="'+ value.semester + '">' + value.semester + '</option>');
     });
        }
      });
    });





  //for classlist

  $('#subject_classlist').on('change', function(){
      $.ajax({
        type:"post",
        url:"/teacher/getsection",
        data:$("#classlist").serialize(),
        dataType:"json",
        success:function(response){
  
          $('#section_classlist').html(response);
        },
        error: function(xhr,  ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }  
    }); 
  }); 

  $('#section_classlist').on('change',function(){
      $.ajax({
        type:"post",
        url:"/teacher/getsemester",
        data:$("#classlist").serialize(),
        success:function(semester){
          semester = JSON.parse(semester);
          $('#semester_classlist').html(semester);
          }
      });
  });
 

  



});

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32 || key == 9);
};

function numbersOnly(event) {
  var key = event.keyCode;
  return ((key >= 48 && key <= 57) || key == 8 || key == 9);
};


    </script>



</html>

