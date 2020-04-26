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
    font-weight: bold;
   }

   #example {
  table-layout: fixed;
  width: 100% !important;

}
  #example td,
  #example th{
    width: auto !important;
    white-space: normal;
    text-overflow: ellipsis;
    overflow: hidden;
}
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
  <form method="post" id="form_grades" action="/classlistpdf">
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
  <div class="col-md-3">
  <select class="form-control" id="section_grade" name="select_section">
    <option></option>
  </select>
   
 </div> 

  <div class="">
    <label>Semester</label>
  </div>
  <div class="col-md-3">
  <select class="form-control" id="semester_grade" name="semester">


  </select>
   
 </div> 
    

</div>
</div>
<button type="submit" id="generate" style="margin-left:0PX; margin-bottom: 20px;"class="btn btn-primary"> Generate Class List </button>
{{ csrf_field() }}
</form>
<div class="content">
 
<table id="example" style="width: 100%;" class="table table-striped table-bordered">
        <thead> 
            <tr>
           
              <th>Student No.</th>
              <th>Full name</th>
          
 
            </tr>
        </thead>
        <tbody id="mama">
    <!--       @foreach($students as $student)
            <tr>
              <td>{{$student->section->section_description}}</td>
              <td>{{$student->subjects->subject_description}}</td>

              <td>{{$student->grading_period}}</td>
              <td>{{$student->students->student_no}}</td>
              <td>{{$student->students->lastname}} {{$student->students->firstname}} {{$student->students->middlename}}</td>
          
            </tr>
            @endforeach -->
        </tbody>
       
    </table>

</body>
</html>




      </div>
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

  $('#semester_grade').on('change',function(){
    $('#generate').show();
    table.clear()
    $.ajax({
        type: 'post',
        url: '/teacher/displaystudentgrade',
        data: $('#form_grades').serialize(),
        success: function (data){
     

            $.each(data.students, function(key, value){
                             table.row.add([value.students.student_no, value.students.lastname + (',')+ value.students.firstname +  (' ') + value.students.middlename]);
             
            });

          table.draw();

        }
    });
  });


  //   $('#generate').click(function(){
  //     $.ajax({
  //       type:'post',
  //       url:'/classlistpdf',
  //       data:$('#form_grades').serialize(),
  //       success:function(semester){
         
  //         }
  //     });
      
  // });

  // $('#generate').click(function(){
  //   $.ajax({
  //     type:'post',
  //     url:'/classlistpdf',
  //     data: $('#form_grades').serialize(),
  //     success: function(data){
  //        // location.window.href = "/classlistpdf";
  //     },
  //       error: function(xhr, ajaxOptions, thrownError) {
  //          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
  //     }  
  //   });
  // });


  });
</script>
@endsection


