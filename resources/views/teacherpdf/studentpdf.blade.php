<!DOCTYPE html>
<html>
<head>
  <title></title>
<!-- <link rel="stylesheet" type="text/css" href="css/app.css"> -->

<style type="text/css">
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

/*#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}
*/
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.header{
  margin-left:1%;


}
.info{
margin-top: -50%;
margin-left: 20%;
/*background-color:#13355F;
color:white;*/
width: 60%;
height: 20%;
}
.image{

}
label{
  font-weight: bold;
}
  footer {
                position: fixed; 
                bottom: -20px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

        text-align:right;
            }
hr{
  width: 26%;
  margin-left:75%;
}

#1st {
  margin-top:5%;
}
</style>
</head>
<body>

  

<div class="header">
  <div class="image">
  <img src="images/eclarologo.png"  width="170px">
  </div>
  <div class="info">
<LABEL style=" font-size: 130%;">Eclaro  Academy</LABEL>
<br>
   <label  style=" font-size: 90%;">Zuzuarregui St, Matandang Balara, Quezon City, Metro Manila</label>
   <br>
  <label  style=" font-size: 90%;">Tel. No. 441-0501</label>
 <br>
  <label  style=" font-size: 90%;">eclaroacademy/official@yahoo.com</label>
  
</div>

</div>
<div>

@foreach($getcorevalues as $student)
<label>Name:</label> <label>{{$student->student->lastname}} {{$student->student->firstname}} {{$student->student->middlename}}</label> <br>
<label>Section:</label> <label>{{$student->student->section->section_description}}</label>
        <div  id="1st" class="grading 1st">
        <table id="customers">
          <thead>
            <tr>
          <th>Core Values</th>
          <th>Behavioral Statements</th>
          <th width="100px">{{$student->grading}}</th>
         
        </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="2">Maka-Diyos</td>
              <td>Expressing one's spiritual beliefs while
              respecting spiritual beliefs of others </td>
         <td>{{$student->makadiyos1}}</td>
          
            
            
             
            </tr>
            <tr>
              <td>Shows adherence to ethical principles by
              upholding the truth in all understandings</td>
                <td>{{$student->makadiyos2}}</td>
           

               
            </tr>
            <tr>
              <td rowspan="2">Makatao</td>
              <td>Is sensitive to individual,social,and cultural
                differences; resists streyeotyping people</td>
                 
                 <td>{{$student->makatao1}}</td>
              
            </tr>
            <tr>
              <td>Demonstrates contribution towards solidarity</td>
                <td>{{$student->makatao2}}</td>
           
            </tr>
            <tr>
              <td>Makakalikasan</td>
              <td>Cares for the environment and utilities
              resources wisely,judiciously and economically</td>
                  <td>{{$student->makakalikasan}}</td>
             

            </tr>
            <tr>
              <td rowspan="2">Makabansa</td>
              <td>Demonstrates pride in being a Filipino;
                Exercises the rights and responsibilities of a 
                Filipino Citizen</td>
                  <td>{{$student->makabansa1}}</td>
          
                           
            </tr>
            <tr>
              <td>Demonstrates appropriate behavior in
                Carrying out activities in the school,
                Community and country</td>
                  <td>{{$student->makabansa2}}</td>
         >
           
            </tr>
          </tbody>
        </table>  
        <div style="page-break-after: always;">
        <footer>
    
    <hr> 
     {{session()->get('fullname')}}
   </div>
 </footer>
        @endforeach
  </div>
        <!--   @foreach($getcorevalues as $student)
        <tr>
        
         <td>{{$student->student->lastname}}</td>
        <td>{{$student->student->lastname}}</td>
         <td>{{$student->student->lastname}}</td>
         <td>{{$student->student->lastname}}</td>
         <td>{{$student->student->lastname}}</td>
         <td>{{$student->student->lastname}}</td>
          @endforeach -->
      
  
</div>


<script type="text/javascript">
  
   $.ajax({
        type:"get",
        url:"/studentpdf",
        data:{'id':student_id},
        dataType:"json",
        success:function(data){
          //1st grading
       console.log(data);



        },
      error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }  

     });

</script>