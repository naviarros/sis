@extends('masterpages.teacherlayout')

@section('content')

  <!DOCTYPE html>
<html>
<head>
    <title></title>

   <style type="text/css">

     
   td{
    background-color: #13355F;
    color:white;
   }
   select{
    background-color: transparent;
    border: none;
   }
   tr th{
    color:white;
   }
   .content{
    overflow: auto;
   }

 /*  #example {
  table-layout: fixed;
  width: 100% !important;

}
  #example td,
  #example th{
    width: auto !important;
    white-space: normal;
    text-overflow: ellipsis;
    overflow: hidden;
}*/
.sample{
background-color: #AAD036;
height: 50px;
margin-top: -19.6px;
margin-left: -10px;
width:102%;
padding-top: 9px;
color:white;
margin-bottom: 10px;}


   </style>
</head>
<body>


  <form method="post" id="form_grades" action="/attendancelistpdf">
  <div class="sample">
<div class="row">

  <div class="">
    <label >Subject</label>
  </div>
 <div class="col-md-3">
  <select class="form-control" name="select_subject" id="subject_grade">
    <option></option>
    @foreach($subject_sub as $subject)
    <option value="{{$subject->subject_id}}"> {{$subject->subject->subject_description}}</option>
    @endforeach
  </select>
   
 </div> 
  <div class="">
    <label>Section</label>
  </div>
  <div class="col-md-2">
  <select class="form-control" id="section_grade" name="select_section">
    <option></option>
  </select>
   
 </div> 

  <div class="">
    <label>Semester</label>
  </div>
  <div class="col-md-2">
  <select class="form-control" id="semester_grade" name="semester">
<option></option>

  </select>
   
 </div> 
 <div class="">
    <label>Date</label>
  </div>
  <div style="margin-left:10px">
  <input type="text" id="datepicker" class="form-control" name="date">
 </div> 
    {{ csrf_field() }}

</div>
</div>
 <button type="submit" id="generate" style="margin-left:0PX; margin-bottom: 20px;"class="btn btn-primary"> Generate Attendance List </button>
</form>
 
 <div id="dito"></div>
<div class="content">
    
<table id="example"  class="table table-striped table-bordered">
  <thead>
      <tr>  
        <th>Student No</th>
        <th>Full Name</th>
        <th>Time</th>
        <th>Status</th>
      </tr>
      </thead>
         
        <tbody id="display">
          
        </tbody>
    </table>
</div>
</body>
</html>



<script type="text/javascript">
  $(document).ready(function(){
    var table =  $('#example').DataTable( {
   dom: 'Bfrtip',
        buttons: [
            'copy', 'excel'
        ],
      
    } );

$('#generate').hide();
 $('#subject_grade').on('change', function(){
      $.ajax({
        type:"post",
        url:"/teacher/getsection",
        data:$("#form_grades").serialize(),
        dataType:"json",
        success:function(response){
          $('#section_grade').html(response);
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }  
    }); 
  }); 

  $('#section_grade').on('change',function(){
      $.ajax({
        type:"post",
        url:"/teacher/getsemester",
        data:$("#form_grades").serialize(),
        success:function(data){
      $("#semester_grade option").remove();
 $("#semester_grade").append('<option></option>');
          $.each(data.semesters, function(key, value){

    $("#semester_grade").append('<option value="'+ value.semester + '">' + value.semester + '</option>');
     });
          }
      });
      
  });
//   $('#semester_grade').on('change',function(){
//     $.ajax({
//       type:"post",
//       url:"/teacher/attendancelist",
//       data:$("#form_grades").serialize(),
//       success:function(data){
//           row = '';

//             $.each(data.attendancelist, function(key, value){
//                 row += `<tr>
                       
//                           <td> </td>
//                           <td> </td>
//                           <td>${value.time_in} </td>
                          
                           
//                         </tr>`;
//             });

//             $('#display').html(row);

// },
//              error: function(xhr, ajaxOptions, thrownError) {
//                   alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
               
//                 }
//     });
//   });

$("#datepicker").datepicker();
    $("#datepicker").on("change",function(){
      $('#generate').show();
       $.ajax({
      type:"post",
      url:"/teacher/attendancelist",
      data:$("#form_grades").serialize(),
      success:function(data){
         

            $.each(data.attendancelist, function(key, value){
    table.row.add([value.student.students.student_no, value.student.students.lastname + (',')+ value.student.students.firstname +  (' ') + value.student.students.middlename,value.time_in,value.status]);               
    
            });

           table.draw();
           
},
             error: function(xhr, ajaxOptions, thrownError) {
                  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
               
                }
    });
});
  });
</script>
@endsection


