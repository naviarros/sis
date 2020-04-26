@extends('masterpages.teacherlayout')


@section('content')

<style type="text/css">
   select{
    background-color: transparent;
    border: none;
   }
.maincontent{
  overflow-x: auto;
}

</style>


    <label style="font-size:23px;font-family: Times New Roman; margin-left:10px; margin-top: 15px; ">Announcement</label>
      <hr style="width:100%;">
  <br>

  <table id="example"  class="table table-striped table-bordered">
  <thead>
      <tr>  
          <th>Date</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
      </thead>
          <tbody>
       @foreach($announcement as $announcements)
      <tr>

       <td width="150px">{{$announcements->created_at}}</td>
       <td width="200px">{{$announcements->title}}</td>
       <td width="200px">{{$announcements->description}}</td>
                
      </tr>
      @endforeach
    </tbody>
      
    </table>
  

<script type="text/javascript">
  $(document).ready(function() {
  
  var table =  $('#example').DataTable( {
   dom: 'Bfrtip',
        buttons: [
            'copy', 'excel'
        ],
      
    } );

});


</script>
@endsection

