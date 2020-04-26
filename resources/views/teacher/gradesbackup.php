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
   </style>
</head>
<body>
<div class="content">
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
 <a href="/gradespdf" style="margin-left:0PX; margin-bottom: 20px;"class="btn btn-primary"> Generate Grades</a>
<table id="example"  class="table table-striped table-bordered">
        <thead> 
            <tr>
              <th>Subject</th>
              <th>Section</th>
              <th>Semester</th>
                <th>Student No.</th>
                <th>Full name</th>
                <th>Midterm</th>
                <th>Finals</th>
                <th>Final Grade</th>
                <th>Remarks</th>
                <th> Action</th>
 
            </tr>
        </thead>
        <tbody>
          @foreach($students as $student)
            <tr>
              <td>{{$student->subjects->subject_description}}</td>
              <td>{{$student->section->section_description}}</td>
              <td>{{$student->grading_period}}</td>
              <td>{{$student->students->student_no}}</td>
              <td>{{$student->students->lastname}} {{$student->students->firstname}} {{$student->students->middlename}}</td>
              <td>{{$student->mid_grade}}</td>
              <td>{{$student->final_grade}}</td>
              <td>{{$student->average_grade}}</td>
              <td>{{$student->grade_status}}</td>
              
      
                <td><button class="btn btn-info" data-fullname="{{$student->students->lastname}} {{$student->students->firstname}}" data-subject="{{$student->subjects->subject_description}}"  data-section="{{$student->section->section_description}}" data-studentno="{{$student->grade_id}}" data-toggle="modal" class="btn btn-primary" data-midterm="{{$student->mid_grade}}" data-finals="{{$student->final_grade}}"data-target="#grades" >Edit</button> | <a href="/studentgradepdf/{{$student->student_id}}" class="btn btn-primary" ><span class="fa fa-print"></span> </a></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                 <th>Subject</th>
              <th>Section</th>
              <th>Semester</th>
                <th>Student No.</th>
                <th>Full name</th>
                <th>Midterm</th>
                <th>Finals</th>
                <th>Final Grade</th>
                <th>Remarks</th>
                <th> Action</th>
            </tr>
        </tfoot>
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
         <form method="post" action="{{route('editgrades')}}" id="forminputgrades">
   {{csrf_field()}}
   {{method_field('patch')}}
        <div class="modal-body">
         <input type="hidden" name="id" id="studentno">
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
              <input type="number"  class="form-control" name="midterm"  id="midterm" required>
            </div>
            </div>
            <br>
            <div class="row">
              <label> Finals</label>
            <div class="col-md-5" style="margin-left: 15px;">
              <input type="number"  class="form-control" name="finals" id="finals" required>
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



<script type="text/javascript">
  $(document).ready(function() {
        //    $.fn.dataTable.ext.search.push(
        // function (settings, data, dataIndex) {
        //     var min = $('#min').datepicker("getDate");
        //     var max = $('#max').datepicker("getDate");
        //     var startDate = new Date(data[5]);
        //     if (min == null && max == null) { return true; }
        //     if (min == null && startDate <= max) { return true;}
        //     if(max == null && startDate >= min) {return true;}
        //     if (startDate <= max && startDate >= min) { return true; }
        //     return false;
        // }
        // );

       
        //     $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
        //     $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });

    $('#example').DataTable( {
   dom: 'Bfrtip',
        buttons: [
            'copy', 'excel'
        ],
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );  


</script>
<script type="text/javascript">
    //for modal grades
  $('#grades').on('show.bs.modal', function (event) {
event.preventDefault();

      var button = $(event.relatedTarget); 
      var modal = $(this);
      var fullname=button.data('fullname');
      var subject =button.data('subject');
      var section=button.data('section')
      var studentno=button.data('studentno');
      var midterm =button.data('midterm');
      var finals=button.data('finals');

      modal.find('.modal-body #midterm').val(midterm);
      modal.find('.modal-body #finals').val(finals);
      modal.find('.modal-header #subject').val(subject);
      modal.find('.modal-header #section').val(section);
      modal.find('.modal-body #studentno').val(studentno);
      modal.find('.modal-body #fullname').val(fullname);
    
});
</script>

      </div>

@endsection


