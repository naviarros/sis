@extends('masterpages.teacherlayout')

@section('content')
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

<form method="post" id="scheduleform" action="/schedulepdf">
  <div class="sample">
<div class="row">


  <div class="">
  <label>School Year</label>
    
  </div>
  <div class="col-md-3">
  <select class="form-control" id="schoolyear" name="schoolyear">

    <option></option>
    @foreach($schedules as $schedule) 
      <option value="{{$schedule->sch_yr}}"> {{$schedule->sch_yr}}</option>
    @endforeach
  </select>
   
 </div> 

  <div class="">
<label>Semester</label>
  </div>
  <div class="col-md-3">
  <select class="form-control" id="semester" name="semester">
<option></option>
<option value="First Semester">First Semester</option>
<option value="Second Semester">Second Semester</option>
<!-- <option value="Summer Semester">Summer Semester</option> -->
  </select>
   
 </div> 

</div>
</div>
 <button type="submit" id="generate" style="margin-left:0PX; margin-bottom: 20px;"class="btn btn-primary"> Generate Schedule </button>

    {{ csrf_field() }}

</form>


 <label style="font-size:23px;font-family: Times New Roman; margin-left:10px; margin-top: 15px; ">My Schedule</label>
      <hr style="width:100%; margin-top:-5px;">
      
      <DIV class="fortable">
     
          <table id="example"  class="table table-striped table-bordered">
          <thead>
            <tr>
          <th>Section</th>
          <th>  Subject </th>
          
          <th>  Schedule </th>
          <th> Room</th>
          </tr>
          </thead>
          <tbody> 
         
          </tbody>

           
          </tr> 
         </table>
   
    </div>
</DIV> 
    </div>

  <script type="text/javascript">
   $(document).ready(function() {
     var table =  $('#example').DataTable( {
   dom: 'Bfrtip',
        buttons: [
            'copy', 'excel'
        ],
      
    } );

$('#generate').hide();
$('#semester').on('change',function(){
$('#generate').show();
   table.clear()
  $.ajax({
    type:'post',
    url:'/teacher/getschedule',
    data:$('#scheduleform').serialize(),
    dataType:'json',
    success:function(data){

            $.each(data.getschedule, function(key, value){
                table.row.add([value.section.section_description,value.subject.subject_description , value.start +('-') + value.end +('/') +  value.start1 +('-') + value.end1 +('/') +  value.start2 +('-') + value.end2 +('/') ,value.room +('/')+ value.room1 + ('/') + value.room2 ]);
              
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