@extends('masterpages.teacherlayout')

@section('content')


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

.modal-content{
  width: 600px;
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
   <form method="post" id="form_grades" action="/gradespdf">
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

  <table id="example"  class="table table-striped table-bordered">
          <thead> 
              <tr>
              
                 <th>Student No.</th>
                  <th>Full name</th>
                  <th>Midterm</th>
                  <th>Finals</th>
                  <th>Final Grade</th>
                  <th>Remarks</th>
                  <th> Action</th>
   
              </tr>
          </thead>
          <tbody id="mama">
        
          </tbody>
       
      </table>
</div>
         
 <div class="modal fade" id="grades" role="dialog">
   <div class="modal-dialog">
 
    <div class="modal-content">

        <div class="modal-header">
        <div class="row">

          <label> Subject: </label> 
          <div class="col-md-5">
            <input type="text" class="form-control" name="subject" id="subject" disabled>
          </div>
          <label> Section: </label> 
          <div class="col-md-4">
            <input type="text" class="form-control" name="section" id="section" disabled>
          </div>
          </div>
        </div>
         <form method="post" action="" id="forminputgrades">
   {{csrf_field()}}
   {{method_field('patch')}}
        <div class="modal-body">
         <input type="hidden" name="id" id="gradesid">
          <div class="row">
          <label>Name: </label>
          <div class="col-md-10">
          <input type="text" name="" class="form-control"  id="fullname" disabled>
          </div>
          </div> 
          <br>
            <div class="row">
              <label> Midterm</label>
            <div class="col-md-5">
              <select class="form-control" name="midterm" id="midterm">
                <option></option>
                @for($i=70;$i < 101;$i++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
              </select>
      <!--         <input type="number"  class="form-control" name="midterm"  id="midterm" required> -->
            </div>
            </div>
            <br>
            <div class="row">
              <label> Finals</label>
            <div class="col-md-5" style="margin-left: 15px;">
                <select class="form-control" name="finals" id="finals">
                <option></option>
                @for($i=70;$i < 101;$i++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
              </select>
            <!--   <input type="number"  class="form-control" name="finals" id="finals" required> -->
            </div>
            </div>  
          </div>
  
        <div class="modal-footer">
 
             <button type="submit" class="btn btn-primary" id="inputgrades">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 

      </form>
        </div> 
      </div>
     
    </div>
  </div>

<div id="data"></div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
   dom: 'Bfrtip',
        buttons: [
            'copy', 'excel'
        ],
      
    } );
} );  


</script>


      </div>


<script type="text/javascript">


  $(document).ready(function(){
  

// $('#inputgrades').bind('#semester_grade change', function() {
//      // do some stuff including ajax work
// }).trigger('#semester_grade');

    $('#forminputgrades').submit(function( event ) {
    event.preventDefault();   

    $.ajax({
        url: '{{route('editgrades')}}',
        type: 'post',
        data: $('#forminputgrades').serialize(), // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){

          $('#semester_grade').val(response.grading_period).change();
       
           swal("Successfully Graded", "Thank you!", "success");
             $('#grades').modal('hide');
              $('.modal-backdrop').remove()            
        },
        error: function( _response ){
            
        },
    complete: function (data) {
     
     }


    });
});
     $('#semester_grade').trigger('change');

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
        success:function(semester){
          semester = JSON.parse(semester);
          $('#semester_grade').html(semester);
          }
      });
      
  });

  $('#semester_grade').on('change',function(){
    $('#generate').show();
    // var semester =$(this).val();
    // var subject = $('#subject_grade').val();
    // var section = $('#section_grade').val();
    // $.ajax({
    //   type:"post",
    //   url:"/teacher/displaystudentgrade",
    //   data:$("#form_grades").serialize(),
    //   success:function(dataa){
    //    // dataa=JSON.parse(dataa);
    //     $('#data').html(dataa);
    //    },
      

    // });
    $.ajax({
        type: 'post',
        url: '/teacher/displaystudentgrade',
        data: $('#form_grades').serialize(),
        success: function (data){
            row = '';

            $.each(data.students, function(key, value){
                row += `<tr>
                       
                          <td>${value.students.student_no}</td>
                          <td>${value.students.lastname}, ${value.students.firstname} ${value.students.middlename}</td>
                            <td>${value.mid_grade} </td>
                           <td>${value.final_grade} </td>
                            <td>${value.average_grade} </td>
                            <td>${value.grade_status} </td>
                             <td><button class="btn btn-info" data-fullname="${value.students.lastname}, ${value.students.firstname} ${value.students.middlename}" data-subject="${value.subjects.subject_description}"  data-section="${value.section.section_description}"  data-toggle="modal" class="btn btn-primary" data-midterm="${value.mid_grade}" data-finals="${value.final_grade}"  data-gradesid="${value.grade_id}"data-target="#grades" >Edit</button> | <a href="/studentgradepdf/${value.student_id}" class="btn btn-primary" ><span class="fa fa-print"></span> </a></td>
                        </tr>`;
            });

            $('#mama').html(row);

        }
    });
  });

  });
</script>

<script type="text/javascript">
    //for modal grades
  

  $('#grades').on('show.bs.modal', function (event) {


      var button = $(event.relatedTarget); 
      var modal = $(this);
      var fullname=button.data('fullname');
      var subject =button.data('subject');
      var section=button.data('section')
      var gradesid=button.data('gradesid');
      var midterm =button.data('midterm');
      var finals=button.data('finals');

      modal.find('#midterm').val(midterm);
      modal.find('#finals').val(finals);
      modal.find('.modal-header #subject').val(subject);
      modal.find('.modal-header #section').val(section);
      modal.find('.modal-body #gradesid').val(gradesid);
      modal.find('.modal-body #fullname').val(fullname);
    
});
</script>

@endsection


