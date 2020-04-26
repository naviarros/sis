  @extends('masterpages.teacherlayout')

@section('content')

<?php error_reporting(0);?>
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
.modal-content{
  width: 800px;
  padding-right: 10px;
}
.equal{
  width: 50%;
  height: 100%;
  padding: 15px 5px;
  font-weight: bold;
  margin: 0 10%;
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
   <form method="post" id="classadvisoryform" action="/classadvisorypdf">
  <div class="sample">
<div class="row">


  <div class="">
    <label>Section</label>
  </div>
  <div class="col-md-3">
  <select class="form-control" id="section_grade" name="section">
    <option></option>
    @foreach($sections as $section)

    <option value="{{$section->section_mid}}">{{$section->section_description}}</option>
    @endforeach
  </select>
   
 </div> 

  <div class="">
    <label>Grade Level</label>
  </div>
  <div class="col-md-3">
  <select class="form-control" id="gradelevel" name="gradelevel">
    <option></option>
    <option value="11">11</option>
        <option value="12">12</option>
  </select>
   
 </div> 

</div>
</div>
 <button type="submit" id="generate" style="margin-left:0PX; margin-bottom: 20px;"class="btn btn-primary"> Generate Class List </button>
    {{ csrf_field() }}
    <!--    <a href="/classadvisorypdf" style="margin-left:0PX; margin-bottom: 20px;"class="btn btn-primary"> Generate Class Advisory</a> -->

</form>




 
  
<table id="example" style="width: 100%" class="table table-striped table-bordered">
  
        <thead> 
            <tr>
              
              <th>Student No.</th>
              <th>Full name</th>
              <th>Action</th>
          
 
            </tr>
        </thead>
        <tbody>


        </tbody>
       
    </table>
<div class="modal fade" id="corevalues" role="dialog">
   <div class="modal-dialog">
 
    <div class="modal-content">

        <div class="modal-header">
        <h4>Core Values</h4>
        </div>
         <form method="post"  id="form_corevalues">
   {{csrf_field()}}
   {{method_field('patch')}}
        <div class="modal-body">
       
         <input type="hidden" name="student_id" id="studentid">
         <input type="hidden" name="gradelevel" id="gradelevel">
          <div class="row">
          <label>Name: </label>
          <div class="col-md-10">
          <input type="text" name="" class="form-control"  id="fullname" disabled>
          </div>
          </div> 
          <br>
           <div class="row">
          <label> Grading: </label> 
          <div class="col-md-4">
           <select class="form-control" name="grading" id="grading">      
           <option value="0"> </option>     
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
           </select>
          </div>
          </div>
          <div class="equal"> 
              <table>
                  <tr>
                    <td style="background: none; color: black; size: 18px;">AO</td>
                    <td style="background: none; color: black; size: 18px;">Always Observed</td>
                  </tr>

                  <tr>
                    <td style="background: none; color: black; size: 18px;">SO</td>
                    <td style="background: none; color: black; size: 18px;">Sometimes Observed
                    </td>
                  </tr>

                  <tr>
                    <td style="background: none; color: black; size: 18px;">RO</td>
                    <td style="background: none; color: black; size: 18px;">Rare Observed</td>
                  </tr>

                  <tr>
                    <td style="background: none; color: black; size: 18px;">NO</td>
                    <td style="background: none; color: black; size: 18px;">Not Observed</td>
                  </tr>
              </table>
           
          
            
              
          </div>
          <br>

            <div class="row">
              <div  id="1st" class="grading 1st">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
          <th>Core Values</th>
          <th>Behavioral Statements</th>
          <th width="100px">1st</th>
        </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="2">Maka-Diyos</td>
              <td>Expressing one's spiritual beliefs while
              respecting spiritual beliefs of others </td>
              <td><select class="form-control" name="makadiyos1" id="makadiyos1">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
            
            
             
            </tr>
            <tr>
              <td>Shows adherence to ethical principles by
              upholding the truth in all understandings</td>
                        <td><select class="form-control" name="makadiyos12" id="makadiyos12">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>

               
            </tr>
            <tr>
              <td rowspan="2">Makatao</td>
              <td>Is sensitive to individual,social,and cultural
                differences; resists streyeotyping people</td>
                    <td> <select class="form-control" name="makatao1" id="makatao1">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
            
            </tr>
            <tr>
              <td>Demonstrates contribution towards solidarity</td>
               <td><select class="form-control" name="makatao12" id="makatao12">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
            </tr>
            <tr>
              <td>Makakalikasan</td>
              <td>Cares for the environment and utilities
              resources wisely,judiciously and economically</td>
               <td><select class="form-control" name="makakalikasan1" id="makakalikasan1">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>

            </tr>
            <tr>
              <td rowspan="2">Makabansa</td>
              <td>Demonstrates pride in being a Filipino;
                Exercises the rights and responsibilities of a 
                Filipino Citizen</td>
                  <td><select class="form-control" name="makabansa1" id="makabansa1">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
                           
            </tr>
            <tr>
              <td>Demonstrates appropriate behavior in
                Carrying out activities in the school,
                Community and country</td>
                <td><select class="form-control" name="makabansa12" id="makabansa12">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
           
            </tr>
          </tbody>
        </table>  
        
  </div>
       <div  id="2nd" class="grading 2nd">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
          <th>Core Values</th>
          <th>Behavioral Statements</th>
          <th width="100px">2nd</th>
        </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="2">Maka-Diyos</td>
              <td>Expressing one's spiritual beliefs while
              respecting spiritual beliefs of others </td>
              <td><select class="form-control" name="makadiyos21" id="makadiyos21">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
            
            
             
            </tr>
            <tr>
              <td>Shows adherence to ethical principles by
              upholding the truth in all understandings</td>
                        <td><select class="form-control" name="makadiyos22" id="makadiyos22">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>

               
            </tr>
            <tr>
              <td rowspan="2">Makatao</td>
              <td>Is sensitive to individual,social,and cultural
                differences; resists streyeotyping people</td>
                    <td><select class="form-control" name="makatao21" id="makatao21">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
            
            </tr>
            <tr>
              <td>Demonstrates contribution towards solidarity</td>
               <td><select class="form-control" name="makatao22" id="makatao22">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
            </tr>
            <tr>
              <td>Makakalikasan</td>
              <td>Cares for the environment and utilities
              resources wisely,judiciously and economically</td>
               <td><select class="form-control" name="makakalikasan21" id="makakalikasan21">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>

            </tr>
            <tr>
              <td rowspan="2">Makabansa</td>
              <td>Demonstrates pride in being a Filipino;
                Exercises the rights and responsibilities of a 
                Filipino Citizen</td>
                  <td><select class="form-control" name="makabansa21" id="makabansa21">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
                           
            </tr>
            <tr>
              <td>Demonstrates appropriate behavior in
                Carrying out activities in the school,
                Community and country</td>
                <td><select class="form-control" name="makabansa22" id="makabansa22">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
           
            </tr>
          </tbody>
        </table>  
          
  </div>
       <div  id="3rd" class="grading 3rd">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
          <th>Core Values</th>
          <th>Behavioral Statements</th>
          <th width="100px">3rd</th>
        </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="2">Maka-Diyos</td>
              <td>Expressing one's spiritual beliefs while
              respecting spiritual beliefs of others </td>
              <td><select class="form-control" name="makadiyos31" id="makadiyos31">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
            
            
             
            </tr>
            <tr>
              <td>Shows adherence to ethical principles by
              upholding the truth in all understandings</td>
                        <td><select class="form-control" name="makadiyos32" id="makadiyos32">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>

               
            </tr>
            <tr>
              <td rowspan="2">Makatao</td>
              <td>Is sensitive to individual,social,and cultural
                differences; resists streyeotyping people</td>
                    <td><select class="form-control" name="makatao31" id="makatao31">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
            
            </tr>
            <tr>
              <td>Demonstrates contribution towards solidarity</td>
               <td><select class="form-control" name="makatao32" id="makatao32">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
            </tr>
            <tr>
              <td>Makakalikasan</td>
              <td>Cares for the environment and utilities
              resources wisely,judiciously and economically</td>
               <td><select class="form-control" name="makakalikasan31" id="makakalikasan31">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>

            </tr>
            <tr>
              <td rowspan="2">Makabansa</td>
              <td>Demonstrates pride in being a Filipino;
                Exercises the rights and responsibilities of a 
                Filipino Citizen</td>
                  <td><select class="form-control" name="makabansa31" id="makabansa31">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
                           
            </tr>
            <tr>
              <td>Demonstrates appropriate behavior in
                Carrying out activities in the school,
                Community and country</td>
                <td><select class="form-control" name="makabansa32" id="makabansa32">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
           
            </tr>
          </tbody>
        </table>  
          </div>
       <div  id="4th" class="grading 4th">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
          <th>Core Values</th>
          <th>Behavioral Statements</th>
          <th width="100px">4th</th>
        </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="2">Maka-Diyos</td>
              <td>Expressing one's spiritual beliefs while
              respecting spiritual beliefs of others </td>
              <td><select class="form-control" name="makadiyos41" id="makadiyos41">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
            
            
             
            </tr>
            <tr>
              <td>Shows adherence to ethical principles by
              upholding the truth in all understandings</td>
                        <td><select class="form-control" name="makadiyos42" id="makadiyos42">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>

               
            </tr>
            <tr>
              <td rowspan="2">Makatao</td>
              <td>Is sensitive to individual,social,and cultural
                differences; resists streyeotyping people</td>
                    <td><select class="form-control" name="makatao41" id="makatao41">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
            
            </tr>
            <tr>
              <td>Demonstrates contribution towards solidarity</td>
               <td><select class="form-control" name="makatao42" id="makatao42">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
            </tr>
            <tr>
              <td>Makakalikasan</td>
              <td>Cares for the environment and utilities
              resources wisely,judiciously and economically</td>
               <td><select class="form-control" name="makakalikasan41" id="makakalikasan41">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>

            </tr>
            <tr>
              <td rowspan="2">Makabansa</td>
              <td>Demonstrates pride in being a Filipino;
                Exercises the rights and responsibilities of a 
                Filipino Citizen</td>
                  <td><select class="form-control" name="makabansa41" id="makabansa41">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
                           
            </tr>
            <tr>
              <td>Demonstrates appropriate behavior in
                Carrying out activities in the school,
                Community and country</td>
                <td><select class="form-control" name="makabansa42" id="makabansa42">
                <OPTION>  </OPTION>
              <option value="AO"> AO </option>
              <option value="SO"> SO </option>
              <option value="RO"> RO  </option>  
              <option value="NO"> NO </option>
            </select></td>
           
            </tr>
          </tbody>
        </table>  
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
</body>
</html>


<script type="text/javascript">
  $(document).ready(function() {
       
$(function() {
    $('.grading').hide();
  $('#grading').change(function(){
    $('.grading').hide();
    $('#' + $(this).val()).show();
  });
});

  $('#form_corevalues').submit(function( event ) {
    event.preventDefault();   
    $.ajax({
        url: '{{route('corevalues')}}',
        type: 'post',
        data: $('#form_corevalues').serialize(), // Remember that you need to have your csrf token included
        dataType: 'json',
        success: function(response){

          $('#grades').val(response.grading_period).change();
       
           swal("Successfully Graded", "Thank you!", "success");
             $('#corevalues').modal('hide');
              $('.modal-backdrop').remove()            
        },
        error: function( _response ){
            
        },
    complete: function (data) {
     
     }


    });
        });

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
<script type="text/javascript">

$(document).ready(function(){
var table =  $('#example').DataTable( {
   dom: 'Bfrtip',
        buttons: [
            'copy', 'excel'
        ],
      
    } );


 $('#generate').hide();
 $('#gradelevel').on('change',function(){
  table.clear()
   $('#generate').show();

      $.ajax({
        type:'post',
        url:'/teacher/getclassadvisory',
        data:$('#classadvisoryform').serialize(),
        success:function(data){


   $.each(data.class, function(key, value){
                table.row.add([value.student_no, value.lastname + (',')+ value.firstname +  (' ') + value.middlename,`<button class="btn btn-primary" data-toggle="modal"  data-studentid="${value.student_id}" data-fullname="${value.lastname} , ${value.firstname}  ${value.middlename}"  data-gradelevel="${value.section.grade_level}" data-target="#corevalues"> Core Values</button> | <a href="/studentpdf/${value.student_id}" class="btn btn-primary" ><span class="fa fa-print"></span> </a>`]);
              
            });

              table.draw();
          },
      error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }  
      });

 });


});


  $('#corevalues').on('show.bs.modal',function(event){
     var button = $(event.relatedTarget); 
     var modal = $(this);
     var fullname=button.data('fullname');
     var student_id=button.data('studentid');
     var gradelevel=button.data('gradelevel');
     modal.find('.modal-body #fullname').val(fullname);
     modal.find('.modal-body #studentid').val(student_id);
     modal.find('.modal-body #gradelevel').val(gradelevel);
     
     $.ajax({
        type:"get",
        url:"/teacher/getcorevalues",
        data:{'id':student_id},
        dataType:"json",
        success:function(data){
          //1st grading
          $('#makadiyos1').val(data[0].makadiyos1);
          $('#makadiyos12').val(data[0].makadiyos2);
          $('#makatao1').val(data[0].makatao1);
          $('#makatao12').val(data[0].makatao2);
          $('#makakalikasan1').val(data[0].makakalikasan);
          $('#makabansa1').val(data[0].makabansa1);
          $('#makabansa12').val(data[0].makabansa2);
          //2nd grading
          $('#makadiyos21').val(data[1].makadiyos1);
          $('#makadiyos22').val(data[1].makadiyos2);
          $('#makatao21').val(data[1].makatao1);
          $('#makatao22').val(data[1].makatao2);
          $('#makakalikasan21').val(data[1].makakalikasan);
          $('#makabansa21').val(data[1].makabansa1);
          $('#makabansa22').val(data[1].makabansa2); 

          //3rd grading
          $('#makadiyos31').val(data[2].makadiyos1);
          $('#makadiyos32').val(data[2].makadiyos2);
          $('#makatao31').val(data[2].makatao1);
          $('#makatao32').val(data[2].makatao2);
          $('#makakalikasan31').val(data[2].makakalikasan);
          $('#makabansa31').val(data[2].makabansa1);
          $('#makabansa32').val(data[2].makabansa2); 

          //4th grading 
          $('#makadiyos41').val(data[3].makadiyos1);
          $('#makadiyos42').val(data[3].makadiyos2);
          $('#makatao41').val(data[3].makatao1);
          $('#makatao42').val(data[3].makatao2);
          $('#makakalikasan41').val(data[3].makakalikasan);
          $('#makabansa41').val(data[3].makabansa1);
          $('#makabansa42').val(data[3].makabansa2); 



        },
      error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }  

     });
  });

</script>

      </div>

@endsection


