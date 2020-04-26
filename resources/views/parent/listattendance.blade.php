@extends('masterpages.parentlayout')

@section('content')
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
<form method="post" id="form_parent">
 <div class="sample">
<div class="row">

 <div class="">
    <label>Date</label>
  </div>
  <div style="margin-left:10px">
  <input type="text" id="datepicker" class="form-control" name="date">  
 </div> 
   
@csrf
</form>
</div>
</div>

<div class="content">
  @foreach($studentinfo as $studentinfos)
  <div class="row">
  <label>Name:</label> 
  <b><label>{{$studentinfos->lastname}}, {{$studentinfos->firstname}} {{$studentinfos->middlename }}</label></b>
  </div>
  <div class="row">
  <label>Section:</label> 
  <b> <label> {{$studentinfos->section->section_description }}</label></b>
</div>
   @endforeach



 
         
<table id="example"  class="table table-striped table-bordered">
  <thead>
      <tr>  
     
      <th>Subject</th>
       <th>Full name</th>
    
        <th>Time</th>
        <th>Status</th>
      </tr>
      </thead>
      <tbody id="displayhere">
        
   </tbody>
    </table>
</div>
</body>
</html>


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

    
} );  


</script>
      <br>


<script type="text/javascript">
  $(document).ready(function(){

     var table = $('#example').DataTable( {
       "autoWidth": false,
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

  $("#datepicker").datepicker();
   $("#datepicker").on("change",function(){
     
       $.ajax({
      type:"post",
      url:"/parent/listofattendanceofstudent",
      data:$("#form_parent").serialize(),
      success:function(data){
        
            $.each(data.attendance, function(key, value){
    table.row.add([value.student.students.student_no, value.student.students.lastname + (',')+ value.student.students.firstname +  (' ') + value.student.students.middlename,value.time_in,value.status]);               
    
            });

           table.draw();
           
}
    });


  });
 });

</script>
      </div>

@endsection


