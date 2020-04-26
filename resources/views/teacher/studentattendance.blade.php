@extends('masterpages.teacherlayout')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/studentattendance.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('/css/camera.css')}}">
<!--   <link rel="stylesheet" type="text/css" href="{{ asset('/css/smart_wizard.css') }}">
 -->
  <script type="text/javascript" src="{{ URL::asset('js/jacob.min.js')}}"></script>
<style type="text/css">

  .maincontent{
  background-color:#13355F;
  padding-bottom: 50px;
}
.sample{
background-color: #AAD036;
height: 50px;
margin-top: -19.6px;
margin-left: -10px;
width:102%;
padding-top: 9px;
color:white;
}
.contentt{
  color:white;
}


</style>

<form method="post" id="student_attendance" action="/teacher/studentattendance" >
  <div class="sample">
<div class="row">

  <div class="">
    <label >Subject</label>
  </div>
 <div class="col-md-3">
  <select class="form-control" name="select_subject" id="select_subject">
    <option></option>
    @foreach($subject_sub as $subject)
    <option value="{{$subject->subject_id}}"> {{$subject->subject->subject_description}}</option>
    @endforeach
  </select>
   
 </div> 
  <div class="">
    <label>Section</label>
  </div>
  <div class="col-md-3">
  <select class="form-control" id="select_section" name="select_section">
    <option></option>
  </select>
   
 </div> 

  <div class="">
    <label>Semester</label>
  </div>
  <div class="col-md-3">
  <select class="form-control" id="semester" name="semester">
<option></option>
  </select>
   
 </div> 


</div>
</div>

<div class="contentt">


      <!-- Modal content-->
   <div class="camera">
            <video id="preview"></video>
       </div>
  

    <div class="info">
 
<div class="row">
  <div class="col-md-3">
    <label> Status: </label>
</div>
  <div class="col-md-6">
  <select  id="status" class="form-control" name="status">
    <option value=" " selected></option>
    <option value="Late"> Late</option>
  </select>
</div>
</div>

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
<!-- <div class="row">
   <div class="col-md-3">
    <label> Subject: </label>
</div> <div class="col-md-6"><input type="text" id="subject2" class="form-control no-border" name="" disabled> </div> 
    </div>  -->
<div class="row">
   <div class="col-md-3">
    <label> Date: </label>
</div> <div class="col-md-6"><input type="text" id="datedisplay" class="form-control no-border" name="" disabled> </div> 

<input type="hidden" name="content" id="content">

  <input type="hidden" id="date" value="<?php date_default_timezone_set("Asia/Manila");
echo  "" . date("m/d/Y");?>" name="date">
<input type="hidden" name="time" id="time" value="<?php
date_default_timezone_set("Asia/Manila");
echo " " . date("h:ia");
?>"name="">

    </div>  
        <div class="row">
   <div class="col-md-3">
    <label> Time: </label>
</div> <div class="col-md-6"><input type="text" id="timedisplay" class="form-control no-border" name="" disabled> </div> 

    
    <br>
    {{ csrf_field() }}
</form>
 </div> 
</div>


      <script type="text/javascript">

      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

      scanner.addListener('scan', function (content) {
$(document).ready(function(){


        console.log(content);
        document.getElementById("content").value=content; 
        // document.getElementById("subject").value=subject;
        // document.getElementById("sectiontext").value=section;
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
          
            // response = JSON.parse(response)
              $("#stauts").val(response[0].status).change();
              $("#studentno").val(response[0].students.student_no);
              $("#firstname").val(response[0].students.firstname);
              $("#lastname").val(response[0].students.lastname);
              $("#middle").val(response[0].students.middlename);
              $("#datedisplay").val(date);
              $("#timedisplay").val(time_in);
      

          
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