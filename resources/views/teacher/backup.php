@extends('masterpages.teacherlayout')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/studentattendance.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('/css/camera.css')}}">
<!--   <link rel="stylesheet" type="text/css" href="{{ asset('/css/smart_wizard.css') }}">
 -->
  <script type="text/javascript" src="{{ URL::asset('js/jacob.min.js')}}"></script>
 <div class="row">
 
         <div class="leftform">
      <div class="bang">
    <label style="font-size:25px; margin-left:10px;">Subject</label>  
    <hr width="100%"></div>
  
    <div class="list">  
      
            <button class="ddd" name="subject"  value="General Chemistry"id="jacob" > General Chemistry</button> 
          
      </div>
  </div>
    <div class="rightform">
       <div class="bang">
      <label style="font-size:25px;margin-left:10px;">Section</label>
    <hr width="100%"> </div>
    <div id="right">
       <ul><!-- <input type="button" class="asd" data-toggle="modal" data-target="#myModal" value="jacob" name="bang"> -->
    <li><BUTTON  class="asd" data-toggle="modal" id="section" value="STEM 11-1" data-target="#myModal"> STEM 11-1</BUTTON></li> <br>
<li><BUTTON  class="asd" data-toggle="modal" id="section" value="STEM 11-2" data-target="#myModal" > STEM 11-2</BUTTON>  </li><br>
<li><BUTTON class="asd"data-toggle="modal" id="section" value="GAS 11-2" data-target="#myModal" > GAS 11-2</BUTTON> </li><br>
<li><BUTTON class="asd"data-toggle="modal" id="section" value="ABM 11-3" data-target="#myModal"> ABM 11-3</BUTTON></li> <br>
<li><BUTTON class="asd"data-toggle="modal"  id="section"value="ABM 12-1"data-target="#myModal"> ABM 12-1</BUTTON></li> <br>
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
      <form method="post" id="student_attendance" action="/teacher/studentattendance" >

    <div class="row">

<div class="col-md-3">
    <label> Student No: </label>
</div>
    <div class="col-md-6">
    <input type="text" class="form-control no-border" id="studentno" name="" disabled>
     </div>   
   </div>
 
    <div class="row">
   <div class="col-md-3">
    <label> Firstname: </label>
</div> <div class="col-md-6"><input type="text" id="firstname" class="form-control no-border" name=""  disabled></div> 
    </div> 
        <div class="row">
   <div class="col-md-3">
    <label> Lastname: </label>
</div> <div class="col-md-6"><input type="text" id="lastname" class="form-control no-border" name="" disabled> </div> 
    </div> 
        <div class="row">
   <div class="col-md-3">
    <label> Middle: </label>
</div> <div class="col-md-6"><input type="text" id="middle" class="form-control no-border" name="" disabled> </div> 
    </div> 
        <div class="row">
   <div class="col-md-3">
    <label> Subject: </label>
</div> <div class="col-md-6"><input type="text" id="subject2" class="form-control no-border" name="" disabled> </div> 
    </div> 
        <div class="row">
   <div class="col-md-3">
    <label> Date: </label>
</div> <div class="col-md-6"><input type="text" id="datedisplay" class="form-control no-border" name="" disabled> </div> 

<input type="hidden" name="content" id="content">

  <input type="hidden" id="date" value="<?php date_default_timezone_set("Asia/Manila");
echo  "" . date("Y-m-d");?>" name="date">
<input type="hidden" name="time" id="time" value="<?php
date_default_timezone_set("Asia/Manila");
echo " " . date("h:ia");
?>"name="">
<input type="hidden" id="sectiontext" name="section">
<input type="hidden" name="subject" id="subject" >
    </div>  
        <div class="row">
   <div class="col-md-3">
    <label> Time: </label>
</div> <div class="col-md-6"><input type="text" id="timedisplay" class="form-control no-border" name="" disabled> </div> 
    </div> 
    
    <br>
    {{ csrf_field() }}
</form>
 </div> 
<script type="text/javascript">

</script>
<script type="text/javascript">
  
</script>
      <script type="text/javascript">

      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

      scanner.addListener('scan', function (content) {
$(document).ready(function(){

 var subject=$('#jacob').val();
 var section=$('#section').val();

        console.log(content);
        document.getElementById("content").value=content; 
        document.getElementById("subject").value=subject;
        document.getElementById("sectiontext").value=section;
        // var content =$("#content").val();
        // var subject_description =$('#subject').val();
        // var status  =$('#status').val();
        var time_in =$('#time').val();
        var date=$('#date').val();
       
        // if(content!="" && subject_description!="" && status!="" && time_in!=""){
      //     $.ajaxSetup({
      //   headers: {
      //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //   }
      // });
        $.ajax({
          // url:"/teacher/getstudentinformation",
          // type:"post",
          // data:$("#student_attendance").serialize(),
          // dataType:"json",
          // success:function(data){
          //   alert(data.qrContent);},
          //   error: function(xhr, ajaxOptions, thrownError) {
          //         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
          //       }
          url:"/teacher/studentattendance",
          type:"post",
          data:$("#student_attendance").serialize(),
          dataType:"json",
          success:function(){
            $.ajax({
              url:"/teacher/getstudentinformation",
             type:"post",
             dataType:"json",
             data: $("#student_attendance").serialize(),
             success:function(response){
              alert(subject);
            // response = JSON.parse(response)
              $("#studentno").val('2015-10584-MN-0');
              $("#firstname").val(response[0].students.firstname);
              $("#lastname").val(response[0].students.lastname);
              $("#middle").val(response[0].students.middle);
              $("#datedisplay").val(date);
              $("#timedisplay").val(time_in);
              $("#subject2").val(subject);

          
             },
              error: function(xhr, ajaxOptions, thrownError) {
                  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }  }); 
          },
             error: function(xhr, ajaxOptions, thrownError) {
                  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
               
                }
          
            
          
           // }

          //   $.ajax({
          //     url:"/teacher/getstudentinformation",
          //     type:"get",
          //      success:function(){
          //   alert('success2');
          // },
          // error: function(data){
          //   $('#firstname').val(data.firstname);
          // }


            });
          



        });
  // }else{
  //   alert('error');
  // }  
      

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


         </div>
  
  </div>

    </div>


 
    




  

@endsection