<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
  <link rel="shortcut icon" href="{{ asset('/images/eclarologo.png')}}" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/smart_wizard.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/smart_wizard_theme_arrows.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/smart_wizard_theme_circles.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/smart_wizard_theme_dots.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin.css')}}">
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
    <ul class="navbar-nav mr-auto">
     
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span></a>
      <ul class="dropdown-menu">
        <li><a href="/admin/changepassword" class="dropdown-item">Change Password</a></li>
        <li><a class="dropdown-item" href="/admin/logout">Log Out</a></li>
      </ul>
      </li>
    </ul>
  </div> 
</nav>
	<div class="side-bar">
    <div class="card bg-green">
      <div class="card-body">
          <img src="{{ asset('/images/user-img.png') }}" class="user-img">
          <p class="user-name">Admin</p>
      </div>
    </div>
		<ul class="items">
      <li class="sideitems side"><a href="javascript:void(0);" class="dropdown-toggle"><span class="fa fa-bell"></span>Announcement</a>
        <ul class="sidenav-dropdown">
          <li class="dropdown-items"><a href="/admin/announcement"><span class="fa fa-child"></span>Make an Announcement</a></li>
          <li class="dropdown-items"><a href="/admin/listofannouncements"><span class="fa fa-book"></span>List of Announcements</a></li>
        </ul>
      </li>
      <li class="sideitems side"><a href="javascript:void(0);" class="dropdown-toggle"><span class="fa fa-address-book"></span>Registration</a>
        <ul class="sidenav-dropdown">
          <li class="dropdown-items"><a href="/admin/studentregistration"><span class="fa fa-child"></span>Students</a></li>
          <li class="dropdown-items"><a href="/admin/subjects"><span class="fa fa-book"></span>Subjects</a></li>
          <li class="dropdown-items"><a href="/admin/faculties"><span class="fa fa-user"></span>Faculties/Staff</a></li>
          <li class="dropdown-items"><a href="/admin/retake"><span class="fa fa-address-book"></span>Retake subjects</a></li>
        </ul>
      </li>

      <li class="sideitems side"><a href="javascript:void(0);" class="dropdown-toggle"><span class="fa fa-graduation-cap"></span>Curriculum</a>
        <ul class="sidenav-dropdown">
          <li class="dropdown-items"><a href="/admin/curriculum"><span class="fa fa-child"></span>Create New Curriculum</a></li>
          <li class="dropdown-items"><a href="/admin/curriculumlists"><span class="fa fa-book"></span>Curriculum Status</a></li>
        </ul>
      </li>

      <li class="sideitems side"><a href="javascript:void(0);" class="dropdown-toggle"><span class="fa fa-user"></span>Instructors</a>
          <ul class="sidenav-dropdown">
            <li class="dropdown-items"><a href="/admin/teachers"><span class="fa fa-users"></span>Manage Teachers</a></li>
            <!-- <li class="dropdown-items"><a href="/admin/grades"><span class="fa fa-users"></span>Encoding of Grades</a></li> -->
            <li class="dropdown-items"><a href="/admin/sections"><span class="fa fa-address-book"></span>Sections List</a></li>
          </ul>
      </li>
      <li class="sideitems side"><a href="javascript:void(0);" class="dropdown-toggle"><span class="fa fa-users"></span>Students</a>
        <ul class="sidenav-dropdown">
          <li class="dropdown-items"><a href="/admin/students"><span class="fa fa-child"></span>Lists of Students</a></li>
          <li class="dropdown-items"><a href="/admin/strands"><span class="fa fa-list"></span> Strands</a></li>
          <li class="dropdown-items"><a href="/admin/studentgrades"><span class="fa fa-user"></span>Student Grades</a></li>
          <li class="dropdown-items"><a href="/admin/enrollment"><span class="fa fa-users"></span>Enable/Disable Enrollment for Students</a></li>
        </ul>
      </li>
      <li class="sideitems side"><a href="javascript:void(0);" class="dropdown-toggle"><span class="fa fa-bed"></span>Rooms</a>
        <ul class="sidenav-dropdown">
          <li class="dropdown-items"><a href="/admin/rooms"><span class="fa fa-address-book"></span> Manage Room</a></li>
        </ul>
      </li>
      <li class="sideitems side"><a href="javascript:void(0);" class="dropdown-toggle"><span class="fa fa-users"></span> Sections</a>
        <ul class="sidenav-dropdown">
          <li class="dropdown-items"><a href="/admin/managesections"><span class="fa fa-bars"></span>Section List</a></li>
          <li class="dropdown-items"><a href="/admin/summerclass"><span class="fa fa-child"></span> Create Summer Schedule</a></li>
        </ul>
      </li>
      <li class="sideitems side"><a href="/admin/fees"><span class="fa fa-rouble"></span> School Fees</a></li>
      <li class="sideitems side"><a href="javascript:void(0)" class="dropdown-toggle"><span class="fa fa-hdd-o"></span> Archives</a>
          <ul class="sidenav-dropdown">
              <li class="dropdown-items"><a href="/admin/studentarchive"><span class="fa fa-users"></span> Students</a></li>
              <li class="dropdown-items"><a href="/admin/teachersarchive"><span class="fa fa-address-book"></span> Teachers</a></li>
          </ul>
      </li>
      <li class="sideitems side">
          <a href="/admin/analytics"><span class="fa fa-bell"></span> Data Analytics</a>
      </li>
      <li class="sideitems side">
          <a href="/admin/backup"><span class="fa fa-refresh"></span> Backup </a>
      </li>
		</ul>
	</div>

  <script type="text/javascript" src="{{ asset('/js/sweetalert.min.js') }}"></script>
  @include('sweet::alert')

  <div class="maincontent">
    @yield('content')
  </div>

  <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/admin.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/streets.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-easing.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/Chart.bundle.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/validator.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.smartWizard.min.js') }}"></script>

  <script type="text/javascript" src="{{ URL::asset('js/wizard.js')}}"></script>
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
  </script>

   <script type="text/javascript">
      var button='<button class="close" type="button" title="Remove this page">×</button>';
      var tabID = 1;
      function resetTab(){
        var tabs=$("#tab-list li:not(:first)");
        var len=1
        $(tabs).each(function(k,v){
          len++;
          $(this).find('a').html('Tab ' + len + button);
        })
        tabID--;
      }

      $(document).ready(function() {
          $('#sched1').hide();
          $('#sched2').hide();
          $('#sched3').hide();

          $('#day').on('change', function(){
              var value = $(this).val();

              if(value == '')
              {
                  $('#sched1').hide();
              }
              else {
                  $('#sched1').show();
              }
          });

          $('#day1').on('change', function(){
              var value = $(this).val();


              if(value == '')
              {
                  $('#sched2').hide();
              }
              else{
                  $('#sched2').show();
              }
          });

          $('#day2').on('change', function(){
              var value = $(this).val();

              if(value == '')
              {
                  $('#sched3').hide();
              }
              else {
                  $('#sched3').show();
              }
          });

          $('#married').hide();

          $('#cvlstat').on('change', function(){
              var value = $(this).val();

              if(value == '')
              {
                  $('#married').hide();
              }
              else if(value == 'Single')
              {
                  $('#married').hide();
              }
              else if(value == 'Widowed')
              {
                  $('#married').hide();
              }
              else if(value == 'Divorced')
              {
                  $('#married').hide();
              }
              else if(value == 'Married')
              {
                  $('#married').show();
              }
          });
      });
  </script>

  @yield('scripts')
  <script type="text/javascript">
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

    $('#search').on('change', function(){
      $value = $(this).val();
      $.ajax({
          type: 'get',
          url: '{{ URL::to('/search')}}',
          data: {'search':$value},
          success: function(data){
          $('tbody').html(data);
          }
      });
    });

    $('#relation').on('change', function(){
          var lastnamemother = $('#lastnamemother').val();
          var firstnamemother = $('#firstnamemother').val();
          var middlenamemother = $('#middlenamemother').val();
          var mothercontact = $('#mothercontactnumber').val();

          var lastnamefather = $('#fatherlastname').val();
          var firstnamefather = $('#fatherfirstname').val();
          var middlenamefather = $('#fathermiddlename').val();
          var fathercontactno = $('#fathercontactno').val();

          if(this.value == 'Mother')
          {
              $('#guardianlastname').val(lastnamemother);
              $('#guardianfirstname').val(firstnamemother);
              $('#guardianmiddlename').val(middlenamemother);
              $('#guardiancontact').val(mothercontact);
          }

          if(this.value == 'Father')
          {
              $('#guardianlastname').val(lastnamefather);
              $('#guardianfirstname').val(firstnamefather);
              $('#guardianmiddlename').val(middlenamefather);
              $('#guardiancontact').val(fathercontactno);
          }
    });

    $('#searchyr').on('change', function(){
      $value = $(this).val();
      var form = $('#subjs');
      $.ajax({
          type: 'get',
          url: '{{ URL::to('/searchyr')}}',
          data: form.serialize(),
          success: function(data){
          $('#listcur').html(data);
          }
      });
    });

    $('#rest').on('submit', function(){
        var btns = $('.restore-data').data('id');
        $.ajax({
            type: 'post',
            url: '{{ URL::to('/admin/undostudent')}}',
            data: {id: id},
            success: function(data){
                location.reload(true);

                swal({
                    text: "Data Restored Successfully!",
                    icon: "success"
                });
            }
        })
    });
    $('#sbjserch').on('keyup', function(){
        var form = $('#serchsbj');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/serchsbj')}}',
            data: form.serialize(),
            success: function(data){
                row = '';
                $.each(data.data, function(key, value){
                    row += `<tr>
                              <td>${value.subject_code}</td>
                              <td>${value.subject_description}</td>
                              <td>${value.subject_type}</td>
                              <td>${value.prerequisite}</td>
                              <td>
                                <button class="btn btn-primary edit-modal" data-id="${value.subject_id}"><span class="fa fa-pencil"></span></button>
                                <button class="btn btn-danger deletesbj-modal" data-id="${value.subject_id}"><span class="fa fa-trash"></span></button>
                              </td>`;
                });

                $('#sbjbody').html(row);
            }
        });
    });

    $('#curriculumsearch').on('keyup', function(){
        var form = $('#curriculumsc');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/curriculumsc')}}',
            data: form.serialize(),
            success: function(data){
                row = '';
                $.each(data.data, function(key, value){
                    row += `<tr>
                              <td>${value.strands.description}</td>
                              <td>${value.sch_yr}</td>
                              <td>${value.grade_level}</td>
                              <td>${value.semester}</td>
                              <td>${value.subject.subject_description}</td>
                              <td>
                                <button class="btn btn-danger delete-curriculum" data-id="${value.curriculum_id}">Delete</button>
                              </td>
                            </tr>`;
                });

                $('#curriculumlists').html(row);
            }
        });
    });

    $('#grsearch').on('keyup', function(){
        var form = $('#srchgrade');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/searchgrade')}}',
            data: form.serialize(),
            success: function(data){
                row = '';
                $.each(data.data, function(key, value){
                    row += `<tr>
                              <td>${value.student_no}</td>
                              <td>${value.lastname},${value.firstname} ${value.middlename}</td>
                              <td>${value.strands.description}</td>
                              <td>${value.grade_level}</td>
                              <td>${value.section.section_description}</td>
                              <td>
                                <a href="/admin/viewgrades/${value.student_id}"><span class="fa fa-search"></span></a>
                              </td>
                            </tr>`;
                });

                $('#gds').html(row);
            }
        });
    });

    $('#tch13').on('keyup', function(){
        var form = $('#sttch2');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/searchtc')}}',
            data: form.serialize(),
            success: function(data){
                var d = new Date();
                row = '';

                $.each(data.data, function(key, value){
                    row += `<tr>
                              <td>${value.emp.username}</td>
                              <td>${value.lastname}</td>
                              <td>${value.firstname}</td>
                              <td>
                                <button class="btn btn-primary edit-teacher" data-id="${value.instructor_id}"><span class="fa fa-pencil"></span></button>
                                <button class="btn btn-danger delete-teacher" data-id="${value.instructor_id}"><span class="fa fa-trash"></span></button>
                              </td>
                            </tr>`;
                });

                $('#edi').html(row);
            }
        });
    });

    $('#stsrc').on('keyup', function(){
        var form = $('#stsc');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/searchst')}}',
            data: form.serialize(),
            success: function(data){
                row = '';

                $.each(data.data, function(key, value){
                    row += `<tr>
                              <td>${value.student_no}</td>
                              <td>${value.lastname}</td>
                              <td>${value.firstname}</td>
                              <td>${value.middlename}</td>
                              <td>${value.strands.description}</td>
                              <td>
                                <button class="btn btn-primary student-edit" data-id="${value.student_id}"><span class="fa fa-pencil"></span></button>
                                <button class="btn btn-danger student-delete" data-id="${value.student_id}"><span class="fa fa-trash"></span></button>
                              </td>
                            </tr>`;
                });

                $('#edits').html(row);
            }
        });
    });

    $('#mngesectsem').on('change', function(){
        var value = $(this).val();
        var table = $('#managesectiontable');
        var form = $('#sectsubs1');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/searchstrandsubj')}}',
            data: form.serialize(),
            success: function(data){
                row = '';

                $.each(data.data, function(key, value)
                {
                    row += `<tr>
                          <td>${value.subject.subject_code}</td>
                          <td>${value.subject.subject_description}</td>
                          <td>${value.instructor.lastname}, ${value.instructor.firstname}</td>
                          <td>${value.start}-${value.end} / ${value.start1}-${value.end1} / ${value.start2}-${value.end2}</td>
                          <td>${value.subject.credited_units}</td>
                          <td>${value.room} / ${value.room1} / ${value.room2 }</td>
                          <td>
                            <button class="btn btn-primary sched-modal" data-id="${value.section_subj_id}"><span class="fa fa-pencil"></span></button>
                            <button class="btn btn-danger delete-sectionsub-modal" data-id="${value.section_subj_id}"><span class="fa fa-trash"></span></button>
                        </td>
                        </tr>`;
                });

                $('#managesect').html(row);
            }
        });
    });

    $('#sectsummnge').on('change', function(){
        var value = $(this).val();
        var form = $('#sectsubs2');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/searchstrandsubj2')}}',
            data: form.serialize(),
            success: function(data){
                row = '';

                $.each(data.data, function(key, value)
                {
                    row += `<tr>
                          <td>${value.subject.subject_code}</td>
                          <td>${value.subject.subject_description}</td>
                          <td>${value.instructor.lastname}, ${value.instructor.firstname}</td>
                          <td>${value.start}-${value.end} / ${value.start1}-${value.end1} / ${value.start2}-${value.end2}</td>
                          <td>${value.subject.credited_units}</td>
                          <td>${value.room} / ${value.room1} / ${value.room2 }</td>
                          <td>
                            <button class="btn btn-primary sched-modal" data-id="${value.section_subj_id}"><span class="fa fa-pencil"></span></button>
                            <button class="btn btn-danger delete-sectionsub-modal" data-id="${value.section_subj_id}"><span class="fa fa-trash"></span></button>
                        </td>
                        </tr>`;
                });

                console.log(row);

                $('#managesummersect').html(row);
            }
        });
    });

    $('#sectsubjsearch').on('change', function(){
        $value = $(this).val();
        var form = $('#sectsearch');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/searchsectionsubs')}}',
            data: form.serialize(),
            success: function(data){
                if($value == '')
                {
                    $('#subjsectlists').html('<td colspan="3">No data found</td>');
                }
                else {
                    $('#subjsectlists').html(data);
                }
            }
        });
    });
    
    $('#retakesearchsub').on('keyup', function(){
          $value = $(this).val();
          var form = $('#insertretake');
          $.ajax({
              type: 'get',
              url: '{{ URL::to('/searchsub')}}',
              data: form.serialize(),
              success: function(data){
                  row = '';

                  $.each(data.data, function(key, value){
                      row += `<tr>
                                <td><input type="checkbox" name="suco[]" value="${value.section_subj_id}"></td>
                                <td>${value.subject.subject_description}</td>
                                <td>${value.start}-${value.end} / ${value.start1}-${value.end1} / ${value.start2}-${value.end2}</td>
                                <td>${value.room} / ${value.room1} / ${value.room2}</td>
                                <td>
                                    <label><input type="checkbox" name="instructor[]" value="${value.instructor_id}">${value.instructor.lastname}, ${value.instructor.firstname}</label>
                                </td>
                              </tr>`;
                  });

                  $('#subjdesc').html(row);
              } 
          });
    });

    $('#sect1').on('change', function(){
      $value = $(this).val();
      var form = $('#theForm');
      $.ajax({
          type: 'get',
          url: '{{ URL::to('/sectsubsearch')}}',
          data: form.serialize(),
          // dataType: 'json',
          success: function(data){
              var arrId = [];

              var inst = [];

              var id = data.data.section_subj_id;
              row = '';

              $.each(data.data, function(key, value) {
                arrId.push(value.subject_id);
                inst.push(value.instructor_id);
                
                row += `<tr>
                          <td>
                            <input type="checkbox" class="hidechk" name="sects[]" value="${value.subject_id}" checked>
                          </td>
                          <td>${value.subject.subject_code}</td>
                          <td>${value.subject.subject_description}</td>
                          <td>${value.subject.credited_units}</td>
                          <td>${value.subject.lect_hrs}</td>
                          <td>${value.subject.lab_hrs}</td>
                          <td>${value.sch_yr}</td>
                          <td>${value.instructor.lastname}, ${value.instructor.firstname}</td>
                        </tr>`;
              });

              $('#sectionsub').html(row);
              $('input[name="instructor"]').val(inst);
              $('input[name="sects"]').val(arrId);
          }
      });
    });

    $('#sects').on('change', function(){
        var url = '{{ URL::to('/searchadviser')}}';
        $.get(url, function(data){
            var select = $('#grl');

            select.empty();

            $.each(data, function(key, value){
                select.append('<option>'+ '</option>');
                select.append('<option value='+ value.grade_level +'>' + value.grade_level + '</option>');
            });
        });
    });

    $('#grl').on('change', function(){
        var url = '{{ URL::to('/searchsections')}}';
        $.get(url, function(data){
            var select1 = $('#sct');

            select1.empty();

            $.each(data, function(key, value){
                select1.append('<option>'+'</option>');
                select1.append('<option value='+ value.section_description + '>' + value.section_description + '</option>');
            });
        });
    });

    $('#dob').on('change', function()
    {
        var Bdate = document.getElementById('dob').value;
        var Bday = +new Date(Bdate);
        var age2 =  ~~ ((Date.now() - Bday) / (31557600000));
        document.getElementById("age").value = age2; 
        console.log(age2);
    });

    $('#dob2').on('change', function()
    {
        var Bdate = document.getElementById('dob2').value;
        var Bday = +new Date(Bdate);
        var age2 =  ~~ ((Date.now() - Bday) / (31557600000));
        document.getElementById("age1").value = age2; 
        console.log(age2);
    });

    $('#studgrad').on('change', function(){
          var url = '{{ URL::to('/searchlevel')}}';
          $.ajax({
              type: 'get',
              url: url,
              success: function(data){
                  $.each(data.data, function(key, value){
                      $('#lvlgr').append('<option value='+ value.grade_level + '>' + value.grade_level + '</option>');
                  });
              }
          });
    });
    $('#sct').on('change', function(){
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/searchad')}}',
            data: {'search':$value},
            success: function(data){
              $('tbody').html(data);
            }
        });
    });

    $('#semester').on('change', function(){
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/curriculumres')}}',
            data: {'search':$value},
            success: function(data){
                $('tbody').html(data);
            }
        });
    });

    $('#studsearch').on('keyup', function(){
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/studsearch')}}',
            data: {'search':$value},
            success: function(data){
                if($value == '')
                {
                    $('#regiform').html('<td colspan="3">No data found</td>');
                }
                else {
                    $('#regiform').html(data);
                }
            }
        });
    });

    $('#qrsearch').on('keyup', function(){
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/searchqr')}}',
            data: {'search':$value},
            success: function(data){
                if($value == '')
                {
                    $('#searchqr').html('<td colspan="3">No data found</td>');
                }
                else {
                    $('#searchqr').html(data);
                }
            }
        });
    });

    $('#strandcurlvl').on('change', function(){
        $value = $(this).val();
        var form = $('#curcsrch');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/curlistsearch')}}',
            data: form.serialize(),
            success: function(data){
                row = '';

                $.each(data.data, function(key, value){
                    row += `<tr>
                              <td>${value.strands.description}</td>
                              <td>${value.sch_yr}</td>
                              <td>${value.grade_level}</td>
                              <td>${value.semester}</td>
                              <td>${value.subject.subject_description}</td>
                              <td>
                                <button class="btn btn-danger delete-curriculum" data-id="${value.curriculum_id}">Delete</button>
                              </td>
                            </tr>`;
                });

                $('#curriculumlists').html(row);
            }
        });
    });

    $('#levelgr').on('change', function(){
        var value = $(this).val();
        var st = $('#stlists').val();
        var se = $('#sems').val();

        $.ajax({
            type: 'get',
            url: '{{ URL::to('/sectionsearch')}}',
            data: {'search':value},
            success: function(data){
                if(st == '' && value == '' && se == '')
                {
                    $('#enrll').empty()
                }
                else {
                    $('#enrll').html(data);
                }
            }
        });
    });

    $('#srchins').on('keyup', function(){
        var form = $('#vres');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/searchteacher')}}',
            data: form.serialize(),
            success: function(data){
                if(this.value == "")
                {
                    $('#viewresume').html('<td colspan="3">No data found</td>');
                }
                else {
                    $('#viewresume').html(data);
                }
            }
        });
    });

    $('#orsrch').on('keyup', function(){
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/studsearchrec')}}',
            data: {'search':$value},
            success: function(data){
                if($value == '')
                {
                    $('#orform').html('<td colspan="4">No data found</td>');
                }
                else {
                    $('#orform').html(data);
                }
            }
        });
    });

    $('#su').on('change', function(){
        var value = $(this).val();
        if($(this).is(':checked'))
        {
            alert(value);
        }
    });

    $('#studentfind').on('keyup', function(){
        $value = $(this).val();
        var form = $('#insertretake');
        $.ajax({
            type: 'get',
            url: '{{ URL::to('/searchstudents')}}',
            data: form.serialize(),
            success: function(data){
                if($value == '')
                {
                    $('#informationstud').html('<td colspan="9" class="small font-weight-bolder">No data found</td>');
                }
                else {
                    $('#informationstud').html(data);
                }
            }
        });
    });

    $('#suco').on('change', function(){
        $value = $(this).val();
        $.each($value, function(){
            $.ajax({
                type: 'get',
                url: '{{ URL::to('/subjreg')}}',
                data: {'search':$value},
                success: function(data){
                    $('#listregsub').html(data);
                }
            });
        });
    });

    $('.section-delete').on('click', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure ??",
            text: "Once you delete this, you cannot be undone!", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: 'post',
                    url: '{{ URL::to('/admin/removesection') }}' + '/' + id,
                    data: {id:id},
                    success: function(data){
                        location.reload(true);

                        swal({
                            text: "Section Removed Successfully!",
                            icon: "success"
                        });
                    }
                });
            }
        });
    });

    $('.delete-modal').on('click', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure ??",
            text: "Once you delete this, you cannot be undone!", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: 'post',
                    url: '{{ URL::to('/admin/deletestrand') }}' + '/' + id,
                    data: {id:id},
                    success: function(data){
                        location.reload(true);

                        swal({
                            text: "Strand Deleted Successfully!",
                            icon: "success"
                        });
                    }
                });
            }
        });
    });

    $('#sbjbody').on('click', '.deletesbj-modal', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure ??",
            text: "Once you delete this, you cannot be undone!", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: 'post',
                    url: '{{ URL::to('/admin/deletesubjects') }}' + '/' + id,
                    data: {id:id},
                    success: function(data){
                        location.reload(true);

                        swal({
                            text: "Subject Deleted Successfully!",
                            icon: "success"
                        });
                    }
                });
            }
        });
    });

    $('#edits').on('click', '.student-delete', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure ??",
            text: "Once you delete this, you cannot be undone!", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: 'post',
                    url: '{{ URL::to('/admin/removestudent') }}' + '/' + id,
                    data: {id:id},
                    success: function(data){
                        location.reload(true);

                        swal({
                            text: "Student Deleted Successfully!",
                            icon: "success"
                        });
                    }
                });
            }
        });
    });

    $('#managesect').on('click', '.delete-sectionsub-modal', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure ??",
            text: "Once you delete this, you cannot be undone!", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: 'post',
                    url: '{{ URL::to('/admin/deletesectsub') }}' + '/' + id,
                    data: {id:id},
                    success: function(data){
                        location.reload(true);

                        swal({
                            text: "Schedule Deleted Successfully!",
                            icon: "success"
                        });
                    }
                });
            }
        });
    });

    $('#managesummersect').on('click', '.delete-sectionsub-modal', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure ??",
            text: "Once you delete this, you cannot be undone!", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: 'post',
                    url: '{{ URL::to('/admin/deletesectsub') }}' + '/' + id,
                    data: {id:id},
                    success: function(data){
                        location.reload(true);

                        swal({
                            text: "Schedule Deleted Successfully!",
                            icon: "success"
                        });
                    }
                });
            }
        });
    });    

    $('.room_delete').on('click', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure ??",
            text: "Once you delete this, you cannot be undone!", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: 'post',
                    url: '{{ URL::to('/admin/deleteroom') }}' + '/' + id,
                    data: {id:id},
                    success: function(data){
                        row = '';
                        
                        row   +=   `<tr>
                                      <td>${data.room_name}</td>
                                      <td>${data.capacity}</td>
                                      <td>${data.status}</td>
                                    </tr>`;

                        $('tbody').replaceWith(row);

                        location.reload(true);

                        swal({
                            text: "Room Deleted Successfully!",
                            icon: "success"
                        });
                    }
                });
            }
        });
    });

    $('#curriculumlists').on('click', '.delete-curriculum', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure ??",
            text: "Once you delete this, you cannot be undone!", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: 'post',
                    url: '{{ URL::to('/admin/deletecurriculum') }}' + '/' + id,
                    data: {id:id},
                    success: function(data){
                        location.reload(true);

                        swal({
                            text: "Curriculum Deleted Successfully!",
                            icon: "success"
                        });
                    }
                });
            }
        });
    });

    $('.announcement-delete').on('click', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure ??",
            text: "Once you delete this, you cannot be undone!", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: 'post',
                    url: '{{ URL::to('/admin/deleteannouncement') }}' + '/' + id,
                    data: {id:id},
                    success: function(data){
                        location.reload(true);

                        swal({
                            text: "Announcement Removed Successfully!",
                            icon: "success"
                        });
                    }
                });
            }
        });
    });

    $('#edi').on('click', '.delete-teacher', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure ??",
            text: "Once you delete this, you cannot be undone!", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: 'post',
                    url: '{{ URL::to('/admin/removeteacher') }}' + '/' + id,
                    data: {id:id},
                    success: function(data){
                        var row =   `<tr>
                                      <td>${data.instructor_id}</td>
                                      <td>${data.lastname}</td>
                                      <td>${data.firstname}</td>
                                    </tr>`;

                        location.reload(true);

                        swal({
                            text: "Teacher Removed Successfully!",
                            icon: "success"
                        });
                    }
                });
            }
        });
    });

    $('#teachered').on('submit', function(){
        var form = $('#teachered');
        var formData = form.serialize();
        var url = form.attr('action');
        var state = $('#save').val();
        var type = 'post';

        if(state == 'Update')
        {
            type = 'put';
        }

        $.ajax({
            type: type,
            url: url,
            data: formData,
            success: function(data){
                var row = '<tr id="teacher'+ data.data.instructor_id + '">'+
                  '<td>'+ data.data.instructor_id + '</td>'+
                  '<td>'+ data.data.lastname + '</td>'+
                  '<td>'+ data.data.firstname + '</td>'+
                  '<td>'+ data.data.emp.created_at + '</td>' +
                  '<td><button class="btn btn-primary edit-teacher" data-id="'+ data.data.instructor_id +'"><span class="fa fa-pencil"></span></button>'+
                  '<button class="btn btn-danger delete-teacher" data-id="'+ data.data.instructor_id + '"><span class="fa fa-trash"></span></button>'+
                  '</tr>';

                  if(state == 'save')
                  {
                      $('#edi').append(row);
                  }
                  else {
                    $('#editteacher' + data.instructor_id).replaceWith(row);
                  }

                  $('#teachered').trigger('reset');
                  $('#lnme').focus();

                  location.reload(true);
            }
        });
    });

    $('#enrlform').on('submit', function(){
        var form = $('#enrlform');
        var formData = form.serialize();
        var url = form.attr('action');
        var state = $('#save').val();
        var type = 'post';

        if(state == 'Update'){
            type = 'put';
        }

        $.ajax({
            type: type,
            url: url,
            data: formData,
            success: function(data){
                var row = '<tr>'+
                '<td>'+ data.strand.description + '</td>'+
                '<td>'+ data.section_description + '</td>'+
                '<td>'+ data.grade_level + '</td>'+
                '<td>'+ data.semester + '</td>'+
                '<td>'+ '<span class="badge badge-primary">'+ data.status + '</span>'+ '</td>'+
                '<td><button class="btn btn-primary enrollbtn" data-id="'+ data.section_mid +'"><span class="fa fa-pencil"></span></button>'+
                '<button class="btn btn-danger enrolldel" data-id="'+ data.section_mid +'"><span class="fa fa-trash"></span></button>'+
                '</tr>';

                if(state == 'save')
                {
                   $('tbody').append(row);
                }
                else {
                  $('#stenroll' + data.section_mid).replaceWith(row);
                }

                $('#enrlform').trigger('reset');
                $('#sttrc').focus();

                location.reload(true);
            }
        });
    });

    $('#editsect').on('submit', function(){
        var form = $('#editsect');
        var formData = form.serialize();
        var url = form.attr('action');
        var state = $('#save').val();
        var type = 'post';

        if(state == 'Update')
        {
          type = 'put';
        }

        $.ajax({
            type: type,
            url: url,
            data: formData,
            success: function(data){
                var row = '<tr id="section'+ data.section_mid + '">'+
                  '<td>'+ data.start_schyr + '-' + data.end_schyr + '</td>'+
                  '<td>'+ data.section_description + '</td>'+
                  '<td>'+ data.strand.description + '</td>'+
                  '<td><button class="btn btn-primary section-edit" data-id="'+ data.section_mid +'"><span class="fa fa-pencil"></span></button>'+
                  '<button class="btn btn-danger section-delete" data-id="'+ data.section_mid +'"><span class="fa fa-trash"></span></button>'+
                  '</tr>';

                if(state == 'save')
                {
                   $('tbody').append(row);
                }
                else {
                  $('#editsectionmodal' + data.section_mid).replaceWith(row);
                }

                $('#editsect').trigger('reset');
                $('#stnd').focus();

                location.reload(true);
            }
        });
    });

    $('#modtracks').on('submit', function(){
        var form = $('#modtracks');
        var formData = form.serialize();
        var url = form.attr('action');
        var state = $('#save').val();
        var type = 'post';

        if(state == 'Update')
        {
            type = 'put';
        }

        $.ajax({
            type: type,
            url: url,
            data: formData,
            success: function(data){
                var row = '<tr>'+
                  '<td>'+ data.track.track_description + '</td>'+
                  '<td>'+ data.strand_code + '</td>'+
                  '<td>'+ data.description + '</td>'+
                  '</tr>';

                  if(state == 'save')
                  {
                      $('#editss').append(row);
                  }

                  else {
                      $('#modtrack'+ data.strand_id).replaceWith(row);
                  }

                  $('#modtracks').trigger('reset');
                  $('#trackcode').focus();

                  location.reload(true);
            }
        });
    });

    $('#schmnt').on('submit', function(event){
       event.preventDefault(); 
        var form = $('#schmnt');
        var formData = form.serialize();
        var url = form.attr('action');
        var state = $('#save').val();
        var type = 'post';

        if(state == 'Update')
        {
          type = 'put';
        }

        $.ajax({
          type: type,
          url: url,
          data: formData,
          dataType: 'json',
         success: function(data){
          
          $('#mngesectsem').val(data.semester).change();
       
           swal("Successfully Update", "Thank you!", "success");
             $('#schedule').modal('hide');
              $('.modal-backdrop').remove()  
              $('#schedule').on('hidden.bs.modal', function (e) {
            $(this)
              .find("input,textarea,select")
                 .val('')
                 .end()
              .find("input[type=checkbox], input[type=radio]")
                 .prop("checked", "")
                 .end();
          })          
        },
        error: function(xhr, ajaxOptions, thrownError) {
          swal('Validate Schedule', 'Please check the schedule', 'error');
          $('#schedule').modal('hide');
              $('.modal-backdrop').remove() 
        }});
    });

    $('#sectsubid').on('click', function(){
        if($(this).prop('checked') == true)
        {
            $('#instructorsect').prop('checked', true);
        }
        else {
            $('#instructorsect').prop('checked', false);
        }
    });

    $('#schmnt2').on('submit', function(event){
       event.preventDefault(); 
        var form = $('#schmnt2');
        var formData = form.serialize();
        var url = form.attr('action');
        var state = $('#save').val();
        var type = 'post';

        if(state == 'Update')
        {
          type = 'put';
        }

        $.ajax({
          type: type,
          url: url,
          data: formData,
          datatype:"json",
         success: function(response){
          $('#mngesectsem').val(response.semester).change();
       
           swal("Successfully Update", "Thank you!", "success");
             $('#schedule').modal('hide');
              $('.modal-backdrop').remove();          
        },
        error: function( _response ){
            
        },
        });
    });

    $('tbody').delegate('.section-edit', 'click', function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/editsection')}}';
        $.ajax({
            type: 'get',
            url: url,
            data: {'id':value},
            success: function(data){
                $('#id').val(data.section_mid);
                $('#stnd').append('<option value="'+data.strand_id+'" selected>' + data.strand.description + '</option>');
                $('#sctn').val(data.section_description);
                $('#insname').val(data.instructor_id);
                $('#save').val('Update');
                $('#editsectionmodal').modal('show');
            }
        });
    });

    $('#sectsubid').change(function(){
        if($(this).prop('checked') == true)
        {
            $('#instructorsect').prop('checked', true);
        }
        else {
            $('#instructorsect').prop('checked', false);
        }
    });

    $('tbody').delegate('.edit-strand', 'click', function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/strandedit')}}';
        $.ajax({
            type: 'get',
            url: url,
            data: {'id':value},
            success: function(data){
                $('#sid').val(data.data.strand_id);
                $('#trackcode').append('<option value="'+ data.data.track_id + '" selected>'+ data.data.track.track_description + '</option>');
                $('#strandcode').val(data.data.strand_code);
                $('#stranddescr').val(data.data.description);
                $('#save').val('Update');
                $('#modtrack').modal('show');
            }
        });
    });

    $('tbody').delegate('.sched-modal', 'click', function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/editschedule')}}';
        $.ajax({
            type: 'get',
            url: url,
            data: {'id':value},
            success: function(data){
                $('#id').val(data.section_subj_id);
                $('#cde').val(data.subject.subject_description);
                $('#subjid').val(data.subject_id);
                $('#save').val('Update');
                $('#schedule').modal('show');
            }
        });
    });

    $('tbody').delegate('.enrollbtn', 'click', function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/editenrollment')}}';
        $.ajax({
            type: 'get',
            url: url,
            data: {'id':value},
            success: function(data){
                $('#id').val(data.section_mid);
                $('#sttrc').val(data.strand.description);
                $('#scton').val(data.section_description);
                $('#save').val('Update');
                $('#stenroll').modal('show');
            }
        });
    });

    $('#teacharch').on('click', '.teacher-restore', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure ??",
            text: "Once you restore this, the data will be restored!", 
            icon: "success",
            buttons: true,
            dangerMode: false,
        })
        .then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: 'post',
                    url: '{{ URL::to('/admin/restoreteacher') }}' + '/' + id,
                    data: {id:id},
                    success: function(data){
                        location.reload(true);

                        swal({
                            text: "Teacher Restored Successfully!",
                            icon: "success"
                        });
                    }
                });
            }
        });
    });

    $('#starch').on('click', '.student-restore', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure ??",
            text: "Once you restore this, the data will be restored!", 
            icon: "success",
            buttons: true,
            dangerMode: false,
        })
        .then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: 'post',
                    url: '{{ URL::to('/admin/restorestudent') }}' + '/' + id,
                    data: {id:id},
                    success: function(data){
                        location.reload(true);

                        swal({
                            text: "Student Restored Successfully!",
                            icon: "success"
                        });
                    }
                });
            }
        });
    });

    $('tbody').delegate('.student-edit', 'click', function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/editstudent')}}';
        var recuirement = [];
        $.ajax({
            type: 'get',
            url: url,
            data: {'id':value},
            success: function(data){
                var requirement = [];
               
                $('#id').val(data.student_id);
                $('#last').val(data.lastname);
                $('#first').val(data.firstname);
                $('#middle').val(data.middlename);
                $('#age').append('<option value="'+data.age+'" selected>'+ data.age + '</option>');
                $('#sts').append('<option value="'+data.civil_status+'" selected>'+ data.civil_status + '</option>');
                $('#ntnlity').append('<option value="'+data.nationality+'" selected>'+ data.nationality + '</option>');
                $('#bdy').val(data.dateofbirth);
                $('#city').append('<option value="'+data.city+'" selected>'+ data.city + '</option>');
                $('#region').append('<option value="'+data.region+'" selected>'+ data.region + '</option>');
                $('#bgy').append('<option value="'+data.barangay+'" selected>'+ data.barangay + '</option>');
                $('#zip').val(data.zipcode);
                $('#add').val(data.address);
                $('#addremail').val(data.std_login.emailAddress);
                $('#mbno').val(data.mobile_no);
                $('#pb').val(data.placeofbirth);
                $('#mlast').val(data.parent.mother_lname);
                $('#mfirst').val(data.parent.mother_fname);
                $('#mmiddle').val(data.parent.mother_mname);
                $('#motherocc').val(data.parent.mother_occ);
                $('#flast').val(data.parent.father_lname);
                $('#ffirst').val(data.parent.father_fname);
                $('#fmiddle').val(data.parent.father_mname);
                $('#fatherocc').val(data.parent.father_occ);
                $('#grdlastname').val(data.guardian.guardian_lname);
                $('#grdfirstname').val(data.guardian.guardian_fname);
                $('#grdmiddlename').val(data.guardian.guardian_mname);
                $('#grdaddress').val(data.guardian.address);
                $('#grdcontact').val(data.guardian.contact);
                $('#grdemail').val(data.guardian.email);
                $('#schelem').val(data.elementarySchName);
                $('#schelemadd').val(data.elemAddress);
                $('#gdelem').val(data.elemGradYr);
                $('#sectioneditstud').val(data.grade_level+'-'+data.section.section_description);
                $('#schhs').val(data.secondarySchName);
                $('#schhsadd').val(data.secAddress);
                $('#gdhs').val(data.secYrGrad);
                $('#unme').val(data.std_login.username);
                $('#pd').val(data.std_login.password);
                $('#gruname').val(data.guardian.username);
                $('#grps').val(data.guardian.password);
                $('#pymthod').val(data.payment.payment_method);
                $('#stor').val(data.payment.school_type);

                $('#save').val('Update');
                $('#editstudents1').modal('show');
            }
        });
    });

    $('tbody').delegate('.edit-teacher', 'click', function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/editteacher')}}';
        $.ajax({
            type: 'get',
            url: url,
            data: {'id':value},
            success: function(data){
                $('#id').val(data.data.instructor_id);
                $('#lnme').val(data.data.lastname);
                $('#fstname').val(data.data.firstname);
                $('#mdlename').val(data.data.middlename);
                $('#addd').val(data.data.address);
                $('#ag1').append('<option value="'+data.data.age+'" selected>'+ data.data.age + '</option>');
                $('#bdays').append('<option value="'+data.data.bday+'" selected>'+ data.data.bday + '</option>');
                $('#cvlstat').append('<option value="'+ data.data.civil_status+'" selected>'+ data.data.civil_status + '</option>');
                $('#cities').append('<option value="'+ data.data.city +'" selected>'+ data.data.city + '</option>');
                $('#municipality').append('<option value="'+ data.data.municipality +'" selected>'+ data.data.municipality + '</option>');
                $('#brngy').append('<option value="'+ data.data.barangay +'" selected>'+ data.data.barangay + '</option>');
                $('#zpc').append('<option value="'+ data.data.zipcode + '" selected>'+ data.data.zipcode + '</option>');
                $('#emailaddupd').val(data.data.emp.email);
                $('#slname').val(data.data.spouse_lname);
                $('#sfname').val(data.data.spouse_fname);
                $('#smname').val(data.data.spouse_mname);
                $('#occp').val(data.data.occupation);
                $('#mothlname').val(data.data.mlname);
                $('#mothfname').val(data.data.mfname);
                $('#mothmname').val(data.data.mmaiden);
                $('#ocp').val(data.data.mocc);
                $('#fathlname').val(data.data.flname);
                $('#fathfname').val(data.data.ffname);
                $('#fathmname').val(data.data.fmname);
                $('#occpfath').val(data.data.f_occ);
                $('#elemname').val(data.data.elem_schname);
                $('#hsn').val(data.data.hs_schname);
                $('#collegename').val(data.data.clg_schname);
                $('#mastersname').val(data.data.mstrs_schname);
                $('#doctorsname').val(data.data.dctr_schname);  
                $('#usernames').val(data.data.emp.username);
                $('#passwords').val(data.data.emp.password);
                $('#resfile').val(data.data.req.resume_filename);
                $('#sss').val(data.data.req.sss);
                $('#phealth').val(data.data.req.philhealth);
                $('#pgibig').val(data.data.req.pagibig);
                $('#grd').val(data.data.elem_gradyr);
                $('#hsgd').val(data.data.hs_gradyr);
                $('#collegegrad').val(data.data.clg_gradyr);
                $('#mastersgrad').val(data.data.mstrs_gradyr);
                $('#doctorsgrad').val(data.data.dctr_gradyr);
                $('#save').val('Update');
                $('#editteacher').modal('show');
            }
        });
    });

    $('tbody').delegate('.adviser-modal', 'click', function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/editadviser')}}';
        $.ajax({
            type: 'get',
            url: url,
            data: {'id': value},
            success: function(data){
                $('#id').val(data.section_mid);
                $('#strnd').val(data.strand.description);
                $('#sction').val(data.section_description);
                $('#glvl').val(data.grade_level);
                $('#save').val('Update');
                $('#sectadvedit').modal('show');
            }
        });
    });

    $('tbody').delegate('.room_edit', 'click', function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/editroom')}}';
        $.ajax({
            type: 'get',
            url: url,
            data: {'id':value},
            success: function(data){
              $('#id').val(data.room_id);
              $('#roomname').val(data.room_name);
              $('#save').val('Update');
              $('#room').modal('show');
            }
        });
    });

    $('tbody').delegate('.viewstudentgrade', 'click', function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/viewgrades')}}';
        $.ajax({
            type: 'get',
            url: url,
            data: {'id':value},
            success: function(data)
            {
                $('#id').val(data.student_id);
            }
        });
    });

    $('tbody').delegate('.edit-track', 'click', function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/edittrack')}}';
        $.ajax({
            type: 'get',
            url: url,
            data: {'id':value},
            success: function(data){
                $('#id').val(data.track_id);
                $('#tckde').val(data.track_description);
                $('#save').val('Update');
                $('#edittrack').modal('show');
                $('#edittrackcode').modal('hide');
            }
        });
    });

    $('tbody').delegate('.edit-modal', 'click', function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/subjectedit')}}';
        $.ajax({
            type: 'get',
            url: url,
            data: {'id':value},
            success: function(data){
                $('#id').val(data.subject_id);
                $('#subjectc').val(data.subject_code);
                $('#sbjdescr').val(data.subject_description);
                $('#stype').val(data.subject_type);
                $('#units').val(data.credited_units);
                $('#lecthrs').val(data.lect_hrs);
                $('#labhrs').val(data.lab_hrs);
                $('#save').val('Update');
                $('#subjectedit').modal('show');
            }
        });
    });

    $('#edittrackform').on('submit', function(){
        var form = $('#edittrackform');
        var formData = form.serialize();
        var url = form.attr('action');
        var state = $('#save').val();
        var type = 'post';

        if(state == 'Update')
        {
            type = 'put';
        }

        $.ajax({
            type: type,
            url: url,
            data: formData,
            success: function(data){
                var row = '<tr>'+
                    '<td>'+ data.track_description + '</td>'+
                    '<td><button class="btn btn-primary edit-track" data-id="'+ data.track_id +'"><span class="fa fa-pencil"></span></button>'+
                    '</tr>';

                if(state == 'save')
                {
                    $('#trckedit').append(row);
                }

                else {
                    $('#trckedit' + data.track_id).replaceWith(row);
                }

                $('#edittrackform').trigger('reset');
                $('#tckde').focus();

                location.reload(true);
            }
        });
    });

    $('#chnadv').on('submit', function(){
        var form = $('#chnadv');
        var formData = form.serialize();
        var url = form.attr('action');
        var state = $('#save').val();
        var type = 'post';

        if(state == 'Update')
        {
          type = 'put';
        }

        $.ajax({
            type: type,
            url: url,
            data: formData,
            success: function(data){
                var row = '<tr id="sects'+ data.section_mid +'">'+
                  '<td>'+ data.strand.description + '</td>'+
                  '<td>'+ data.section_description + '</td>'+
                  '<td>'+ data.grade_level + '</td>'+
                  '<td>'+ data.instructor.lastname + ',' + data.instructor.firstname + '</td>'+ '<td><button class="btn btn-primary adviser-modal" data-id="'+ data.section_mid +'"><span class="fa fa-pencil"></span></button>'+
                  '<button class="btn btn-danger remove-modal" data-id="'+ data.section_mid+'"><span class="fa fa-trash"></span></button>'+
                  '</tr>';

                  if(state == 'save')
                  {
                      $('tbody').append(row);
                  }

                  else {
                      $('#sectadvedit' + data.section_mid).replaceWith(row);
                  }

                  $('#chnadv').trigger('reset');
                  $('#strnd').focus();

                  location.reload(true);
            }
        });
    });

    $('#updstud').on('submit', function() {
      var form = $('#updstud');
      var formData = form.serialize();
      var url = form.attr('action');
      var state = $('#save').val();
      var type = 'post';

      if(state == 'Update')
      {
          type = 'put';
      }

      $.ajax({
          type: type,
          url: url,
          data: formData,
          success: function(data){
              var row = '<tr id="stud'+ data.student_id + '">'+
              '<td>'+ data.student_no + '</td>'+
              '<td>'+ data.lastname + '</td>'+
              '<td>'+ data.firstname + '</td>'+
              '<td>'+ data.middlename + '</td>'+
              '<td>'+ data.strand.description + '</td>'+
              '<td><button class="btn btn-primary student-edit" data-id="'+ data.student_id +'"><span class="fa fa-pencil"></span></button>'+
                '<button class="btn btn-danger student-delete" data-id="'+ data.student_id +'"><span class="fa fa-trash"></span></button>'+
              '</tr>';

              if(state == 'save')
              {
                  $('tbody').append(row);
              }
              else {
                  $('#editstudents1' + data.student_id).replaceWith(row);
              }

              $('#updstud').trigger('reset');
              $('#last').focus();
              location.reload(true);
          }
      });
    });

    $('#updroom').on('submit', function(){
        var form = $('#updroom');
        var formData = form.serialize();
        var url = form.attr('action');
        var state = $('#save').val();
        var type = 'post';

        if(state == 'Update')
        {
          type = 'put';
        }

        $.ajax({
          type: type,
          url: url,
          data: formData,
          success: function(data){
              var row = '<tr id="subjects'+ data.room_id +'">'+
                '<td>'+ data.room_name +'</td>'+
                '<td>'+ data.status +'</td>'+
                '<td><button class="btn btn-primary room_edit" data-id="'+ data.room_id +'"><span class="fa fa-pencil"></span></button>'+
                '<button class="btn btn-danger room_delete" data-id="'+ data.room_id+'"><span class="fa fa-trash"></span></button>'+
                '</tr>';

                if(state == 'save')
                {
                   $('tbody').append(row);

                }
                else {
                  $('#room' + data.room_id).replaceWith(row);
                }

                $('#updroom').trigger('reset');
                $('#sts').focus();
                location.reload(true);
          }
        });
    });

    $('#editsub').on('submit', function(){
        var form = $('#editsub');
        var formData = form.serialize();
        var url = form.attr('action');
        var state = $('#save').val();
        var type = 'post';

        if(state == 'Update')
        {
          type = 'put';
        }

        $.ajax({
          type: type,
          url: url,
          data: formData,
          success: function(data){
              var row = '<tr id="subjects'+ data.subject_id +'">'+
                '<td>'+ data.subject_code +'</td>'+
                '<td>'+ data.subject_description +'</td>'+
                '<td>'+ data.subject_type +'</td>'+
                '<td><button class="btn btn-primary edit-modal" data-id="'+ data.subject_id +'"><span class="fa fa-pencil"></span></button>'+
                '<button class="btn btn-danger delete-subject-modal" data-id="'+ data.subject_id+'"><span class="fa fa-trash"></span></button>'+
                '</tr>';

                if(state == 'save')
                {
                   $('tbody').append(row);

                }
                else {
                  $('#subjectedit' + data.room_id).replaceWith(row);
                }

                $('#editsub').trigger('reset');
                $('#subjectc').focus();
                location.reload(true);
          }
        });
    });


  </script>
  
  <script type="text/javascript">
    $(document).ready(function(){

        $(".side").click(function(){
           $(this).toggleClass('tap');
        });
    });
  </script>
</body>
</html>