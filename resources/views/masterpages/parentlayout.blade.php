<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>


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
   
     
      <li class="nav-item"><a  class="nav-link">{{session()->get('fullname')}}  </a></li>
      <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"><img class="user-icon"></a>
      <ul class="dropdown-menu">
    
        <li><a class="dropdown-item" href="/parent/logout">Logout</a></li>
      </ul>
      </li>
    </ul>
  </div> 
</nav>
  <div class="side-bar">
    <div class="card bg-green">
      <div class="card-body">
          <img src="../images/user-img.png" class="user-img">
          <p class="user-name">Parent</p>
      </div>
    </div>
    <ul class="items">
  
      <li class="sideitems side "><a href="/parent/profile" ><span class="fa fa-address-book"></span>My Profile</a>
       
      </li>
      <li class="sideitems side"><a href="/parent/scheduleofstudent" ><span class="fa fa-address-book"></span> Schedule of student</a>
       
      </li>

        <li class="sideitems side"><a href="javascript:void(0);" class="dropdown-toggle"><span class="fa fa-users"></span> Student</a>
        <ul class="sidenav-dropdown">
          <li class="dropdown-items"><a href="/parent/gradesofstudent"><span class="fa fa-bars"></span>Grades</a></li>
          <li class="dropdown-items"><a href="/parent/listofattendance"><span class="fa fa-list"></span>List of attendance</a></li>
        
        </ul>
 
  
        
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

