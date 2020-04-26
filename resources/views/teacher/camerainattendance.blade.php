
<link rel="stylesheet" type="text/css" href="{{ asset('/css/camera.css')}}">
<!--   <link rel="stylesheet" type="text/css" href="{{ asset('/css/smart_wizard.css') }}">
 -->
  <script type="text/javascript" src="{{ URL::asset('js/jacob.min.js')}}"></script>



</head>
<body>

<div id="">
  <ul>
    <li><BUTTON  class="asd" data-toggle="modal" data-target="#myModal"> STEM 11-1</BUTTON></li> <br>
<li><BUTTON  class="asd" data-toggle="modal" data-target="#myModal" > STEM 11-2</BUTTON>  </li><br>
<li><BUTTON class="asd"data-toggle="modal" data-target="#myModal" > GAS 11-2</BUTTON> </li><br>
<li><BUTTON class="asd"data-toggle="modal" data-target="#myModal"> ABM 11-3</BUTTON></li> <br>
<li><BUTTON class="asd"data-toggle="modal" data-target="#myModal"> ABM 12-1</BUTTON></li> <br>
</ul>


<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
   

      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">  
          <h4 class="modal-title">Attendance</h4>
        </div>
        <div class="modal-body">
   
          	<video id="preview"></video>
       
  

    <div class="info">
  <div class="form-group">
<!-- <div class="row">
        
        
   <label> Student No. </label> <div class="col-md-5"><input type="text" class="form-control" placeholder="asdasd" disabled> </div> -->

      </div>
      <form method="post" action="teacher/sample">
    <div class="row">

<div class="col-md-3">
    <label> Student No: </label>
</div>
    <div class="col-md-5">
    <input type="text" class="form-control no-border" name="" disabled>
     </div>   
   </div>
    <div class="row">
   <div class="col-md-3">
    <label> Firstname: </label>
</div> <div class="col-md-5"><input type="text"  class="form-control no-border" name=""  disabled></div> 
    </div> 
        <div class="row">
   <div class="col-md-3">
    <label> Lastname: </label>
</div> <div class="col-md-5"><input type="text" class="form-control no-border" name="" disabled> </div> 
    </div> 
        <div class="row">
   <div class="col-md-3">
    <label> Middle: </label>
</div> <div class="col-md-5"><input type="text" class="form-control no-border" name="" disabled> </div> 
    </div> 
        <div class="row">
   <div class="col-md-3">
    <label> Subject: </label>
</div> <div class="col-md-5"><input type="text" class="form-control no-border" name="" disabled> </div> 
    </div> 
        <div class="row">
   <div class="col-md-3">
    <label> Time: </label>
</div> <div class="col-md-5"><input type="text" class="form-control no-border" name="" disabled> </div> 
<input type="hidden" name="content" id="qrcontent">

    </div> 
    <br>

 </div>
      <script type="text/javascript">

      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

      scanner.addListener('scan', function (content) {

        console.log(content);
        document.getElementById("qrcontent").value=content;
         // document.getElementById("ok").value="ok";

      });

      Instascan.Camera.getCameras().then(function (cameras) {

        if (cameras.length > 0) {

          scanner.start(cameras[0]);

        } else {

          console.error('No cameras found.');

        }

      }).catch(function (e) {

        console.error(e);

      });

    </script>

    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
 
  <script type="text/javascript" src="{{ URL::asset('js/jquery-easing.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-easing.min.js')}}"> </script>
